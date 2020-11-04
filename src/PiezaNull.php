<?php
namespace Ajedrez;
class PiezaNull implements \interfaces\Pieza{

    public function mover($x1,$x2,$y1,$y2,$tablero){
        return false;
    }
}