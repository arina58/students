<?php
    header('Content-type: text/html; charset=utf-8');
    require_once 'class.php';

    function loadStudents($group, $path){
        $file = nl2br(file_get_contents($path));
        $students = explode('<br />', $file);
        foreach($students as $s){
            $tmp = explode(';', $s);
            $surname = $tmp[0];
            $name = $tmp[1];
            $patr = $tmp[2];
            new Student($name, $surname, $patr, $group);
        }
    }
    $group1 = new Group(1, 'И-02', 2);

    loadStudents($group1, 'i02.txt');

    $d1 = new Discipline(1, 'j;sf');
    $d2 = new Discipline(2, 'j;sf');
    $d3 = new Discipline(3, 'j;sf');
    $d4 = new Discipline(4, 'j;sf');
    $d5 = new Discipline(5, 'j;sf');

    $group1->addDiscipline($d1);
    $group1->addDiscipline($d2);
    $group1->addDiscipline($d3);
    $group1->addDiscipline($d4);
    $group1->addDiscipline($d5);
    
    $group1->display();

?>