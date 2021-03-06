<?php 
    $users1 = ["John" => "qwerty", "Nicole" => "asdf", "Mark" => "ww"];
    $users2 = ["Joan" => "1234", "Mark" => "poiu", "Nicole" => "ggg"];
    $merged = array_merge_recursive($users1, $users2);
    $differences = array_diff_key($users1, $users2) + array_diff_key($users2, $users1);

    var_dump($differences);
    var_dump( array_diff_key($merged, $differences));

?>