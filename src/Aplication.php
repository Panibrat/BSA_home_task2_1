<?php
class  Aplication {
    public function showMenu(){
        echo  "Make your choice:" . PHP_EOL
            . "Press '1' => show state" . PHP_EOL
            . "Press '2' => go lift to floor number" . PHP_EOL
            . "Press '3' => add people" . PHP_EOL
            . "Press '4' => take away people" . PHP_EOL
            . "Press any other button => to exit program" . PHP_EOL;
    }
    public function run() {
        $lift = new Lift();
        echo $lift ? "Lift is ready". PHP_EOL : "Lift is not ready" . PHP_EOL;
        $choice = 1;
        while($choice != 0){
            $this->showMenu();
            $choice = intval(fgets(STDIN));
            switch ($choice){
                case 1: 
                    $lift->showStatus();
                    break;
                case 2: 
                    $lift->goToFloor();
                    break;
                case 3: 
                    $lift->addPeople();
                    break;
                case 4: 
                    $lift->outPeople();
                    break;
                default:
                    echo "ERROR. Wrong choice!" . PHP_EOL;
            }
        }
        echo "Thank you and bye!". PHP_EOL;
            }
        }
