<?php

/*
    we can typehint return values
*/


//how we would do it before:
class User{

}

function getUser() 
{
   // return new User(); //we can replace this with return [];
  // return [];
}

// var_dump(getUser());

//now we can typehint return types by adding : and the type after the function name
function getUser2() : User{
    //return []; //won't work as we typehinted the return type above 
    return new User();
}

// var_dump(getUser2());



//Mock implementation
interface someInterface
{
    public function getUser() : User;
}

class SomeClass implements someInterface
{
    public function getUser() : getUser{
        return new User();
     
    }
}

/*
    Note in the exemple above if we do return []; instead of return new User, it will not work
    but the error will be thrown only at runtime (so only when instantiating SomeClass and
    callign its method)
*/
