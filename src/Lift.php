<?php

class Lift {
    private $numOfPeople = 0;
    private $floorNumber = 1;
    private $readyToGo = true;
    
    public function addPeople($add) {
        $this->numOfPeople += $add;
    }      
    public function outPeople($out) {
        $this->numOfPeople -= $out;
    }      
    public function goToFloor($floor) {
        $this->floorNumber = $floor;
    }      
    public function showStatus() {
        echo "Floor: " . $this->floorNumber . " People: " . $this->numOfPeople . PHP_EOL;
    }      
}
