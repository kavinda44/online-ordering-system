<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Item</title>
    <link rel="stylesheet" href="../home/style.css" />
    <link rel="stylesheet" href="../login/login.css" />
    <link rel="stylesheet" href="add_item.css" />
</head>

<body class="admin_options add_item">
    <!-- BACKGORUND -->
    <div class="background">
        <img class="MrPC" src="../pictures/whiteLogo.png" alt="pc accessories background" />
    </div>
    <!-- HEADER -->
    <div class="header">
        <?php include '../home/header.php';?>
    </div>
    <!-- TITLE -->
    <div class="title">wELCOME</div>

    <div class="container">
        <ul class="options">
            <!-- OPTIONS -->
            <li class="add"><a href="#">add items</a></li>
            <li class="edit"><a href="edit_item.php">edit items</a></li>
            <li class="delete"><a href="delete_item.php">delete items</a></li>
        </ul>

        <form action="../database/db_insert.php" method="post" class="data_form" enctype="multipart/form-data">

            <!-- ITEM NAME -->
            <label for="name">item name</label> <br>
            <input type="text" id="name" name="name" required> <br /> <br /> <br>

            <!-- ITEM CATEGORY -->
            <label for="category">category</label> <br>
            <select name="category" id="category" required>
                <option value="">select a category</option>
                <option value="mouse">mouse</option>
                <option value="keyboard">keyboard</option>
                <option value="headset">headset</option>
                <option value="processor">processor</option>
                <option value="ram">ram</option>
                <option value="cpu_case">cpu case</option>
                <option value="laptop">laptop</option>
            </select> <br /> <br /> <br>

            <!-- ITEM PRICE-->
            <label for="price">item price</label> <br>
            <input type="number" id="price" name="price" placeholder="PRICE IN LKR" min="1" required> <br /> <br /> <br>

            <!-- ITEM QUANTITY-->
            <label for="quantity">quantity</label> <br>
            <input type="number" id="quantity" name="quantity" min="1" max="100" required> <br /> <br /> <br>

            <!-- ITEM DESCRIPTION-->
            <label for="description">description</label> <br>
            <textarea id="description" name="description" rows="10" cols="5" required></textarea> <br /> <br /> <br>

            <!-- ITEM IMAGE -->
            <label for="image">image</label> <br>
            <input type="file" name="image" id="image" required> <br>

            <?php if (isset($_GET['error'])) : ?>
                <p id="error"><?php echo $_GET['error'] ?></p>
            <?php endif ?>

            <!-- INSERT -->
            <input type="submit" value="INSERT" onclick="validate()"> <br>

            <!-- RESET -->
            <input type="RESET" value="RESET">

        </form>
    </div>
    <script src="../jQuery/jQuery.js"></script>
    <script>
        $(function() {
            $('.account').html('<img src="../pictures/userIcon.png" alt="account icon" /><span>log out</span>');
            $('.account').on('click', function() {
                if (window.confirm("Do you want to log out?")) {
                    window.location.href = "../login/login.php";
                }
            });
        });
    </script>
</body>

</html>