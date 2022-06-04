<?php

    class Man
    {
        public $hands;
        public $legs;
        public $head;

        private $blood;
        private $intestine;

        public function __construct() {
            $this->hands = 2;
            $this->legs = 2;
        }

        public function run() {
            echo "I am running";
        }

        public function walk() {
            echo "I am walking";
        }

        private function wee() {
            echo "I am weeing";
        }

        protected function fight() {
            echo "I can box";
        }
    }