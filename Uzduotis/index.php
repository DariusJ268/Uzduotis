<?php include "./Plant.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skirtingi augalai</title>
</head>

<body>
    <?php

    Plant::classInfo();
    // $plant = new Plant();
    // var_dump($plant);

    $plant1 = new Plant();
    $plant1->name = "Bananas";
    $plant1->latinName = "Musa acuminata";
    $plant1->perenial = true;
    $plant1->height = 400;
    $plant1->continents = ["Afrika", "Azija", "Australija", "Pietų Amerika", "Šiaurės Amerika"];
    $plant1->year = 5;

    var_dump($plant1);
    echo "<br>";

    $plant2 = new Plant();
    $plant2->name = "Begonija";
    $plant2->latinName = "Begonia cucullata";
    $plant2->perenial = false;
    $plant2->height = 50;
    $plant2->continents = ["Afrika", "Azija", "Australija", "Europa", "Pietų Amerika", "Šiaurės Amerika"];
    $plant2->year = 0.5;

    var_dump($plant2);
    echo "<br>";

    $plant3 = new Plant();
    $plant3->name = "Paprastasis ąžuolas";
    $plant3->latinName = "Quercus robur";
    $plant3->perenial = true;
    $plant3->height = 3000;
    $plant3->continents = ["Afrika", "Azija", "Europa", "Pietų Amerika", "Šiaurės Amerika"];
    $plant3->year = 300;

    var_dump($plant3);
    echo "<br>";

    $plant4 = new Plant();
    $plant4->name = "Briaunotasis sprogainis";
    $plant4->latinName = "Hura crepitans";
    $plant4->perenial = true;
    $plant4->height = 6000;
    $plant4->continents = ["Azija", "Pietų Amerika", "Šiaurės Amerika"];
    $plant4->year = 10;

    var_dump($plant4);
    echo "<br>";

    $plant5 = new Plant();
    $plant5->name = "";
    $plant5->latinName = "";
    $plant5->perenial = true;
    $plant5->height = 5;
    $plant5->continents = ["Afrika", "Azija", "Australija", "Europa", "Pietų Amerika", "Šiaurės Amerika"];
    $plant5->year = 5;

    var_dump($plant5);
    echo "<br>";

    $plant6 = new Plant("Obuolys", "Malus domestica", true, 450, ["Afrika", "Azija", "Australija", "Europa", "Pietų Amerika", "Šiaurės Amerika"], 10);
    var_dump($plant6);
    echo "<br>";

    $plant7 = new Plant("Karališkasis eukaliptas", "Eucalyptus regnans", true, 8000, ["Afrika", "Australija", "Pietų Amerika"], 100);
    var_dump($plant7);
    echo "<br>";

    $plant8 = new Plant("Tikrasis baobabas", "Adansonia digitata", true, 1700, ["Afrika"], 1000);
    var_dump($plant8);
    echo "<br>";

    $plant9 = new Plant("Smulkiavaisis fikusas", "Ficus microcarpa", true, 1500, ["Australija", "Azija"], 30);
    var_dump($plant9);
    echo "<br>";

    $plant10 = new Plant("Amazoninė viktorija", "Victoria amazonica", true, 750, ["Pietų Amerika"], 7);
    var_dump($plant10);
    echo "<br>";

    $plant1->intro();
    $plant3->intro();

    ?>
</body>

</html>