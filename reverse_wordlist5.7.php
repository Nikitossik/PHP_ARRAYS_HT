<?php 
    $wordlist = [
        'sociable' => ['общительный', 'социальный', 'дружелюбный'],
        'anxious' => 'тревожный',
        'selfish' => ['корысный', 'эгоистичный']
    ];

    foreach ($wordlist as $key => $value){
        if (is_array($value)){
            foreach ($value as $word) $copy[$word][] = $key;
        }
        else $copy[$value] = $key;
    }

    var_dump($copy);

?>