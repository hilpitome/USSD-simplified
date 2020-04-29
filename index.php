<?php
    require ('MenuNode.php');

    $data1 = "Main Menu".PHP_EOL
        ."1) Gender".PHP_EOL
        ."2) Age".PHP_EOL;

    $data2 ="Gender".PHP_EOL
        ."1) M ".PHP_EOL
        ."2) F".PHP_EOL;

    $data3 ="Age".PHP_EOL
        ."1) Below 18 ".PHP_EOL
        ."2) Above 18".PHP_EOL;



$menuGender = new MenuNode(2, $data2, [], $mainMenu, null);
$menuAge = new MenuNode(3, $data3, [], $mainMenu, null);
$mainMenu = new MenuNode(1, $data1, [$menuAge, $menuGender], null);


print_r($mainMenu->childMenuNodes[1]->data);


