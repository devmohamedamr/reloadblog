<?php
session_start();
require_once ("allposts.php");
if(empty($_SESSION["login"])){
    header("LOCATION: login.php");
}

$user_id=$_GET['id'];

$con = mysqli_connect("localhost","root","","reloadblog");
$query = "DELETE FROM `post` WHERE id=$user_id";
$q = mysqli_query($con,$query);

$affected=mysqli_affected_rows($con);
if ($affected>0){
    header("LOCATION: allposts.php");
}

