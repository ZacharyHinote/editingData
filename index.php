<?php
    include "model/database.php";
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
    <?php
        // get all the products from the database
        $products = getProducts();
        //loop through the products array and display the name of the product    
        foreach($products as $product)
        {
            $prodID = $product['prodId'];        
            echo (" $product[productName] >> $product[inventory]</br>");
        }


    ?>
    
</body>
</html>