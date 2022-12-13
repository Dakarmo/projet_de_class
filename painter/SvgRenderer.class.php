<?php

class SvgRenderer{
    public function Addshape(){

    }

    public function DrawCircle(){
        return '<circle cx="$cx" cy="$cy" r="$r" fill="$color" opacity="$opacity"/>';
    }

    public function DrawElipse(){
        return '<circle cx="$cx" cy="$cy" rx="$rx" ry="$ry" fill="$color" opacity="$opacity"/>';
    }

    public function DrawRectangle(){
        return '<rect x="$x" y="$y" width="$w" height="$h" fill="$color" opacity="$opacity"/>';
    }

    public function DrawTriangle(){
        return '<polygon point="$point" fill="$color" opacity="$opacity"/>';
    }

    public function GetResult(){
        
    }

    public function Run(){
        
    }
}