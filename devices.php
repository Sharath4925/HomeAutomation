
<?php
require 'conn.php';
$qu="select DEV_id,DEV_name from DEVICES where Conn_Stat=1";
$res=mysqli_query($conn,$qu);
echo "Connected devices<br>";
while($row=mysqli_fetch_array($res))
  {
      echo $row[0]."	".$row[1]."<br>";
     
    
  }echo "<hr>";
$qu1="select DEV_id,DEV_name from DEVICES where Conn_Stat=0";
$res1=mysqli_query($conn,$qu1);
echo "Disconnected devices <br>";
while($row1=mysqli_fetch_array($res1))
  {
      echo $row1[0]."	".$row1[1]."<br>";
     
    
  }echo"<hr>";
?>

