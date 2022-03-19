<?php
     session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Result</title>
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
          font-size: 18px;
          font-weight: bold;
          background-color: #333;
          color: white;
      }
      td:first-of-type{
        font-size: 18px;
          font-weight: bold;
          background-color: #333;
          color: white;
      }
      td{
          font-size: 18px;
          font-weight: bold;
      }
      .mes{
        text-align: center;
    font-size: 18px;
    font-weight: bold;
    text-transform: capitalize;
    padding: 10px;
      }
      h1{
        text-align: center;
        text-transform: capitalize;
      }
  </style>
</head>
  <body>
      <?php
      if(empty($_POST)){
        header('location:Review.php');die;
      }else{
        switch ($_POST['clean']){
              case 0:
                 $clean='bad';
                 $clean_val= 0;
              break;
              case 3:
                $clean='good';
                $clean_val= 3;
             break;
             case 5:
                $clean='VeryGoog';
                $clean_val= 5;
             break;
             case 10:
                $clean='Execllent';
                $clean_val= 10;
             break;
             default:
             header('Review.php');
        }
        switch ($_POST['service']){
            case 0:
               $service='bad';
               $service_val= 0;
            break;
            case 3:
              $service='good';
              $service_val= 3;
           break;
           case 5:
              $service='VeryGoog';
              $service_val= 5;
           break;
           case 10:
              $service='Execllent';
              $service_val= 10;
           break;
           default:
             header('Review.php');
      }
      switch ($_POST['nurse']){
        case 0:
           $nurse='bad';
           $nurse_val= 0;
        break;
        case 3:
          $nurse='good';
          $nurse_val= 3;
       break;
       case 5:
          $nurse='VeryGoog';
          $nurse_val= 5;
       break;
       case 10:
          $nurse='Execllent';
          $nurse_val= 10;
       break;
       default:
         header('Review.php');
  }
  switch ($_POST['doctors']){
    case 0:
       $doctors='bad';
       $doctors_val= 0;
    break;
    case 3:
      $doctors='good';
      $doctors_val= 3;
   break;
   case 5:
      $doctors='VeryGoog';
      $doctors_val= 5;
   break;
   case 10:
      $doctors='Execllent';
      $doctors_val= 10;
   break;
   default:
     header('Review.php');
}
switch ($_POST['qoate']){
    case 0:
       $qoate='bad';
       $qoate_val= 0;
    break;
    case 3:
      $qoate='good';
      $qoate_val= 3;
   break;
   case 5:
      $qoate='VeryGoog';
      $qoate_val= 5;
   break;
   case 10:
      $qoate='Execllent';
      $qoate_val= 10;
   break;
   default:
     header('Review.php');
}
 $result= $clean_val + $service_val + $nurse_val + $doctors_val + $qoate_val ;
   if( $result<25 ){
       $totalrate = 'bad';
       $message = "<div class='mes' style='background-color: red;color:white'>We will call you later on this phone :{$_SESSION['phone']}</div>";
   }else{
    $totalrate ='good';
    $message = "<div class='mes' style='background-color: green; color:#ccc;font-size:18px' >thank you</div>";
   }
}

          
      ?>
      <div class="container">
          <div class="row mt-5 mt-5">
              <div class="col-8 mx-auto">
                  <h1>result total review</h1>
              <table border="1" class="text-center w-100">
                   <tr>
                       <th>question</th>
                       <th>Rate</th>
                   </tr>
                   <tr>
                       <td>Are you satisfied with the level of cleanliness?</td>
                       <td>
                           <?=$clean?>
                       </td>
                   </tr>
                   <tr>
                       <td>Are you satisfied with the service prices?</td>
                       <td><?=$service?></td>
                   </tr>
                   <tr>
                       <td>Are you satisfied with the nursing service</td>
                       <td><?=$nurse?></td>
                   </tr>
                   <tr>
                       <td>Are you satisfied with the level of the doctor?</td>
                       <td><?=$doctors?></td>
                   </tr>
                   <tr>
                       <td>Are you satisfied with the calmness in the hospital?</td>
                       <td><?=$qoate?></td>
                   </tr>
                   <td>total rate of hospital</td>
                   <td> <?=$totalrate?></td>
              </table>
              <?=$message?>
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