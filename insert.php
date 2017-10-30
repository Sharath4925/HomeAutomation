<?php
require 'conn.php';
$qi1="load data local infile '/var/www/html/wamp/data/devices.txt' into table DEVICES";
$qi2="load data local infile '/var/www/html/wamp/data/uid.txt' into table UID ";
$qi3="delete from DEVICES";
$qi4="delete from UID";
$rei3=mysqli_query($conn,$qi3);
$rei4=mysqli_query($conn,$qi4);
$rei1=mysqli_query($conn,$qi1); 
       if($rei1)   
          echo "Data has been uploaded to DEVICES successfully<br>";  
       else
          echo "Couldn't upload data to DEVICES<br>"; 
$rei2=mysqli_query($conn,$qi2);
       if($rei2)   
          echo "Data has been uploaded to UID successfully<br>";  
       else
          echo "Couldn't upload data to UID<br>"; 

$qi5="show tables";
$qi6="select DEV_id from DEVICES";
$rei5=mysqli_query($conn,$qi5);
$rei6=mysqli_query($conn,$qi6);
$f=1;
while($roi2=mysqli_fetch_array($rei6))
{      $tab="DEV_".$roi2[0];
       while($roi1=mysqli_fetch_array($rei5))
         {
              if($roi1==$tab)
                {$f=1; 
                  $qi10="delete from ";
                  $qi10.=$tab;
                  $rei10=mysqli_query($conn,$qi10);
                  $qi9="load data local infile '/var/www/html/wamp/data/";
                  $qi9.=$tab;
                  $qi9.=".txt' into table ";
                  $qi9.=$tab;
                  $rei9=mysqli_query($conn,$qi9);
                if($rei9)   
                  echo "Data has been uploaded to ".$tab." successfully<br>";  
                else
                  echo "Couldn't upload data to ".$tab."<br>";  
                 break;
                 }
              else
                 {$f=0;}
         }      
     if($f==0)
      {
         $qi7="create table ";
         $qi7.=$tab;
         $qi7.="(cmd_id varchar(20) primary key,commands varchar(20))";
         $rei7=mysqli_query($conn,$qi7);
         $qi8="load data local infile '/var/www/html/wamp/data/";
         $qi8.=$tab;
         $qi8.=".txt' into table ";
         $qi8.=$tab;
         $rei8=mysqli_query($conn,$qi8);
        if($rei8)
          echo "Data has been uploaded to ".$tab." successfully<br>";  
        else
          echo "Couldn't upload data to ".$tab."<br>";   
      }


}


?>
