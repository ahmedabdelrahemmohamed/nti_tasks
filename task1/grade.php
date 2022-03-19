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
      font-size: 20px;
      text-transform: capitalize;

   }
 </style>
   </head>
  <body>
      <?php
    if((!empty($_POST['numb1']))&&(!empty($_POST['numb2']))&&(!empty($_POST['numb3']))&&(!empty($_POST['numb4']))&&(!empty($_POST['numb5']))){
      $numb1 = $_POST['numb1'];
      $numb2= $_POST['numb2'];
      $numb3 = $_POST['numb3'];
      $numb4 = $_POST['numb3'];
      $numb5 = $_POST['numb3'];
     
      $grad = $numb1 +$numb2+$numb3+$numb4+$numb5;
      
        define('maxGrad',250);
        $gradpresent = ($grad/maxGrad) *100;
      
         if($gradpresent>=85&& $gradpresent<100){
           $targ="Excellent";
         }elseif($gradpresent>=75){
            $targ="very goog";

         }elseif($gradpresent>=65){
            $targ="good";

         }elseif($gradpresent>=50){
            $targ="accept";
         }elseif($gradpresent<50){
            $targ="fail";
         }else{
             $targ = "enter grad";
         }

        }     
      
      ?>

      <div class="container">
         <div class="row">
            <div class="col-12 forset-12 text-center">
               <h1>find max and min number</h1>
               <form action="" method="post">
                  <input type="number" name="numb1" placeholder="enter physics grad from 0 to 50 deg">
                  <input type="number" name="numb2" placeholder="enter chemistry grad from 0 to 50 deg">
                  <input type="number" name="numb3" placeholder="enter biology grad from 0 to 50 deg">
                  <input type="number" name="numb4" placeholder="enter moath grad from 0 to 50 deg">
                  <input type="number" name="numb5" placeholder="enter computer grad from 0 to 50 deg"><br>
                  <input type="submit" class="btn btn-primary" value="calc your present and estimate from 0 to 50 deg">
               </form>
               <div class="res">
               <?php
               if(isset($numb1)&&isset($numb2)&&isset($numb3)&&isset($numb4)&&isset($numb5)){
                if(($numb1>=0&&$numb1<=50)&&($numb2>=0&&$numb2<=50)&&($numb3>=0&&$numb3<=50)&&($numb4>=0&&$numb4<=50)&&($numb5>=0&&$numb5<=50)){
                        echo "your present is:" .$gradpresent."%"." "."your estimate:". $targ;
               }else{
                echo "enter grad";
            }
            }else{
                echo "enter grad";
            }  ?>
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