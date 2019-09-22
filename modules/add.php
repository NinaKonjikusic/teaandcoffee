<?php
    include_once("config.php");
    if (isset($_POST["type"]))
    {
        $type = $_POST["type"];
        if ($type == "user") {
            $username = $_POST["username"];
            $email = $_POST["email"];
            $first_name = $_POST["firstname"];
            $last_name = $_POST["lastname"];
            $password = $_POST["password"];
            $password = sha1($password);
            $role = intval($_POST["role"]);

            $sql = "INSERT INTO user (username, email, first_name, last_name, password, role_id, active) VALUES ('$username','$email','$first_name','$last_name','$password',$role,1)"; 
            $connection->query($sql);
            header('Location: index.php?page=admin_panel');
        }
        else if ($type = "tea") {
            $name = $_POST["name"];
            $description = $_POST["description"];
            $price = $_POST["price"];
            $image = $_POST["image"];

            $sql = "INSERT INTO tea (name, description, price, image) VALUES ('$name', '$description', '$price', '$image')";
            $connection->query($sql);
            header('Location: index.php?page=admin_panel');
        }
        else if ($type = "coffee") {
            $name = $_POST["name"];
            $description = $_POST["description"];
            $price = $_POST["price"];
            $image = $_POST["image"];

            $sql = "INSERT INTO coffee (name, description, price, image) VALUES ('$name', '$description', '$price', '$image')";
            $connection->query($sql);
            header('Location: index.php?page=admin_panel');
        }
    }
?>