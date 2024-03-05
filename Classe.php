<?php   
    class Classe{
        public $array=[];
        
        function __construct(){
            $this->array[] = new Alunno("alessandro","scorzov","11");
            $this->array[] = new Alunno("alessio","aldinucci","12");
            $this->array[] = new Alunno("alessio","rossi","12");
            $this->array[] = new Alunno("SCROBOBEBONS","SPUGNI","2");
            
        }

        function getClasse(){
            return var_dump($this->array);
        }

        function searchByName($n){
            $results =  [];
            for($i = 0; $i<3; $i++){
                if(strtolower($n)==strtolower($this->array[$i]->getNome())){
                    $results []= $this->array[$i];
                }
            }
            return $results;
        } 
    }
?>