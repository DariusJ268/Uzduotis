<?php

class Plant
{
    public $name;
    public $latinName;
    public $perenial;
    public $height;
    public $continents;
    public $year;

    function __construct($name = "", $latinName = "", $perenial = true, $height = 0, $continents = [], $year = 0)
    {
        $this->name = $name;
        $this->latinName = $latinName;
        $this->perenial = $perenial;
        $this->height = $height;
        $this->continents = $continents;
        $this->year = $year;
    }

    public function intro()
    {
        echo "Sveiki, aš esu " . $this->latinName . " " . $this->name . ". Man yra " . $this->year . "metų(ai), ir aš esu " .
            ($this->perenial ? "berniukas" : "mergaite")
            . "<br>";
    }

    public static function classInfo()
    {
        echo "Šita klasė yra skirta skirtingiems augalams." . "<hr>";
    }
}
