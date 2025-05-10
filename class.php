<?php
    class H{
        function sayHello(){
            echo "Hello";
        }
    }
    class Name{
        public $name;
        function __construct($name){
            $this->name=$name;
        }
        function sayName(){
            echo "$this->name";
        }
    }
    $h = new H();
    $h->sayHello();
    $obj = new Name("Alfaj");
    $obj->sayName();
?>