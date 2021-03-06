<?php 
    $people = ['Johnson' => 1984, 'Murrey' => 1965, 'Maygan' => 1999];

    echo "По ключам: \n";

    ksort($people);
    print_r($people);

    echo " Без сбрасывания ключей: \n";

    asort($people);
    print_r($people);

    echo "По значению: \n";

    sort($people);
    print_r($people);
?>