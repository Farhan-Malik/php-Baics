<?php 
    $title = "whiledowhile";
    include 'include/header.php' 
 
 ?>

    <h1>While Loop</h1>
    <?php
       $grade = 0;

       //Infinte loop 
       
       //while($grade < 10){
        
         //  echo '<p> I AM LESS THAN 10!</P>';
       //}
       
       while($grade < 10){
        echo '<p> I AM LESS THAN 10!';
        $grade++;
       }

       echo 'EXIT LOOP!';
    
    ?>

    <h2>Do-While Loop</h2>
    <?php 
       $grade = 0;
       do{
        echo '<p>I AM DO WHILE LOOP</P>';
        $grade++;
       }while($grade < 10); 
    
    
    ?>


<?php require 'includes/fotter.php' ?>



