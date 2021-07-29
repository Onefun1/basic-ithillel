<?php

echo '<br>';
echo '1. Создать функцию определяющую какой тип данных ей передан и выводящей соответствующее сообщение.' . '<br>';
echo '<br>';

function getTypeOfAttribute($a){
    echo gettype($a) . '<br>';
}
getTypeOfAttribute(true);
getTypeOfAttribute(NULL);
getTypeOfAttribute('qwerty');
getTypeOfAttribute([0,1, 'two' => 2]);
getTypeOfAttribute(111);

echo '<br>';
echo '2. Создать функцию которая считает все буквы b в переданной строке, в случае если передается не строка функция должна возвращать false' . '<br>';
echo '<br>';

function getSymbolCountFormString($someString = 'abc ab b aaaabccc'){
    if (gettype($someString) == 'string'){
        $count = 0;
       $arrayFromSomeString = str_split( $someString);

       foreach ($arrayFromSomeString as $letter){
           if ($letter == 'b'){
               $count++;
           }
       }
    } else {
        echo 'Функция вернула - false' . '<br>';
        return false;
    }
    echo "Количество b в строке - $someString = " . $count . '<br>';
}
getSymbolCountFormString();
getSymbolCountFormString(5);


echo '<br>';
echo '3. Создать функцию которая считает сумму значений всех элементов массива произвольной глубины' . '<br>';
echo '<br>';

function getSumOfNumbers(array $customArr = [ 1, 2, [3, 4, [5, 6, [7, 8, [9, 10, 11, 12]]]]]) : int  {
    $sum = 0;
    foreach ($customArr as $value) {
        if(is_array($value)) {
            $sum += getSumOfNumbers($value);
        } else {
            $sum += $value;
        }
    }
    return  $sum;
}

echo 'Сумма = '.  getSumOfNumbers() . '<br>';
echo 'Сумма = '.  getSumOfNumbers([1, 1, [1, 1, 1, 1, 1, 1, [1, 1, 1]]]) . '<br>';

echo '<br>';
echo '4. Создать функцию которая определит сколько квадратов меньшего размера можно вписать в квадрат большего размера размер возвращать в float' . '<br>';
echo '<br>';


function getCountOfSquares($a = 9, $b= 3) : float {
    $square1 = $a * $a;
    $square2 = $b * $b;

    if ($square1 == $square2){
        $count = 1;
    } else if ($square1 > $square2){
        $count = $square1 / $square2;
    } else {
        $count = $square2 / $square1;
    }

    return  floatval($count);
}

echo getCountOfSquares() . ' кв.' . '<br>';
echo getCountOfSquares(2, 11) . ' кв.' . '<br>';


?>