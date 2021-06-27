<?php
    session_start();    #start session

    $con =mysqli_connect('localhost','root');   #connect to server
    mysqli_select_db($con,'bus');    #connect to particular database
    
   
   


    
    echo "<a href='index.html'>HOME</a><br/>";
    echo "Your Information is recorded Successfully!<br/>";
    echo "<a href ='man.html'>management</a>";
    $data = "select * from passengers";
    $res = mysqli_query($con,$data);
    ?>
     <!DOCTYPE html>
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
    </html>   

   

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