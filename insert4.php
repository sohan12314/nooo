<?php
    session_start();    #start session

    $conn =mysqli_connect('localhost','root');   #connect to server
    mysqli_select_db($conn,'pay');    #connect to particular database
    
   
   


    
    echo "<a href='index.html'>HOME</a><br/>";
    echo "Your Information is recorded Successfully!<br/>";
   
    $sql = "select * from gpay";
    $result = mysqli_query($conn, $sql);
    ?>
     <!DOCTYPE html>
    <html>
        <title><head>Data</head></title>
        <body>
            <table align="center" border="1px" style="width:600px; line-height:40px;">
                <tr>
                    <th colspan="5"><h2>Transaction Record</h2></th>
                </tr>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Phone number</th>
                    <th>transaction</th>
            
                   
                </tr>
                <?php
                    while($rows=mysqli_fetch_assoc($result))
                    {
                ?>
                        <tr>
                            <td><?php echo $rows['id']; ?></td>
                            <td><?php echo $rows['name']; ?></td>
                            <td><?php echo $rows['ph']; ?></td>
                            <td><?php echo $rows['tran']; ?></td>
                            
                            
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