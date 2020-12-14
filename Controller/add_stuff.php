<html>
<?php
$mysqli = new mysqli("localhost","sarker","", "wafi_rew");
$qr="INSERT INTO `stuff`(`Name`, `Number`, `Email`, `regvh`) VALUES ('$_POST[name]','$_POST[number]','$_POST[mail]','$_POST[regvh]')";
if($mysqli->query($qr)){
?>
<body style="background: url(https://images.unsplash.com/photo-1544620347-c4fd4a3d5957?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80); background-size:100% 100%;">
<center><font size= "10">New Stuff has been Added</font></center>
<?php
}
?>
</body>
</html>