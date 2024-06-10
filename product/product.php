<?php
$title = $_GET['title'];
$category = $_GET['category'];
?>

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?= $title ?></title>
  <link rel="stylesheet" href="../home/style.css" />
  <link rel="stylesheet" href="product.css" />
</head>

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
    <?php include '../home/header.php';?>
  </div>
  <!-- TITLE -->
  <div class="title"><?= $title ?></div>
  <!-- PRODUCTS -->
  <div class="container">
    <?php
    include "../database/db_connect.php";
    $query = "SELECT * FROM products WHERE category='$category'";
    $result_set = mysqli_query($conn, $query);

    if (mysqli_num_rows($result_set) > 0) {
      while ($row = mysqli_fetch_assoc($result_set)) {
    ?>
        <a href="product_description.php?id=<?= $row['id'] ?>">
          <div class="item">
            <div class="picture" style="background-image: url(../uploads/<?= $row['url'] ?>);">picture</div>
            <div class="name"><?= $row['name'] ?>
            </div>
            <div class="price">LKR <?= $row['price'] ?></div>
          </div>
        </a>
    <?php
      }
    }
    ?>
  </div>
  </div>
  <script src="../jQuery/jQuery.js"></script>
</body>

</html>