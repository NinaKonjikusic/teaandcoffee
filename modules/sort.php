<?php
    include_once("config.php");
    session_start();

    if (isset($_POST["order"])) {
        $order = $_POST["order"];
        $result = "";
        $rows = array();
        $response = "";
        
        $type = $_POST["type"];

        if ($type == "tea") {
            if ($order == "asc")
            $result = $connection->query("SELECT * FROM tea ORDER BY name ASC");
            else
                $result = $connection->query("SELECT * FROM tea ORDER BY name DESC");
            while ($tea = $result->fetch_object())
            {
                $response = $response."<div class='col col-sm-4 each-tea'><a href='index.php?tea=".$tea->tea_id."'><img src='".$tea->image."' alt='".$tea->name."'><span class='item-name'>".$tea->name."</span><span>$".$tea->price."</span></a></div>";
            }
        }
        else {
            if ($order == "asc")
            $result = $connection->query("SELECT * FROM coffee ORDER BY name ASC");
            else
                $result = $connection->query("SELECT * FROM coffee ORDER BY name DESC");
            while ($coffee = $result->fetch_object())
            {
                $response = $response."<div class='col col-sm-4 each-tea'><a href='index.php?coffee=".$coffee->coffee_id."'><img src='".$coffee->image."' alt='".$coffee->name."'><span class='item-name'>".$coffee->name."</span><span>$".$coffee->price."</span></a></div>";
            }
        }

        echo $response;
    }

    if (isset($_POST["search"])) {
        $name = $_POST["name"];
        $type = $_POST["type"];

        $result = "";
        $rows = array();

        if ($type == "tea") {
            $result = $connection->query("SELECT * FROM tea WHERE name LIKE '%".$name."%'");
            $response = "";
            while ($tea = $result->fetch_object())
            {
                $response = $response."<div class='col col-sm-4 each-tea'><a href='index.php?tea=".$tea->tea_id."'><img src='".$tea->image."' alt='".$tea->name."'><span class='item-name'>".$tea->name."</span><span>$".$tea->price."</span></a></div>";
            }
        }
        else {
            $result = $connection->query("SELECT * FROM coffee WHERE name LIKE '%".$name."%'");
            $response = "";
            while ($coffee = $result->fetch_object())
            {
                $response = $response."<div class='col col-sm-4 each-tea'><a href='index.php?coffee=".$coffee->coffee_id."'><img src='".$coffee->image."' alt='".$coffee->name."'><span class='item-name'>".$coffee->name."</span><span>$".$coffee->price."</span></a></div>";
            }
        }

        echo $response;

    }
?>