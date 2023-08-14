<?php require_once 'classes/getProducts.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/styles.css">
    <title>Product list</title>
</head>

<body>
    <form action="includes/delete.inc.php" method="post">
        <header>
            <nav>
                <h1>Product List</h1>
                <div class="buttons">
                    <button type="button" class="add-btn">
                        <a href="add.php">ADD</a>
                    </button>
                    <button class="delete-btn" id="delete-product-btn" name="deleteProduct">MASS DELETE</button>
                </div>
            </nav>
            <hr>
        </header>
        <main>
            <div class="product-container">
                <?php
                $result = new GetProduct();
                foreach ($result->getProduct() as $product) {
                    if ($product['product_type'] === 'DVD') {
                ?>
                        <div class="product">
                            <input class="delete-checkbox" type="checkbox" name="product_selected[]">
                            <div class="product-info">
                                <p>SKU: <?php echo $product["sku"] ?></p>
                                <p>Name: <?php echo $product["product_name"] ?></p>
                                <p>Price: $<?php echo $product["product_price"] ?></p>
                                <p>Size: <?php echo $product['product_size'] ?></p>
                            </div>
                        </div>

                    <?php
                    } elseif ($product['product_type'] === 'Furniture') {
                    ?>
                        <div class="product">
                            <input class="delete-checkbox" type="checkbox" name="product_selected[]">
                            <div class="product-info">
                                <p>SKU: <?php echo $product["sku"] ?></p>
                                <p>Name: <?php echo $product["product_name"] ?></p>
                                <p>Price: $<?php echo $product["product_price"] ?></p>
                                <p>Dimentions: <?php echo $product['product_dimensions'] ?></p>
                            </div>
                        </div>
                    <?php
                    } elseif ($product['product_type'] === 'Book') {
                    ?>
                        <div class="product">
                            <input class="delete-checkbox" type="checkbox" name="product_selected[]">
                            <div class="product-info">
                                <p>SKU: <?php echo $product["sku"] ?></p>
                                <p>Name: <?php echo $product["product_name"] ?></p>
                                <p>Price: $<?php echo $product["product_price"] ?></p>
                                <p>Weight: <?php echo $product['product_weight'] ?>kg</p>
                            </div>
                        </div>
                <?php
                    }
                }
                ?>
            </div>
        </main>
        <footer>
            <hr>
            <p>Scandiweb Test Assignment</p>
        </footer>
    </form>
</body>

</html>