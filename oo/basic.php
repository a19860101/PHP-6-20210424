<?php
    class Car {
        public $brand;
        public $color = "white";

        public function run(){
            // return 'Car Run';
            return $this->color;
        }
    }

    $test = new Car;
    $test->brand ="Toyota";
    $run = $test->run('red');

    print_r($run);
    print_r($test->color);

    $test2 = new Car;
    $test2->brand = "Nissan";
    // print_r($test2);