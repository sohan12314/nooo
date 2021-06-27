

<?php
session_start();    #start session

$conn =mysqli_connect('localhost','root');   #connect to server
mysqli_select_db($conn,'pay');    #connect to particular database

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$name = $_POST['name'];
$phone = $_POST['ph'];
$tran = $_POST['tran'];


$res = "INSERT INTO gpay(name,ph,tran)VALUES('$name','$phone','$tran')";
mysqli_query($conn, $res);
echo"success";
echo "<a href='index.html'>HOME</a><br/>";
$sql = "select * from gpay";
$result = mysqli_query($conn, $sql);


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<style>
body {
        background-image: url('lastu.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
      }
      </style>

   
       
<body>
<center>
        <h1>Thank you for choosing our bus booking</h1>
    </center>
  
</body>
</html>

