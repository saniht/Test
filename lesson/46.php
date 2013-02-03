<?php

class Point {
    
    public $x;
    public $y;
    
    public function __construct($x,$y) {
        $this->x =$x;
        $this->y =$y;
    }
    public function __toString() {
         return $this->x."-". $this->y. "<br/>";
    }
}
$point = new Point (4, 3);
$point_1 =$point;
echo $point;
echo $point_1;
echo "----------------------------------------------<br/>";

$point_2 = clone $point;
$point->x = 100;
echo $point;
echo $point_2;
?>
