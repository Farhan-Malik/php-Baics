<?php 
    $title = "switchstatement.php";
    include 'include/header.php' 

?>

    <h1>Switch Statement</h1>
    <?php 
    $grade = 'C';
    
    switch($grade){
        case 'A':
           echo '<h2 style="color: green">You ARE SUPERSTAR!</h2>';
           break;
        case 'B':
            echo '<h2 style ="color: blue">YOU DID WELL!</h2>';
            break;
        default:
            echo '<h2 style="color: red">YOU HAVE FAILED.....</h2>';
            break;   

    }

    ?>

<?php require 'includes/fotter.php' ?>