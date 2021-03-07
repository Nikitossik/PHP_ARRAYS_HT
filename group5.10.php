<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            margin:0;
            padding:0;
            font-family:sans-serif;
        }
        #wrap{
            margin:0 auto;
            max-width:1080px;
            position:relative;
            padding-top:5rem;
        }
        h2{
            font-size: 1.5em;
            text-align:center;
        }

        table{
            margin:30px auto;
        }

        table th{
            font-size:1.2em;
        }

        table td, table th{
            border:1px solid #000;
            padding:10px 20px;
            text-align:center;
        }

        table tr:nth-child(2n){
            background:#e8ffee;
        }

    </style>
</head>
<body>
<?php 
    $students = [
        [
        "name" => "Joan",
        "surname" => "Joanson",
        "year" => 2005,
        "marks" => [
                "PHP" => 1,
                "JS" => 1,
                "HTML" => 1 
                ] 
        ],
        [
        "name" => "Jack",
        "surname" => "Smith",
        "year" => 2003,
        "marks" => [
                "PHP" => 2,
                "JS" => 2,
                "HTML" => 2 
                ] 
        ],
        [
        "name" => "Martin",
        "surname" => "Miller",
        "year" => 2004,
        "marks" => [
                "PHP" => 4,
                "JS" => 3,
                "HTML" => 5 
                ] 
        ],
        [
            "name" => "Aaron",
            "surname" => "Smith",
            "year" => 2005,
            "marks" => [
                    "PHP" => 4,
                    "JS" => 4,
                    "HTML" => 5 
                    ] 
        ],
        [
            "name" => "Tertuliano",
            "surname" => "Afonso",
            "year" => 2003,
            "marks" => [
                    "PHP" => 5,
                    "JS" => 5,
                    "HTML" => 5 
                    ] 
        ]
];

//по именам, по фамилиям, по году рождения, по среднему баллу

function print_table($array){
    echo "<table cellpadding='0' cellspacing='0'><tr><th>Name</th><th>Surname</th><th>Year</th><th>Average mark</th></tr>";
    array_walk($array, 'print_tr');
    echo "</table>";
}

function print_tr($value){
    $aveg = avg($value['marks']);
    echo ("<tr><td>{$value['name']}</td><td>{$value['surname']}</td><td>{$value['year']}</td><td>{$aveg}</td></tr>");
}

function avg($val){
    return round(array_sum($val) / count($val), 2);
}

function cmp_name($a, $b){
    return strcmp($a['name'], $b['name']);
}

function cmp_surname($a, $b){
    return strcmp($a['surname'], $b['surname']);
}

function cmp_year($a, $b){
    return $a['year'] <=> $b['year'];
}

function cmp_avg($a, $b){
    return avg($a['marks']) <=> avg($b['marks']);
}

echo '<h2>Sorted by name</h2>';
uasort($students, 'cmp_name');
print_table($students);

echo '<h2>Sorted by surname</h2>';
uasort($students, 'cmp_surname');
print_table($students);

echo '<h2>Sorted by year</h2>';
uasort($students, 'cmp_year');
print_table($students);

echo '<h2>Sorted by average mark</h2>';
uasort($students, 'cmp_avg');
print_table($students);
?>
</body>
</html>