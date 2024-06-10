<?php
if (!empty($_POST['username'])) {
    //verifying username and password
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username != "admin" && $password != "root") {
        $em = "*INCORRECT USERNAME AND/OR PASSWORD";
        header("Location:../login/login.php?error=$em");
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../home/style.css" />
    <link rel="stylesheet" href="../login/login.css" />
    <link rel="stylesheet" href="add_item.css" />
    <link rel="stylesheet" href="dashboard.css" />
</head>

<body class="admin_options dashboard">
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