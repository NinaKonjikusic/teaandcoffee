<?php
    include_once("config.php");

    if (isset($_POST["id"])) {
        $id = $_POST["id"];
        $type = $_POST["type"];

        if ($type == "user") {
            $sql = "DELETE FROM user WHERE user_id = $id";
            if ($connection->query($sql) === TRUE)
            {
                echo "Successfully removed user with id $id";
            }
        }
        if ($type == "tea") {
            $sql = "DELETE FROM tea WHERE tea_id = $id";
            if ($connection->query($sql) === TRUE)
            {
                echo "Successfully removed tea with id $id";
            }
        }
        if ($type == "coffee") {
            $sql = "DELETE FROM coffee WHERE coffee_id = $id";
            if ($connection->query($sql) === TRUE)
            {
                echo "Successfully removed coffee with id $id";
            }
        }
    }
?>