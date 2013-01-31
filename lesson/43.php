<?php
header("Content-Type: text/html; charset=utf-8");
//Создаем клас

class Point {
    
    public $x;
    public $y;
    
    public function __construct($x, $y) {
        $this->x = $x;
        $this->y = $y;        
    }
    // Метод
    public function  getX(){
        return $this->x;
    }
    public function setX ($x){
        $this->x = $x;        
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
$point = new Point(5, 7);
echo $point->x."<br/>";
echo $point->y."<br/>";
$point->y = 100;
echo $point->y."<br/>";
$point->y = 'Оксана кохана';
echo $point->y."<br/>";
echo $point->getX()."<br/>";
$point->setX(10);
echo $point->getX()."<br/>";
//echo $point; вывод обекта приводит к ошибке ( можно подменить значение функцией __toString()
echo $point."<br/>";
echo "<br/>";


echo "<br/> ---------------------------------------------------<br/>";

$circle = new Circle(5,5,10);

echo $circle."<br/>";
echo $circle->getX()."<br/>";
$circle->setX(555555);
echo $circle->getX()."<br/>";
$circle->setR(33333);
echo $circle->getR()."<br/>";


?>
