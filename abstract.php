<?php

abstract class Person{

    protected $name;
    protected function myName(){
        $this->name= $newname;
    }
    abstract protected function personName($nm,$st);
}

class Newperson extends Person{

    public function personName($nm,$sr){
        echo "Hello $nm $sr";
    }
}
$obj = new Newperson();
$obj->personName("Monu", "Singh");
?>