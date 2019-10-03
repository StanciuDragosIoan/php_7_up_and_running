<?php

/*
    anonymous classes were introduced with php 7  --> new class { }
*/

//e.g. 1


interface Logger
{
    public function log($message);
}


// class TerminalLogger implements Logger{

//     public function log($message)
//     {
//         var_dump($message);
//     }
// }


class Application
{
    protected $logger;

    public function setLogger(Logger $logger)
    {
        $this->logger = $logger;

        return $this;
    }

    public function action()
    {
        $this->logger->log('Doing things...');
    }
}

$app = new Application;

// $app->setLogger(new TerminalLogger);

$app->setLogger(new class implements Logger{
    public function log($data)
    {
        var_dump($data);
    }
});

$app->action();

/*
    before anonymous classes we would use a concrete class to implement the logger (in this case)

    however with anonymous classes, we can implement the Logger class as an anonymous class that 
    adheres to the interface

    see above how we implemented the anonymous class in the setLogger() method call of the app and
    we commented out the actual Logger class and the code still works
*/



//e.g. 2 (using anonymous classes for testing)

$user = Mockery:mock('User');  //Mockery is a testing framework

$user->shouldReceive('history')->andReturn(new class{

    public function billingHistory()
    {
        return 'active';
    }
})

/*
    in the example above we are mocking an API call to the billing service through an anonymous 
    class
*/




//e.g. 3 (transformer -> an object with a single method transform() )

// class BookTransformer
// {
//     public function transform()
//     {
//         return [];
//     }
// }

class Item
{
    public function __construct($transformer)
    {

    }
}

//$item = new Item(new BookTransformer);  //uncomment the BookTransformer class for this line

//or use anonymous class:
$item = new Item(new class{
    public function transform()
    {
        return [];
    }
});