<?php
  namespace app\models;

use app\database\connection;
use app\database\contracts\crud;

  class products extends connection implements crud{
     private $id,$name_ar,$name_en,$status,$image,$price,$qountatity,$brand_id,$created_at,$details_en,$details_ar, $updated_at,$subcategory_id,$code;

    function create(){

    }
    function read(){

    }
    function update(){

    }
    function delete(){

    }
    public function newproduct(){
             return  "SELECT `id` `name_en``image``status``price` FROM `product` 
                   order by `created_at` DESC,`name_en`DESC";

    }

     /**
      * Get the value of id
      */ 
     public function getId()
     {
          return $this->id;
     }

     /**
      * Set the value of id
      *
      * @return  self
      */ 
     public function setId($id)
     {
          $this->id = $id;

          return $this;
     }

     /**
      * Get the value of name_ar
      */ 
     public function getName_ar()
     {
          return $this->name_ar;
     }

     /**
      * Set the value of name_ar
      *
      * @return  self
      */ 
     public function setName_ar($name_ar)
     {
          $this->name_ar = $name_ar;

          return $this;
     }

     /**
      * Get the value of name_en
      */ 
     public function getName_en()
     {
          return $this->name_en;
     }

     /**
      * Set the value of name_en
      *
      * @return  self
      */ 
     public function setName_en($name_en)
     {
          $this->name_en = $name_en;

          return $this;
     }

     /**
      * Get the value of status
      */ 
     public function getStatus()
     {
          return $this->status;
     }

     /**
      * Set the value of status
      *
      * @return  self
      */ 
     public function setStatus($status)
     {
          $this->status = $status;

          return $this;
     }

     /**
      * Get the value of image
      */ 
     public function getImage()
     {
          return $this->image;
     }

     /**
      * Set the value of image
      *
      * @return  self
      */ 
     public function setImage($image)
     {
          $this->image = $image;

          return $this;
     }

     /**
      * Get the value of price
      */ 
     public function getPrice()
     {
          return $this->price;
     }

     /**
      * Set the value of price
      *
      * @return  self
      */ 
     public function setPrice($price)
     {
          $this->price = $price;

          return $this;
     }

     /**
      * Get the value of qountatity
      */ 
     public function getQountatity()
     {
          return $this->qountatity;
     }

     /**
      * Set the value of qountatity
      *
      * @return  self
      */ 
     public function setQountatity($qountatity)
     {
          $this->qountatity = $qountatity;

          return $this;
     }

     /**
      * Get the value of brand_id
      */ 
     public function getBrand_id()
     {
          return $this->brand_id;
     }

     /**
      * Set the value of brand_id
      *
      * @return  self
      */ 
     public function setBrand_id($brand_id)
     {
          $this->brand_id = $brand_id;

          return $this;
     }

     /**
      * Get the value of created_at
      */ 
     public function getCreated_at()
     {
          return $this->created_at;
     }

     /**
      * Set the value of created_at
      *
      * @return  self
      */ 
     public function setCreated_at($created_at)
     {
          $this->created_at = $created_at;

          return $this;
     }

     /**
      * Get the value of details_en
      */ 
     public function getDetails_en()
     {
          return $this->details_en;
     }

     /**
      * Set the value of details_en
      *
      * @return  self
      */ 
     public function setDetails_en($details_en)
     {
          $this->details_en = $details_en;

          return $this;
     }

     /**
      * Get the value of details_ar
      */ 
     public function getDetails_ar()
     {
          return $this->details_ar;
     }

     /**
      * Set the value of details_ar
      *
      * @return  self
      */ 
     public function setDetails_ar($details_ar)
     {
          $this->details_ar = $details_ar;

          return $this;
     }

     /**
      * Get the value of updated_at
      */ 
     public function getUpdated_at()
     {
          return $this->updated_at;
     }

     /**
      * Set the value of updated_at
      *
      * @return  self
      */ 
     public function setUpdated_at($updated_at)
     {
          $this->updated_at = $updated_at;

          return $this;
     }

     /**
      * Get the value of subcategory_id
      */ 
     public function getSubcategory_id()
     {
          return $this->subcategory_id;
     }

     /**
      * Set the value of subcategory_id
      *
      * @return  self
      */ 
     public function setSubcategory_id($subcategory_id)
     {
          $this->subcategory_id = $subcategory_id;

          return $this;
     }

     /**
      * Get the value of code
      */ 
     public function getCode()
     {
          return $this->code;
     }

     /**
      * Set the value of code
      *
      * @return  self
      */ 
     public function setCode($code)
     {
          $this->code = $code;

          return $this;
     }
  }
?>