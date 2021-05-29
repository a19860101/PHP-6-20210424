<?php
    class Car {
        public $brand;
        public $color = "white";

        public function run(){
            // return 'Car Run';
            return $this->color;
        }
    }

    // $test = new Car;
    // $test->brand ="Toyota";
    // $run = $test->run('red');

    // print_r($run);
    // print_r($test->color);

    // $test2 = new Car;
    // $test2->brand = "Nissan";
    // print_r($test2);
    class Truck extends Car {
        public $color = 'brown';
        public function payload(){
            return 'hello payload';
        }
    }
    $test = new Truck;
    // echo $test->color;
    echo $test->color;
    echo $test->run();

    echo $test->payload();