<?php

    class Boy extends Man
    {
        public function __construct() {
            $this->hands = 4;
            $this->legs = 3;

            echo "CRYYYYYYYYYY!";
        }

        public function run() {
            echo "I amgregetgrergergerger running";
        }

        // public function walk() {
        //     echo "I am walking";
        // }

        // private function wee() {
        //     echo "I am weeing";
        // }

        // protected function fight() {
        //     echo "I can box";
        // }

        public function sum($number_1, $number_2) {
            echo $number_1 + $number_2;
        }
    }