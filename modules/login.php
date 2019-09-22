<?php
    include_once("config.php");
    session_start();
    if (isset($_POST["email"])) {
        
        $email = $_POST["email"];
        $password = $_POST["psw"];

        $password = sha1($password);

        $stmt = $connection->prepare("SELECT * FROM user WHERE email = ? AND password = ?");
        if ($stmt)
        {
            $stmt->bind_param("ss", $email, $password);
            $stmt->execute();
            $result = $stmt->get_result();
            $stmt->close();
            $user = $result->fetch_object();
            if ($user)
            {
                $_SESSION['user'] = $user;
                header("Location: ../index.php?page=index");
            }
            else
            {
                $_SESSION['errors'] = "Wrong email or password";
                header("Location: ../index.php?page=login");
            }
        }
    }
?>