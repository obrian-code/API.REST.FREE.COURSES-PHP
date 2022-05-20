<?php

// SET Y GET VERFICAR Y ELIMINAR CARACTERES ESPECIALES

class NewCourses{

    private $id;
    private $name;
    private $description;
    private $coupon;
    private $days;
    private $url;
    private $idiom;
    private $category;
    private $url_img;
    private $rating;

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id =  $id;
    }

    public function getName(){
        return $this->name;
    }

    public function setName($name){
        $this->name =$name;
    }

    public function getDescription(){
        return $this->description;
    }

    public function setDescription($description){
        $this->description = $description;
    }

    public function getCoupon(){
        return $this->coupon;
    }

    public function setCoupon($coupon){
        $this->coupon = $coupon;
    }

    public function getDays(){
        return $this->days;
    }

    public function setDays($days){
        $this->days = $days;
    }

    public function getUrl(){
        return $this->url;
    }

    public function setUrl($url){
        $this->url = $url;
    }

    public function getIdiom(){
        return $this->idiom;
    }

    public function setIdiom($idiom){
        $this->idiom =$idiom;
    }

    public function getCategory(){
        return $this->category;
    }

    public function setCategory($category){
        $this->category =$category;
    }

    public function getUrl_img(){
        return $this->url_img;
    }

    public function setUrl_img($url_img){
        $this->url_img = $url_img;
    }
   
    public function getRating(){
        return $this->rating;
    }

    public function setRating($rating){
        $this->rating = $rating;
    }
}

