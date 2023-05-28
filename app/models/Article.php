<?php
require_once 'database/DBConnect.php';
class Article{
    private $id;
    private $title;
    private $summary;
    private $category_id;
    private $category_name;
    public function __construct($id,$title,$summary,$category_id,$category_name)
    {
        $this->id=$id;
        $this->title=$title;
        $this->summary=$summary;
        $this->category_id=$category_id;
        $this->category_name = $category_name;
    }
    public function getId(){
        return $this->id;
    }
    public function setId($id){
        $this->id=$id;
    }
    public function getTitle(){
        return $this->title;
    }
    public function setTitle($title){
        $this->title=$title;
    }
    public function getSummary(){
        return $this->summary;
    }
    public function setSummary($summary){
        $this->summary=$summary;
    }
    public function getCategory_id(){
        return $this->category_id;
    }
    public function setCategory_id($category_id){
        $this->category_id=$category_id;
    }

    public function getCategory_name(){
        return $this->category_name;
    }
    public function setCategory_name($category_name){
        $this->category_name=$category_name;
    }
}