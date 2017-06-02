<?php
check_login();
//session_start();
require 'system/animal.php';
require_once 'system/operation.php';
$health_index=$_POST['health_index'];
$weight=$_POST['weight'];
$source=$_POST['source'];
$animal_id=$_POST['animal_id'];
$sex=$_POST['txtSex'];
$date_import=$_POST['date'];
$account=$_SESSION['Account'];

add_animal($sex, $animal_id, $health_index, $weight, $source, $account);
buy_animals($source, $account, $animal_id, $sex, $health_index, $weight);
header("location: index.php?action=animal_list&Animal_Id=$animal_id");
?>

