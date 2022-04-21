<?php
if(isset($_POST['city_id'])){
    include_once './db.php';
    $city_id = $_POST['city_id'];
    $sql = "SELECT `id` FROM `cities` WHERE id='$city_id'";
    $result = $conn->query($sql);
    if($result->num_rows > 0){
        $delete_sql = "DELETE FROM `cities` WHERE id='$city_id'";
        $conn->query($delete_sql);
        header('Location: ../cities.php');
        exit();
    }
}