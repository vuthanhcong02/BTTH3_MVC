<?php
require_once 'app/models/Category.php';
class CategoryService{
    public function getAllCategory(){
        $database = new DatabaseConnection();
        $conn = $database->getConnection();
        if($conn){
            $sql="SELECT id,name FROM category";
            $stmt = $database->pdo($sql);
            $categories=[]; 
            while($row=$stmt->fetch()){
                $category = new Category($row['id'],$row['name']);
                $categories[] = $category;
            }    
        }
        return $categories;
    }
}