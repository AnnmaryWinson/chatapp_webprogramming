```php
<?php
$host = "172.16.50.33";
$user = "web";
$pass = "web";
$database = "web";

$connection = new mysqli($host, $user, $pass, $database);

if ($connection->connect_errno) {
    exit("Unable to connect to the database.");
}

$connection->set_charset("utf8mb4");

$conn = $connection;
?>
```