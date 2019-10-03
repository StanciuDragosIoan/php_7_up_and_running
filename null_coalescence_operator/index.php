<?php

/*
    Null coalescence operator
*/



$_GET['name']  = 'Joe';


/*
    before we would do this: if $_GET['name] issset, grab it, else use the string 'nothing';
*/

// $name = isset($_GET['name']) ? $_GET['name'] : 'nothing';


//now we can use the coalescence operator ??
$name = $_GET['name'] ?? 'nothing';  //if name is set use it, else use 'nothing'

//$name2 = 'John Doe';

echo $name2 ?? 'Jeffrey Way ';

//var_dump($name);