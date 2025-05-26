<?php
    /* Chess board */

    foreach(range(0,19) as $i){

        if($i % 2 == 0){
            echo "
                <span style='color: white; background-color: white;'>  l  </span>
            ";
        }
        else{
            echo"
            <span style='color: black; background-color: black;'>  l  </span>
            ";
        }

        if(in_array($i,[4, 9, 14])){
            echo"
            <div></div>
            ";
        }
    }