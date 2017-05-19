<?php
check_login();
require 'system/animal.php';
$animal_id=(int)$_POST['animal_id'];
$id = isset($_POST['id']) ? (int)$_POST['id'] : '';
if($id){
     delete_animal($id);
}
// Trở về trang danh sách
header("location: index.php?action=animal_list&Animal_Id=$animal_id");
?>