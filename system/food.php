<?php
function get_food(){
    $sql = 'SELECT * FROM food NATURAL JOIN food_kind WHERE Animal_ID = ' . $animal_id . '';
    $animal = db_select_list($sql);
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

