<?php

    /* List the LACRM employees in alphabetical order */

    $employees = [

        'Eva Jeliazkova',
        'Zaid Abuisba',
        'Isabelle Cox',
        'Alana Joy Morrison',
        'Zack Shoki',
        'Hamida Mohamed'

    ];

    // Normal Sort
    sort($employees);

    foreach($employees as $in){
        echo $in."\n";
    }

    // Reverse Sort
    rsort($employees);

    foreach($employees as $in){
        echo $in."\n";
    }