<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Catalog</title>
    <link rel="stylesheet" href="normalize.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,700|Oswald' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php require_once("connectdb.php") ?>
    <?php
        session_start(); // database access
        if(isset($_SESSION['loggedIn'])) { // user session check // set product variable based on previous user input
            $results = mysql_query("SELECT * FROM category") or die ("retrievig info failed:").mysql_error; // if failed present an error// var to hold product row data
            $num_rows = mysql_num_rows($results);
    ?>
    <div class="wrapper">
    <div class="greenBack">
    <header>
        <h2>RJTS Computers</h2>
        <nav>
            <ul>
                <a href="logout.php"><li>Log Out</li></a>
            </ul>
        </nav>
    </header>
   
    <!-- <table border="2">
        <tr>
            <td>Category Name</td>
            <td>Category Description</td>
            <td>Category Image</td>
        </tr> -->
        <?php
            if ($num_rows == 0) {
//                echo "No Products, check back soon";
            } else {
                while($row = mysql_fetch_array($results)){
                    echo
                        '<div class="categoryDiv">
                            <a href="products/'.$row['cat_pageName'].'.php"><div><img src="images/'.$row['cat_img'].'"/></div>
                            <span class="categoryName">'.$row['cat_name'].'</span></a>
                        </div>' ;
                }
            }
        ?>

    <!-- </table> -->
</div>
</div>
</body>
</html>
<?php                                     
} else { // not logged in 
    header("Location: login.php"); // login user
    mysql_close ($link); // close database for security
    exit(); // end php
}
?>