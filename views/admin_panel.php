<?php
    if (isset($_SESSION["user"]) && $_SESSION["user"]->role_id == 2):
        $users = $connection->query("SELECT * FROM user");
        $teas = $connection->query("SELECT * FROM tea");
        $coffees = $connection->query("SELECT * FROM coffee");
?>
    <div id="admin">
        <div id="menu-pane">
            <ul>
                <li><button type="button" id="user-list" class="btn btn-info">Users</button></li>
                <li><button type="button" id="tea-list" class="btn btn-info">Tea</button></li>
                <li><button type="button" id="coffee-list" class="btn btn-info">Coffee</button></li>
                <li><button type="button" id="add-user-list" class="btn btn-info">Add User</button></li>
                <li><button type="button" id="add-tea-list" class="btn btn-info">Add Tea</button></li>
                <li><button type="button" id="add-coffee-list" class="btn btn-info">Add Coffee</button></li>
            </ul>
        </div>
        <div id="display-pane">
            <div id="users_pane" class="hidden_div">
                <?php 
                if ($users) { 
                    echo "<table>";
                    echo "<tr><th>Username: </th><th>Email: </th><th>First Name:&nbsp;&nbsp;</th><th>Last Name:&nbsp;&nbsp;</th><th>Role:&nbsp;&nbsp;</th><th>Edit: </th><th>Delete: </th></tr>";
                    while($user = $users->fetch_object()){ 
                        echo "<tr><td>$user->username</td><td>$user->email</td><td>$user->first_name</td><td>$user->last_name</td><td>$user->role_id</td><td><a href='http://localhost/teaandcoffee/index.php?page=edit&type=1&id=$user->user_id' class='btn btn-danger'>Edit</a></td><td><button type='button' id='$user->user_id' class='del_user btn btn-danger'>x</button></td></tr>";
                    }
                    echo "</table>";
                }
                ?>
                <br/><br/><br/>
            </div>
            <div id="tea_pane" class="hidden_div">
                <?php 
                if ($teas) { 
                    echo "<table>";
                    echo "<tr><th>Name: </th><th>Description:&nbsp;&nbsp;</th><th>Price:&nbsp;&nbsp;</th><th>Image:&nbsp;&nbsp;</th><th>Edit: </th><th>Delete: </th></tr>";
                    while($tea = $teas->fetch_object()){ 
                        echo "<tr><td>$tea->name</td><td>$tea->description</td><td>$$tea->price</td><td>$tea->image</td><td><a href='http://localhost/teaandcoffee/index.php?page=edit&type=2&id=$tea->tea_id' class='btn btn-danger'>Edit</a></td><td><button type='button' id='$tea->tea_id' class='del_tea btn btn-danger'>x</button></td></tr>";
                    }
                    echo "</table>";
                }
                ?>
                <br/><br/><br/>
            </div>
            <div id="coffee_pane" class="hidden_div">
                <?php 
                if ($coffees) { 
                    echo "<table>";
                    echo "<tr><th>Name: </th><th>Description:&nbsp;&nbsp;</th><th>Image:&nbsp;&nbsp;</th><th>Price:&nbsp;&nbsp;</th><th>Edit: </th><th>Delete: </th></tr>";
                    while($coffee = $coffees->fetch_object()){ 
                        echo "<tr><td>$coffee->name</td><td>$coffee->description</td><td>$coffee->image</td><td>$$coffee->price</td><td><a href='http://localhost/teaandcoffee/index.php?page=edit&type=3&id=$coffee->coffee_id' class='btn btn-danger'>Edit</a></td><td><button type='button' id='$coffee->coffee_id' class='del_coffee btn btn-danger'>x</button></td></tr>";
                    }
                    echo "</table>";
                }
                ?>
            </div>

            <div id="add_user_pane" class="hidden_div">
                <h1>Add User</h1>
                <form action="http://localhost/teaandcoffee/modules/add.php" method="POST">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control"/><br/>
                    <label>Email</label>
                    <input type="text" name="email" class="form-control"/><br/>
                    <label>First Name</label>
                    <input type="text" name="firstname" class="form-control"/><br/>
                    <label>Last Name</label>
                    <input type="text" name="lastname" class="form-control"/><br/>
                    <label>Password</label>
                    <input type="password" name="password" class="form-control"/><br/>
                    <label>Role</label>
                    <input type="text" name="role" class="form-control"/><br/>
                    <input type="hidden" value="user" name="type"/>
                    <input type="submit" value="Add" name="send"/>
                </form>
            </div>

            <div id="add_tea_pane" class="hidden_div">
                <h1>Add New Tea</h1>
                <form action="http://localhost/teaandcoffee/modules/add.php" method="POST">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control"/><br/>
                    <label>Description</label>
                    <textarea name="description" class="form-control"></textarea><br/>
                    <label>Price</label>
                    <input type="text" name="price" class="form-control"/><br/>
                    <label>Image</label>
                    <input type="text" name="image" class="form-control"/><br/>
                    <input type="hidden" value="tea" name="type"/>
                    <input type="submit" value="Add" name="send"/>
                </form>
            </div>

            <div id="add_coffee_pane" class="hidden_div">
                <h1>Add New Coffee</h1>
                <form action="http://localhost/teaandcoffee/modules/add.php" method="POST">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control"/><br/>
                    <label>Description</label>
                    <textarea name="description" class="form-control"></textarea><br/>
                    <label>Image</label>
                    <input type="text" name="image" class="form-control"/><br/>
                    <label>Price</label>
                    <input type="text" name="price" class="form-control"/><br/>
                    <input type="hidden" value="coffee" name="type"/>
                    <input type="submit" value="Add" name="send"/>
                </form>
            </div>
        </div>
    </div>
    <script src="assets/js/admin.js"></script>

<?php endif ?>