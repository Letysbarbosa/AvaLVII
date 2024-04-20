<?php

//Definição de classe "Empregado"

class Empregado {
    //Definindo atributo
    private $nome;
    private $sobrenome;
    private $salariomensal;

    public function setNome ($nome){ 
        $this->nome = $nome;
    }
    public function setSobrenome ($sobrenome){
        $this->sobrenome = $sobrenome;
    }
    public function setSalariomensal ($salariomensal){
        $this->salariomensal = $salariomensal;
    }
    public function getNome (){
        return $this->nome;
    }
    public function getSobrenome (){
       return $this->sobrenome;
    }
    public function getSalariomensal (){
        return $this->salariomensal;
    }
    public function aumentarSalario ($percentual){
        $this->salariomensal *= (1 +($percentual/100));
    }
    public function salarioAnual(){
        return $this->salariomensal * 12;
    }

}
//get para ler os dados de um atributo e sempre tem return
//set grava os dados de um atributo

?>