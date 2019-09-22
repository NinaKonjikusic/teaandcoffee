<?php
    include_once("modules/config.php");
    session_start();

    include_once("views/header.php");

    if (isset($_GET["page"])) {
        $page = $_GET["page"];
        switch ($page) {
            case "index":
                include_once("views/content.php");
                break;
            case "tea":
                include_once("views/tea.php");
                break;
            case "coffee":
                include_once("views/coffee.php");
                break;
            case "contact":
                include_once("views/contact.php");
                break;
            case "register":
                include_once("views/register.php");
                break;
            case "login":
                include_once("views/login.php");
                break;
            case "admin_panel":
                include_once("views/admin_panel.php");
                break;
            case "edit":
                include_once("views/edit.php");
                break;
        }
    }
    else if (isset($_GET["tea"])) {
        $tea = $_GET["tea"];
        include_once("views/one_tea.php");

    }
    else if (isset($_GET["coffee"])) {
        $coffee = $_GET["coffee"];
        include_once("views/one_coffee.php");
    }
    else {
        include_once("views/content.php");
    }

    include_once("views/footer.php");
?>