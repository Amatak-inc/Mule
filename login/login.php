<?php
session_start();
$host = "localhost";
$user = "root";
$password = "973610";
$port = 8889;
$db = "Mule";


$email = $_REQUEST["email"] or die("not working 1");
$pw = $_REQUEST["pw"];
$conn = new mysqli($host, $user, $password, $db) or die("not working 2");
if ($conn->connect_error) {
header("Location: .") or die("not working 3");
die();

}

$loginresult = mysqli_query($conn, "SELECT * FROM users WHERE email = '".$email."' and password = '".$pw."'") or die("Failed to query database = ".msqli_error());

$row = mysqli_fetch_array($loginresult) or header("Location: .");
if ($row["email"] == $email && $row["password"] == $pw){
$_SESSION["id"] = $row["id"]; 
$_SESSION["first"] = $row["FirstName"];
$_SESSION["last"] = $row["LastName"];
$_SESSION["email"] = $row["email"];
$_SESSION["password"] = $row["password"];
$_SESSION["phone"] = $row["phone"];
$_SESSION["credit"] = $row["credit"];
header("Location: ..") or die("not working 5");
die();
}else{

}
mysqli_close($conn);
?>
