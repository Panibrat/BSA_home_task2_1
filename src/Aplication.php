<?php
class Aplication {
    public function showMenu(){
        echo PHP_EOL . 
              "Make your choise:" . PHP_EOL
            . "1 => show state" . PHP_EOL
            . "2 => go lift to floor number" . PHP_EOL
            . "3 => add people" . PHP_EOL
            . "4 => take away people" . PHP_EOL
            . "any other key => to exit programm" . PHP_EOL;
    }
    public function run()
    {
        $lift = new Lift();
        echo "Elevator is ready". PHP_EOL;
        $choice = 1;
        while($choice != 0){
            $this->showMenu();
            $choice = intval(fgets(STDIN));
            switch ($choice){
                case 1: 
                    $lift->showStatus();
                    break;
                case 2: 
                    echo "Which floor?" . PHP_EOL;
                    $floor = intval(fgets(STDIN));
                    $lift->goToFloor($floor);
                    break;
                case 3: 
                    echo "How may people to add?" . PHP_EOL;
                    $add = intval(fgets(STDIN));
                    $lift->addPeople($add);
                    break;
                case 4: 
                    echo "How may people to take away?" . PHP_EOL;
                    $out = intval(fgets(STDIN));
                    $lift->outPeople($out);
                    break;
            }
        }
        echo "Thank you and bye!". PHP_EOL;
            }
        }
