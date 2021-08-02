<?php

class Main {
   private string $propertyA = 'property A';
   private int $propertyB = 99;

    public function getPropertyA(): string
    {
        return $this->propertyA;
    }

    public function setPropertyA(string $propertyA): void
    {
        $this->propertyA = $propertyA;
    }

    public function getPropertyB(): int
    {
        return $this->propertyB;
    }

    public function setPropertyB(int $propertyB): void
    {
        $this->propertyB = $propertyB;
    }
}


class MyClass1 extends  Main{

     private int $myClassProperty1 = 1;

     public function getMyClassProperty1(): int
     {
         return $this->myClassProperty1;
     }

     public function setMyClassProperty1(int $myClassProperty1): void
     {
         $this->myClassProperty1 = $myClassProperty1;
     }

     public function getSum() : int {
         return  $this->myClassProperty1 + parent::getPropertyB();
    }
 }

abstract class MyClass2 extends  Main{

    private int $myClassProperty2 = 2;

    public function getMyClassProperty2(): int
    {
        return $this->myClassProperty2;
    }

    public function setMyClassProperty2(int $myClassProperty2): void
    {
        $this->myClassProperty2 = $myClassProperty2;
    }

    public function getDiff(): int
    {
        return  $this->myClassProperty1 - parent::getPropertyB();
    }

    abstract function exponentiationFunc();
}

final class MyClass3 extends  Main{

    private int $myClassProperty3 = 3;

    public function getMyClassProperty3(): int
    {
        return $this->myClassProperty3;
    }

    public function setMyClassProperty3(int $myClassProperty3): void
    {
        $this->myClassProperty3 = $myClassProperty3;
    }

    public function getMultiply(): int {
        return  $this->myClassProperty3 * parent::getPropertyB();
    }
}

class Inheritor1 extends  MyClass1{

    private $option1 = 101;

    public function getOption(): int
    {
        return $this->option1;
    }

    public function setOption(int $option1): void
    {
        $this->option1 = $option1;
    }

    public function getSum() : int {
        return  $this->option1 + parent::getMyClassProperty1();
    }

    public function getModulo() {
        return $this->option1 % parent::getPropertyB();
}
}
class Inheritor2 extends  MyClass1{

    private $option2 = 2;

    public function getOption(): int
    {
        return $this->option2;
    }

    public function setOption(int $option2): void
    {
        $this->option2 = $option2;
    }

    public function getDiff(): int
    {
        return  $this->option2 - parent::getMyClassProperty1();
    }

    public function getMath(): int {
        return ($this->option1 + parent::getPropertyB()) / 2;
    }
}
class Inheritor3 extends  MyClass2{

    private $option3 = 3;

    public function getOption(): int
    {
        return $this->option3;
    }

    public function setOption(int $option3): void
    {
        $this->option3 = $option3;
    }

    public function exponentiationFunc($a = 2): int
     {
        return pow($this->option3, $a);
    }

    public function getMultiply(): int {
        return  $this->option3 * parent::getMyClassProperty2();
    }
    public function getMath2(): int {
        return  ($this->option3 * parent::getPropertyB()) / 3;
    }
}
class Inheritor4 extends  MyClass2{

    private $option4 = 4;

    public function getOption(): int
    {
        return $this->option4;
    }

    public function setOption(int $option4): void
    {
        $this->option4 = $option4;
    }

    function exponentiationFunc($a = 3){
        return pow($this->option4, $a);
    }

    public function getDivide(): int {
        return  $this->option4 / parent::getMyClassProperty2();
    }

    public function getMath3(): int {
        return  ($this->option4 * parent::getPropertyB()) / 10;
    }
}

$obj1 = new Inheritor1();
$obj2 = new Inheritor2();
$obj3 = new Inheritor3();
$obj4 = new Inheritor4();


echo 'Математическое действие с данными родителя и своими данными' . '<br>';
echo '<br>';

echo $obj1->getSum() . '<br>';
echo $obj2->getDiff() . '<br>';
echo $obj3->getMultiply() . '<br>';
echo $obj4->getDivide() . '<br>';

echo '<br>';
echo 'Математическое действие со свойством корневого класса и своим свойством' . '<br>';
echo '<br>';

echo $obj1->getModulo() . '<br>';
echo $obj2->getMath() . '<br>';
echo $obj3->getMath2() . '<br>';
echo $obj4->getMath3() . '<br>';

echo '<br>';
echo 'В случае если реализован наследник класса содержащего абстрактную функцию то класс должен содержать реализацию абстракции';
echo '<br>';
echo '<br>';

echo $obj3->exponentiationFunc() . '<br>';
echo $obj4->exponentiationFunc() . '<br>';








?>