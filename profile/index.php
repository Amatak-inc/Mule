<?php
session_start();
if ($_SESSION["password"] == null){
header("Location: ../login");
}
?>
<!doctype html>
<head>
<title><?php echo $_SESSION["first"]." ".$_SESSION["last"]; ?></title>
</head>
<body>
<a href="../login/logout.php">Logout</a>
<h2 id="header">Profile</h2>
<form id="profile" action="changeprofile.php" method="POST">
<input type="email" value=<?php echo "'".$_SESSION['email']."'"; ?> /><br/>
<input type="tel" value=<?php echo "'".$_SESSION['phone']."'"; ?> /><br/>
<input type="number" value=<?php echo "'".$_SESSION['credit']."'"; ?> /><br/>
</form>
</body>
</html>
