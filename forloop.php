<?php 
   $title = "forloop";
   include 'include/header.php' 

?>

    <h1>For Loops</h1>

    <?php
       //For Loops
       for($count = 0; $count < 10; $count++){
          echo '<p>Hello World</p>';
       }
       for($count = 0; $count < 10; $count++){
          echo " <p> The Count is: $count </p>";

       }


    ?>
<?php require 'includes/fotter.php' ?>