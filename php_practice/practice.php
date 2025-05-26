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


    /* Make a script that takes a phone number, and returns the city it’s from */

    $areaCodes = [
        '314' => 'St Louis, MO',
        '415' => 'San Francisco, CA',
        '212' => 'New York City, NY',
        '213' => 'Los Angeles, CA',
        '206' => 'Seattle, WA',
        '312' => 'Chicago, IL',
        '305' => 'Miami, FL',
        '702' => 'Las Vegas, NV',
    ];

    function getCity($number, $areaCodes){
        $areaCode = substr($number, 0, 3);
        return $areaCodes[$areaCode];
    }

    $phoneNumbers = [
        '3142768144',
        '3059711717',
        '7027678469',
        '3129887021',
        '2128570871'
    ];

    foreach($phoneNumbers as $number){
        $city = getCity($number, $areaCodes);
        echo "phone number: ".$city."\n";
    }

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

    /* Calculate each fellow’s half birthday */

    $birthdays = [
        'Isabelle Cox' => 'September 7',
        'Zack Shoki' => 'September 20',
        'Alana Joy Morrison' => 'July 20',
        'Zaid Abuisba' => 'September 6',
        'Hamida Mohamed' => 'August 8',
    ];

    /* Magic 8 Ball */
    $answers = [
        'yes',
        'no',
        'without a doubt',
        'it is decidedly so',
        'you may rely on it',
        'dont count on it',
        'outlook not so good',
        'ask again later',
        'very doubtful'
    ];

    $question = readline("Ask the 8-ball your question: ");
    $answerIndex = array_rand($answers);
    $answer = $answers[$answerIndex];

    echo $answer;