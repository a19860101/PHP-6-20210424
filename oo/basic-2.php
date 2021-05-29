<?php
    class Car {
        public $color = "White";
        static function run($color){
            return "hello Car ".$color;
        }
    }

    echo Car::run('Red');