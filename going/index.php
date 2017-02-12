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

<script type="text/javascript" src="countries.js"></script>
</head>

<body align="center">

<div id="title" align="left"><h2>Mule</h2></div>

<div id="topbar">

    <ul id="toplist">

        <a href=".." class="black"><li class="topbarlist">Home</li></a>

        <li class="topbarlist" id="current">Going Somewhere</li>

        <a href="../want" class="black"><li class="topbarlist">Need Something</li></a>

    </ul>

</div>

<div id="container">

<div id="form" align="center">

    <form id="goingform" action="travel.php" method="POST">

        Departing From (Country: <select id="depcount" name="depcount"></select> State: <select id="depstate" name="depstate"></select><br/><br/>
        Arriving In (Country): <select id="arrcount" name="arrcount"></select> State: <select id="arrstate" name="arrstate"></select><br/><br/>
        Date of Arrival: <input type="date" name="arrdate"></input><br/><br/>
        price: <input type="number" name="price" value=25></input><br/><br/>
        <div id="sizeinput">
        size: <input type="radio" name="size" value="0" selected>small</input>
        <input type="radio" name="size" value="1">>medium</input>
        <input type="radio" name="size" value="2">large</input>
        </div>
        <button>Submit</button>

    </form>

</div>

</div>

</body>

</html>

<style type="text/css">
#sizeinput {
    display: inline;
    margin-top: 10px;
}
#title {

    background: white;

    padding: 0;

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

#form {

    position: relative;

    left: 35%;

    border: 1px solid black;

    border-radius: 5px;

    width: 25%;

    font-family: sans-serif;

    background-color: #D8D8D8;

    margin-top: 15%;

    padding: 40px;

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

    background: url("../images/grand canyon.jpg");

    background-size: 100% 200%;
}

h2 {

    margin: 1px;

}

</style>
<script type="text/javascript">
populateCountries("arrcount", "arrstate");
populateCountries("depcount", "depstate");
</script>