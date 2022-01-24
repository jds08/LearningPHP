<?php 
    // Functions separate sections of code that
    // perform a peticular task
    
    // Format:
    // Sunday May 2nd 2021
    function longdate($timestamp)
    {
        return date("l F jS Y", $timestamp);
    }
    
    //today's date
    echo longdate(time());
    echo "\n";
    // the date 17 days ago
    echo longdate(time() * 17 * 24 * 60 * 60);
    
    
    // local variables - are variables that are created 
    // within, and can be accessed only by, a function.
    /*
    function longdate($timestamp) // there is no return type ??
    {
        $temp =date("l F jS Y", $timestamp); // temp exist only within {}
        return "the return date is $temp";
    }
    */
    
    //  By default variables created within a function are local to 
    // that function, and variables created outside of any functions
    // can be accessed only by nom function code.
    
    // ex:
    
     
    
    
    
   
    
?>