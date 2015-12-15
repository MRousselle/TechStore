<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Catalog</title>
    <link rel="stylesheet" href="../normalize.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,700|Oswald' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <?php include "../connectdb.php" ?>
    <?php 
        $results = mysql_query("SELECT * FROM products WHERE prod_cat = 'cases'") or die ("retrieving info failed: ").mysql_error;
        $num_rows = mysql_num_rows($results);
    ?>
    <div class="wrapper">
    <div class="greenBack">
    <header>
        <h2>RJTS Computers</h2>
        <nav>
            <ul>
                <a href="../categories.php"><li>Home</li></a>
                <a href=""><li>Cart</li></a>
                <a href="logout.php"><li>Log Out</li></a>
            </ul>
        </nav>
    </header>
    <table>
        <?php
            if ($num_rows == 0) {
               echo "No Products, check back soon";
            } else {
                while($row = mysql_fetch_array($results)){
                    echo'<tr class="productTR">
                            <td><img src="../images/'.$row['prod_img'].'"/></td>
                            <td>
                                <span class="prodName">'.$row['prod_name'].'</span>
                                '.$row['prod_desc'].'
                            </td>
                            <td>$'.$row['prod_price'].'</td>
                        </tr>';
                }
            }
        ?>
    </table>
    </div>
    </div>
</body>
</html>