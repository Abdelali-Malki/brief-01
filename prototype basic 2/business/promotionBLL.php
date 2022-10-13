<?php

require_once "../data-access/promotionDAL.php";

class PromotionBLL {

    public function getAllPromotions(){
        $promotionBLL = new PromotionDAL();

        return $promotionBLL->getAllPromotions();
    }

    public function addPromotion($promotion){
        $promotionBLL = new PromotionDAL ();

        return $promotionBLL->addPromotion($promotion);
    }

}

?>