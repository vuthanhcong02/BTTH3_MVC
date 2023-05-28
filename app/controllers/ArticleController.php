<?php
require_once 'app/services/ArticleService.php';
require_once 'app/services/CategoryService.php';
require_once 'app/models/Article.php';
require_once 'app/models/Category.php';
class ArticleController{
    public function index(){
        $articleService = new ArticleService();
        $articles=$articleService->getAllArticle();
        return $articles;
    }
    public function add(){
        $title =$_POST['title'];
        $summary =$_POST['summary'];
        $category_id =$_POST['category_id'];
        $articleService = new ArticleService();
        $articleService->addArticle($title,$summary,$category_id);
        header('Location: index.php?app/controller=home&action=index');
    }
    public function del(){
        $id =$_GET['id'];
        $articleService = new ArticleService();
        $articleService->delArticle($id);
        header('Location: index.php?controller=home&action=index');
    }
    public function edit(){
        $id=$_GET['id'];
        $articleService = new ArticleService();
        $article = $articleService->editArticle($id);
        $categoryService =new CategoryService();
        $categories = $categoryService->getAllCategory();
        include 'app/views/article/edit.php';
    }
    public function update(){
        $id=$_POST['id'];
        $title =$_POST['title'];
        $summary =$_POST['summary'];
        $category_id =$_POST['category_id'];
        $articleService = new ArticleService();
        $articleService->updateArticle($id,$title,$summary,$category_id);
        header('Location: index.php?controller=home&action=index');
    }
}