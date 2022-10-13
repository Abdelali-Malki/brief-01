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

    public function getPromotionById($id){
        $promotionBLL = new PromotionDAL();

        return $promotionBLL->getPromotionById($id);
    }

    public function updatePromotion($id, $name){
        $promotionBLL = new PromotionDAL();

        return $promotionBLL->updatePromotion($id, $name);
    }

    public function deletePromotion($id){
        $promotionBLL = new PromotionDAL();

        return $promotionBLL->deletePromotion($id);
    }
}

?>