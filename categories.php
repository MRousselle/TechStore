<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Catalog</title>
    <link rel="stylesheet" href="normalize.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,700|Oswald' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include "connectdb.php" ?>
    <?php 
        $results = mysql_query("SELECT * FROM category ") or die ("retrieving info failed: ").mysql_error;
        $num_rows = mysql_num_rows($results);
    ?>
    <h2>List of Products</h2>
    <div class="wrapper">
    <!-- <table border="2">
        <tr>
            <td>Category Name</td>
            <td>Category Description</td>
            <td>Category Image</td>
        </tr> -->
        <?php
            if ($num_rows = 0) {
//                echo "No Products, check back soon";
            } else {
                while($row = mysql_fetch_array($results)){
                    echo
                        // '<tr>
                        //     <td> 
                        //         <a href="products/'.$row['cat_pageName'].'.php">'.$row['cat_name'].'</a>
                        //     </td>
                        //     <td>'
                        //         .$row['cat_desc'].'
                        //     </td>
                        //     <td>
                        //         <img src="images/'.$row['cat_img'].'"/>
                        //     </td>
                        // </tr>';
                        '<div class="categoryDiv">
                            <a href="products/'.$row['cat_pageName'].'.php"><img src="images/'.$row['cat_img'].'"/></a>

                        </div>' ;
                }
            }
        ?>

    <!-- </table> -->
    </div>
</body>
</html>