<?php


// 1.
for ($i=1; $i < 11; $i++) { 
    echo $i.",";
};
echo "<br>";


// 2.
$number = 0;
// while ($number <= 20) {
    //     echo "This is number: ".$number."<br>";
    //     $number += 2;
    // };
    
    
    while ($number <= 20) {
        if ($number %2 == 0) {
            echo $number.",";
        }
        $number++;
    }
    echo "<br>";
    
    
    // 3 Skriv ett PHP-skript som använder en do-while loop
    //  för att generera att slumpmässigt nummer mellan 1 och 10 tills de anger nummer 5.
    $random = 0;
    do {
        $random = rand(0,10);
        echo "Number is ".$random."<br>";
    } while ($random !== 5);
    
    echo "<br>";
    
    // 4. Skriv ett PHP-skript som använder en foreach loop för att skriva ut nycklar och värdena för följande associativ array.
    
    $person = [ "name" => "Bob",
    "age" => 25,
    "hobby" => "cooking",
    "hasDrivingLicence" => true];
    
    foreach ($person as $key => $value) {
        echo "The ".$key." is " .$value."<br>";
    }
    
    
    echo "<br>";

    // 5.
    for ($i=1; $i <=10 ; $i++) { 
        for ($k=1; $k <=10 ; $k++) { 
            echo "Number is ".$i*$k;
            echo "<br>";
        };
        echo "<br>";
};

// 5b.

// echo"<table>";
// for ($i=-5; $i <= 5; $i++) { 
//     echo"<tr>";
//     for ($k=1; $k <= 10 ; $k++) { 
//         echo"<td>".$i*$k."</td>";
//         // echo "Number is ".$i*$k;
//         // echo "<br>";
//     }
//     // echo "<br>";
// }

// 5.c Schack

echo"<table>";
for ($i=1; $i <= 8; $i++) { 
    echo"<tr>";
    for ($k=1; $k <=8 ; $k++) { 
        if (($k+$i)%2 ==0) {
            echo"<td>"."B"."</td>";
        }
        else { 
            echo"<td>"."W"."</td>";
        }
    }
    echo"</tr>";
}
echo"</table>";
echo "<br>";


// 7. Skriv ett PHP-skript som använder en foreach loop för att beräkna summan av värdena i en array av tal.
$numbers = [1,2,3,4,5,6,7,8,9];
$total = 0;
foreach ($numbers as $key => $value) {
    $total += $value;
    // $total = $key+$total;
    // echo $numbers[$key];

}
echo $total;


?>