<?php

class BooleanGenerator {
    private $percentageChance;
    
    public function __construct($decimalChance) {
        $this->percentageChance = $decimalChance * 100;
    }
    
    public function generate() {
        return rand(0, 99) < $this->percentageChance;
    }
}