<?php 
    
    // static variables go exist beyond local variable 
    // life time and are similar to global varibles but 
    // don't share the same scope.
    
    //static variables can only be initialized with predetermine values
    function test()
    {
        static $count = 0;
        echo $count;
        $count++;
    }
    
    test();
    test();
    test();
?>
