<?php

namespace Ajedrez;

class Tablero {
    private $tablero;

    public function __construct()
    {
        $i=0;
        $armandoTablero= array();
        while($i<8){
            $j=0;
            $armandoTablero[$i]= array();
            while($j<8){
                $armandoTablero[$i][$j]= new \Ajedrez\PiezaNull;
            }
        }
        $this->tablero = $armandoTablero;
    }

    public function mostrar(){

        return $this->tablero;
    }

    public function colocarPieza($x,$y,$pieza){

        if($this->tablero[$x][$y] instanceof \Ajedrez\PiezaNull){
            $this->tablero[$x][$y] = $pieza;
            return true;
        }
        return false;
    }

    public function mover($x1,$x2,$y1,$y2){
        if($x1<0 || $x2<0 || $y1<0 || $y2<0 || $x1>=8 || $x2>=8 || $y1>=8 || $y2>=8){
            return false;
        }
        if($this->tablero[$x1][$y1] instanceof \Ajedrez\PiezaNull){
            return false;
        }

        if($this->dame($x1,$y1)->mover($x1,$x2,$y1,$y2,$this->tablero)){
            $this->tablero[$x2][$y2] = $this->dame($x1,$y1);
            $this->tablero[$x1][$y1] = new \Ajedrez\PiezaNull;
            return true;
        }
    }

    public function dame($x,$y){
        if($this->tablero[$x][$y] instanceof \Ajedrez\PiezaNull){
            return new \Ajedrez\PiezaNull;
        }
        return $this->tablero[$x][$y];
    }
}