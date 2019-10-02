<?php

/*
    Scalar typehints (scalar types = primitive data types)
*/

//use strict types directive (this will not allow coercion anymore)
declare(strict_types=1);

//reference data types (complex types like arrays or objects) could be typehinted before
function setOption(array $options)
{

}

//now we can typehint primitives --INT
function setAge(int $age)
{
    var_dump($age);
}

//setAge('30');  //note that if I pass a string, it will coerce it into an integer

//bool
function setValue(bool $value)
{
    var_dump($value);
}

setValue(0);
