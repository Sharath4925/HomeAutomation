<?php
require 'conn.php';
$qi1="select d.DEV_id,d.DEV_name,d.Loc,d.Descri,u.IMEI1,u.IMEI2,u.IP,u.MAC,u.Subnet,u.UqID from DEVICES d,UID u where d.DEV_id=u.DEV_id ";
$resi1=mysqli_query($conn,$qi1);
while($rowi=mysqli_fetch_array($resi1))
 {
      echo $rowi[0]."<br>";
      echo $rowi[1]."<br>"; 
      echo $rowi[2]."<br>"; 
      echo $rowi[3]."<br>";    
      echo $rowi[4]."<br>"; 
      echo $rowi[5]."<br>"; 
      echo $rowi[6]."<br>"; 
      echo $rowi[7]."<br>"; 
      echo $rowi[8]."<br>"; 
      echo $rowi[9]."<br><hr>"; 


 }

?>
