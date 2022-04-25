<?php
 $con =new mysqli('localhost','root','','grades');

 if(!$con){
   die(mysqli_error($con));
 }
?>