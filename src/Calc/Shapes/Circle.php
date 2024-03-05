<?php

namespace Calc\Shapes;

use Calc\Interfaces\Area;
use Calc\Interfaces\Perimeter;

class Circle implements Area, Perimeter {
    protected $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function getArea() {
        return pi() * $this->radius * $this->radius;
    }

    public function getPerimeter() {
        return 2 * pi() * $this->radius;
    }
}
