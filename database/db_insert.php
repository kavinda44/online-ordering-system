<?php

include "db_connect.php";

$name = $_POST['name'];
$category = $_POST['category'];
$price = $_POST['price'];
$quantity = $_POST['quantity'];
$description = $_POST['description'];

//Obtaining necessary info regarding the image
$img_name = $_FILES['image']['name'];
$img_size = $_FILES['image']['size'];
$tmp_name = $_FILES['image']['tmp_name'];
$error = $_FILES['image']['error'];

if($error === 0){
    //setting a size limit
    if($img_size>1048576){
        $em = "*File is too large";
        echo "<script>window.location.href='../admin%20options/add_item.php?error=$em';</script>";
    }
    else{
        //validating the image extension
        $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
        $img_ex_lc = strtolower($img_ex);
        $allowed_exs = array("jpg", "jpeg", "png");

        if(in_array($img_ex_lc,$allowed_exs)){
            $new_img_name = uniqid("IMG-",true).".".$img_ex_lc;
            $img_upload_path = '../uploads/'.$new_img_name;
            move_uploaded_file($tmp_name, $img_upload_path);
            
            $query = "INSERT INTO products(name, category, price, quantity, description, url) VALUES ('$name','$category','$price','$quantity','$description','$new_img_name')";
            
            $result = mysqli_query($conn,$query);
    
            if($result>0){
                echo "<script>window.location.href='db_select_image.php?url=$new_img_name';</script>";
            }
        }
        else{
            $em = "*file is not an image";
            echo "<script>window.location.href='../admin%20options/add_item.php?error=$em';</script>";
        }
    }
}
else{
    $em = "*An error occured...";
    echo "<script>window.location.href='../admin%20options/add_item.php?error=$em';</script>";
}
?>