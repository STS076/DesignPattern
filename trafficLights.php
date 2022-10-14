<?php

// interface SplSubject
// {

//     public function attach(SplObserver $observer);
//     public function detach(SplObserver $observer);
//     public function notifyDriver();
// }

// interface SplObserver
// {

//     public function sendInfo();
// }

class traficLights
{
    private $color;


    public function getColor()
    {
        return $this->color;
    }
    public function setColor($color)
    {
        $this->color = $color;
    }

    public function changeLightColors($color)
    {

        if ($this->color = "Green") {
            echo "You can pass";
        }
        $color = array(
            "Green" => '1',
            "Orange" => '2',
            "Red" => '3'
        );
        $this->color = array_rand($color);

        echo "<p>Trafic light color has just changed to {$this->color}</p>";
    }
}

class Driver
{

    private $color;

    public function getColor()
    {
        return $this->color;
    }
    public function setColor($color)
    {
        $this->color = $color;
    }

    public function drive($color)
    {
        $color = ["Green", "Orange", "Red"];
        $this->color = $color; 

        if ($this->color == "Green") {
            echo "You can pass";
        }
        if ($this->color == "Orange") {
            echo "You have to slow down";
        }
        if ($this->color  == "Red") {
            echo "You have to stop";
        }
    }
}


$trafic = new traficLights();
$driver = new Driver();
if ($trafic->changeLightColors('Green')) {
    $driver->drive("Green");
} else if ($trafic->changeLightColors('Orange')) {
    $driver->drive("Orange");
} else if ($trafic->changeLightColors('Red')) {
    $driver->drive("Red");
}
