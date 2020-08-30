<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "url-shortner";
$con = mysqli_connect("$hostname","$username","$password","$database")  or die(mysqli_error());


$longurl=mysqli_real_escape_string($con,$_POST['long-url']);

$id=substr(md5($longurl),0,8);

$sql = "INSERT INTO `short-url`( `id`, `long-url`)
        VALUES ('$id','$longurl')";

mysqli_query($con,  $sql);

?>

<!DOCTYPE html>
<html>

<head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<style>

section#urlbox {
    margin: 235px auto 21px auto;
    max-width: 758px;
    box-shadow: 0 -1px 9px #ccc;
    border-radius: 2px;
    padding: 64px 8px 63px;
    background: #fff;
    text-align: center;
}

#navbar {
    margin: 0px;
    max-width: 1500px;
    box-shadow: 0 -1px 9px #ccc;
    border-radius: 2px;
    padding: 0px;
    background: #fff;
    text-align: center;
    position: fixed;
    top: 0;
    width: 100%;
}

.form-control {
  width: 58%;
}
.btn{
  margin-top: 0px;
  margin-left: 7px;
}
h1{
    margin-bottom: 3.5rem;
    margin-left: -93px;
}
.input-group.mb-3 {
    margin-left: 67px;
    width: 80%;
}
input.btn.btn-primary {
    margin-left: 7px;
}
img {
    margin-left: -70px;
}
</style>



</head>

<body>
<nav class="" id="navbar">
<img src="logo.svg" alt="LOGO" width="500" height="110">

</nav>

<section id="urlbox">
<h1>Browse with the Short url</h1>
<div class="input-group mb-3">
<input type="text" class="form-control" value="http://localhost:8080/URL-Shortner/op.php?id=<?php echo $id;?>" id="short-url">
<button class="btn btn-primary" onclick="myFunction()">Copy URL</button>
</div>
</section>

<script>
function myFunction() {
  var copyText = document.getElementById("short-url");
  copyText.select();
  copyText.setSelectionRange(0, 99999)
  document.execCommand("copy");
}
</script>

</body>
</html>
