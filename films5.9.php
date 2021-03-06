<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <title>Document</title>
    <style>
        body{
            margin:0;
            padding:0;
            font-family: 'Montserrat', sans-serif;     
        }

        #wrap{
            width:100%;
            max-width:1080px;
            margin:0 auto;
            min-height:100vh;
            padding-top: 5rem;
        }

        h2{
            text-align:center;
        }

        table{
            margin:20px auto;
        }

        table td, table th{
            padding:10px 20px;
            border:1px solid #000;
            text-align:center;
        }

        table tr:nth-child(2n){
            background:#E2DEFF;
        }

        table tr:nth-child(2n + 1){
            background:#DEFFE8;
        }

    </style>
</head>
<body>

<div id="wrap">
<?php
    function print_table($item, $key){
        echo "<tr><td>$key</td><td>{$item['director']}</td><td>{$item['year']}</td></tr>";
    }

    function cmp_surname($a, $b){
        $exploded_a = preg_split("/\s/",$a['director']);
        $exploded_b = preg_split("/\s/",$b['director']);
        return strcmp($exploded_a[count($exploded_a) - 1], $exploded_b[count($exploded_b) - 1]);
    }

    function cmp_year($a, $b){
        if ($a['year'] > $b['year']) return 1;
        elseif ($a['year'] == $b['year']) return 0;
        else return 0;
    }


    $films = [
        'Побег из Шоушенка' => [
            'year' => 1994,
            'director' => 'Фрэнк Дарабонт'
        ],
        'Матрица' => [
            'year' => 1999,
            'director' => 'Энди и Ларри Вачовски'
        ],
        'Назад в будущее' => [
            'year' => 1985,
            'director' => 'Роберт Земекис'
        ]
    ];
    ?>
    <h2>По названию</h2>
    <table cellpadding="0" cellspacing="0"><tr><th>Название</th><th>Режиссёр</th><th>Год выпуска</th></tr>
    <?php ksort($films); array_walk($films, "print_table"); ?>
    </table>
    <h2>По году</h2>
    <table cellpadding="0" cellspacing="0"><tr><th>Название</th><th>Режиссёр</th><th>Год выпуска</th></tr>
    <?php 
        uasort($films, "cmp_year"); 
        array_walk($films, "print_table"); 
    ?>
    </table>
    <h2>По фамилии режиссёра</h2>
    <table cellpadding="0" cellspacing="0"><tr><th>Название</th><th>Режиссёр</th><th>Год выпуска</th></tr>
    <?php 
        uasort($films, "cmp_surname"); 
        array_walk($films, "print_table"); 
    ?>
    </table>
    </div>
</body>
</html>

