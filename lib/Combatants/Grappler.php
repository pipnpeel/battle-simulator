<?php

class Grappler extends Combatant {
    protected function generateHealth() {
        $this->health = (int) $this->randomNumberBetween(60, 100);
    }
    
    protected function generateStrength() {
        $this->strength = (int) $this->randomNumberBetween(75, 80);
    }
    
    protected function generateDefence() {
        $this->defence = (int) $this->randomNumberBetween(35, 40);
    }
    
    protected function generateSpeed() {
        $this->speed = (int) $this->randomNumberBetween(60, 80);
    }
    
    protected function generateLuck() {
        $this->luck = $this->randomNumberBetween(0.3, 0.4);
    }
}

