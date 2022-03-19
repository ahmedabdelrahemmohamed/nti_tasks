<?php
     session_start()
?>
<!doctype html>
<html lang="en">
  <head>
    <title>supermaket</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <style>
     table{
         margin: 20px auto;
         width: 80%;
         color: green;
     }
     th{
           font-size: 20px !important;
           font-weight: bold;
           padding: 10px;
     }
     td{
         font-size: 16px;
         font-weight: bold;
         padding: 10px;
     }
     tr{
         border:2px solid green

     }
     h1{
         color: blue;
         text-align: center;
         margin-top: 100px;
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
            if(empty($_POST["city"])){
               $erorrs['city-rerror']="<div class='' style='color:red'>enter city</div>";
            }
            if(empty($_POST["number-product"])){
               $erorrs['number-product-rerror']="<div class='' style='color:red'>enter product</div>";
            }
            
            if(empty($erorrs)){
                $productinfo = '';
               
                for($x=0;$x<$_POST["number-product"];$x++){
                
                  $productinfo.='
                    <div class="row mb-3 ">
                    <div class="col-8 d-flex">
                   
                        <div class="form-group w-30 d-inline ml-4">
                          <input type="text" name="procuct-name'.$x.'" id="procuct-name'.$x.'" class="" placeholder="enter procuct name" aria-describedby="helpId" >
                        </div>
                        <div class="form-group w-30 d-inline ml-4">
                          <input type="number" name="procuct-price'.$x.'" id="procuct-price'.$x.'" class="" placeholder="enter procuct price" aria-describedby="helpId">
                        </div>
                        <div class="form-group w-30 d-inline ml-4">
                          <input type="number" name="procuct-quantity'.$x.'" id="procuct-quantity'.$x.'" class="" placeholder="enter procuct quantity" aria-describedby="helpId">
                        </div>
                        </div>
                       </div>
                    '; 
                }

                if(!((isset($_POST["procuct-name0"]))&& (isset($_POST['procuct-price0']))&&(isset($_POST['procuct-quantity0'])))){
                  $erorrs['product']= "<div class='text-center py-2' style='color:white;background-color:red;font-size:18px'> enter at less one product detalis</div>";
             }
             if(!empty($_POST['procuct-name0'])&&!empty($_POST['procuct-price0'])&&!empty($_POST['procuct-quantity0'])){
              $erorrs['product']="";
              $bill = "<h1>product bill details </h1>";
                $bill .= "<table  class='text-center w-100'> <tr> 
                <th>product name</th>
                <th>product price</th>
                <th>product quantity</th>
                <th>product total price</th> </tr>";
               
          $amount=0;
                for($x=0;$x<$_POST["number-product"];$x++){
                  if((!empty($_POST['procuct-name'.$x]))&&(!empty($_POST['procuct-price'.$x]))&&(!empty($_POST['procuct-quantity'.$x]))){
                    $count=$x+1;
                    $amount+=$_POST['procuct-quantity'.$x]*$_POST['procuct-price'.$x];
                    $bill .= '<tr>
                            <td>'.$_POST['procuct-name'.$x].'</td>
                            <td>'.$_POST['procuct-price'.$x].'</td>
                            <td>'.$_POST['procuct-quantity'.$x].'</td>
                            <td>'.$_POST['procuct-quantity'.$x]*$_POST['procuct-price'.$x].'</td>
                             </tr>';
                   
                  
                }
              }
             
                $bill .= "</table> ";
                if($amount<1000){
                  $discount=0;
                }
                if($amount<3000 && $amount>=1000){
                  $discount=.1;
                }
                if($amount<4500 && $amount>=3000){
                  $discount=.2;
                }
                if($amount>4500){
                  $discount=.3;
                }
                if($_POST["city"] == 'cairo'){
                  $Delivery = 0;
                }
                if($_POST["city"] == 'giza'){
                  $Delivery = 30;
                }
                if($_POST["city"] == 'Alex'){
                  $Delivery = 50;
                }
                if($_POST["city"] == 'others'){
                  $Delivery = 100;
                }

        $discount_amount = $amount * $discount;
        $total_amount= $amount - $discount_amount +  $Delivery;
               
              $bil= "<h1>total bill details </h1>
                  <table  class='text-center w-100'> <tr> 
              <th>name</th>
              <th>number product </th>
              <th>products price</th>
              <th>Delivery Fees</th> 
              <th>discount</th>
              <th>discount amount</th>
              <th>total price</th> </tr>
              <tr>
              <td>".$_POST['user-name']."</td>
                <td>".$count."</td>
                <td>".$Delivery."EG</td>
                <td>".$amount."EG</td>
                <td>".($discount*100)."%</td>
                <td>".$discount_amount."EG</td>
                <td>".$total_amount."EG</td>
              </tr>";
            }
          }
          
          }
        
       

      ?>
      <div class="container">
          <div class="row">
              <div class="col-9  mx-auto">
                 <form action="" method="POST">
                     <div class="form-group">
                       <label for="user-name"></label>
                       <input type="text" name="user-name" id="user-name" class="form-control" value='<?=(isset($_POST["user-name"]))?$_POST["user-name"]:''?>' placeholder="enter user name" aria-describedby="helpId">
                       <?php
                       if(isset($erorrs["user-rerror"])){
                              echo $erorrs['user-rerror'];
                       }
                       ?>
                     </div>
                     <div class="form-groupmb-0">
                         <select name="city" id="city" class=" w-100 py-2">
                             <option value="0">--- select your city ---</option>
                             <option value="cairo" <?php
                                if(isset($_POST["city"])){
                                  if($_POST["city"]=='cairo'){
                                    echo 'selected';
                                  }
                                }
                             ?> > cairo</option>
                             <option value="giza" <?php
                                if(isset($_POST["city"])){
                                  if($_POST["city"]=='giza'){
                                    echo 'selected';
                                  }
                                }
                             ?>>Giza</option>
                             <option value="Alex" <?php
                                if(isset($_POST["city"])){
                                  if($_POST["city"]=='Alex'){
                                    echo 'selected';
                                  }
                                }
                             ?>>Alex</option>
                             <option value="others" <?php
                                if(isset($_POST["city"])){
                                  if($_POST["city"]=='others'){
                                    echo 'selected';
                                  }}?>
                                >others</option>
                         </select>
                         <?php
                       if(isset($erorrs["city-rerror"])){
                              echo $erorrs['city-rerror'];
                       }
                       ?>
                     </div>
                     <div class="form-group">
                       <label for="number-product"></label>
                       <input type="number" name="number-product" id="number-product" class="form-control" value='<?=(isset($_POST["number-product"]))?$_POST["number-product"]:''?>' placeholder="enter number product" aria-describedby="helpId">
                       <?php
                       if(isset($erorrs["number-product-rerror"])){
                              echo $erorrs['number-product-rerror'];
                       }
                       ?>
                     </div>
                     <?=(isset($productinfo))?$productinfo:'';?>
                     <div class="form-group">
                       <button class="btn btn-primary w-100 ">click to enter details product</button>
                      </div>
                    
                 </form>
               
                <?=(isset($erorrs['product']))?$erorrs['product']:''?>
                <?=(isset($bill))?$bill:'';
                    if(isset($bil)){
                      echo $bil;
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