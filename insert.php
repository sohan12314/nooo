<?php
    session_start();    #start session

    $con =mysqli_connect('localhost','root');   #connect to server
    mysqli_select_db($con,'bus');    #connect to particular database
    
   
    $name = $_POST['name'];
    $bustype = $_POST['bustype'];
    $depart = $_POST['depart'];
    $dest = $_POST['dest'];
    $date = $_POST['date'];
    $time = $_POST['time'];
   


    $result = "INSERT INTO passengers(name,bustype,departure,destination,date,morn) VALUES('$name','$bustype','$depart','$dest','$date','$time')";
    mysqli_query($con, $result);
    echo "<a href='index.html'>HOME</a><br/>";
    echo "Your Information is recorded Successfully!<br/>";
    
    $data = "select * from passengers";
    $res = mysqli_query($con,$data);
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
    </head>
    <style>
     
      
      body {
        background-image: url('new.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
      }
      </style>

    <body>
        <center>
        <h1>Thank you for choosing our bus booking</h1>
       
        <?php
        echo "<h2>Hello $name.<br></h2>"; 
        echo "<h2>Your journey will be safe and amazing in $bustype bus<br></h2>";
        echo "<h2> From $depart to $dest. <br></h2>";
        echo "<h2>Your journey start on $date at $time</h2><br>";
?>
<h5>For any changes click the home button on the top left corner</h5>
<br>
<br>
<h3>click below for the payment process</h3>
<br>
<br>
<button type="submit"><a href ='payement.html'>PAYMENTS</a></button>
  </center>

    </body>
    </html>
     <!-- <!DOCTYPE html>
    <html>
        <title><head>Data</head></title>
        <body>
            <table align="center" border="1px" style="width:600px; line-height:40px;">
                <tr>
                    <th colspan="7"><h2>Passengers Record</h2></th>
                </tr>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>bus</th>
                    <th>departure</th>
                    <th>destination</th>
                    <th>date</th>
                    <th>time</th>
                </tr>
                <?php
                    while($rows=mysqli_fetch_assoc($res))
                    {
                ?>
                        <tr>
                            <td><?php echo $rows['id']; ?></td>
                            <td><?php echo $rows['name']; ?></td>
                            <td><?php echo $rows['bustype']; ?></td>
                            <td><?php echo $rows['departure']; ?></td>
                            <td><?php echo $rows['destination']; ?></td>
                            <td><?php echo $rows['date']; ?></td>
                            <td><?php echo $rows['morn']; ?></td>
                        </tr>
                <?php
                    }
                ?>    
            </table>
        </body>    
    </html>  -->  

   

    <!-- while($rows==mysqli_fetch_array($data)){
        
         echo $data['name'];
         echo $data['branch'];
         echo $data['sem'];
         echo $data['mail'];
         echo "<br/>";
     } -->



<!-- if(isset($_POST["submit"]))
{
$name=$_POST['file'];
$ext=$_POST['ext'];
$cont=$_POST['cont'];
file_put_contents($name.".".$ext,$cont) or die("Unable to Open");
} -->