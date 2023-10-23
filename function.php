<?php

    function add ($x , $y){
        return $x + $y;
    }
    echo add(10 , 20);
    
    echo "<br>";

    function hello(){
        $user = "Bandar";
        
        if($user === "Bandar"){
            echo "Hello " . $user;
        }else{
            echo "Bye " . $user;
        }
    }

    hello();
?>