<!doctype html>
<html lang="en">
  <head>
    <title>max</title>
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
      $numb2= $_POST['numb2'];
      $numb3 = $_POST['numb3'];
        $max = $numb1;
        $min = $numb1;
         if(($numb2 > $numb1) && ($numb2>$numb3)){
            $max=$numb2;
         }elseif(($numb2 < $numb1) && ($numb2<$numb3)){
            $min = $numb2;
         }
         if(($numb3 > $numb1) && ($numb3>$numb2)){
            $max=$numb3;
         }elseif(($numb3 < $numb1) && ($numb3<$numb2)){
            $min = $numb3;
         }
      }
      
      ?>

      <div class="container">
         <div class="row">
            <div class="col-12 forset-12 text-center">
               <h1>find max and min number</h1>
               <form action="" method="post">
                  <input type="number" name="numb1" placeholder="enter number 1">
                  <input type="number" name="numb2" placeholder="enter number 2">
                  <input type="number" name="numb3" placeholder="enter number 3"><br>
                  <input type="submit" class="btn btn-primary" value="find max and min">
               </form>
               <div class="res">
               <?php
               if(isset($numb1)&&isset($numb2)&&isset($numb3)){
                        echo "max= ".$max . "     "."min= ".$min;
               }else{
                  echo "enter numbres";
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