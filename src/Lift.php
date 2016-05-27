<?php

class Lift {
    private $numOfPeople = 0;
    private $floorNumber = 1;
    private $readyToGo = true;
    
    public function addPeople() {
        echo "How many people to add?" . PHP_EOL;
        $add = intval(fgets(STDIN));
        $this->numOfPeople += $add;
    }      
    public function outPeople() {
        echo "How many people to take away?" . PHP_EOL;
        $out = intval(fgets(STDIN));
        if($this->numOfPeople - $out >= 0){
            $this->numOfPeople -= $out;
        } else {
            echo "ERROR. Max people to take away: ". $this->numOfPeople . PHP_EOL;
        }
    }      
    public function goToFloor() {
        echo "Which floor?" . PHP_EOL;
        $floor = intval(fgets(STDIN)); 
        $this->isReadyToGo($floor);
        if($this->readyToGo){
            $this->floorNumber = $floor;
        }
    }      
    public function isReadyToGo($floor) {
        if ($this->numOfPeople < 5){
            $this->readyToGo = true;
        } else {
            $this->readyToGo = false;
            echo "ERROR. Lift overloaded". PHP_EOL;
            return false;
        }
        if (0 < $floor && $floor< 10){
            $this->readyToGo = true;
        } else {
            $this->readyToGo = false;
            echo "ERROR. Please choice floor number from 1 to 9". PHP_EOL;
            return false;
        }
    }      
    public function showStatus() {
        echo "Floor: " . $this->floorNumber . " People: " . $this->numOfPeople . PHP_EOL;
    }      
}
