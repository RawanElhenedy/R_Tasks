<?php

// Here I thought to separate the function of calculating area from defining the shape properties
// to be extendable to make new functions like calculating perimeter without needing to modify the shape class


// ShapeProperties interface 
interface ShapeProperties {
}

// AreaCalculator interface to implement different areas
interface AreaCalculator {
    public function AreaCalculator();
}

// Circle class
class CircleProperties implements ShapeProperties {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function getRadius() {
        return $this->radius;
    }
}

class CircleAreaCalculator implements AreaCalculator {
    private $properties;

    public function __construct(ShapeProperties $properties) {
        $this->properties = $properties;
    }

    public function AreaCalculator() {
        return M_PI * pow($this->properties->getRadius(), 2);
    }
}

// Square class
class SquareProperties implements ShapeProperties {
    private $side;

    public function __construct($side) {
        $this->side = $side;
    }

    public function getSide() {
        return $this->side;
    }
}

class SquareAreaCalculator implements AreaCalculator {
    private $properties;

    public function __construct(ShapeProperties $properties) {
        $this->properties = $properties;
    }

    public function AreaCalculator() {
        return pow($this->properties->getSide(), 2);
    }
}


// Rectangle class
class RectangleProperties implements ShapeProperties {
    private $width;
    private $length;

    public function __construct($width, $length) {
        $this->width = $width;
        $this->length = $length;
    }

    public function getWidth() {
        return $this->width;
    }

    public function getlength() {
        return $this->length;
    }
}


class RectangleAreaCalculator implements AreaCalculator {
    private $properties;

    public function __construct(ShapeProperties $properties) {
        $this->properties = $properties;
    }

    public function AreaCalculator() {
        return $this->properties->getWidth() * $this->properties->getlength();
    }
}



$circleProperties = new CircleProperties(4);
$circleAreaCalculator = new CircleAreaCalculator($circleProperties);
echo "Circle Area = " . $circleAreaCalculator->AreaCalculator() . "<br>";

$squareProperties = new SquareProperties(5);
$squareAreaCalculator = new SquareAreaCalculator($squareProperties);
echo "Square Area = " . $squareAreaCalculator->AreaCalculator() . "<br>";

$rectangleProperties = new RectangleProperties(6, 5);
$rectangleAreaCalculator = new RectangleAreaCalculator($rectangleProperties);
echo "Rectangle Area = " . $rectangleAreaCalculator->AreaCalculator() . "<br>";;


