<html>
<body style="background: url(https://www.hospitalityandcateringnews.com/wp-content/uploads/2019/12/black-and-white-hospitality-management.jpg); background-size:100% 100%;">
<center>
<?php

$conn = new mysqli("localhost","sarker","", "wafi_rew");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM `bookedlist`";
$result = $conn->query($sql);
?>
<table><th><font size ="4">Name</th><th><font size ="4">Number</th><th><font size ="4">Booking ID</font></th>
<?php
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["Name"]. "</td><td>" . $row["Number"]. "</td><td>" . $row["Booking_ID"]. "</td></tr>";
    }
} else {
    echo "0 results";
}
echo "</table>";
$conn->close();
?>
</center>
</body>
</html>