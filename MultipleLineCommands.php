<?php 
    $author = "Garfield";
    
    echo "Once upon a time there was a cat named $author.";
    
    // Multiple line sequence 
    
    $author = "Felix";
    // here document 
    echo <<<_END
    In a not so distant galaxy our hero $author
    In a not so distant galaxy our hero $author
    In a not so distant galaxy our hero $author
    _END;
    
    // multiple string variable assingment 
    
    $out = <<<_END
            The Sky is blue
            The Sky is blue
            The Sky is blue
    _END;
    echo $out;
    
    
    // PHP is a lossly tyed language 
    $number = 123456*1;
    echo substr($number,0,2);

?>