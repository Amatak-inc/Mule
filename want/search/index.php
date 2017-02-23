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
?>
<!doctype html>
<head>
<title>Mule | search</title>
</head>
<body align="center">

<div id="title" align="left"><h2>Mule</h2></div>

<div id="topbar">

    <ul id="toplist">

        <a href="../" class="black"><li class="topbarlist">Home</li></a>

        <a href="../going" class="black"><li class="topbarlist">Going Somewhere</li></a>

        <a href=".." class="black"><li class="topbarlist">Need Something</li></a>

    </ul>

</div>

<div id="container">

<?php
$departingcountry = $_POST["depcount"];
$getresults = mysqli_query($conn, "SELECT * FROM travels WHERE `from` LIKE '%".$_REQUEST["arrcount"]."'");
if ($getresults-num_rows > 0) {
    while($row = $getresults->fetch_assoc()){
        $getuser = mysqli_query($conn, "SELECT * FROM users WHERE id = ".$row["muleid"]);
        echo "FirstName: ".$getuser;
    }
} else {
    echo "could not find any results that matched your search, go <a href='..'>back</a>";
}
$conn->close();
?>

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

button {

    background-color: #01DF01;

    border: 1px solid black;

    border-radius: 5px;

    margin: 5px;

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

input {

    border: 1px solid #151515;

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