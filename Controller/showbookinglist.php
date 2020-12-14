<html>
<body style="background: url(https://www.hospitalityandcateringnews.com/wp-content/uploads/2019/12/black-and-white-hospitality-management.jpg); background-size:100% 100%;">
<center>
<?php

$conn =new mysqli("localhost","sarker","", "wafi_rew");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM `bookinglist`";
$result = $conn->query($sql);
?>
<form action="bookedEntry.php" method = "Post">
<table><th><font size ="6">Booking ID</th><th></th><th><font size ="6">Room Number</th><th><font size ="6">Stay Out</th><th><font size ="6">Price</font></th>
<?php
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo '<tr> <td> <input type="checkbox" name="id[]" value="'. $row["Booking_ID"] .'" >  </td><td>' . $row["Booking_ID"]. "</td><td>" . $row["roomnumber"]. "</td><td>" . $row["stayout"]."</td><td>". $row["Price"]. "</td></tr>";
    }
} else {
    echo "0 results";
}
?>
</table>
<button type ="submit">Submit</button>

<?php
echo "</form>";
$conn->close();
?>
</center>
</body>
</html>