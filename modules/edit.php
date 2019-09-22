<?php
    include_once("config.php");

    if (isset($_POST["type"])) {
        $type = $_POST["type"];
        $id = $_POST["id"];
        if ($type == "user") {
            $username = $_POST["username"];
            $email = $_POST["email"];
            $first_name = $_POST["firstname"];
            $last_name = $_POST["lastname"];
            $password = $_POST["password"];
            $password = sha1($password);
            $role = intval($_POST["role"]);

            $sql = "UPDATE user SET username = '$username', email = '$email', first_name = '$first_name', last_name = '$last_name', password = '$password', role_id = '$role' WHERE user_id = '$id'"; 
            $connection->query($sql);
            header('Location: index.php?page=admin_panel');
        }
        else if ($type = "tea") {
            $name = $_POST["name"];
            $description = $_POST["description"];
            $price = $_POST["price"];
            $image = $_POST["image"];

            $sql = "UPDATE tea SET name = '$name', description = '$description', price = '$price', image = '$image' WHERE tea_id = '$id'";
            $connection->query($sql);
            header('Location: index.php?page=admin_panel');
        }
        else if ($type = "coffee") {
            $name = $_POST["name"];
            $description = $_POST["description"];
            $price = $_POST["price"];
            $image = $_POST["image"];

            $sql = "UPDATE coffee SET name = '$name', description = '$description', price = '$price', image = '$image' WHERE coffee_id = '$id'";
            $connection->query($sql);
            header('Location: index.php?page=admin_panel');
        }
    }

?>