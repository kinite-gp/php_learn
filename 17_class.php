<?php

class User {
    public $name;
    public $age;

    function getName($name) {
        $this->name = $name;
    }
    function getAge($age) {
        $this->age = $age;
    }
}