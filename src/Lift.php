<?php

class Lift {
    private $numOfPeople = 0;
    private $floorNumber = 1;
    private $readyToGo = true;
    
    public function addPeople() {
        echo "How may people to add?" . PHP_EOL;
        $add = intval(fgets(STDIN));
        $this->numOfPeople += $add;
    }      
    public function outPeople() {
        echo "How may people to take away?" . PHP_EOL;
        $out = intval(fgets(STDIN));
        $this->numOfPeople -= $out;
    }      
    public function goToFloor() {
        echo "Which floor?" . PHP_EOL;
        $floor = intval(fgets(STDIN));
        $this->floorNumber = $floor;
    }      
    public function showStatus() {
        echo "Floor: " . $this->floorNumber . " People: " . $this->numOfPeople . PHP_EOL;
    }      
}
