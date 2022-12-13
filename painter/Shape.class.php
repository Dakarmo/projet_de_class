<?php
abstract class Shape
{
    protected $Color;
    protected $Opacity;
    protected $Location;

    public function setColor($color){
        $this->Color=$color;
    }
    public function setOpacity($opacity){
        $this->Opacity=$opacity;
    }
    public function setLocation($location){
        $this->Location=$location;
    }
}