<?php

    /* Figure out who should take the first turn in a board game */

    $players = [

        'Eva Jeliazkova',
        'Zaid Abuisba',
        'Isabelle Cox',
        'Alana Joy Morrison',
        'Zack Shoki',
        'Hamida Mohamed'

    ];

    $firstPlayerIndex = array_rand($players);
    $firstPlayer = $players[$firstPlayerIndex];

    echo "the first player is ".$firstPlayer;