<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,700|Oswald' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="reg.php" method="post" name="register" id="registerForm" class="form">
        <h2>Registration</h2>
        <label for="firstName">First Name</label>
            <input type="text" name="firstName" id="firstName" required>
        <label for="lastName">Last Name</label>
            <input type="text" name="lastName" id="lastName" required>
        <label for="email">Email Address</label>
            <input type="email" name="email" id="email">
        <label for="userName">User Name</label>
            <input type="text" name="userName" id="userName" required>
        <label for="password">Password</label>
            <input type="text" name="password" id="password" required>
        <label for="confirmPassword">Confirm Password</label>
            <input type="text" name="confirmPassword" id="password" required>
            <input type="submit" value="Register">
    </form>
</body>
</html>