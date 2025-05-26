<?php

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