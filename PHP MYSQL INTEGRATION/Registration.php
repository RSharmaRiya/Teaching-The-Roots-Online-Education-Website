<!DOCTYPE html>
<html>
    <head>
        <title>Registration </title>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Register</h2>
    </div>
<form action="Registration.php" method="post">
    <div>
        <label for="username">Username</label>
        <input type="text" name="username" required>
</div>
<div>
        <label for="email">E-Mail</label>
        <input type="email" name="email" required>
</div>
<div>
        <label for="password">Password</label>
        <input type="password" name="password_1" required>
</div>
<div>
        <label for="password">Confirm Password</label>
        <input type="password" name="password_2" required>
</div>
<button type="submit" name="reg_user">Submit</button>
<p>Already a user<a href="Login.php"><b>Log In</b></a></p>
</form>
</div>
</body>
</html>