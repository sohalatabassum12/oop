<?php

class Avi{
const CON1=111;
const CON2=111;

public $xyz=10;
public static $Stati=100;
private $privateprob=30;
protected $provetprob =10;
public function excersiseFunction($num){

     
     echo Self:: $Stati . '<br>';//self use kora jai
     echo static:: $Stati . '<br>';//static o use kora jai
    echo $this::CON2 . '<br>';
    return $num+$this->xyz +$this->privateprob  + $this->provetprob + $this:: CON1.'<br>';
    
   
    
   }


}
$obj =new Avi();

echo Avi::$Stati;
echo "<br>";
echo $obj-> excersiseFunction(11);

echo $obj::CON1;
echo "<br>";

echo $obj::CON2;
echo "<br>";




class Sohela extends Avi
{
    public $x=10;
    public $y=20;

    public function newMethod($z)
    {
        return $z+$this->x+$this->y-$this->xyz +$this->provetprob.'<br>';
    }
}

$obj1=new Sohela();
echo $obj1->newMethod(20);

echo $obj1-> xyz;
echo "<br>";
echo Sohela::$Stati;
echo "<br>";

class Third extends Sohela{


}

$obj3=New Third();
echo $obj3-> excersiseFunction(11);
echo $obj3->newMethod(20);
//echo $obj3->provetprob;//kaj hobe na
