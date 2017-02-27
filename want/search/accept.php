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
mysqli_query($conn, "INSERT INTO travelconfirms (acceptid, travelid) VALUES (".$_SESSION["id"].", ".$_GET["id"].")") or die("could not confirm");
header("Location: ../../");
?>