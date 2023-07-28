<?php

    //shape inteface for implementing the shapes (circle, square, .....) form it
    interface Shape{
        public function AreaCalculator();
    }

    // Circle class
    class Circle implements Shape{
        //Define circle properties
        private $raduis;

        public function __construct($raduis)  {
            $this->raduis= $raduis;
        }

        public function AreaCalculator(){
            return M_PI * pow($this->raduis,2); 
        }

    }

    // Square class
    class Square implements Shape{
        //Define square properties
        private $side;

        public function __construct($side) {
            $this->side=$side;
        }

        public function AreaCalculator(){
            return pow($this->side,2);
        }
    }
    // Rectangle class
    class Rectangle implements Shape {
        //Define rectangle properties
        private $length;
        private $width;

        public function __construct($length, $width){
            $this->length= $length;
            $this->width= $width;
        }

        public function AreaCalculator(){
            return $this->length * $this->width;
        }
    }

    ////we can add more shapes easily by implementing the shape inteface

    //Test the AreaCalculator for shapes

    $circle= new Circle(5);
    $circleArea= $circle->AreaCalculator();
    echo "Circle Area = " . $circleArea . "<br>";

    $square= new Square(4);
    $squareArea =$square->AreaCalculator();
    echo "Square Area = " . $squareArea . "<br>";

    $rectangle = new Rectangle(6,3);
    $rectangleArea= $rectangle->AreaCalculator();
    echo "Rectangle Area = ". $rectangleArea . "<br>";


?>