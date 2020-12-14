
<html>
<body style="background: url(https://www.hospitalityandcateringnews.com/wp-content/uploads/2019/12/black-and-white-hospitality-management.jpg);  background-size:100% 100%;">
<center>
<?php
$mysqli =new mysqli("localhost","sarker","", "wafi_rew");
$qr="INSERT INTO `bookinglist`(`Booking_ID`, `roomnumber`, `satyout`, `Price`) VALUES ('$_POST[bid]','$_POST[sch]','$_POST[rt]','$_POST[pr]')";
if($mysqli->query($qr)){
?>
<font size= "8">Booking has been Added</font></center>
<?php
}
?>

</html>