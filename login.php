<?php
session_start();
if ( isset( $_POST['submit'] ) ) {  // if form successfully submitted  
    function validator($data) { // SECURITY CHECK
        if ( isset($data)){ 
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            $data = filter_var($data, FILTER_SANITIZE_STRING);
            return $data;
        } else {
            exit(); // end php
        } // end else
    } // end function
    $v_username  = validator($_POST['userName']); // username
    $v_password  = validator($_POST['password']); // password
    require_once('connectdb.php');
    $results = mysql_query( //User check
            "SELECT * FROM users WHERE user_userName = '$v_username'"
    ) or die (mysql_error());
    $userRecords =  mysql_fetch_row($results);
    if ($v_username == $userRecords[4] && $v_password == $userRecords[5]) { //match check
        $_SESSION['loggedIn'] = $v_username;
        $_SESSION['name'] = $v_username; // Name of the session
        header("Location: categories.php"); //Redirect
        mysql_close ($link); 
        exit();
    } else { //Do nothing if password is wrong
    }
}
?>

<!doctype html>
<html lang="en">
	<head>
        <title>PC Store Login</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="normalize.css">
        <link href='https://fonts.googleapis.com/css?family=Roboto:400,700|Oswald' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="style.css">
	</head>
	<body>
		 <main>
            <form id="login" class="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
                <h2 class="title">Login</h2>
                <label for="loginame">Username</label>
                <input type="text" id="userName" name="userName" placeholder="User Name" required>
                <label for="userpassword">Password</label>
                <input type="password" id="password" name="password" placeholder="Password" required>
                <input type="submit" id="submit" name="submit" value="Login">
                <h3>Don't have an account? Register <a href="registration.php">here!</a></h3>
            </form>
		</main>
	</body>
</html>