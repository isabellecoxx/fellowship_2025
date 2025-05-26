<?php

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