<?php 
session_start();
$user1 = 'username';
$pass1 = 'password';

    if (isset($_POST['login'])) {

        if ($_POST['username'] == $user1 && $_POST['password'] == $pass1) {
            $_SESSION['valid'] = true;
            $_SESSION['username'] = $pass;
            header ('location:index.php');
        }
        else {
            echo '<script>alert("Wrong username or password")</script>';
        }
    }
?>

<h2>Enter Username and Password</h2>
<form class="form-signin" role="form" method="post">
Username: <input type="text" class="form-control" name="username" required><br>
Password: <input type="password" class="form-control" name="password" required><br>
          <button type="submit" name="login">Login</button>
</form>

<a href="index.php">index</a>