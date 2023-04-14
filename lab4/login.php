<?php
require_once 'User.php';
require_once 'Admin.php';
require_once 'Users.php';

if (!empty($_POST)) {
    $users = new User();
    $user = $users->find($_POST['username'], $_POST['password']);
    print_r($user);
    if ($user) {
        echo '<p>Hi, ' . $user->getUsername() . '!</p>';
    } else {
        echo '<p><b>There is no user named ' . $_POST['username'] .
        '.</b></p>';
    }
}
?>

<html>
<form  method="post">
<input type="text" name="username" placeholder="Username"/>
<input type="password" name="password" placeholder="Password"/>
<input type="submit" />
</form>

//action="index.php"