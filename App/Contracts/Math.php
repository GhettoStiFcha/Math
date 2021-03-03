<?php

namespace Contracts;

class Math
{
    function addition(int $a1, int $b1, int $a2, int $b2)
    {
        $c1 = $a1+$a2;
        $c2 = $b1+$b2;
        $c3 = $c2 . 'i';

        if($c2>=0){
            $z = $c1 . '+' . $c3;
        } else {
            $z = $c1 . $c3;
        }

        return $z;
    }

    function subtraction(int $a1, int $b1, int $a2, int $b2)
    {
        $c1 = $a1-$a2;
        $c2 = $b1-$b2;
        $c3 = $c2 . 'i';

        if($c2>=0){
            $z = $c1 . '+' . $c3;
        } else {
            $z = $c1 . $c3;
        }

        return $z;
    }

    function multiplication(int $a1, int $b1, int $a2, int $b2)
    {
        $c1 = $a1*$a2-$b1*$b2;
        $c2 = $a1*$b2+$b1*$a2;
        $c3 = $c2 . 'i';

        if($c2>=0){
            $z = $c1 . '+' . $c3;
        } else {
            $z = $c1 . $c3;
        }

        return $z;
    }

    function division(int $a1, int $b1, int $a2, int $b2)
    {
        $c1 = ($a1*$a2+$b1*$b2)/($a2**2+$b2**2);
        $c2 = ($a2*$b1-$a1*$b2)/($a2**2+$b2**2);
        $c3 = $c2 . 'i';

        if($c2>=0){
            $z = $c1 . '+' . $c3;
        } else {
            $z = $c1 . $c3;
        }

        return $z;
    }
}
