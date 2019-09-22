<h1 class="info-header">Sign in</h1>
<div class="feedback">
    <?php
        if (isset($_SESSION["errors"])) {
            echo "<div class='alert alert-warning'>".$_SESSION["errors"]."</div>";
        }
        unset($_SESSION['errors']);
    ?>
</div>
<form action="modules/login.php" method="POST">
    <div class="container">
        <p>Please fill out this form to sign in.</p>
        <hr>
    
        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Enter email" name="email" id="email" required>
    
        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter password" name="psw" id="psw" required>
        <hr>
        
        <button type="submit" id="loginbtn" class="loginbtn">Sign in</button>
    </div>
        
    <div class="container signin">
        <p>You don't have an account? <a href="index.php?page=register">Click here to create one</a>.</p>
    </div>
</form>