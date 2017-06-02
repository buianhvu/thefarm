<?php


function add_money($amount, $account) {
    $sql = "SELECT * FROM users WHERE account = '$account'";
    $row = db_select_row($sql);
    if ($row) {
        $data = array(
            'Id' => $row['Id'],
            'Account' => $row['Account'],
            'Password'=> $row['Password'],
            'Balance' => $amount + $row['Balance']
        );
        if (db_update_by_id('users', 'Account', $account, $data))
            return true;
        else {
            return false;
        }
    } else {
        return false;
    }
}
function get_money($account){
    $sql = "SELECT * FROM users  WHERE account = '$account'";
    $row = db_select_row($sql);
    $money = $row['Balance'];
    if ($money > 0)
        return $money;
    else
        return false;
    
}
function price_animal($Id) {
    $sql = "SELECT * FROM animal_price NATURAL JOIN animals WHERE Id='$Id'";
    $data = db_select_row($sql);
    $money = $data['Weight'] * $data['Price_Per_Unit'];
    
        return $money;
    
}
function add_transaction($Id, $type, $action, $money, $date, $account) {
    // Gọi tới biến toàn cục $conn
    global $conn;

    // Chống SQL Injection

    $sex = addslashes($sex);
    $health_index = addslashes($health_index);
    $weight = addslashes($weight);
    $source = addslashes($source);
    $account = addslashes($account);
    $animal_id = addslashes($animal_id);

    // Câu truy vấn thêm
    $sql = "
           INSERT INTO `animals`(`Animal_ID`, `Sex`, `Health_Index`, `Weight`, `Source`, `Account`) 
           VALUES ('$animal_id','$sex','$health_index','$weight','$source','$account')
    ";

    // Thực hiện câu truy vấn
    $query = mysqli_query($conn, $sql);

    return $query;
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

