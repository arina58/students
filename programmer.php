<?php
    require_once 'class.php';
    require_once 'iProgrammer.php';

    class Programmer extends Human implements iProgrammer{
        private $langs = array();

        public function addLang($l){
            array_push($this->langs, $l);
        }
        public function getLangs(){
            return $this->langs;
        }
        public function display(){
            parent::display();
            echo '<h2>Список языков</h2>';
            foreach ($this->langs as $l){
                echo $l.'<br>';
            }
        }
    }
?>