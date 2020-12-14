<html>

<head> 
<link rel="stylesheet" type="text/css" href= "https://bootswatch.com/4/flatly/bootstrap.css">




</head>
<body style="background: url(https://miro.medium.com/max/3746/1*3_0cFTUJlRewURLaUtxUMQ.jpeg); background-size:100% 100%;">
<?php
$mysqli = new mysqli("localhost","sarker","", "wafi_rew");
if ($mysqli -> connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
}
$result = $mysqli->query("SELECT * FROM `admin` WHERE email='$_POST[email]' and password = '$_POST[password]'");
if($result->num_rows == 0) {
?>
<section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">Stuff Panel</h1>
        <body style="background-color:skyblue">
<div class="alert alert-primary " color="#ffff" role="alert">
You are an Stuff
</div>


<div class="container-fluid">
<p>
          <a href="userpage.php" class="btn btn-primary my-2">Stuff</a>
</p>
</div>
      </div>
    </div>
  </section>
</body>

<?php
} else {
?>
<section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">Admin Panel</h1>
        <body style="background-color:skyblue">
<div class="alert alert-primary " color="#ffff" role="alert">
You are an Admin
</div>


<div class="container-fluid">
<p>
          <a href="userpage.php" class="btn btn-primary my-2">Stuff</a>
          <a href="adminpage.php" class="btn btn-secondary my-2">Admin</a>
</p>
</div>
      </div>
    </div>
  </section>





<script src = "https://bootswatch.com/_vendor/jquery/dist/jquery.min.js"> </script>

<script src = "https://bootswatch.com/_vendor/popper.js/dist/umd/popper.min.js"> </script>

<script src = "https://bootswatch.com/_vendor/bootstrap/dist/js/bootstrap.min.js"> </script>

</centre>
</body>

<?php
}
$mysqli->close();
?>
</html>