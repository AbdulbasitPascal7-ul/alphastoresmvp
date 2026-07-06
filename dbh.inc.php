<?php
/*require __DIR__ . '/../vendor/autoload.php';
use Dotenv\Dotenv;

$dotnet = Dotenv::createImmutable(__DIR__ . '/..');
$dotnet->load();
*/
$host = 'localhost';/*$_ENV['DB_HOST'];*/
$dbname = 'alphastoresmvp';//$_ENV['DB_NAME'];
$dbusername = 'root';//$_ENV['DB_USERNAME'];
$dbpassword = '';//$_ENV['DB_PASSWORD'];
$dsn = "mysql:host=$host;dbname=$dbname";
try {
    $pdo = new PDO($dsn, $dbusername, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $th) {
    echo $th->getMessage();
}