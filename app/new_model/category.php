<?php

    class CategoryModel {

        private $db;

        public function __construct($db){
            $this->db = $db;
        }

        // public function create_table(){
        //     $result = $this->db->query("CREATE TABLE IF NOT EXISTS category( 
        //         id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY, 
        //                 name VARCHAR(100) NOT NULL 
        //                 ) ENGINE=MyISAM
        //     ");
        // }

        public function get($id){
            $result = $this->db->query("SELECT * FROM category WHERE id=$id");
            return $result[0];
        }

        public function get_all(){
            $result = $this->db->query("SELECT * FROM category ORDER BY id");
            return $result;
        }
        
        public function delete($id){
            $result = $this->db->query("DELETE FROM category WHERE id = " . $id);
        }

        public function add($data){
            if($this->validate($data)){
                $result = $this->db->query("INSERT INTO category(name) VALUES('" . $data['name'] . "')");
                return true;
            }else{
                return false;
            }
        }

        public function edit($data){
            if($this->validate($data)){
                $result = $this->db->query("UPDATE category SET name = '".$data['name']."' WHERE id = " . $data['id']);
                return true;
            }else{
                return false;
            }
        }

        private function validate($data){
            if(strlen($data['name']) < 5){
                echo "Слишком короткое название";
                return false;
            }elseif(preg_match('/[^A-Za-zА-Яа-я\s]+/', $data['name'])){
                echo "Недопустимые символы";
                return false;
            }
            return true;
            }
}



?>