<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../home/style.css" />
    <link rel="stylesheet" href="login.css" />
    <style>
        body{
            height: 100vh;
        }
    </style>
</head>
<!-- BACKGORUND -->
<div class="background">
    <img class="MrPC" src="../pictures/whiteLogo.png" alt="pc accessories background" />
</div>
<!-- HEADER -->
<div class="header">
    <?php include '../home/header.php';?>
</div>

<body class="admin_options login">

    <!-- TITLE -->
    <div class="title">login</div>
    <p class="message">login available for admins only</p>

    <!-- LOGIN FORM -->
    <form id="login_form" action="../admin%20options/add_item.php"       method="post">

        <!-- USERNAME -->
        <label for="username">username</label>
        <input type="text" id="username" name="username" required> <br /> <br /> <br>

        <!-- PASSWORD -->
        <label for="password">password</label>
        <input type="password" id="password" name="password" required> <br /> <br /> <br>

        <?php if(isset($_GET['error'])): ?>
            <p id="error"><?php echo $_GET['error']?></p>
        <?php endif ?>

        <!-- LOGIN BUTTON -->
        <input type="submit" id="login">

        <!-- RESET BUTTON -->
        <input type="reset" id="reset">
    </form>

    <script src="../jQuery/jQuery.js"></script>
    <script>
        $(function(){
            $('#username').on('click',function(){
                $('#error').html("");
            });

            $('#password').on('click',function(){
                $('#error').html("");
            });
        });
    </script>
</body>

</html>