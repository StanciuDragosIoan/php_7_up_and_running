<?php



//example 1;


/*
    the spaceship operator is: <=>
*/

$games = ['Mass Effect', 'Super Mario Bros', 'Zelda', 'Fallout', 'Metal Gear'];
//sort($games); //sorts in alphabetical order

//rsort($games); //sorts in reverse alphabetical order


//sort in alphabetical order using usort() and the <=> operator
// usort($games, function($a, $b){
//     return $a <=> $b;
// });



//order by the string length (reverse a and b if reverse order needed)
//sort in reverse alphabetical order using usort() and the <=> operator
// usort($games, function($a, $b){
//     return $b <=> $a;
// });


// usort($games, function($a, $b){
//     var_dump('a: ' . $a, 'b: ', $b);
//     return strlen($a) <=> strlen($b);  
// });

/*
    the <=> operator returns -1/0 or 1 
        if $a < $b -->returns -1
        if $a = $b --> returns 0
        if $a > $b --> returns 1
    this is how it orders the items as well (in alphabetical order it compares the order of letters
    e.g M is before S so M < S -->returns -1)
*/


//var_dump($games);









//example 2;

class User
{
    protected $name;
    protected $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function name()
    {
        return $this->name;
    }

    public function age()
    {
        return $this->age;
    }
}



class UserCollection
{   
    protected $users;

    public function __construct(array $users)
    {
        $this->users = $users;
    }

    public function sortBy($method)
    {
        usort($this->users, function($userOne, $userTwo) use ($method){
            return $userOne->$method() <=> $userTwo->$method();
        });
    }

    public function users()
    {
        return $this->users;
    }
}


$collection = new UserCollection([
    new User('Jeff', 30),
    new User('Taylor', 29),
    new User('Jane', 50),
    new User('Susie', 10)
]);

// $collection->sortBy('name');
$collection->sortBy('age');

var_dump($collection->users());







