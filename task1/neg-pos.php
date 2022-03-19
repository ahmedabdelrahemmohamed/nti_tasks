<!doctype html>
<html lang="en">
  <head>
    <title>negative</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 <style>
    input{
       padding: 10px 20px;
       width: 60%;
       margin: 10px ;

    }
    h1{
       color: green;
   }
   .res{
      background-color: green;
      color:white;
      font-weight: bold;
      padding: 10px;
      margin: 10px auto;
      width: 60%;

   }
 </style>
   </head>
  <body>
      <?php

if(!empty($_POST['numb1'])){
      $numb1 = $_POST['numb1'];
    
        if($numb1<0){
            $res="negative number";
        }elseif($numb1>0){
            $res="posative number";
        }else{
            $res = "this 0 number ";
        }
        
    }
      ?>

      <div class="container">
         <div class="row">
            <div class="col-12 forset-12 text-center">
               <h1>posative number</h1>
               <form action="" method="post">
                  <input type="number" name="numb1" placeholder="enter number 1">
                  <input type="submit" class="btn btn-primary" value="resault">
               </form>
               <div class="res">
               <?php
              if(isset($numb1)){
                        echo $res;
              }else{
                  echo "enter number";
              }
               ?>
               </div>
            </div>
         </div>
      </div>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>