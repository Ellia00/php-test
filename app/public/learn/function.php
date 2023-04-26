<?php

declare(strict_types=1);
$title = "Funktioner - Functions";
?>

<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <style>
        * {
            font-family: monospace;
        }
    </style>
</head>

<body>

    <!-- inlkudera sidhuvud -->
    <?php

    include "_includes/header.php";

    ?>

    <h1><?= $title ?></h1>

    <ul>
        <li>Använd beskrivande funktionsnamn</li>
        <li>Följ kodstandard för språket</li>
        <li>Validera eventuella parametrar|argument som finns i funktionen</li>
        <li>Använd flera funktioner - dela upp logik</li>
        <li>Dokumentera funktionen- vilka parametrar...</li>
    </ul>

    <?php

    // En funktion för att beräkna en kostnad



    /**
     * calculate_total
     *
     * @param  mixed $price
     * @param  mixed $amount
     * @return int
     */
    function calculate_total(int $price, int $amount): int
    {
        return $price * $amount;
    }

    // Använd funktionen, spara värdet i en ny variabel
    $total = calculate_total(7, 4);
    // Presentera resultatet i ett html block element
    echo "<div>Kostnaden är $total</div>";

    $total = calculate_total(3, 5);

    echo "<div>Kostnaden är $total</div>";


    /**
     * render_total
     *
     * @param  int $price
     * @param  int $amount
     * @param  string $element
     * @return void
     */
    function render_total(int $price, int $amount, string $element)
    {

        // validera inkommande argument
        // ex är det ok med negetiva tal?
        // vilka html element ska kunna anges

        if ($price < 0 || $amount < 0) {
            return;
        }

        // se till att följande html element är giltiga
        // en array med giltiga element
        $elements = ["p", "div", "h4"];
        if (!in_array($element, $elements)) {
            $element ="h1";
        }

        $total = calculate_total($price, $amount);

        echo "<$element>Kostnaden är $total</$element>";
    }

    render_total(5, 3, "h2");

    ?>

    <?php
    include "_includes/footer.php";
    ?>

</body>

</html>