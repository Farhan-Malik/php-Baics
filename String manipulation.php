<?php 
   
   $title = "String manipulation";
   include 'include/header.php' 
?>
 
    <?php 
        $phase1 = "student who came late ";
        $phase2 = "In class, stand with Rock";
        $name = "Farhan Malik ";
        echo $phase1 . ", named Tiffany, " . $phase2;
        echo '<br/>';
        echo '<hr/>';
        
        //string tranformation 
        echo 'Uppercase first letter: ' .ucfirst($name).'<br/>';
        echo 'Uppercase first letter of each word: ' . ucwords($name).'<br/>';  
        echo 'Upper case: '. strtoupper($name). '<br/>';
        echo 'Upper case: '. strtolower("THIS WAS ALL UPPER CASE"). '<br/>';
        echo '<hr/>';
        echo 'Repeat String: ' . str_repeat(' Farhan Malik ',10) . '<br/>';
        echo 'Repeat String: ' . strtoupper(str_repeat('a',10)) . '<br/>'; 
        echo 'Get a Substring: ' . substr($name, 0, 10). '<br/>';

        echo 'Find Character "F": ' . strchr($name, 'F').'<br/>';
        echo 'Find Character "r": ' . strchr($name, 'r').'<br/>';
        echo 'Find Character "s": ' . strchr($name, 's'). '<br/>';
        echo 'Find Character "M": ' . strchr($name, 'M').'<br/>';  
        
    ?>
    
    <?php require 'includes/fotter.php' ?>