<?php
require_once 'app/models/Category.php';
class CategoryService{
    public function getAllCategory(){
        $database = new DatabaseConnection();
        $conn = $database->getConnection();
        if($conn){
            $sql="SELECT id,name FROM category";
            $categories = $database->pdo($sql)->fetchAll();
            return $categories;
        }
    }
}