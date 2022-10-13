<?php
    require '../data-access/promotion.php';
    if(isset($_POST["edit"])){
        $obj = new promotion($_POST["id_promotion"], $_POST["nom"]);
        $obj->update();
    }
    header("location: ../presentation/promotion.php");

?>