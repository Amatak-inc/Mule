<?php
session_start();
$host = "localhost";
$user = "root";
$password = "973610";
$port = 8889;
$db = "Mule";
$conn = new mysqli($host, $user, $password, $db) or die("not working 2");
if ($_POST["pw"] == $_POST["repassword"]){
$password = $_POST["pw"];
}else{
$_SESSION["signuperror"] = "passwords are different";
header("Location: .");
die();
}
if ($conn->connect_error) {
hearder("Location: .") or die("not working 3");
die();
}
//$query1 = mysqli_query($conn, "INSERT INTO pendingusers (id,FirstName,LastName,email,password,Phone,Credit) VALUES ('".$_POST["firstname"]."','".$_POST["lastname"]."','".$_POST["email"]."','".$password."','".$_POST["phone"]."','".$_POST["credit"]."')");
//$query2 = mysqli_query($conn, "");
if ($_POST["email"] !== null){
mail($_POST["email"], "Confirm Email | Mule","To Confirm your account please click on this link/n<a href='http://ec2-54-201-124-36.us-west-2.compute.amazonaws.com/login/signup/confirm.php'>Confirm</a>","From: noreply@mule.com");
}
?>
<!doctype html>
<head>
<title>Email Sent</title>
</head>
<body>
<h2>confirmation email sent</h2>
<h3>this email is probably filtered into spam, please open your spam folder, select this email and click 'not spam'</h3>
</body>
</html>
