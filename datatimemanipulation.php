<?php 
    $title = "datetimemanipulation";
    include 'include/header.php' 
?>

    <h1>Date and time Manipulation</h1>

    <?php
       $datenow = getdate();
       echo "Today's Date: <br/>";
       echo $datenow['mday'] . '<br/>';
       echo $datenow['mon']. "<br/>"; 
       echo $datenow['year']. "<br/>";
     
       echo "Today's Date: ". $datenow['mon'] . '/' . $datenow['mday'] . '/'. 
       $datenow['year']
           
    ?> 

<?php require 'includes/fotter.php' ?>