<?php
require 'system/animal.php';
$health_index=$_POST['health_index'];
$weight=$_POST['weight'];
$source=$_POST['source'];
$animal_id=$_POST['animal_id'];
$sex=$_POST['txtSex'];
$date_import=$_POST['date'];
$account='';

add_animal($sex, $animal_id, $health_index, $weight, $source, $account);
if ($animal_id==3){
    header("location: index.php?action=list/cow_list");
}
if ($animal_id==1){
    header("location: index.php?action=list/pig_list");
}
if ($animal_id==2){
    header("location: index.php?action=list/buffalo_list");
}
if ($animal_id==4){
    header("location: index.php?action=list/chicken_list");
}
        ?>


