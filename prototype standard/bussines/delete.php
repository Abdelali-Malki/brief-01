<?php
    require '../data-access/promotion.php';

    if(isset($_GET["delete_id"])){
        $obj = new promotion($_GET["delete_id"],Null);
        $obj->delete();
    }
    header("location: ../presentation/promotion.php");

?>

