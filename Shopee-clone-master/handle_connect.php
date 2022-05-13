<?php 
    function handle_register() {
        if (!empty($_POST)) {
            $email_register = $_POST['email-register'];
            $password_register = $_POST['password-register'];

            require_once('sql_connect.php');

            // Perform data query - insert data to database
            $query = "INSERT INTO taikhoan(EMAIL, PASSWORD)
                    VALUES ('". $email_register ."', '". $password_register ."')";

            mysqli_query($connect, $query);

            require_once('sql_close.php');

            header("Location: index.php");
        }
    }
?>