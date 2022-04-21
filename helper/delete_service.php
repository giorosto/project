<?php
if(isset($_POST['service_id'])){
    include_once './db.php';
    $service_id = $_POST['service_id'];
    $sql = "SELECT `id` FROM `services` WHERE id='$service_id'";
    $result = $conn->query($sql);
    if($result->num_rows > 0){
        $delete_sql = "DELETE FROM `services` WHERE id='$service_id'";
        $conn->query($delete_sql);
        header('Location: ../services.php');
        exit();
    }
}