<?php
    if (isset($_GET["type"])) {
        $type = $_GET["type"];
        $id = $_GET["id"];
        $sql = "";
        if ($type == 1) {
            $sql = $connection->query("SELECT * FROM user WHERE user_id = $id");
            $user = $sql->fetch_object();
            echo "<form action='http://localhost/teaandcoffee/modules/edit.php' method='POST'>"
                ."<label>Username</label>"
                ."<input type='text' name='username' class='form-control' value='$user->username'/><br/>"
                ."<label>Email</label>"
                ."<input type='text' name='email' class='form-control' value='$user->email'/><br/>"
                ."<label>First Name</label>"
                ."<input type='text' name='firstname' class='form-control' value='$user->first_name'/><br/>"
                ."<label>Last Name</label>"
                ."<input type='text' name='lastname' class='form-control' value='$user->last_name'/><br/>"
                ."<label>Password</label>"
                ."<input type='password' name='password' class='form-control'/><br/>"
                ."<input type='hidden' value='user' name='type'/>"
                ."<input type='hidden' value='$user->user_id' name='id'/>"
                ."<input type='submit' value='Edit' name='send'/>"
            ."</form>"; 
        }
        else if ($type == 2) {
            $sql = $connection->query("SELECT * FROM tea WHERE tea_id = $id");
            $tea = $sql->fetch_object();
            echo "<form action='http://localhost/teaandcoffee/modules/edit.php' method='POST'>"
                ."<label>Name</label>"
                ."<input type='text' name='name' class='form-control' value='$tea->name'/><br/>"
                ."<label>Description</label>"
                ."<input type='text' name='description' class='form-control' value='$tea->description'/><br/>"
                ."<label>Price</label>"
                ."<input type='text' name='price' class='form-control' value='$tea->price'/><br/>"
                ."<input type='hidden' value='tea' name='type'/>"
                ."<input type='hidden' value='$tea->tea_id' name='id'/>"
                ."<input type='submit' value='Edit' name='send'/>"
            ."</form>"; 
        }
        else if ($type == 3) {
            $sql = $connection->query("SELECT * FROM coffee WHERE coffee_id = $id");
            $coffee = $sql->fetch_object();
            echo "<form action='http://localhost/teaandcoffee/modules/edit.php' method='POST'>"
                ."<label>Name</label>"
                ."<input type='text' name='name' class='form-control' value='$coffee->name'/><br/>"
                ."<label>Description</label>"
                ."<input type='text' name='description' class='form-control' value='$coffee->description'/><br/>"
                ."<label>Price</label>"
                ."<input type='text' name='price' class='form-control' value='$coffee->price'/><br/>"
                ."<input type='hidden' value='coffee' name='type'/>"
                ."<input type='hidden' value='$coffee->coffee_id' name='id'/>"
                ."<input type='submit' value='Edit' name='send'/>"
            ."</form>"; 
        }
    }
?>