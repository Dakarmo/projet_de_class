<?php
include_once 'shape.class.php';

class Circle extends Shape{
    public $rayon;
    public $circle;


    public function setRayon($rayon){
        $this->rayon=$rayon;
    }

    public function draw($circle){
        return $this->circle=$circle;
    }
}