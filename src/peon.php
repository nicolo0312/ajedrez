<?php
namespace Ajedrez;

class Peon implements \interfaces\Pieza{

    private $color;

    public function __construct($color)
    {
        $this->color = $color;
    }

    public function definiendoColorPieza(){
        if($this->color == 'Blanco'){
            return true;
        }
        return false;
    }

    public function mover($x1,$x2,$y1,$y2,$tablero){
        if($this->definiendoColorPieza()){
            
        }
        
    }


}