<?php 
    $title = "index";
    include 'include/header.php'  

?>


<!-- Basic HTML --> 

    <h1>Hello-World-practice</h1>
    <br/>
    <?php 
          //Practising to HTML echo 
          echo 'Hello PHP!';
          echo '<br/>';
          echo 'Second line';          
    
    ?> 

    <?php 
       //Varibale or Bucket 

       $name = 'Farhan Malik';
       $age = '21';
       // echo Varibale
       echo '<br/>';
       echo $name;       
       echo '<h1>My Name is: '.$name.' <h1/>';
       echo '<h1>My Age Is: '.$age.' <h1/>';
       //Echo using double quotes and interpolation
       echo "<h2>My Name is: $name <h2/>";
    ?>
    <button type="button" class="btn btn-dark">CLICK ME!</button>
    <button type="button" class="btn btn-danger">PUSH ME!</button>
    <button type="button" class="btn btn-warning">Earn-Me</button>
    <a href="https://id.heroku.com/login" target="_blank" class="btn btn-info">Heruko.com</a> 
    <?php 

      require 'includes/fotter.php'
     
    ?>