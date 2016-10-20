<?php 
/**
 * Nave espacial que se mueve de Guillermo
 * Parte2
 */
class ia{

//atributoso propiedades:
  public $columna;
  public $fila;

//se introduce la funcion randomPos o random1, genera un orden "rand"=aleatorio para los geters y seters:
  public function randompos() {
    $this->columna=rand(0,3);
    $this->fila=rand(0,3);
  }
	
//metodo o funcion get:
  public function getcolumna() {
    return $this->columna;
  }
  public function getfila() {
    return $this->fila;
  }
//funcion o metodo set: se setea con (ESTRUCTURAS DE CONTROL: añadimos la funcion if-elseif-else): limita el circuito entre 0y3:
  public function setcolumna($col){
      if($col>3 ){
         $this->columna = 3;
      }
      elseif ($col<0) {
        $this->columna = 0;
      }
      else{
        $this->columna = $col;
      }
  }
  public function setfila($fil){
      if($fil>3 ){
         $this->fila = 3;
  }    
      elseif ($fil<0) {
        $this->fila = 0;
 }    
      else{
        $this->fila = $fil;
  }
  }

}
?>