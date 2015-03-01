<?php
// show potential errors / feedback (from login object)
if (isset($login)) {
    if ($login->errors) {
        foreach ($login->errors as $error) {
            echo $error;
        }
    }
    if ($login->messages) {
        foreach ($login->messages as $message) {
            echo $message;
        }
    }
}
?>

<!-- login form box -->
<div class="container">
<div class="jumbotron">
<form method="post" action="index.php" name="loginform" class="form-horizontal">
<legend>Login</legend>
<div class="form-group">
    <label for="login_input_username">Username</label>
    <input  class="form-control" id="login_input_username" class="login_input" type="text" name="user_name" required />

    <label for="login_input_password">Password</label>
    <input  class="form-control" id="login_input_password" class="login_input" type="password" name="user_password" autocomplete="off" required />
<br>
    <input class="btn btn-primary" type="submit"  name="login" value="Log in" />

</form>
<br><br><Br>
<a class="alert alert-dismissible alert-info" href="register.php">Register new account</a>
</div></div></div>
