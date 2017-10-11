<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> </title>
</head>
<body>
   <?php
    $beautiful ='Rajshahi';
    $cities =array('Dhaka', 'Rajshahi', 'Khulna', 'Barishal');
    ?>

  <?php if($beautiful== 'Rajshahi') : ?></php>
     <h1>Most beautiful city is Rajshahi</h1>
     <?php else : ?>
     <h1>We don't know</h1>
     <?php endif; ?>
          
      
    <?php
       if($beautiful== 'Rajshahi'){
       echo'<h1>Most beautiful city is    Rajshahi</h1>';
     } 
    else {
    echo '<h1>We don\'t know</h1>';
    }
    
    echo  '<h1>Second city is '.$cities[1].'</h1>';
    if($cities[3] == 'Dhaka') {
        
    }else{
        
    }
    
     ?>
      
</body>
</html>


<?php
    $city='Dhaka or city';
    echo '<h1>the most beatiful city of bangladesh ' .$city.'</h1>';
    ?>
      