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
}
h1{
    margin-bottom: 3.5rem;
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
<h1>Paste the URL to be shortened</h1>
<form action="shorturl.php"  method="post">
<div class="input-group mb-3">
<input type="url"  class="form-control" name="long-url" placeholder="Enter the link here">
<input type="submit" class="btn btn-primary" value="Shorten URL">
</div>
</form>
</section>

</body>
</html>