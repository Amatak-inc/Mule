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
Email: <input type="email" value=<?php echo "'".$_SESSION['email']."'"; ?> /><br/>
Phone: <input type="tel" value='<?php echo $_SESSION["phone"]; ?>' /><br/>
Credit Card: <input type="number" value=<?php echo "'".$_SESSION['credit']."'"; ?> /><br/><br/>
<div id="travels">
<h2>travels</h2>
<div id="travellist">
<h3>planned</h3>

<h3>confirmed</h3>

<h3>ongoing</h3>

<h3>finished</h3>
</div>
</div>
</form>
</body>
</html>
