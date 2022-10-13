<?php
    require '../data-access/promotion.php';

    if(isset($_POST["submit"])){
        $obj = new promotion(NULL, $_POST["nom"]);
        $obj->insert();
    }
    header("location: ../presentation/promotion.php");

?>