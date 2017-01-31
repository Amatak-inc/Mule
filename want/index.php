<?php

    session_start();

    if ($_SESSION["password"] == null) {

        header("location: ../login");

        die();

    }
?>

<!doctype html>

<head>

<title>Mule</title>

</head>

<body align="center">

<div id="title" align="left"><h2>Mule</h2></div>

<div id="topbar">

    <ul id="toplist">

        <a href="../" class="black"><li class="topbarlist">Home</li></a>

        <a href="../going" class="black"><li class="topbarlist">Going Somewhere</li></a>

        <li class="topbarlist" id="current">Need Something</li>

    </ul>

</div>

<div id="container">

    <form id="searchform" method="POST" action="submit.php">

        Departing From: <input></input>

    </form>

</div>

</body>

</html>

<style type="text/css">

#container {

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

#title {

    background: white;

    margin: 0;

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

body {

    margin: 0;

    background-image: url("../images/hong kong.jpg");

}

h2 {

    margin: 1px;

}

</style>