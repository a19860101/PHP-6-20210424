<?php
    class Car {
        public $brand;
        public $color = "white";

        private $engine = "4.0 V8";
        // 只可在類別內使用，不包含繼承的類別

        protected $maxSpeed = 180;
        // 只可在類別內使用，包含繼承的類別

        public function run(){
            // return 'Car Run';
            return $this->color;
        }
        public function speed(){
            // return $this->engine;
            return $this->maxSpeed;
        }
    }

    $toyota = new Car;
    // echo $toyota->speed;
    // $test = new Car;
    // $test->brand ="Toyota";
    // $run = $test->run('red');
    echo $toyota->engine;

    // print_r($run);
    // print_r($test->color);

    // $test2 = new Car;
    // $test2->brand = "Nissan";
    // print_r($test2);
    class Truck extends Car {
        public $color = 'brown';
        public function payload(){
            return 'hello payload'. $this->maxSpeed;
        }
    }
    $test = new Truck;
    // echo $test->color;
    // echo $test->color;
    // echo $test->run();
    // echo $test->payload();
    echo $test->engine;
    // echo $test->payload();
    // echo $test->maxSpeed;