<?php
require 'system/animal.php';
$id = isset($_POST['id']) ? (int)$_POST['id'] : '';
if($id){
     delete_animal($id);
}
// Trở về trang danh sách
header("location: animal_list.php");
?>
