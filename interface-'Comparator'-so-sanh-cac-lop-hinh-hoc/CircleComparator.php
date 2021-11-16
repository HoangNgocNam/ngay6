<?php
include "Circle.php";
include "Comparator.php";

class CircleComparator implements Comparator
{
    public function compare(object $circleOne,object $circlrTwo)
    {
        $radiusOne = $circleOne -> getRadius();
        $radiusTwo = $circlrTwo -> getRadius();


        if ($radiusOne > $radiusTwo){
            return 1;
        } else if ($radiusOne < $radiusTwo){
            return -1;
        } else {
            return 0;
        }
}
}