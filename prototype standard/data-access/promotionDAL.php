<?php
require_once 'mysqlconnection.php';
require_once 'promotion.php';

class PromotionDAL extends Connection {
 
    public function addPromotion($promotion){

        $name = $promotion->getName();
        // Sql query
        $insertRow="INSERT INTO promotion (name) VALUES ('$name')";
                          
        // Execute query
        mysqli_query($this->Connect(), $insertRow);
    }

    public function getAllPromotions(){
        $sqlGetData = 'SELECT * FROM promotion';
        $result = mysqli_query($this->Connect(), $sqlGetData);
        $promotionsList = mysqli_fetch_all($result, MYSQLI_ASSOC);
 
        $promotions = array();

        foreach($promotionsList as $promotionList){
            $promotion = new Promotion();
            $promotion->setId($promotionList['id']);
            $promotion->setName($promotionList['name']);

            array_push($promotions, $promotion);  
        }
        return $promotions;
    }

    public function getPromotionById($id){
        $sqlGetData = "SELECT * FROM promotion WHERE id = $id";
        $result = mysqli_query($this->Connect(), $sqlGetData);
        $promotionList = mysqli_fetch_assoc($result);

        $promotion = new Promotion();
        $promotion->setId($promotionList['id']);
        $promotion->setName($promotionList['name']);

        return $promotion;
    }

    public function updatePromotion($id, $name){
        // Sql query
        $updateRow="UPDATE promotion SET name = '$name' WHERE id = $id";
                          
        // Execute query
        mysqli_query($this->Connect(), $updateRow);
    }

    public function deletePromotion($id){
        // Sql query
        $deleteRow="DELETE FROM promotion WHERE id = $id";
                          
        // Execute query
        mysqli_query($this->Connect(), $deleteRow);
    }

}