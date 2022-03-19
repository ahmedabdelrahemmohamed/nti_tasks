<?php
   session_start();
   
?>
<!doctype html>
<html lang="en">
  <head>
    <title>bank</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        th,tr,td{
            padding: 10px;
            
        }
        th{
            background-color: #362f2f;
            color: white;
            font-weight: bold;
        }
        table{
            margin: 10px auto;
        }

    </style>
  </head>
  <body>
      <?php
            if($_POST){
                     $erorrs=[];
                     if(empty($_POST["user-name"])){
                        $erorrs['user-rerror']="<div class='' style='color:red'>enter your name</div>";
                     }
                     if(empty($_POST["loan"])){
                        $erorrs['loan-rerror']="<div class='' style='color:red'>enter loan</div>";
                     }
                     if(empty($_POST["years"])){
                        $erorrs['years-rerror']="<div class='' style='color:red'>enter years</div>";
                     }
                     
                     if(empty($erorrs)){
                       $name = $_POST["user-name"];
                       $loan = $_POST["loan"];
                       $years = $_POST["years"];
                      
                       if($years<3){
                             $interest = .1;    
                       }
                       if($years>=3){
                        $interest = .15;
                       }
                       $interestamount = $interest*$loan ;
                       $totalamount = $loan + $interestamount;
                        
                       $res= " <table border=1 class='text-center'>
                       <tr>
                           <th>name</th>
                           <th>loan</th>
                           <th>years</th>
                           <th>percentage interest </th>
                           <th> interest amount </th>
                           <th>total</th>
                       </tr>
                       <tr>
                           <td>$name</td>
                           <td>$loan</td>
                           <td>$years</td>
                           <td>".$interest*100 ."%</td>
                           <td>$interestamount</td>
                           <td>$totalamount</td>
                       </tr>
                   </table>";
                     }

                    }
      ?>
      <div class="container">
          <h1 class="text-center mt-3"> Calculate your loan </h1>
          <div class="row">
              <div class="col-4 offset-4">
                  <form action="" method="POST">
                      <div class="form-group mb-0">
                        <label for="user-name"></label>
                        <input type="text" name="user-name" id="user-name" value="<?= (isset($_POST["user-name"]))?$_POST["user-name"]:'' ?>" class="form-control" placeholder="enter your name" aria-describedby="helpId">
                        <?php
                           if(isset( $erorrs['user-rerror'])){
                               echo $erorrs['user-rerror'];
                           }
                        ?>
                      </div>
                      <div class="form-group mb-0">
                        <label for="loan"></label>
                        <input type="number" name="loan" id="loan" value="<?= (isset($_POST['loan']))?$_POST['loan']:'' ?>" class="form-control" placeholder="enter  loan you neended" aria-describedby="helpId">
                        <?php
                           if(isset( $erorrs['loan-rerror'])){
                               echo $erorrs['loan-rerror'];
                           }
                        ?>
                      </div>
                      <div class="form-group">
                        <label for="years"></label>
                        <input type="number" name="years" id="years" value="<?=(isset($_POST['years']))?$_POST['years']:''?>" class="form-control" placeholder="enter  numbers of years" aria-describedby="helpId">
                        <?php
                           if(isset( $erorrs['years-rerror'])){
                               echo $erorrs['years-rerror'];
                           }
                        ?>
                      </div>
                      <div class="form-group">
                       <button class="btn btn-primary w-100 ">rasult</button>
                      </div>
                  </form>
                 
              </div>
              <?php if(isset($res)){
                     echo $res;
                 }?>
          </div>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>