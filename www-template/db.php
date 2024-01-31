<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database</title>
</head>
<body>
<?php
$dsn = "mysql:host=mysql; dbname=hw_db";
$user = "root";
$password = "admin";

try {
	$db = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
	echo 'Connection failed: '.$e->getMessage();
}

$query = $db->query("SELECT * FROM hello_world");
$results = $query->fetchAll(PDO::FETCH_ASSOC);

foreach($results as $result) {
    foreach($result as $key => $value) {
        echo $key.": ".$value."<br />";
    }
}
?>
</body>
</html>
