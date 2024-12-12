<?php 
require 'connect.php';

 if (isset($_POST['input'])) {
     $name = $_POST['fullname'] ;
     $dob = $_POST['dob'];
     $gender = $_POST['gender'];
     $hometown = $_POST['hometown'];
     $level = $_POST['level'];
     $group_id = $_POST['group_id'];
 
    $sql="INSERT INTO `table_students` (`fullname`, `dob`, `gender`, `hometown`, `level`, `group_id`)
    VALUES ('$name','$dob', '$gender', '$hometown', '$level', '$group_id')";
    $result=mysqli_query($con,$sql);
 if($result) {
    header('location:display.php');
 }else{
     echo "Lỗi {$sql}".$con->error;
 }
}
?>
