<?php
require_once  'app/models/Article.php';
require_once 'app/services/CategoryService.php';
class ArticleService{
    public function getAllArticle(){
        $database= new DatabaseConnection();
        $conn = $database->getConnection();
        if($conn){
            $sql="SELECT 
            article.id,
            article.title,
            article.summary,
            article.category_id,
            category.name as name
         FROM article INNER JOIN category ON article.category_id=category.id ORDER BY id DESC LIMIT 6";
          $stmt=$database->pdo($sql);
        $articles=[]; 
        while($row=$stmt->fetch()){
            $article = new Article($row['id'],$row['title'],$row['summary'],$row['category_id'],$row['name']);
            $articles[] = $article;
        }
        return $articles;
        }
       
    }
    public function addArticle($title,$summary,$category_id){
        $database = new DatabaseConnection();
        $conn = $database->getConnection();
        if($conn){
            $sql = "INSERT INTO article(title,summary,category_id) VALUES(:title,:summary,:category_id)";
            $database->pdo($sql,['title'=>$title,'summary'=>$summary,'category_id'=>$category_id]);
        }
    }
    public function delArticle($id){
        $database = new DatabaseConnection();
        $conn = $database->getConnection();
        if($conn){
            $sql = "DELETE FROM article WHERE id=:id";
            $database->pdo($sql,['id'=>$id]);
        }
       
    }
    public function editArticle($id)
    {
        $database = new DatabaseConnection();
        $conn = $database->getConnection();
        if ($conn) {
            $sql = "SELECT 
                article.id,
                article.title,
                article.summary,
                article.category_id,
                category.name as name
                FROM article INNER JOIN category ON article.category_id=category.id WHERE article.id=:id";
            $stmt = $database->pdo($sql, ['id' => $id]);
            $article = []; // Mảng để lưu các đối tượng Article
    
            if ($row = $stmt->fetch()) {
                $temp = new Article($row['id'], $row['title'], $row['summary'], $row['category_id'], $row['name']);
                $article[] = $temp;
            }
            
            return $article;
        }
    }
    
    public function updateArticle($id,$title,$summary,$category_id){
        $database = new DatabaseConnection();
        $conn = $database->getConnection();
        if($conn){
            $sql = "UPDATE article SET title=:title,summary=:summary,category_id=:category_id WHERE id=:id";
            $database->pdo($sql,['title'=>$title,'summary'=>$summary,'category_id'=>$category_id,'id'=>$id]);
        }
    }
}