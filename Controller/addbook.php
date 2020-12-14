<html>
<body style="background: url(https://www.hospitalityandcateringnews.com/wp-content/uploads/2019/12/black-and-white-hospitality-management.jpg); background-size:100% 100%;">
<center><center>
<?php

$conn =new mysqli("localhost","sarker","", "wafi_rew");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM `bookinglist`";
$result = $conn->query($sql);
?>
<table><th><font size ="6">Booking ID</th><th><font size ="6">Room Number</th><th><font size ="6">Stay Out</th><th><font size ="6">Price</font></th>
<?php
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo '<tr><td>' . $row["Booking_ID"]. "</td><td>" . $row["roomnumber"]. "</td><td>" . $row["stayout"]."</td><td>". $row["Price"]. "</td></tr>";
    }
} else {
    echo "0 results";
}
?>
</table>
<br><br><br>

<?php
$conn->close();
?>

<form action="addqr.php" method = "Post">
<font size = "5">
Booking id:<input type = "text" name="bid"></input><br><br>
RoomNumber :<input type = "text" name="sch"></input><br><br>
Stay Out:<input type = "text" name="rt"></input><br><br>
Price:<input type = "text" name="pr"></input><br><br>
<input type = "submit" name="Submit"></input><br><br>
</font>
</form>
</center>
</body>
</html>