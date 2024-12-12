<?php
require 'connect.php';
$id=$_GET['id'];
$sql = "DELETE FROM `table_students` WHERE id = $id";
$result=$con->query($sql);
if($result)
{
    header('Location:display.php');
}
?>