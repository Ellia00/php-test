<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Henrys 10 uppgifter</title>
</head>

<body>
    <H1>HENRYS UPPGIFTER</H1>

    <?php
    echo "<hr>";

    // 1. Skriv ett PHP-skript som använder en for-loop för att skriva ut siffrorna 1 till 10.
    for ($i = 0; $i < 10; $i++) {
        echo $i + 1;
    }
    echo "<hr>";

    // 2.Skriv ett PHP-skript som använder en while-loop för att skriva ut de jämna talen mellan 0 och 20.
    $a = 0;

    while ($a <= 20) {
        $a++;
        if ($a % 2 === 0) {
            echo "Nummer $a är jämnt <br>";
        }
    }
    echo "<hr>";
    // 3. Skriv ett PHP-skript som använder en do-while loop för att generera
    //  ett slumpmässigt nummer mellan 1 och 10 tills de anger nummer 5.

    do {
        $random_number = rand(0, 10);
        echo "$random_number <br>";
    } while ($random_number !== 5);

    echo "<hr>";

    // 4.Skriv ett PHP-skript som använder en foreach loop för att
    //  skriva ut nycklar och värdena för följande associativ array.
    $person = ["name" => "Bob", "age" => 25, "hobby" => "cooking", "hasDrivingLicence" => true];

    foreach ($person as $key => $value) {
        echo "$key is $value <br>";
    }
    echo "<hr>";

    // 5.Skriv ett PHP-skript som använder en nestlad for-loop
    //  för att skriva ut en multiplikationstabell för talen 1 till 10. T.ex
    echo "<table>";
    for ($i = 1; $i <= 10; $i++) {
        echo "<tr>";
        for ($j = 1; $j <= 10; $j++) {
            echo "<td>" . $i * $j;
        }
    }
    echo "</table>";
    echo "<hr>";

    // 6. Skriv ett PHP-skript för att skriva ut en Fibonacci-sekvens upp till ett givet nummer


    $limit = 100000000;

    $current = 1;
    $previous = 0;
    $total = 0;

    while ($current <= $limit) {

        echo $total . "<br>";

        $total = $current + $previous;

        $previous = $current;
        $current = $total;
    }

    echo "<hr>";


    // 7. Skriv ett PHP-skript som använder en foreach loop
    //  för att beräkna summan av värdena i en array av tal.

    $numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9];
    $total = 0;
    foreach ($numbers as $value) {
        $total += $value;
        echo $total . "<br>";
    }
    echo "<hr>";


    // 8. Skriv ett PHP-skript som använder en for-loop för att generera
    //  ett slumpmässigt lösenord som består av stora och små bokstäver och siffror.
    //  Anvnänd rand() för att generera ett slumpmässigt tal och använd chr() för att
    //  förvandra ett heltal till en karatkär enligt ascii tabellen.

    $password_length = 10;
    $password = "";

    for ($i = 0; $i < $password_length; $i++) {

        $lower_case = chr(rand(97, 122));
        $upper_case = chr(rand(65, 90));
        $number = rand(1, 9);

        $selector = rand(1, 3);

        if ($selector === 1) {
            $password .= $lower_case;
        } elseif ($selector === 2) {
            $password .= $upper_case;
        } else {
            $password .= $number;
        }
    }
    echo "Password is: n" . $password;
    echo "<hr>";

    // 9. Skriv ett PHP-skript som använder en while-loop för att skriva ut texten
    //  till låten "99 Bottles of Beer".

    for ($i = 99; $i > 1; $i--) {
        $yo = $i - 1;
        echo "<p>
        $i bottles of beer on the wall, $i bottles of beer.
        Take one down and pass it around, $yo  bottles of beer on the wall.
        </p> <br>";
    }
    echo "<p>
    1 bottle of beer on the wall, 1 bottle of beer.
    Take one down and pass it around, no more bottles of beer on the wall.
    </p>";

    echo "<br>";

    echo "<p>
    No more bottles of beer on the wall, no more bottles of beer.
    Go to the store and buy some more, 99 bottles of beer on the wall.
    </p>";

    echo "<hr>";

    // 10.Skriv ett PHP-skript som använder en for-each loop för att iterera genom en
    //  flerdimensionell array med siffror och beräkna summan av alla värden

    $array = [
        [1, 2, 3],
        [4, 5,],
        [6, 7, 8, 9],
    ];

    $added_array = 0;

    foreach ($array as $key => $value) {

        for ($i = 0; $i < count($array[$key]); $i++) {
            $added_array += $value[$i];
        }
    }
    echo $added_array;


    ?>
</body>

</html>