<?php
    header('Content-type: text/html; charset=utf-8');
    require_once 'programmer.php';

    $p1 = new Programmer('Иван', 'Иванов', 'Иванович');
    $p1->addLang('C++');
    $p1->addLang('PHP');
    $p1->addLang('JS');

    $p1->display();
?>