<?php
check_login();
//session_start();
require 'system/animal.php';
require_once 'system/operation.php';
$quantity=$_POST['quantity'];
$food_kind=$_POST['food_kind'];
$account=$_SESSION['Account'];
echo $food_kind;
echo $quantity;
//add_animal($sex, $animal_id, $health_index, $weight, $source, $account);
buy_food($account, $quantity, $food_kind);
header("location: index.php?action=food");
?>

