<?php
include_once './admin_check.php';
include_once './db.php';
if(isset($_POST['name'], $_POST['description'], $_FILES['image'])){
    $errors= array();
    $file_name = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];
    $file_tmp = $_FILES['image']['tmp_name'];
    
    if($file_size > 2097152){
        $errors[]='File size must be excately 2 MB';
    }
    
    if(empty($errors)==true){
        move_uploaded_file($file_tmp,"../uploads/".$file_name);
        $name = $_POST['name'];
        $description = $_POST['description'];
        $sql = "INSERT INTO `services`(`title`, `description`, `image_url`) 
        VALUES ('$name','$description','$file_name')";
        $conn->query($sql);
        echo "Success";
        header('Location: ../index.php');
    }else{
        print_r($errors);
    }
} 


