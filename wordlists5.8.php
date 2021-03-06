
<?php 
    $w1 = [
        'social' => 'общительный', 
        'shy' => 'стеснительный',
        'anxious' => 'тревожный'
    ];

    $w2 = [
        'social' => 'социальный',
        'shy' => 'робкий', 
        'made' => 'серьёзный'
    ];

    var_dump(array_merge_recursive($w1, $w2));



?>