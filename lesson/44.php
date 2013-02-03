<?php
header("Content-Type: text/html; charset=utf-8");
//Создаем клас

class Point {
    
    private $x;
    private $y;
    private $r;
    
    public function __construct($x, $y, $r) {
        $this->x = $x;
        $this->y = $y;        
        $this->r = $r;        
    }
    // Метод
    public function  getX(){
        return $this->x;
    }
    public function  getY(){
        return $this->y;
    }
    public function setX ($x){
        $this->x = $x;        
    }
    public function setY ($y){
        $this->y = $y;        
    }
    public function getDist ($point){
        return sqrt($this->getPow2($point));
    }
    public function getRad ($point){
        if($this->getDist($point)>=($this->r + $point->r)){
            $q='радиусы не пересекаються';
            
            }
 else {$q = 'радиусы пересекаються';}
                        return $q;
    }
    
    private function getPow2 ($point){
        return pow(($this->x - $point->x), 2)+ pow(($this->y - $point->y), 2);
    }

    public function __toString() {
       // return 'Эта строка выводиться вместо обекта $point';
        return "Точка с координатами(".$this->x.";".$this->y.")";
    }
    /*метот удаления обекта
    public function __destruct() {
      echo 'Обект уничтожен';
    }*/
}
//ДЗ////////////////////////////////////////////////////////////////////////////
class Circle {
    
    public $x;
    public $y;
    public $r;
    
    public function __construct($x, $y, $r) {
        $this->x = $x;
        $this->y = $y;        
        $this->r = $r;        
    }
    
    
    public function __toString() {
       return "Круг с координаттттттаи $this->x $this->y и радиусом $this->r";
        
    }
    public function  getR(){
        return $this->r;
    }
    public function  getX(){
        return $this->x;
    }
    public function setX ($x){
        $this->x = $x;        
    }
    public function setR ($r){
        $this->r = $r;        
    }
}
// Создаем обект
$point = new Point(5,10,5);
//echo $point->x."<br/>"; при указании приватности свойств обращение к ним вызывает ошибку
//echo $point->y."<br/>";
//$point->y = 100;
//echo $point->y."<br/>";
//$point->y = 'Оксана кохана';
//echo $point->y."<br/>";
echo $point."<br/>";
$point->setX(10);
$point->setY(12);
echo $point."<br/>";
$point_1 =new Point(5,20,4);
echo $point->getDist($point_1)."<br/>";
echo $point->getRad($point_1);

echo "<br/> ---------------------------------------------------<br/>";

$circle = new Circle(5,5,10);

echo $circle."<br/>";
echo $circle->getX()."<br/>";
$circle->setX(555555);
echo $circle->getX()."<br/>";
$circle->setR(33333);
echo $circle->getR()."<br/>";


?>

