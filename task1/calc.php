<!doctype html>
<html lang="en">
  <head>
    <title>calculator</title>
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
      margin: 10px ;
      width: 60%;

   }
   .form-control{
       width: 40% !important;
       display: inline !important;

   }
   label{
       color: green;
       font-size: 18px;
       font-weight: bold;
       padding-right: 20px;
   }
 </style>
   </head>
  <body>
      <?php

if(!empty($_POST['numb1'])){
        
      $numb1 = $_POST['numb1'];
      $numb2 = $_POST['numb2'];
    switch($_POST['opt']){
        case 'sum': 
            $res = $numb1+  $numb2;
            break;
            case 'sub': 
             $res = $numb1- $numb2;
             break;
            case 'mult': 
            $res = $numb1*  $numb2;
            break;
            case 'divi': 
            $res = $numb1/  $numb2;
             break;
            case 'mod': 
            $res = $numb1%  $numb2;
            break;
            case 'power': 
                $res = $numb1**$numb2;
                break;
                default:
                echo "enter opration";
            
    }
   
       
        
    }
      ?>

      <div class="container">
         <div class="row">
            <div class="col-12 forset-12 ">
               <h1>calculator</h1>
               <form action="" method="post">
                  <input type="number" name="numb1" placeholder="enter number 1">
                  <input type="number" name="numb2" placeholder="enter number 2"><br>
                  <label for="opr">oprator</label>
                            <select name="opt" class="form-control" id="opr" >
                                <option value="-1">selelct oprator</option>
                                <option value="sum">sum</option>
                                <option value="sub">sub</option>
                                <option value="mult">mult</option>
                                <option value="divi">div</option>
                                <option value="mod">mod</option>
                                <option value="power">power</option>

                            </select>
                  <input type="submit" class="btn btn-primary" value="calc">
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