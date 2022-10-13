<?php

require_once "../business/promotionBLL.php";
    
if(isset($_GET['id'])){
    $id = $_GET['id'];

$promotionBAL = new promotionBLL();
$promotionBAL->deletePromotion($id);
header('Location: index.php');
}

?>