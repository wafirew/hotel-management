<html>
<body style="background: url(https://www.hospitalityandcateringnews.com/wp-content/uploads/2019/12/black-and-white-hospitality-management.jpg); background-size:100% 100%;">
<center>
<?php

$conn = new mysqli("localhost","sarker","", "wafi_rew");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM `summary`";
$result = $conn->query($sql);
?>
<table><th><font size ="4">Total Earning|</th><th><font size ="4">No_Of_Room_Booked|</th><th><font size ="4">Total_Cost|</th><th><font size ="4">Profit</th></font></th>
<?php
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["Total_earning"]. "</td><td>" . $row["No_Of_Room_Booked"]. "</td><td>" . $row["Total_cost"]."</td><td>" . $row["Profit"]. "</td></tr>";
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