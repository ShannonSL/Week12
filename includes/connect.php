<?php  
    $user = "root";
    $pw = " ";

    try {
        $conn = PDO('mysql:host=localhost;dbname=vue_video', $user, $pw);
    } catch(PDOException $exception) {
        echo 'connect error!' . $exception->getMessage();
    }
?>