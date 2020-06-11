<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Fish Page</title>
    <link rel="stylesheet" href="../css/cssssssss.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="../js/productpg.js"></script>
</head>
<body>
<?php include_once "header.php";
?>


<main id="main-content">
    <div id="titleH1"><h1>FISH FOOD</h1></div>

    <div id="middle">
        <hr>

        <?php
        $categoryID = $_GET["categoryID"];
        $products = $user->showProductsByCategory($categoryID);
        $i = 0;
        while ($i<sizeof($products)){
            $product = $products[$i];
            ?>
            <div class="product">
                <img src="../images/<?php echo $product->image;?>" height="426.67" width="640" alt="product" class="image"
                     style="width:100%" onmouseover="showBtnPrice(this)" onmouseleave="hideBtnPrice(this)"/>

                <div class="middleProduct" onmouseover="keepBtnPrice(this)" onmouseleave="hideThisPrice(this)">

                    <input placeholder="qty" type="number" id="flakeQty">

                    <button name="<?php echo $product->name; ?>"
                            price = "<?php echo $product->price; ?>"  onclick="addProductToCart(this)">
                        Add to Cart
                    </button>

                </div>
                <p><?php echo $product->name; ?></p>
                <p>Price $<?php echo $product->price; ?></p>

            </div>
            <?php
            $i = $i + 1;
        }
        ?>


    </div>
    <div id="rightDiv">
        <h2>Cart</h2>
        <button id="checkOut" onclick="invoice()">Check out</button>
    </div>
</main>


<!-- The Invoice -->
<div id="myModal" class="modal">

    <!-- Invoice content -->
    <div class="modal-content">
        <span class="close">&times;</span>
        <div id="invoicePlace">Invoice</div>
    </div>

</div>
<?php include_once "footer.php";
?>

</body>
</html>

