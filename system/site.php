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

?>

