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
        $results = mysql_query("SELECT * FROM category ") or die ("retrieving info failed: ").mysql_error;
        $num_rows = mysql_num_rows($results);
    ?>
    <div class="wrapper">
    <div class="greenBack">
    <header>
        <h2>RJTS Computers</h2>
        <nav>
            <ul>
                <a href="categories.php"><li>Home</li></a>
                <a href=""><li>Cart</li></a>
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