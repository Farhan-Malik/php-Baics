<?php 
    $tite = "Array";
    include 'include/header.php' 

?>

    <h1>Arrays</h1>
    <?php 
       //a variable
       $num = 3;

       // an array
       // only one data types 
       $numbers = array(1,2,3,4,5,6,7,8,9,10,12,25,698,6965,47457,7775,142255,4554557,10);

       echo $numbers[5]; 
       echo "<p>$numbers[9]</p>";
       $size = count($numbers);
       echo "<p>Arrays Numbers is size: $size </p>"; 

       for($count = 0; $count < $size; $count++){
        echo "$numbers[$count]";
       } 

    ?>
<?php require 'includes/fotter.php' ?>