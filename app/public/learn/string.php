<?php
// en variabel deklareras med inledande $

$name = "Yo Mama";

echo $name;

//  variablers namn skrivs som snake_case i PHP: små bokstäver a-z, understreck mellan orddelar
// snake_case
// kebab-case
// camelCase
// PascalCase

// ett förnamn
$first_name = "Mojo";
$fname = "Svoosh";

$last_name = "Borgkvist";

// kontrollera vilken datatyp som en variabel har
// gettype
echo "<br>";
echo gettype($first_name);
echo "<br>";

// strängar slås ihop med en punkt
echo "Variabeln med namnet: <b>$last_name</b>, har datatypen: " . gettype($last_name);

// en variable med namnet comment

$comment = "PHP är ju kul";

echo "<br>";

// hur många tecken har variabeln - strlen

$number_of_characters = strlen($comment);
echo "Kommentaren <i>$comment</i> har $number_of_characters tecken";

// uppgift
// för att validera en variabel kan olika strängmetoder användas
// gör något vettigt med följande metoder
// 1. ta bort eventuella inledande mellanslag med trim
// 2. räkna ord med str_word_count
// 3. repetera en sträng med str_repeat
// 4. ersätt ett ord i en mening med str_replace


// 1.
echo "<br>";
echo "<br>";

$space = "    Yo";
echo "1.".trim($space);


// 2.
echo "<br>";
$word_count = str_word_count($comment);
echo "2. Antalet ord i <i>$comment</i> är $word_count ";


// 3.
echo "<br>";
$triple = "This should be written three times <br>";
echo"3.". str_repeat($triple,3);

// 4.
echo "<br>";
$replace =" this word should be replaced : yo";
echo"4.". str_replace("yo","yeehaaw",$replace);

// 5.
echo "<br>";
echo "<br>";
$message = "ALLT ÄR BARA EN STOR KONSPIRATION";

// funkar ej med svenska bokstäver
echo strtolower($message);
?>