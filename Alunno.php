<?php   
    class Alunno{
        public $nome;
        public $cognome;
        public $eta;
        
        function __construct($n,$c,$e){
            $this->nome=$n;
            $this->cognome=$c;
            $this->eta=$e;
        }

        function getNome(){
            return $this->nome;
        }

        function getCognome(){
            return $this->cognome;
        }
        function getEta(){
            return $this->eta;
        }

        function toString(){
            return $this->nome." ".$this->cognome;
        }

    }
?>
