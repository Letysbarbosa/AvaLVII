<?php
class Fatura{
    private $numero;
    private $descricao;
    private $qtd;
    private $valoritem;


    public function getNumero(){
        return $this->numero;
    }
    public function getDescricao(){
        return $this->descricao;
    }
    public function getQtd(){
        return $this->qtd;
    }
    public function getValoritem(){
        return $this->valoritem;
    }


    public function setNumero($numero){
        $this->numero = $numero;
    }
    public function setDescricao($descricao){
    $this->descricao = $descricao;
    }
    public function setQtd($qtd){
        $this->qtd = ($qtd > 0) ? $qtd : 0;
    }
    public function setValoritem($valoritem){

        $this->valoritem = ($valoritem > 0) ? $valoritem : 0.0;
    }
    
    public function getTotalFatura(){
        $totalFatura = $this->qtd * $this->valoritem;
        return ($totalFatura > 0) ? $totalFatura : 0;
    } 
    public function toString(){
        return "Total Fatura: R$ " . $this->getTotalFatura();
    }   

}

?>