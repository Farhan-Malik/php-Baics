<?php 
    $title = "Functions";
    include 'include/header.php' 

?>

    <h1>Functions</h1> 

    <?php 
          
          /*Definig a Functions*/
        
        function writeMessage(){
            echo "You are really a nice person, Have a nice time! <br/>";
        }  

         /* Calling a functions */
         writeMessage();

         echo "<hr/>"; 

         writeMessage();

         /* Functions with parameters*/
         
        function addFunction($num1, $num2){
            $sum = $num1 + $num2;
            $num = $num + 1; 
            echo "The sum of $num1 and $num2 is: $sum <br/>";
         }

        function changeNum(&$num){
            $num = $num + 10;
            // $num+= 10; 
        } 

        function returnProduct($nmu1, $num2){
            $prod = $num1 + $num2; 
            return $prod;
        } 

        $name = 'Farhan Malik';
           
        $num = 500;
        addFunction(10, 20);
        addFunction(10, $num);
        echo $num;
        addFunction('10',"50");

        changeNum($num);
        echo $num . '<br/>';

        $return_value = returnProduct(10, 200);
        echo $return_value . '<br/>';


    ?>

    

<?php require 'includes/fotter.php' ?>