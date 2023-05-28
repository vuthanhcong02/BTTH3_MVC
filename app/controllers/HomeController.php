<?php
require_once 'app/controllers/ArticleController.php';
require_once 'app/controllers/CategoryController.php';
class HomeController{
    public function index(){
        $articleController = new ArticleController();
        $articles = $articleController->index();
        $categoryController = new CategoryController();
        $categories = $categoryController->index();
        include 'app/views/home/index.php';
    }
}