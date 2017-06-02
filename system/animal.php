<?php



function get_all_pig() {
    global $conn;
//db_connect();
    $sql = "SELECT * FROM animals WHERE Animal_ID=1";
    $result = array();
    $query = mysqli_query($conn, $sql);
    if ($query) {

        while ($row = mysqli_fetch_assoc($query)) {
            $result[] = $row;
        }
        return $result;
    }
}

function get_all_chicken() {
    global $conn;
    $sql = "SELECT * FROM animals WHERE Animal_ID=4";
    $result = array();
    $query = mysqli_query($conn, $sql);
    if ($query) {

        while ($row = mysqli_fetch_assoc($query)) {
            $result[] = $row;
        }
        return $result;
    }
}

function get_all_buffalo() {
    global $conn;
//db_connect();
    $sql = "SELECT * FROM animals WHERE Animal_ID=2";
    $result = array();
    $query = mysqli_query($conn, $sql);
    if ($query) {

        while ($row = mysqli_fetch_assoc($query)) {
            $result[] = $row;
        }
        return $result;
    }
}

function get_all_cow() {
    global $conn;
//db_connect();
    $sql = "SELECT * FROM animals WHERE Animal_ID=3";
    $result = array();
    $query = mysqli_query($conn, $sql);
    if ($query) {

        while ($row = mysqli_fetch_assoc($query)) {
            $result[] = $row;
        }
        return $result;
    }
}

function get_animal($id) {
    global $conn;

// Câu truy vấn lấy tất cả sinh viên
    $sql = "SELECT * FROM animals WHERE id = {$id}";

// Thực hiện câu truy vấn
    $query = mysqli_query($conn, $sql);

// Mảng chứa kết quả
    $result = array();

// Nếu có kết quả thì đưa vào biến $result
    if (mysqli_num_rows($query) > 0) {
        $row = mysqli_fetch_assoc($query);
        $result = $row;
    }

// Trả kết quả về
    return $result;
}

// Hàm thêm animal
function add_animal($sex, $animal_id, $health_index, $weight, $source, $account) {
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

// Hàm xóa animal
function delete_animal($id) {
    // Gọi tới biến toàn cục $conn
    global $conn;

    // Hàm kết nối
    // Câu truy sửa
    $sql = "
            DELETE FROM animals
            WHERE Id = $id
    ";

    // Thực hiện câu truy vấn
    $query = mysqli_query($conn, $sql);

    return $query;
}

?>