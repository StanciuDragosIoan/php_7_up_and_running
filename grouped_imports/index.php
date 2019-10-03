<?php

require 'vendor/autoload.php';

//multiple imports before php7

// use App\Person;
// use App\Animal;

//multiple imports iwth php 7
use App\{   
    
    Person, 
    
    Animal,

    Foo\Bar\Baz
};
 
//use App\Foo\Bar\Baz

var_dump(new Animal());
var_dump(new Person());