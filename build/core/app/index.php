<?php
 /*Database host
 $host = getenv('DB_HOST');
 // Database user name
 $user = getenv('DB_USER');
 //Database user password
 $pass = getenv('DB_PASSWORD');
 //Database name
 $db = getenv('DB_NAME');
 // check the MySQL connection status
 */
 $conn = new mysqli("cont_mariadb", "jesus", "hola01", "users");

 //$conn = new mysqli($host, $user, $pass,$db);
 if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
 } else {
     $sql = 'SELECT * FROM bookmedik';
     
     if ($result = $conn->query($sql)) {
         while ($data = $result->fetch_object()) {
             $users[] = $data;
         }
     }
     
     foreach ($users as $user) {
        echo "<br>";
        echo $user->username . " --> " . $user->password;
        echo "<br>";
    }
 }
 mysqli_close($conn);
 ?> 

