<?php
    class Car {
        public $brand;
        public $color = "white";
    }

    $test = new Car;
    $test->brand ="Toyota";
    print_r($test);

    $test2 = new Car;
    $test2->brand = "Nissan";
    print_r($test2);