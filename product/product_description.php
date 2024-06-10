<?php
$id = $_GET['id'];

include "../database/db_connect.php";
$query = "SELECT * FROM products WHERE id=$id";
$result_set = mysqli_query($conn, $query);

if (mysqli_num_rows($result_set) > 0) {
    while ($row = mysqli_fetch_assoc($result_set)) {
        $name = $row['name'];
        $category = $row['category'];
        $price = $row['price'];
        $quantity = $row['quantity'];
        $description = $row['description'];
        $url = $row['url'];
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $name ?></title>
    <link rel="stylesheet" href="../home/style.css" />
    <link rel="stylesheet" href="product.css" />
    <link rel="stylesheet" href="product_description.css" />
</head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

<body class="product">

    <!-- BACKGROUND -->
    <div class="background">
        <img class="MrPC" src="../pictures/Mr.PC_BG.png" alt="background image" />
        <img class="GameOn" src="../pictures/Game_On_BG.png" alt="background image" />
        <img class="Element02" src="../pictures/Element02_BG.png" alt="background image" />
        <img class="Element03" src="../pictures/Element03_BG.png" alt="background image" />
    </div>

    <!-- HEADER -->
    <div class="header">
        <?php include '../home/header.php'; ?>
    </div>

    <!-- TITLE -->
    <div class="title"><?= $name ?></div>

    <!-- ITEM DETAILS -->
    <div class="item_details">
        <!-- IMAGE -->
        <div class="image" style="background-image: url('../uploads/<?= $url ?>');">item-image</div>

        <!-- CATEGORY -->
        <p class="category">CATEGORY: <?= $category ?></p>

        <!-- PRICE -->
        <p class="price">PRICE: LKR <?= $price ?></p>

        <!-- QUANTITY -->
        <p class="quantity"><?= $quantity ?> LEFT</p>

        <!-- ADD TO CART -->
        <div class="buttons">
            <i onclick="decrement('<?=$id?>')" class="bi bi-dash-lg"></i>
            <div id="<?=$id?>" class="quantity">
                0
            </div>
            <i onclick="increment('<?=$id?>','<?=$quantity?>')" class="bi bi-plus-lg"></i>
        </div>

        <!-- DESCRIPTION -->
        <div class="description">
            <p>DESCRIPTION <br> <br> </p>
            <pre><?= $description ?></pre>
        </div>
    </div>
    <script src="../jQuery/jQuery.js"></script>
    <script src="../home/script.js"></script>
    <script>
        element_id = "<?=$id?>" 
    </script>
    <script src="product_description.js"></script>
</body>

</html>