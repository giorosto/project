<?php
    if(isset($_SESSION['admin']) && $_SESSION['admin'] == 0){
        echo 'only admin can judje me';
        exit();
    }
?>