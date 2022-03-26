<?php

    namespace app\models;

 use app\database\connection;

 use app\database\contracts\crud;
  include '../../vendor/autoload.php';
    class User extends connection implements crud {
        private $id,$f_name,$l_name,$email,$phone,$password,$verifiction_code,$email_verified_at,$image,$code_expiration,$ststus,$created_at,$updated_at,$gender;
    
   
       

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
         * Get the value of f_name
         */ 
        public function getF_name()
        {
                return $this->f_name;
        }

        /**
         * Set the value of f_name
         *
         * @return  self
         */ 
        public function setF_name($f_name)
        {
                $this->f_name = $f_name;

                return $this;
        }

        /**
         * Get the value of l_name
         */ 
        public function getL_name()
        {
                return $this->l_name;
        }

        /**
         * Set the value of l_name
         *
         * @return  self
         */ 
        public function setL_name($l_name)
        {
                $this->l_name = $l_name;

                return $this;
        }

        /**
         * Get the value of email
         */ 
        public function getEmail()
        {
                return $this->email;
        }

        /**
         * Set the value of email
         *
         * @return  self
         */ 
        public function setEmail($email)
        {
                $this->email = $email;

                return $this;
        }

        /**
         * Get the value of phone
         */ 
        public function getPhone()
        {
                return $this->phone;
        }

        /**
         * Set the value of phone
         *
         * @return  self
         */ 
        public function setPhone($phone)
        {
                $this->phone = $phone;

                return $this;
        }

        /**
         * Get the value of password
         */ 
        public function getPassword()
        {
                return $this->password;
        }

        /**
         * Set the value of password
         *
         * @return  self
         */ 
        public function setPassword($password)
        {
                $this->password = $password;

                return $this;
        }

        /**
         * Get the value of verifiction_code
         */ 
        public function getVerifiction_code()
        {
                return $this->verifiction_code;
        }

        /**
         * Set the value of verifiction_code
         *
         * @return  self
         */ 
        public function setVerifiction_code($verifiction_code)
        {
                $this->verifiction_code = $verifiction_code;

                return $this;
        }

        /**
         * Get the value of email_verified_at
         */ 
        public function getEmail_verified_at()
        {
                return $this->email_verified_at;
        }

        /**
         * Set the value of email_verified_at
         *
         * @return  self
         */ 
        public function setEmail_verified_at($email_verified_at)
        {
                $this->email_verified_at = $email_verified_at;

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
         * Get the value of code_expiration
         */ 
        public function getCode_expiration()
        {
                return $this->code_expiration;
        }

        /**
         * Set the value of code_expiration
         *
         * @return  self
         */ 
        public function setCode_expiration($code_expiration)
        {
                $this->code_expiration = $code_expiration;

                return $this;
        }

        /**
         * Get the value of ststus
         */ 
        public function getStstus()
        {
                return $this->ststus;
        }

        /**
         * Set the value of ststus
         *
         * @return  self
         */ 
        public function setStstus($ststus)
        {
                $this->ststus = $ststus;

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
         * Get the value of gender
         */ 
        public function getGender()
        {
                return $this->gender;
        }

        /**
         * Set the value of gender
         *
         * @return  self
         */ 
        public function setGender($gender)
        {
                $this->gender = $gender;

                return $this;
        }
        public function create(){
                $query = "INSERT INTO `user` (`first_name`,`last_name`,`email`,`phone`,`password`,`verification_code`) 
                VALUES ('{$this->first_name}','{$this->last_name}','{$this->email}','{$this->phone}','{$this->password}',{$this->verification_code}) ";
                return $this->runDML($query);
            }
            public function read(){
        
            }
            public function update(){
        
            }
            public function delete(){
                    
        
            }
        
            public function getUserByEmail()
            {
                $query = "SELECT * FROM `users` WHERE `email` = '{$this->email}'";
                return $this->runDQL($query);
            }
            public function getUserByPhone()
            {
                $query = "SELECT * FROM `users` WHERE `phone` = '{$this->phone}'";
                return $this->runDQL($query);
            }
    }
?>