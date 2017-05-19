<?php

function load_header() {
    require ('site/widget/header.php');
}


function load_sidebar() {
    require ('site/widget/sidebar.php');
}

function load_footer() {
    require ('site/widget/footer.php');
}

function load_content($widget) {
    require ('site/widget/'.$widget.'.php');
}

function load_admin(){
    require 'widget/admin.php';
}
function check_login(){
    session_start();
    if(!isset($_SESSION['permission'])) 
{
    die("YOU DO NOT OWN PERMISSION TO ACCESS THIS PAGE !");
}
 else {
     if($_SESSION['permission'] != 0 ){
        die("YOU DO NOT OWN PERMISSION TO ACCESS THIS PAGE !");     
     }
}
}

?>

