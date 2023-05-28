<?php
require_once 'app/services/CategoryService.php';
class CategoryController{
    public function index(){
        $categoryService = new CategoryService();
        $categories = $categoryService->getAllCategory();
        return $categories;
    }
}