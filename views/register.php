<h1 class="info-header">Register</h1>
<div class="feedback">
</div>
<form action="" method="POST">
    <div class="container">
        <p>Please fill out this form to create an account.</p>
        <hr>

        <label for="username"><b>Username</b></label>
        <input type="text" placeholder="Enter username" name="username" id="username" required>
    
        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Enter email" name="email" id="email" required>

        <label for="firstname"><b>First Name</b></label>
        <input type="text" placeholder="Enter first name" name="firstname" id="firstname" required>

        <label for="lastname"><b>Last name</b></label>
        <input type="text" placeholder="Enter last name" name="lastname" id="lastname" required>
    
        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter password" name="psw" id="psw" required>
    
        <label for="psw-repeat"><b>Repeat Password</b></label>
        <input type="password" placeholder="Repeat password" name="psw-repeat" id="psw-repeat" required>
        <hr>
        
        <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
        <button type="button" id="registerbtn" class="registerbtn">Create</button>
    </div>
        
    <div class="container signin">
        <p>Already have an account? <a href="index.php?page=login">Sign in</a>.</p>
    </div>
</form>
<script src="assets/js/register.js"></script>