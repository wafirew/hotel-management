<html>
<body style="background: url(https://images.unsplash.com/photo-1544620347-c4fd4a3d5957?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80); background-size:100% 100%;">
<center><br><br><br>
<form action="mod_dr.php" method = "Post">
<font size = "5">
Input from where you want to update your data<br><br>
Booking ID: <input type = "text" name="bookid"></input><br><br>
Attribute Name:<input type = "text" name="attribute"></input><br><br>
Updated Data: <input type = "text" name="updated_data"></input><br><br>
<input type = "submit" name="Submit"></input><br><br>
<?php
$mysqli =new mysqli("localhost","sarker","", "wafi_rew");
$qr="UPDATE `bookinglist` SET `$_POST[attribute]`='$_POST[updated_data]' WHERE Booking_ID='$_POST[bookid]'";
if($mysqli->query($qr)){
?>
<body style="background: url(http://www.cooperindustries.com/content/dam/public/Corporate/eaton/United-Spotlight-Banner.jpg); background-size:100% 100%;">
<center><font size= "10">Booking has been upadated</font></center>
<?php
}
?>
</font>
</form>
</center>
</body>
</html>