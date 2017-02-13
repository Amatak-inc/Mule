<?php
session_start();
$host = "localhost";
$user = "root";
$password = "973610";
$port = 8889;
$db = "Mule";
if ($conn->connect_error) {
    $_SESSION["signuperror"] = "could not connect to database";
    header("Location: .");
    die();
}
$conn = new mysqli($host, $user, $password, $db) or die("not working 2");
$query2 = mysqli_query($conn, "SELECT * FROM users where email = '".$_POST["email"]."';") or die ("test1");
$query3 = mysqli_query($conn, "SELECT * FROM users where credit = '".$_POST["credit"]."';") or die ("test2");
$query4 = mysqli_query($conn, "SELECT * FROM users where phone = '".$_POST["phone"]."';") or die ("test3");
echo "SELECT * FROM users where email = '".$_POST["email"]."';";
/*if ($_POST["pw"] !== $_POST["repassword"]){
    $_SESSION["signuperror"] = "passwords are different";
    header("Location: .");
    die();
}else if ($query2 !== null){
    $_SESSION["signuperror"] = "<br/>there is already an account with that email";
    header("Location: .");
    die();
}else if ($query3 !== null){
    $_SESSION["signuperror"] = "<br/>there is already an account with that credit card number";
    header("Location: .");
    die();
}else if ($query4 !== null){
    $_SESSION["signuperror"] = "<br/>there is already an account with that credit card number";
}else{
    $password = $_POST["pw"];
}
if ($_POST["email"] !== null){
mail($_POST["email"], "Confirm Email | Mule","To Confirm your account please click on this link: http://ec2-54-201-124-36.us-west-2.compute.amazonaws.com/login/signup/confirm.php".$id,"From: noreply@mule.com");
mysqli_query($conn, "INSERT INTO pendingusers (id,FirstName,LastName,email,password,Phone,Credit) VALUES ('".$_POST["firstname"]."','".$_POST["lastname"]."','".$_POST["email"]."','".$password."','".$_POST["phone"]."','".$_POST["credit"]."')");
}*/
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