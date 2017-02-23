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
$userid = $_SESSION["id"];
$addrow = mysqli_query($conn, "INSERT INTO travels (timestamp, `from`, `to`, arrival, price, size, muleid) VALUES (CURRENT_TIMESTAMP, '".$departstate.":".$departcountry."', '".$arrivestate.":".$arrivecountry."', '".$date."', '".$price."', ".$size.", '".$userid."')") or die(mysqli_error($conn));
if ($addrow) {
header("Location: ..");
die();
}else{
header("Location: .");
die();
}
?>