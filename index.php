<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 3</title>
</head>
<body>

    <?php

    $a = 1;

    echo "10 kolejnych liczb calkowitych poczawszy od 1: ";

    for($i = 1; $i <= 10; $i++) {
        echo $i . " ";
    }

    echo "<br>";

    echo "10 kolejnych liczb calkowitych poczawszy od 10 w kolejnosci malejacej: ";

    for($i = 10; $i >= 1; $i--) {
        echo $i . " ";
    }

    echo "<br>";

    $suma = 0;

    for($i = 1; $i <= 10; $i++) {
        $suma = $suma + $i;
    }

    echo "Suma kolejnych 10 liczb calkowitych poczawszy od 1 wynosi: " . $suma;

    echo "<br>";

    echo "10 kolejnych parzystych liczb calkowitych poczawszy od 2: ";

    for($i = 2; $i <= 20; $i = $i + 2) {
        echo $i . " ";
    }

    echo "<br>";

    $a = 12;
    $b = 500;
    $c = 0.08;
    $d = 0;

    for($i = 1; $i <= $a; $i++) {
        $d = $d + $b;
        $d = $d + ($d * $c);
    }

    echo "Kwota zgromadzona przez pracownika wynosi: " . $d . " zl";

    echo "<br>";

    $a = 5;
    $b = 10;
    $c = 0;

    for($i = 0; $i < 100; $i++) {
        $d = $a + $i * $b;
        $c = $c + $d;
    }

    echo "Suma 100 elementow ciagu arytmetycznego wynosi: " . $c;

    echo "<br>";

    $a = 10;
    $b = 0;

    for($i = 10; $i >= 1; $i--) {
        $b = $b + ($i * $i);
    }

    echo "Ilosc cegiel w piramidzie wynosi: " . $b;

    echo "<br>";

    $a = 20;
    $b = 5;
    $c = 2;
    $d = 0;
    $e = $a;

    for($i = 1; $i <= $b; $i++) {
        $d = $d + $e;
        $e = $e - $c;
    }

    echo "Ilosc cegiel w scianie wynosi: " . $d;

    echo "<br><br>";

    $a = 5;
    $b = $d * $a;

    echo "Waga sciany wynosi: " . $b . " kg";

    echo "<br>";

    $a = 20;
    $b = 5;
    $c = "+";

    if($c == "+") {
        $d = $a + $b;
        echo "Wynik dodawania wynosi: " . $d;
    }
    elseif($c == "-") {
        $d = $a - $b;
        echo "Wynik odejmowania wynosi: " . $d;
    }
    elseif($c == "*") {
        $d = $a * $b;
        echo "Wynik mnozenia wynosi: " . $d;
    }
    elseif($c == "/") {
        if($b != 0) {
            $d = $a / $b;
            echo "Wynik dzielenia wynosi: " . $d;
        }
        else {
            echo "Nie mozna dzielic przez 0.";
        }
    }
    else {
        echo "Nieprawidlowe dzialanie.";
    }

    echo "<br>";

    $a = 10;
    $b = 2;
    $c = 3;

    echo "Ciag arytmetyczny: ";

    for($i = 0; $i < $a; $i++) {
        $d = $b + $i * $c;
        echo $d . " ";
    }

    echo "<br>";

    $a = 5;
    $b = 3;
    $c = $a + $b;

    while($c != 0) {
        echo "Suma liczb wynosi: " . $c . "<br>";

        $a = -5;
        $b = 5;

        $c = $a + $b;
    }

    echo "Suma wynosi 0.";

    echo "<br>";

    $a = 5;
    $b = 1;

    for($i = 1; $i <= $a; $i++) {
        $b = $b * $i;
    }

    echo "Silnia liczby " . $a . " wynosi: " . $b;

    echo "<br>";

    $a = 5;
    $b = 2;

    echo "Ciag liczb: ";

    for($i = 1; $i <= $a; $i++) {
        echo $b . " ";
        $b = $b * $b;
    }

    echo "<br>";

    $a = 0;

    echo "Wylosowane liczby: ";

    for($i = 1; $i <= 10; $i++) {
        $b = rand(50, 100);
        echo $b . " ";
        $a = $a + $b;
    }

    $c = $a / 10;

    echo "<br>";
    echo "Suma wylosowanych liczb wynosi: " . $a;
    echo "<br>";
    echo "Srednia wylosowanych liczb wynosi: " . $c;

    ?>

</body>
</html>