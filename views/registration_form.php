<?php
// show potential errors / feedback (from registration object)
include('_header.php');



if (isset($registration)) {
    if ($registration->errors) {
        foreach ($registration->errors as $error) {
            echo $error;
        }
    }
    if ($registration->messages) {
        foreach ($registration->messages as $message) {
            echo $message;
        }
    }
}
?>

<!-- register form -->

<div class="container">
<div class="jumbotron">
<form method="post" action="register.php" name="registerform" class="form-horizontal">
<legend>Register</legend>
<div class="form-group">
    <!-- the user name input field uses a HTML5 pattern check -->
    <label for="login_input_username">Username (only letters and numbers, 2 to 64 characters)</label>
    <input class="form-control" id="login_input_username" class="login_input" type="text" pattern="[a-zA-Z0-9]{2,64}" name="user_name" required /><br>

    <!-- the email input field uses a HTML5 email type check -->
    <label for="login_input_email">User's email</label>
    <input class="form-control" id="login_input_email" class="login_input" type="email" name="user_email" required /><br>

    <label for="login_input_password_new">Password (min. 6 characters)</label>
    <input class="form-control" id="login_input_password_new" class="login_input" type="password" name="user_password_new" pattern=".{6,}" required autocomplete="off" /><br>

    <label for="login_input_password_repeat">Repeat password</label>
    <input class="form-control" id="login_input_password_repeat" class="login_input" type="password" name="user_password_repeat" pattern=".{6,}" required autocomplete="off" /><br>
    <br><input class="btn btn-primary" type="submit"  name="register" value="Register" />
<div class="form-group">
</form>
</div>
<!-- backlink --><br><br><Br>
<a class="alert alert-dismissible alert-info" href="index.php">Back to Login Page</a>
</div></div></div>

<?php

?>