<?php

    /* Calculate each fellow’s half birthday */

    $birthdays = [
        'Isabelle Cox' => 'September 7',
        'Zack Shoki' => 'September 20',
        'Alana Joy Morrison' => 'July 20',
        'Zaid Abuisba' => 'September 6',
        'Hamida Mohamed' => 'August 8'
    ];

    foreach($birthdays as $name => $birthday){

        $fellowBirthday = DateTime::createFromFormat('F j', $birthday);

        $fellowHalfBirthday = clone $fellowBirthday;
        $fellowHalfBirthday->modify('+6 months');
        
        echo "Half Birthday: ".$fellowHalfBirthday->format('F j')."\n";
    }