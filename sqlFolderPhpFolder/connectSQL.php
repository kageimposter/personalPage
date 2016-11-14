<!DOCTYPE html>
<html>
<body>
<?php
//For php comments can go in really easy stuff like this
#also comment
/* declare GLOBAL varibles with $, and use ; at the end of a line */
    $txt = "this is a string";
    $hold = 7;
    $t =8.9;
/* no need to declare the var with a specific command, just add a value, var name cant start with a number, names can only be alpha numeric and _, case sensitive*/
    echo "$hold plus $t equals $t"+"$hold <br>";
    function canister(){
        //these are local varibles which are wrapped inside of a function, thus they can only be accesed by the function
        $j = 4; $h = 13;
        //this will let global varibles be used
        global $hold, $t;
        $k = $t + $hold;
        echo $k, "<br>";
        //to update the GLOBAL vars directly use
        $GLOBALS['hold'] = 6;        
    }
    function repeat(){ 
        //after each run through a function, the local varibles will delete themselves, so use static to keep them
    static $a = 1;
    echo $a, "<br>";
    $a ++;}
    
    canister();
    repeat();
    repeat();
    echo $t + $hold;
    
    ?>
    </body>

</html>