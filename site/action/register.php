<?php

//require_once  '/system/operation.php';
$name=$_POST['name']; // Fetching Values from URL.
$password= ($_POST['password']); // Password Encryption, If you like you can also leave sha1.
// Check if e-mail address syntax is valid or not
//$email = filter_var($email, FILTER_SANITIZE_EMAIL); // Sanitizing email(Remove unexpected symbol like <,>,?,#,!, etc.)

//$result = "SELECT * FROM users WHERE Account='$name'";
//$data = db_select_list($result);

   $user=array();
   $user['Account']=$name;
   $user['Password']=$password;
    $sql = "
         INSERT INTO `users`(`Account`, `Password`) 
           VALUES ('$name','$password')
    ";

    // Thực hiện câu truy vấn
    $query = mysqli_query($conn, $sql);

      $sql1 = "
         INSERT INTO `current_balance`(`Account`, `Balance`) 
           VALUES ('$name','0')
    ";
       // Thực hiện câu truy vấn
    $query = mysqli_query($conn, $sql1);

      
        db_insert('users', $user);
    echo "You have Successfully Registered.....";
    
    echo $name;
    echo $password;




?>