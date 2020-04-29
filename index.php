<?php
    require ('MenuNode.php');

    $menuMain = new MenuNode(1, data1);
    $menuGender = new MenuNode(2, data2, $menuMain);
    $menuAge = new MenuNode(3,data3, $menuMain);


print_r($menuMain->next(3)->data);


