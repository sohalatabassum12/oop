<?php

class Apple{


    const CONT1=99;
    const CON1=111;
    public $x=20;
    private $private=9;
    protected $protected=8;
    public Static $stack=90;


    
    public function applesFunction($num,$num2){
        echo"$this->private";                                //ak e class hote hobe
        echo"<br>";
        echo"$this->protected";                              //obj call kore kora jbe na
        echo"<br>";
        echo self::$stack;
        echo $this::CON1;
        echo"<br>";
        return $this->x+ $num + $num2 +$this->private+ $this-> protected + $this::CON1;     //private,protected useable,
    }
    
    
    }
    $obj=new Apple();
    echo $obj-> applesFunction(11,12);

    echo "<br>";
   // echo $obj->protected; ai vabe obj call kore protected use kora jbe na;
    echo "<br>";
    echo $obj::CONT1;



    class Banana extends Apple{


         public $proper1=20;
         public $prob2=21;
        public function bananasFunction($me){

              return $me + $this->proper1+$this->prob2 +$this->x+$this->protected;

        }

    }
    $obj1=new Banana();
    echo $obj1-> bananasFunction(2);
    echo "<br>";
    echo$obj1-> applesFunction(6,7);

    echo "<br>";
echo Apple::$stack;

    class Orange extends Banana{



    }
    $obj2 = new Orange;
    echo "<br>";
    echo $obj2->applesFunction(2,3);
    echo "<br>";
    echo $obj2->bananasFunction(565);
    echo"<br>";
    echo $obj2::CON1;
    echo "<br>";

    class Sohala{

        public $ggg=77;
        public Static $ss=9;
        public function whatFunction($h,$j,$K){

            return $this->ggg+$h+ self::$ss ;
        }
    }
    $f=new Sohala();
    echo $f-> whatFunction(2,4,5);




    