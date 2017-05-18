<?php
require 'system/animal.php';
$id = isset($_POST['id']) ? (int)$_POST['id'] : '';
if($id){
     delete_animal($id);
}
// Trở về trang danh sách
header("location: index.php?action=list/cow_list");
?>
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

