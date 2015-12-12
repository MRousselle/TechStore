<?php
if ( isset( $_POST['submit'] ) ) {  // if form successfully submitted  
    function validator($data) { // security function
        if ( isset($data)){ // confirm there is data
            $data = trim($data); // strip spaces
            $data = stripslashes($data); // strip slashes
            $data = htmlspecialchars($data); // convert any html special chars into standard text
            $data = filter_var($data, FILTER_SANITIZE_STRING); // filter the string
            return $data; // return the entered data
        } else {
            exit(); // end php
        } // end else
    } // end function
    $v_username  = validator($_POST['userName']); // username
    $v_password  = validator($_POST['password']); // password
    require_once('connectdb.php'); // allow database access
    $results = mysql_query( // check if user exists
            "SELECT * FROM users WHERE user_userName = '$v_username'"
    ) or die (mysql_error()); // if failed present an error
    $userRecords =  mysql_fetch_row($results); // fetch row data for the user
    if ($v_username == $userRecords[4] && $v_password == $userRecords[5]) { // if entered data matches records
        $_SESSION['loggedIn'] = $v_username; // allow secure access
        $_SESSION['name'] = $v_username; // name session after username
        header("Location: store.php"); // login user
        mysql_close ($link); // close database for security
        exit(); // end php
    } else { // incorrectly entered username and/or password // error
    } // end security check else
} // end on submit
?>

<!doctype html>
<html lang="en">
	<head>
        <title>PC Store Login</title>
        <meta charset="UTF-8">
	</head>
	<body class="secureBody">
		 <main>
            <form id="login" class="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
                <ul>
                    <li> <!-- login item -->
                        <h1 class="title">Login</h1>
                    </li>
                    <li> <!-- username item -->
                        <label for="loginame">Username</label>
                        <input type="text" id="userName" name="userName" placeholder="User Name" required>
                    </li>
                    <li> <!-- password item -->
                        <label for="userpassword">Password</label>
                        <input type="password" id="password" name="password" placeholder="Password" required>
                    </li>
                    <li> <!-- submit item -->
                        <input type="submit" id="submit" name="submit" value="Login">
                    </li>
                    <h3>don't have an account? register <a href="registration.php">here!</a></h3>
                </ul>
            </form>
		</main>
	</body>
</html>