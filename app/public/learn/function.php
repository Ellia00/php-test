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
     * @param  int $in_stock
     * @param  string $element
     * @return void
     */
    function render_total(int $price, int $amount, int $in_stock, string $element)
    {

        // validera inkommande argument
        // ex är det ok med negetiva tal?
        // vilka html element ska kunna anges

        if ($price < 0 || $amount < 0) {
            return;
        }

        // Ny kontroll av $anount - värde mellan intervall_ is_orderable()
        // med ett inledande ! så är lokigen omvänd

        if (!is_orderable($amount, $in_stock)) {
            return;
        }

        // se till att följande html element är giltiga
        // en array med giltiga element
        $elements = ["p", "div", "h4"];
        if (!in_array($element, $elements)) {
            $element = "h1";
        }

        $total = calculate_total($price, $amount);

        echo "<$element>Kostnaden är $total</$element>";
    }

    // skapa en funktion som kontrollerar att ett värde finns mellan min o max    
    /**
     * is_orderable
     *
     * @param  int $x
     * @param  int $max
     * @return void
     */
    function is_orderable(int $x, int $max = 100)
    {
        // if ($x > 0 && $x < $max) {
        //     return true;
        // } else {
        //     return false;
        // }

        // one-liner
        return ($x > 0 && $x < $max);
    }


    // anropa funktionen med de argument som ska gälla
    render_total(5, 42, 7, "h2");

    // Skapa en funktion som presenterar en persons hela namn och ålder
    // ex Flisa Hedenhös,5år 
    // funktionen ska ta 3 parametrar, förnamn, efternamn och ålder
    // funktionen ska rendera resultatet som html

    /**
     * render_person
     *
     * @param  string $first_name
     * @param  string $last_name
     * @param  int $age
     * @param  string $html
     * @return void
     */
    function render_person(string $first_name, string $last_name, int $age, string $html)
    {
        $elements = ["p", "div", "span"];
        if (!in_array($html, $elements)) {
            $html = "h2";
        }

        echo "<$html>Personens namn är $first_name $last_name och är $age år gammal </$html>";

        if ($age > 22) {
            echo "Tjena gamling!";
        }
    }

    render_person("Flisa", "Hedenhös", 50, "img");



    // skapa en array med standard-språk
    $english = [
        "welcome" => "Hello, Welcome to this Application",
        "name" => "Please enter your first name",
        "reset" => "Reset",
        "save" => "Save"
    ];

    $swedish = [
        "welcome" => "Hej, Välkommen till denna Applikationen",
        "name" => "Ange förnamn",
        "reset" => "Reset",
        "save" => "Spara"
    ];
    $street = [
        "welcome" => "Tjeenare mannen",
        "name" => "Ditt förnamn kingen",
        "reset" => "Aj det blev fel",
        "save" => "YEet"
    ];
    // Skapa en array med giltiga språk
    $languages = [
        "en" => $english,
        "sw" => $swedish,
        "st" => $street
    ];


    // en variabel för aktuellt srpåk
    // skulle kunna sparas i en session
    // eller om man i applikationen först fått möjligheten att välja...
    // ...men nu bestämt såhär...


    $language = "sw";
    $language2 = "st"

    ?>

    <!-- ett exempel på hur man backed kan hantera olika språk för ex formulärfält -->
    
    <!-- <hr>
    <form action="#" method="post">

        <h2>Välkommen till Applikationen!</h2>
        <input type="text" name="first_name" placeholder="Ange förnamn!">
        <button type="reset">Reset</button>
        <button>Spara</button>
    </form> -->

    <hr>
    <form action="#" method="post">

        <h2><?= $languages[$language]["welcome"] ?></h2>
        <input type="text" name="first_name" placeholder="<?= $languages[$language]["name"] ?>">
        <button type="reset"><?= $languages[$language]["reset"] ?></button>
        <button><?= $languages[$language]["save"] ?></button>
    </form>

    <hr>
    <form action="#" method="post">

        <h2><?= $languages[$language2]["welcome"] ?></h2>
        <input type="text" name="first_name" placeholder="<?= $languages[$language2]["name"] ?>">
        <button type="reset"><?= $languages[$language2]["reset"] ?></button>
        <button><?= $languages[$language2]["save"] ?></button>
    </form>

    <?php
    include "_includes/footer.php";
    ?>

</body>

</html>