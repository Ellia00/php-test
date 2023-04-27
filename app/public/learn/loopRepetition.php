<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Repetition</h1>
</body>

</html>


<?php

for ($i = 0; $i < 10; $i++) {
    echo $i + 1;
}
echo "<hr>";

$words = ["Yo", "detta", "är", "en", "mening"];

for ($i = 0; $i < count($words); $i++) {
    echo $words[$i] . " ";
}
echo "<hr>";



$array_one = [1, 3, 5, 7, 9];
$array_two = [2, 4, 6, 5];
$length = count($array_one);

if (count($array_one) <= count($array_two)) {
    $length = count($array_one);
} else {
    $length = count($array_two);
}

for ($i = 0; $i < $length; $i++) {
    $total = $array_one[$i] + $array_two[$i];
    echo "<h1> $array_one[$i]+$array_two[$i] = $total</h1>" . " ";
}

echo "<hr>";

$array_of_arrays =
    [
        [1, 2, 3],
        [4, 5, 6],
        [7, 8, 9]
    ];
$total = 0;
for ($i = 0; $i < count($array_of_arrays); $i++) {
    // echo $array_of_arrays[$i][0];
    for ($j = 0; $j < count($array_of_arrays); $j++) {
        // echo $array_of_arrays[$i][$j];
        $total += $array_of_arrays[$i][$j];
        // echo $total;
        echo "<br>";
        echo "i= ", $i, " j= ", $j;
    }
}

foreach ($array_of_arrays as $row) {
    foreach ($row as $number) {
        // $total += $number
    }
}



// iteration 1 : i=0 k=0
// iteration 2 : i=0 k=1
// iteration 3 : i=0 k=2
// iteration 4 : i=1 k=0
// iteration 5 : i=1 k=1
// iteration 6 : i=1 k=2
// iteration 7 : i=2 k=0
// iteration 8 : i=2 k=1
// iteration 9 : i=2 k=2
// iteration 10 : i=0 k=0 Klar

// echo $total;
echo "<hr>";


$test_array = [1, 2, 3];
for ($i = 0; $i < count($array_of_arrays); $i++) {
    var_dump($array_of_arrays[$i]);
}


?>