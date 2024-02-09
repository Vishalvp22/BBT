<?php

$conn=mysql_connect("localhost","root","");
if(!$conn)
{
  die("Not connected to server");
}
if(!mysql_select_db("vishal",$conn))
{
  die("Not connected to database");
}
$name=$_POST['name'];
$addr=$_POST['addr'];
$email=$_POST['email'];
$dob=$_POST['dob'];
$model=$_POST['model'];

$sql="INSERT INTO car (name, addr, email, dob, model)
VALUES('$name','$addr','$email','$dob','$model')";
if(mysql_query($sql))
{
  echo "<h1>Booking Sucessfully</h1> ";
}
else
  echo "<h1>Booking Failed</h1>";
?>