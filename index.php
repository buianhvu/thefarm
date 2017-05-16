<?php

define ('syspath','system/');
require syspath."client.php";
require syspath."database.php";
db_connect();
$action = input_get('action');

require syspath."site.php";

if(file_exists('site/action/'.$action. '.php'))
{
    require ('site/action/'.$action. '.php');
}
 else {
     require('site/action/show_404.php');
}


