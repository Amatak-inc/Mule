<?php
session_start();
if ($_SESSION["password"] == null){
header("Location: ../login");
}
?>