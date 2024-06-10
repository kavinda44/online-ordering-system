<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Item</title>
    <link rel="stylesheet" href="../home/style.css" />
    <link rel="stylesheet" href="../login/login.css" />
    <link rel="stylesheet" href="add_item.css" />
    <link rel="stylesheet" href="edit_item.css" />
    <link rel="stylesheet" href="delete_item.css" />
</head>

<body class="admin_options delete_item">
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
            <li class="add"><a href="add_item.php">add items</a></li>
            <li class="edit"><a href="edit_item.php">edit items</a></li>
            <li class="delete"><a href="#">delete items</a></li>
        </ul>

        <ul class="instructions">
            <h4>INSTRUCTIONS</h4>
            <li>All available products are displayed in the following table </li><br>
            <li>You can view products from a specific category if you wish to </li><br>
            <li>Note down the product ID of the product you want to delete from the table </li><br>
            <li>Enter the product ID int product ID field and click delete</li><br>
        </ul>
        <!-- TO VIEW AVAILABLE DATA -->
        <form action="delete_item.php" method="post" class="data_form" enctype="multipart/form-data">

            <!-- ITEM CATEGORY -->
            <label for="search_category">retrieve data from</label> <br>
            <select name="search_category" id="search_category" required>
                <option value="mouse">mouse</option>
                <option value="keyboard">keyboard</option>
                <option value="headset">headset</option>
                <option value="processor">processor</option>
                <option value="ram">ram</option>
                <option value="cpu_case">cpu case</option>
                <option value="laptop">laptop</option>
            </select>

            <!-- REFRESH BUTTON -->
            <input type="submit" value="REFRESH"> <br>

            <!-- ITEM TABLE -->
            <div class="table_container">
                <table class="item_table">
                    <tr class="table_header">
                        <th>ID</th>
                        <th>NAME</th>
                        <th>price</th>
                        <th>qty</th>
                        <th>description</th>
                        <th>image</th>
                    </tr>
                    <?php
                    include "../database/db_connect.php";
                    if (empty($_POST['search_category'])) {
                        $query = "SELECT * FROM products";
                    } else {
                        $search_category = $_POST['search_category'];
                        $query = "SELECT * FROM products where category='$search_category'";
                    }
                    $result_set = mysqli_query($conn, $query);
                    if (mysqli_num_rows($result_set) > 0) {
                        while ($row = mysqli_fetch_assoc($result_set)) {
                    ?>
                            <tr>
                                <td class="item_id"><?= $row['id'] ?></td>
                                <td class="item_name"><?= $row['name'] ?></td>
                                <td class="item_price"><?= $row['price'] ?></td>
                                <td class="item_quantity"><?= $row['quantity'] ?></td>
                                <td class="item_description"><pre><?= $row['description'] ?></pre></td>
                                <td class="item_image" style="background-image: url('../uploads/<?= $row['url'] ?>');"></td>
                            </tr>
                    <?php
                        }
                    }
                    ?>
                </table>
            </div>
        </form> <br> <br>

        <!-- TO DELETE DATA -->
        <form action="../database/db_delete.php" method="post" class="data_form" enctype="multipart/form-data">

            <!-- ITEM ID -->
            <label for="name">item id</label> <br>
            <input type="number" id="id" name="id" required> <br /> <br /> <br>

            <?php if (isset($_GET['message'])) : ?>
                <p id="delete_message"><?php echo $_GET['message'] ?></p>
            <?php endif ?>

            <!-- DELETE -->
            <input type="submit" value="DELETE"> <br>

            <!-- RESET -->
            <input type=" RESET" value="RESET">

        </form>
    </div>
    <script src="../jQuery/jQuery.js"></script>
    <script>
        $(function() {
            $('.account').html('<img src="../pictures/userIcon.png" alt="account icon" /><span>log out</span>');
            $('.account').on('click', function() {
                if (window.confirm("Do you want to log out?")) {
                    window.location.href = "/login/login.php";
                }
            });
        });
    </script>
</body>

</html>