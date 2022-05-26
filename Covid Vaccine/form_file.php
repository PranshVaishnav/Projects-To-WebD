<?php
session_start();
$con=mysqli_connect("localhost","root","","info");
if(!$con)
{
  die('connection error:'.mysqli_connect_error);
}
$name=$_POST['fname'];
$mobile=$_POST['mobi'];
$yob=$_POST['yr'];
$id=$_POST['idname'];
$noid=$_POST['noid'];
$vaccine=$_POST['vaccine'];
$query="INSERT INTO login(name,mobile,yob,photoid,idno,VACCINE) VALUES('$name','$mobile','$yob','$id','$noid','$vaccine') ";
$result = $con->query($query);
 ?>
