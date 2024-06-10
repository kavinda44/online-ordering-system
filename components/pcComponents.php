<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>PC Components</title>
  <link rel="stylesheet" href="../home/style.css" />
  <link rel="stylesheet" href="pcComponents.css" />
</head>

<body class="pcComponents">
  <!-- BACKGROUND -->
  <div class="background">
    <img class="MrPC" src="../pictures/Mr.PC_BG.png" alt="pc components background" />
    <img class="GameOn" src="../pictures/Game_On_BG.png" alt="pc components background" />
    <img class="Element02" src="../pictures/Element02_BG.png" alt="pc components background" />
    <img class="Element03" src="../pictures/Element03_BG.png" alt="pc components background" />
  </div>
  <!-- HEADER -->
  <div class="header">
    <?php include '../home/header.php';?>
  </div>
  <!-- TITLE -->
  <div class="title">components</div>
  <!-- CATEGORIES -->
  <div class="container">
    <div class="processors">processors</div>
    <div class="rams">rams</div>
    <div class="cpuCases">cpu cases</div>
  </div>
  <script src="../jQuery/jQuery.js"></script>
  <script>
    $(function() {
      $('.processors').on('click', function() {
        window.location.href = "/product/product.php?title=processors&category=processor";
      });
      $('.rams').on('click', function() {
        window.location.href = "/product/product.php?title=rams&category=ram";
      });
      $('.cpuCases').on('click', function() {
        window.location.href = "/product/product.php?title=cpu cases&category=cpu_case";
      });
    });
  </script>
</body>

</html>