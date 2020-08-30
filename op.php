<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "url-shortner";
$con = mysqli_connect("$hostname","$username","$password","$database")  or die(mysqli_error());

$id = strval($_GET['id']);

$sql="SELECT `long-url` FROM `short-url` WHERE `id`='$id'";
$longurls=mysqli_query($con,$sql);

    
$longurl=mysqli_fetch_array($longurls);

$url=$longurl['long-url'];

header("Location:$url");


?>