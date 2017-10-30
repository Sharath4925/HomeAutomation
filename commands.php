<html>
<body>
<?php
require 'conn.php';
$qc2="select DEV_id,DEV_name from DEVICES";
$res2=mysqli_query($conn,$qc2);
?>
<table style= "width:100%">
<tr>
    <th>Command id</th>
    <th>Commands</th>
</tr>
<?php
while($row2=mysqli_fetch_array($res2))
{   
$tab="DEV_".$row2[0];
$q1="select * from ";
$q1.=$tab;
$res=mysqli_query($conn,$q1);
while($row=mysqli_fetch_array($res))
{
?> 
   <tr>
     <td><?php echo $row[0];?></td><td><?php echo $row[1];?></td> 
    </tr>

<?php 
  }
}
?>
</table>
</body>
</html>
