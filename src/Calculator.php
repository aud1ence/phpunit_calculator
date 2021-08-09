<?php
/**
 * Created by PhpStorm.
 * User: phanluan
 * Date: 14/03/2019
 * Time: 10:42
 */

class Calculator
{
    public function add($firstNumber, $secondNumber)
    {
//        throw new RuntimeException("out of range exception");
        return $firstNumber + $secondNumber;
    }

    public function sub($firstNumber, $secondNumber)
    {
//        throw new RuntimeException("out of range exception");
        return $firstNumber - $secondNumber;
    }
}