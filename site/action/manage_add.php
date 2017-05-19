<?php
session_start();
require 'system/animal.php';
$health_index=$_POST['health_index'];
$weight=$_POST['weight'];
$source=$_POST['source'];
$animal_id=$_POST['animal_id'];
$sex=$_POST['txtSex'];
$date_import=$_POST['date'];
$account=$_SESSION['Account'];

add_animal($sex, $animal_id, $health_index, $weight, $source, $account);
header("location: index.php?action=animal_list&Animal_Id=$animal_id");
?>

