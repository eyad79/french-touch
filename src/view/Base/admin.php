<!-- <h1><?= $title ?></h1> -->
<?php

session_start(); 
if (isset($_SESSION['username'])) {
    header('Location: dashboard');
}

print_r($_SESSION); 

?>

<form class="login" action="" method="post">
    <h4 class="text-center" >Admin login</h4>
    <input class="form-control" type="test" name="username" placeholder="Username" autocomplete="off">
    <input class="form-control" type="password" name="password" placeholder="Passowrd" autocomplete="new-password">
    <input class="btn btn-primary btn-block" type="submit" name="login">


</form>

