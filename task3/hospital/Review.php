<?php

use LDAP\Result;

   session_start();
   
?>
<!doctype html>
<html lang="en">
  <head>
    <title>review</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <style>
      td,th{
          padding: 10px;
          text-transform: capitalize;
      }
      th{
          font-size: 20px;
          font-weight: bold;
          background-color: #333;
          color: white;
      }
      td:first-of-type{
        font-size: 20px;
          font-weight: bold;
          background-color: #333;
          color: white;
      }
      .error{
          color: white;
          background-color: readfile;

      }
  </style>
</head>
  <body>
  <?php 
   $bad=0;
   $good=3;
   $verygood = 5;
   $execllent = 10;
   
   if(isset($_POST['phone'])){
   $_SESSION['phone'] = $_POST['phone'];
   }
   if(empty($_SESSION['phone'])&&isset($_SESSION['phone'])){
       header('location:number.php');die;
   }
   
  

                $act='Result.php';
            
 ?>
      <div class="container">
          <div class="row mt-5"> 
              <div class="col-11 mx-auto">
            <form action="<?=$act?>" method="POST">
               <table border="1" class="text-center w-100">
                   <tr>
                       <th>question</th>
                       <th>bad</th>
                       <th>good</th>
                       <th>very good</th>
                       <th>execllent</th>
                    </tr>
                    <tr>
                        <td>Are you satisfied with the level of cleanliness?</td>
                        <td>
                            <input type="radio" name="clean" id="clean" value="<?=$bad?>">
                        </td>
                        <td>
                            <input type="radio" name="clean" id="clean" value="<?=$good?>">
                        </td>
                        <td>
                            <input type="radio" name="clean" id="clean" value="<?=$verygood?>">
                        </td>
                        <td>
                            <input type="radio" name="clean" id="clean" value="<?= $execllent?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Are you satisfied with the service prices?</td>
                        <td>
                            <input type="radio" name="service" id="service" value="<?=$bad?>">
                        </td>
                        <td>
                            <input type="radio" name="service" id="service" value="<?=$good?>">
                        </td>
                        <td>
                            <input type="radio" name="service" id="service" value="<?=$verygood?>">
                        </td>
                        <td>
                            <input type="radio" name="service" id="service" value="<?=$execllent?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Are you satisfied with the nursing service</td>
                        <td>
                            <input type="radio" name="nurse" id="nuse" value="<?=$bad?>">
                        </td>
                        <td>
                            <input type="radio" name="nurse" id="nuse" value="<?=$good?>">
                        </td>
                        <td>
                            <input type="radio" name="nurse" id="nuse" value="<?=$verygood?>">
                        </td>
                        <td>
                            <input type="radio" name="nurse" id="nuse" value="<?=$execllent?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Are you satisfied with the level of the doctor?</td>
                        <td>
                            <input type="radio" name="doctors" id="doctors" value="<?=$bad?>">
                        </td>
                        <td>
                            <input type="radio" name="doctors" id="doctors" value="<?=$good?>">
                        </td>
                        <td>
                            <input type="radio" name="doctors" id="doctors" value="<?=$verygood?>">
                        </td>
                        <td>
                            <input type="radio" name="doctors" id="doctors" value="<?=$execllent?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Are you satisfied with the calmness in the hospital?</td>
                        <td>
                            <input type="radio" name="qoate" id="qoate" value="<?=$bad?>">
                        </td>
                        <td>
                            <input type="radio" name="qoate" id="qoate" value="<?=$good?>">
                        </td>
                        <td>
                            <input type="radio" name="qoate" id="qoate" value="<?=$verygood?>">
                        </td>
                        <td>
                            <input type="radio" name="qoate" id="qoate" value="<?=$execllent?>">
                        </td>
                    </tr>
               </table>
               </table>
               <div class="form-group">
                       <button class="btn btn-primary w-100 mt-2">rasult</button>
                      </div>
            </form>
           <?php 
           if(isset($errors['emp'])){
               echo $errors['emp'];
           }
         ?>
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