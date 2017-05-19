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
    echo '<a href="index.php?action=login" >Click Here To Login</a>';
    die("<br>YOU DO NOT OWN PERMISSION TO ACCESS THIS PAGE !");
}
 else {
     if($_SESSION['permission'] != 0 ){
        echo '<a href="index.php?action=login" >Click Here To Login</a>';
        die("<br>YOU DO NOT OWN PERMISSION TO ACCESS THIS PAGE !");     
     }
}
}

?>

