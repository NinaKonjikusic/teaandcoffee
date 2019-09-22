<!DOCTYPE html>
<html>
    <head>
        <title>Tea and Coffee</title>
    
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/main.css">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    </head>
    <body>
        <div id="logo">
            <img src="assets/images/logo.png" alt="Tea And Coffee" class="img-fluid">
        </div>
        <nav class="navbar navbar-inverse navbar-static-top customNav" style="background-color: #20c997;">
                <div class="container">

                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <div class="collapse navbar-collapse navHeaderCollapse">
                        <ul class="nav navbar-nav">
                            <li class="hoverChange"><a href="index.php?page=index">Index</a></li>
                            <li class="hoverChange"><a href="index.php?page=tea">Tea</a></li>
                            <li class="hoverChange"><a href="index.php?page=coffee">Coffee</a></li>
                            <li class="hoverChange"><a href="index.php?page=contact">Contact</a></li>
                            <?php if (isset($_SESSION["user"])): ?>
                            <li class="hoverChange"><a href="index.php?page=user"><?php echo $_SESSION["user"]->username ?></a></li>
                            <li class="hoverChange"><a href="modules/logout.php">Logout</a></li>
                                <?php if ($_SESSION["user"]->role_id == 2): ?>
                                <li><a href="?page=admin_panel">Admin Panel</a></li>
                                <?php endif ?>
                            <?php else: ?>
                            <li class="userEmail hoverChange"><a href="index.php?page=register"><span class="glyphicon glyphicon-user"></span> Sign up</a></li>
                            <li class="userSignout hoverChange"><a href="index.php?page=login"><span class="glyphicon glyphicon-log-in"></span> Sign in</a></li>
                            <?php endif; ?>
                        </ul>
                    </div>

                </div>
        </nav>
        <div id="content">