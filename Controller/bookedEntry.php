
<html>
<head> 
<link rel="stylesheet" type="text/css" href= "https://bootswatch.com/4/flatly/bootstrap.css">




</head>

<body style="background: url(https://www.hospitalityandcateringnews.com/wp-content/uploads/2019/12/black-and-white-hospitality-management.jpg); background-size:100% 100%;">
<center>
<?php
$conn = new mysqli("localhost","sarker","", "wafi_rew");
$ids = implode($_POST ['id']);

 

$Q="Select Price from `bookinglist` where Booking_ID in (".$ids.")";

 


$result = $conn->query($Q);
?>
<font size = "6"> Price </font><br><br>
Your Selected Booking Details Below: <br><br>
<?php
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<td>Booking Id: ". $ids ."</td><br><br><td>Price: ". $row['Price']."</td>";
    }
} else {
    echo "0 results";
}
?>
 
<br><br>
<form action="Pay.php" method = "Post">
Confirm Booking<br><br>
<a class="btn btn-outline-danger" href ="Enter Name.php">Enter Name:</a><input type="text" name = "n"></input><br><br>
<a class="btn btn-outline-danger" href ="Enter Number.php">Enter number:</a><input type="text" name = "num"></input><br><br>
<a class="btn btn-outline-danger" href ="Enter Booking Id.php">Enter Booking Id:</a><input type="text" name = "id"></input><br><br>
<button type ="Submit"> Pay </button>
</form>



<script src = "https://bootswatch.com/_vendor/jquery/dist/jquery.min.js"> </script>

<script src = "https://bootswatch.com/_vendor/popper.js/dist/umd/popper.min.js"> </script>

<script src = "https://bootswatch.com/_vendor/bootstrap/dist/js/bootstrap.min.js"> </script>

</body>
</center>
</html>