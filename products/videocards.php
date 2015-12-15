<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Catalog</title>
</head>
<body>
    <?php include "../connectdb.php" ?>
    <?php 
        $results = mysql_query("SELECT * FROM products WHERE prod_cat = 'videocards'") or die ("retrieving info failed: ").mysql_error;
        $num_rows = mysql_num_rows($results);
    ?>
    <h2>List of Products</h2>
    <table border="2">
        <tr>
            <td>Category Name</td>
            <td>Category Description</td>
            <td>Category Image</td>
        </tr>
        <?php
            if ($num_rows = 0) {
//                echo "No Products, check back soon";
            } else {
                while($row = mysql_fetch_array($results)){
                    echo'<tr><td> '.$row['prod_name'].'</td><td>'.$row['prod_desc'].'</td><td><img src="images/'.$row['prod_img'].'"/></td></tr>';
                }
            }
        ?>
    </table>
</body>
</html>