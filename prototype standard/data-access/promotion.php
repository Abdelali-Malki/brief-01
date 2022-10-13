<?php
    class promotion{
        private $servername = "localhost";
        private $username = "root";
        private $password = "";
        private $db = "gestiondespromotions_v1";
        private $conn;

        function __construct($id_promotion,$nom){
            $this->id_promotion = $id_promotion;
            $this->nom = $nom;
            $this->conn = new mysqli($this->servername,$this->username,$this->password,$this->db);
        }

        function insert(){
            $addpromo = "INSERT INTO promotion(nom) VALUES('$this->nom')";
            $this->conn->query($addpromo);
        }

           
        function update(){
            $update = "UPDATE promotion SET nom = '$this->nom' WHERE id_promotion = $this->id_promotion";
            $this->conn->query($update);
        
        }


        function delete(){
            $delete = "DELETE FROM promotion WHERE id_promotion = $this->id_promotion ";
            $this->conn->query($delete);
        
        }

        
       

        

      }
?>