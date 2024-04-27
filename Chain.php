<?php

class Chain {

    public static $one;
    public $two;

    public static function first($a){
        self::$one = $a;
        return new self;
    }

    public function second($b) {
        $this->two = $b;
        return $this;
    }

    public function sum() {
        return self::$one + $this->two;
    }

}


$obj = new Chain();
// $t = $obj->first(4);
// $s = $obj->second(7);

// // echo $t + $s;

// echo $obj->sum();

// echo $obj->first(4)->second(7)->sum();

echo Chain::first(4)->second(5)->sum();