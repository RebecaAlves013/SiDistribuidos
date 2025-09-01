<?
$host = "localhost";
$user = "root";
$password = "";
$database = "bd_sidi";

$conn = new mysqli($host, $user, $password, $database);

if($conn -> connect_error){
    die("Falha de conexão: ".  $conn->connect_error);
}
?>