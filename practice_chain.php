<?php

class Chain{
    public $a;
    public $b;

    public static function method1($a)
    {
       $o = new self;
       $o->a = $a;

       return $o;

        //  $this->a=$a;
        // return $this;
    }

    public function method2($c)
    {
            $this->b=$c;
           return $this;
    }

    public function method3()
    {
       return $this->a +$this->b;
        
    }
}

$obj1=new Chain();
echo $obj1::method1(12)->method2(44)->method3();