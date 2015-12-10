<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>registration validation</title>
</head>
<body>
    <?php include "connectdb.php" ?>
    <?php
        $v_firstName = $_POST['firstName'];
        $v_lastName = $_POST['lastName'];
        $v_email = $_POST['email'];
        $v_userName = $_POST['userName'];
        $v_password = $_POST['password'];

        $sqlInsert = mysql_query("INSERT INTO users(user_firstName, user_lastName, user_email, user_userName, user_password)
                      VALUES('$v_firstName', '$v_lastName', '$v_email', '$v_userName', '$v_password')")
        or die("Insert Error: ".mysql_error());
        mysql_close($link);
        print "Ya did it!"
    ?>
</body>
</html>