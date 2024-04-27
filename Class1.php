<?php
include "Class2.php";
include "Trait.php";



class Class1 extends Class2{
    use firstTrait;
    //use firstTrait2;
    
    public function __construct($a)
    {
        parent::__construct($a);
        $this->aviFunction($a);
        $this->anotherFunction($a);
    }

    // public function aviFunction($a){
    //     var_dump("test");
    // }

    function anotherFunction($a) {
        var_dump($a);
    }
    
    public function traitFunction(){
        return "trait function over written";
    }
}

$obj= new Class1(12);

// echo $obj->aviFunction();
// echo "<br>";
// echo $obj->traitFunction();

