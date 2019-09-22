<?php
    include_once("config.php");
    if (isset($_POST["username"])) {
        $username = $_POST["username"];
        $email = $_POST["email"];
        $firstname = $_POST["firstname"];
        $lastname = $_POST["lastname"];
        $password = $_POST["psw"];

        $errors = [];

        $reUsername = "/^([\d]|[\w]){2,20}$/";
        $reFirstname = "/^[A-Z][a-z]{2,14}$/";
        $reLastname = "/^[A-Z][a-z]{2,24}$/";
        $rePassword = "/^([\d]|[\w]){2,50}$/";

        if(!preg_match($reUsername, $username)){
            $errors[] = "Error in username";
        }
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errors[] = "Error in email";
        }
        if(!preg_match($reFirstname, $firstname)){
            $errors[] = "Error in first name";
        }
        if(!preg_match($reLastname, $lastname)){
            $errors[] = "Error in last name";
        }
        if(!preg_match($rePassword, $password)){
            $errors[] = "Error in password";
        }

        if(count($errors) > 0){
            header('HTTP/1.1 500 Internal Server Error');
            header('Content-Type: application/json; charset=UTF-8');
            $msg = "<ul>";
            foreach ($errors as $error) {
                $msg."<li>".$error."</li>";
            }
            $msg."</ul>";
            die(json_encode($msg));
        }
        else {
            $password = sha1($password);
    
            $stmt = $connection->prepare("INSERT INTO user(username, email, first_name, last_name, password, role_id, active) VALUES (?,?,?,?,?,1,1)");
            if ($stmt)
            {
                $stmt->bind_param("sssss", $username, $email, $firstname, $lastname, $password);
                $stmt->execute();
                $stmt->close();
            
                echo("<div class='alert alert-success'>Account created successfully.</div>");
            }
            else 
            {
                echo("<div class='alert alert-warning'>Something went wrong, please try again.</div>");
            }
        }
    }
?>