<?php

    class superHeroi{
        private $id;
        private $nome;
        private $poderEspecial;
        private $energia;
        private $forca;
        private $origem;

        public function getid(){
            return $this->id;
        }

        public function getnome(){
            return $this->nome;
        }
        public function getpoderEspecial(){
            return $this->poderEspecial;
        }
        public function getenergia(){
            return $this->energia;
        }
        public function getforca(){
            return $this->forca;
        }
        public function getorigem(){
            return $this->origem;
        }
        public function setid($id){
            $this->id = $id;
        }
        public function setnome($nome){
            $this->nome = $nome;
        }
        public function setpoderEspecial($poderEspecial){
            $this->poderEspecial = $poderEspecial;
        }
        public function setenergia($energia){
            $this->energia = $energia;
        }
        public function setforca($forca){
            $this->forca = $forca;
        }
        public function setorigem($origem){
            $this->origem = $origem;
        }

        public function aumentarEnergia($energia){
            return $energia*119127841;
        }

        public function calcularPoderMedio($energia, $forca){
            return ($energia*$forca)/2;
        }
    }

    $heroi1 = new superHeroi(1,"Harry Potter","Luminous",10000, 10000, "Hogwarts");
    $heroi1 = new superHeroi(1,"Goku","Kamehameha",5000, 5000, "Planeta Vegeta");    
    $heroi3 = new superHeroi(3,"Harry Potter","Expelliarmus", 5000,4000,"Hogwarts");
    $heroi4 = new superHeroi(4,"Hermione Granger","Estupefaço",7000,2000,"Hogwarts");

?>