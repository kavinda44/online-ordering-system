<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>PC Accessories</title>
  <link rel="stylesheet" href="../home/style.css" />
  <link rel="stylesheet" href="pcAccessories.css" />
</head>

<body class="pcAccessories">
  <!-- HEADER -->
  <div class="header">
    <?php include '../home/header.php';?>
  </div>
  <!-- BACKGROUND -->
  <div class="background">
    <div class="background">
      <img class="MrPC" src="../pictures/Mr.PC_BG.png" alt="pc accessories background" />
      <img class="Champion" src="../pictures/Champion_BG.png" alt="pc accessories background" />
      <img class="WASD" src="../pictures/WASD_BG.png" alt="pc accessories background" />
      <img class="Element04" src="../pictures/Element04_BG.png" alt="pc accessories background" />
    </div>
  </div>
  <!-- TITLE -->
  <div class="title">accessories</div>
  <!-- CATEGORIES -->
  <div class="container">
    <div class="mouse">MICE</div>
    <div class="keyboard">keyboards</div>
    <div class="headset">headphones</div>
  </div>
  <script src="../jQuery/jQuery.js"></script>
  <script>
    $(function() {
      $('.mouse').on('click', function() {
        window.location.href = "/product/product.php?title=mice&category=mouse";
      });

      $('.keyboard').on('click', function() {
        window.location.href = "/product/product.php?title=keyboards&category=keyboard";
      });

      $('.headset').on('click', function() {
        window.location.href = "/product/product.php?title=headphones&category=headset";
      });
    });
  </script>
</body>

</html>