<?php
check_login();
require 'system/animal.php';
require_once  'system/operation.php';
$account = $_SESSION['Account'];
$animal_id=(int)$_POST['animal_id'];

//$id = isset($_POST['id']) ? (int)$_POST['id'] : '';
if(!empty($_POST['check_delete'])){
// Loop to store and display values of individual checked checkbox.
    //foreach($_POST['check_delete'] as $id){
      //   delete_animal($id);
    //}
    sell_animals($account,$_POST['check_delete']);
}



// Trở về trang danh sách
header("location: index.php?action=animal_list&Animal_Id=$animal_id");
?>