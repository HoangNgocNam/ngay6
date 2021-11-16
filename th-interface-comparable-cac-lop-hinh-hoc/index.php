<?php
include "ComparableCircle.php";

$circlrOne = new ComparableCircle('circleOne', 8);
$circlrTwo = new ComparableCircle('circleTwo', 2);
$circlrThree = new ComparableCircle('circleThree', 4);


$test = $circlrOne->compareto($circlrTwo);
echo ('Comparable: <br>');
echo $test;