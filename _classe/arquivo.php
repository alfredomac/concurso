<?php

    class arquivo{
        private id;
        private idCandidato;
        private caminho;
        private tipo;

        function __construct ($id,$idCandidato,$caminho,$tipo) {
            $this->id=$id;
            $this->idCandidato=$idCandidato;
            $this->caminho=$caminho;
            $this->tipo=$tipo;
        }
        
        public function getId(){
            return $this->id;
        }

        public function setId($id){
            $this->id=$id;
        }

        public function getIdCandidato(){
            return $this->idCandidato;
        }

        public function setIdCandidato($idCandidato){
            $this->idCandidato=$idCandidato;
        }

        public function getCaminho(){
            return $this->caminho;
        }

        public function setCaminho($caminho){
            $this->caminho=$caminho;
        }

        public function getTipo(){
            return $this->tipo;
        }

        public function setTipo($tipo){
            $this->tipo=$tipo;
        }

    }

?>