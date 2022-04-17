<?php
abstract class Human{
    private $name;
    private $surname;
    private $patronymic;

    public function __construct($s, $n, $p){
        $this->name = $n;
        $this->surname = $s;
        $this->patronymic = $p;
    }

    public function display(){
        echo sprintf('%s %s %s<br>',  $this->surname, $this->name, $this->patronymic);
    }
}

class Student extends Human{
    private $group;
    
    public function __construct($s, $n, $p, $g){
        parent::__construct($s, $n, $p);
        $this->group = $g;
        $this->group->addStudent($this);
    }

    public function display(){
        parent::display();
        echo $this->group->getTitle().'<br>';
    }

}

class Group{
    private $id;
    private $title;
    private $course;
    private $student = array();
    private $discipline = array();

    public function __construct($i, $t, $c){
        $this->id = $i;
        $this->title = $t;
        $this->course = $c;
    }

    public function addStudent($student){
        array_push($this->student, $student);
    }

    public function addDiscipline($discipline){
        array_push($this->discipline, $discipline);
    }

    public function display(){
        echo '<h1> Группа '. $this->title.'</h1>';
        foreach ($this->student as $s){
            $s->display();
        }
        foreach ($this->discipline as $s){
            $s->display();
        }
    }

    public function getTitle(){
        return $this->title;
    }
}

class Discipline{
    private $title;
    private $id;

    public function __construct($i, $t){
        $this->id = $i;
        $this->title = $t;
    }  

    public function getTitle(){
        return $this->title;
    }
}
?>