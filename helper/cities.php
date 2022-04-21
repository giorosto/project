<?php
include_once './admin_check.php';
include_once './db.php';
if(isset($_POST['name'], $_POST['title'], $_POST['description'], $_FILES['image'])){
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
        $title = $_POST['title'];
        $description = $_POST['description'];
        $sql = "INSERT INTO `cities`(`name`, `title`, `description`, `img_url`) 
        VALUES ('$name','$title','$description','$file_name')";
        $conn->query($sql);
        echo "Success";
    }else{
        print_r($errors);
    }
} 


