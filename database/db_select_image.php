<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Preview</title>
    <link rel="stylesheet" href="db_select_image.css">
</head>

<body>
    <a href="../admin%20options/add_item.php">&larr; GO BACK</a>
    <!-- BACKGORUND -->
    <div class="background">
        <img class="MrPC" src="../pictures/whiteLogo.png" alt="background-image" />
    </div>
    <p>THIS IS A PREVIEW OF THE UPLOADED IMAGE</p>
    <?php
    include "db_connect.php";
    if (isset($_GET['url'])) {
        $url = $_GET['url'];
        $query = "SELECT * FROM products where url='$url'";
    } elseif (isset($_GET['id'])) {
        $id = $_GET['id'];
        $query = "SELECT * FROM products where id='$id'";
    } else {
        $query = "SELECT * FROM products";
    }
    $result_set = mysqli_query($conn, $query);
    if (mysqli_num_rows($result_set) > 0) {
        while ($row = mysqli_fetch_assoc($result_set)) {
    ?>
            <div class="album">
                <p>Image Name: <?= $row['url'] ?></p><br>
                <img src="../uploads/<?= $row['url'] ?>" />
            </div>
    <?php
        }
    }
    ?>
</body>

</html>