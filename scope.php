<?php 
    $num = "outerVar"; // scope outside functions
    echo $num;
    // local scope
    function passNumber(){
        $num = "innerVar"; // num scope inside this function
        echo $num;
    }
    passNumber();
    
    //global scope - all your code is able to access it..
    ///global $red; 
    $red = "red";
    echo $red;
    // local scope
    function printColor(){
        global $red; // num scope inside this function
        echo $red;
    }
    printColor();
    echo $red;
    
    
    // convention 
    // make global variables uppercase & local variables lower case.
    
    
?>