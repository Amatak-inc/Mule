<?php
    session_start();
    if ($_SESSION["password"] == null) {
        header("location: ../login");
        die();
    }
$host = "localhost";
$user = "root";
$password = "973610";
$port = 8889;
$db = "Mule";
$conn = new mysqli($host, $user, $password, $db);

if ($conn->connect_error) {
die("not working");
die();

}


$departcountry = $_REQUEST["depcount"];
$departstate = $_REQUEST["depstate"];
$arrivecountry = $_REQUEST["arrcount"];
$arrivestate = $_REQUEST["arrstate"];
$price = $_REQUEST["price"];
$size = $_REQUEST["size"];
$date = $_REQUEST["arrdate"];

$getid = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM users WHERE FirstName = '".$_SESSION["first"]."' and LastName = '".$_SESSION["last"]."' and email = '".$_SESSION["email"]."' and password = '".$_SESSION["password"]."'"));
$addrow = mysqli_query($conn, "INSERT INTO muleinput ('id', 'origin', 'destination', 'price', 'size', 'muleid', 'arrivaldate', 'timestamp') VALUES (NULL, '".$departcountry."', '".$arrivecountry."', '".$price."', '".$size."', '".$getid["id"]."', '".$date."', CURRENT_TIMESTAMP)") or die(mysqli_error($conn));
if ($addrow) {
header("Location: ..");
die();
}else{
header("Location: .");
die();
}
?>