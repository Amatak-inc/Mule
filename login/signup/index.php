<?php
session_start();
if (isset($_SESSION["password"])) {
header("Location: ../..");
}
?>
<!doctype html>
<head>
<title>Mule | international shipping for cheap</title>
</head>
<body align="center">
<div id="title" align="left"><h2>Mule</h2></div>
<div id="topbar">
<ul id="toplist">
<a href=".." class="black"><li class="topbarlist">Home</li></a>
<a href="../going" class="black"><li class="topbarlist">Going Somewhere</li></a>
<a href="../want" class="black"><li class="topbarlist">Need Something</li></a>
</ul>
</div>

<div id="container">
<div id="search" align="center">
<?php echo "<div id='errorhandle'>".$_SESSION["signuperror"]."</div>"; ?>
<form id="loginform" action="signup.php" method="POST">
First Name: <input id="firstnameinput" name="firstname" required/><hr/>
Last Name: <input id="lastnameinput" name="lastname" required/><hr/>
Email: <input id="emailinput" name="email" required/><hr/>
Phone number: <input id="phoneinput" name="phone" required/><hr/>
Password: <input type="password" id="pwinput" name="pw" required/><hr/>
Re-type Password: <input type="password" id="repwinput" name="repassword" required/><hr/>
<button id="submitbutton">sign up</button> Already have an account? <a href="..">Login.</a>
</form>
</div>
</div>
</body>
</html>
<style type="text/css">
#title {
    background: white;
    padding: 0;
}
#errorhandle {
background-color: red;
border: 3px solid black;
margin: 5px;
}
button {
    background-color: #01DF01;
    border: 1px solid black;
    border-radius: 5px;
    margin: 5px;
}
input {

    border: 1px solid #151515;

}

input:focus {

    border-color: #424242;

    outline: none;

}

#search {

    position: relative;

    left: 35%;

    border: 1px solid black;

    border-radius: 5px;

    width: 25%;

    font-family: sans-serif;

    background-color: #D8D8D8;

    margin-top: 15%;

    padding: 20px;

}

#topbar {

    background-color: #2ECCFA;

    padding: 10px;

}

li.topbarlist {

    border-left: 1px black solid;

    padding: 10px;

    display: inline;

}

.black {

    color: black;

    text-decoration: none;

}

li.topbarlist:hover {

    background-color: #01A9DB;

}

#current {

    background-color: #3ADF00;

}

#toplist {

    list-style-type: none;

    margin: 0;

    padding: 0;

}

#going {

    border-radius: 50%;

    width: 25%;

    height: 100px;

    background-color: #01DF01;

    text-decoration: none;

    color: black;

    width: 10%;

    height: 10%;

}

#want {

    border-radius: 50%;

    background-color: #01DF01;

    text-decoration: none;

    color: black;

    width: 100px;

}

body {

    margin: 0;

    background: url("../../images/dubai.jpg");

    background-size: 100% 156%
}

h2 {

    margin: 1px;

}

</style>
