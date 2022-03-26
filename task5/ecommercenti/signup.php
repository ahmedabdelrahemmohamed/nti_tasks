<?php
use app\helpers\Hash;
use app\models\User;
use app\requests\RegisterRequest;


     $title = 'signup';
    include_once "layout/header.php";
    include_once "layout/navbar.php";
    include_once "layout/breadcrumb.php";
  

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    
    $errors = [];
    $registerRequest = new RegisterRequest;
    $registerRequest->setEmail($_POST['email']);
    $registerRequest->emailValidation();
    $registerRequest->setPhone($_POST['phone']);
    $registerRequest->phoneValidation();
    $registerRequest->setPassword($_POST['password']);
    $registerRequest->passwordValidation();
    $registerRequest->setPassword_confirmation($_POST['password_confirmation']);
    $registerRequest->passwordConfirmationValidation();

    if(empty($registerRequest->errors())){
        // generate code
        $verificationCode =  rand(10000,99999);
        $hashedPassword = Hash::make($_POST['password']);
        // insert user data into database
        $user = new User;
        $result = $user->setF_name($_POST['first_name'])
        ->setL_name($_POST['last_name'])
        ->setEmail($_POST['email'])
        ->setPhone($_POST['phone'])
        ->setPassword($hashedPassword)
        ->setverifiction_code($verificationCode)
        ->create();
        if($result){
            echo "ok";
            // send email to user => (verification code)
            // header('check-code.php');
        }else{
            http_response_code(500);
            $errors['insert'] = 'Something went wrong';
            
        }
        
    }
    // validation
    // [
        // 'first_name'=>['required','string','between:3,32'],
        // 'last_name'=>['required','string','between:3,32'],
        // 'email'=>['required','regular-expression','unique,users,email'],
        // 'phone'=>['required','regular-expression','unique,users,phone'],
        // 'password'=>['required','regular-expression'],
        // 'password_confirmation'=>['required','confirmed'],
        // 'gender'=>['required','enum:m,f']
    // ]
   
}
    
?> 

		<!-- Breadcrumb Area End -->
        <div class="login-register-area ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-12 ml-auto mr-auto">
                        <div class="login-register-wrapper">
                            <div class="login-register-tab-list nav">
                               
                                <a data-toggle="tab" href="#lg2">
                                    <h4> register </h4>
                                </a>
                            </div>
                            <div class="tab-content">
                               
                                <div id="lg2" class="tab-pane active">
                                    <div class="login-form-container">
                                        <div class="login-register-form">
                                            <form  method="post">
                                                <input type="text" name="user-name" placeholder="Username">
                                                <input type="password" name="user-password" placeholder="Password">
                                                <input name="confirm-password" placeholder="confirm-password"type="password">
                                                <input name="user-email" placeholder="Email" type="email">
                                                <input name="phone" placeholder="phone" type="tel">
                                                <div class="button-box">
                                                    <button type="submit"><span>Register</span></button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer style Start -->
       <?php
         include_once "layout/footer.php";
       ?>