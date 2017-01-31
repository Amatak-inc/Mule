<?php
session_start();
if ($_SESSION["password"] === null) {
header("location: login");
die();
}

?>
<!doctype html>

<head>

<title>Mule | international shipping for cheap</title>

</head>

<body align="center">
<div id="logout">
<div id="title" align="left"><h2>Mule</h2></div>
<div id="profile"><a href="profile" id="profilelink"><?php echo $_SESSION["first"]; ?></a></div>
<div id="topbar">

    <ul id="toplist">

        <li id="current" class="topbarlist">Home</li>

        <a href="going" class="black"><li class="topbarlist">Going Somewhere</li></a>

        <a href="want" class="black"><li class="topbarlist">Need Something</li></a>

    </ul>

</div>

<a href="going" class="black"><div id="left">Going somewhere</div></a>

<a href="want" class="black"><div id="right">Need something</div></a>

</body>

</html>

<style type="text/css">

#profile {
    position: absolute;
}
#left {

    position: absolute;

    margin: 0;

    width: 50%;

    background-color: #04B404;

    height: 90%;

    padding-top: 20%;

}

#right {

    position: absolute;

    left: 50%;

    width: 50%;

    background-color: #2E64FE;

    height: 90%;

    padding-top: 20%;

}

#right:hover {

    background-color: #5882FA;

}

#left:hover {

    background-color: #01DF01;

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

}

h2 {

    margin: 1px;

}

</style>
