<?php
//get data from the form
$product_description=$_POST['Product_Description'];
$list_price=$_POST['list_price'];
$discount_percent=$_POST['discount_price'];

//Calculate the discount
$discount=$list_price*$discount_percent*0.01;
$discount_price=$list_price-$discount;

//apply currency formatting
$list_price_formatted="$".number_format($list_price,2);
$discount_percent_formatted= number_format($discount_percent,2);
$discount_price_formatted="$". number_format($discount_price,2);

// escape the unformatted input
$product_description_escaped= htmlspecialchars($product_description);
?>
<!<!doctype html>
<html>
    <head>
        <title>Product Discount Calculator.</title>
        <link rel="stylesheet" type="text/css" href="main.css">
    </head>
    <body>
        <main>
            <h1>Product Discount Calculator.</h1>
            <label>Product Description:</label>
            <span><?php echo $product_description; ?></span><br>
            <label>List Price:</label>
            <span><?php echo $list_price_formatted; ?></span><br>
            <label>Standard Discount:</label>
            <span><?php echo $discount_percent_formatted; ?></span><br>
            <label>Discount Amount:</label>
            <span><?php echo  $discount_price_formatted; ?></span><br>
        </main>
    </body>
</html>