<?php

include "db_connect.php";

$id = $_POST['id'];

$query = "DELETE from products where id='$id';";

$result = mysqli_query($conn, $query);

if ($result > 0) {
    $message = "deletion successful";
    header("Location:../admin%20options/delete_item.php?message='$message'");
}
