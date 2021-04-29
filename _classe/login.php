<?php

    class login{
        private id;
        private idUsuario;
        private entrada;
        private saida;

        function __construct ($id,$idUsuario,$entrada,$saida) {
            $this->id=$id;
            $this->idUsuario=$idUsuario;
            $this->entrada=$entrada;
            $this->saida=$saida;
        }
        
        public function getId(){
            return $this->id;
        }

        public function setId($id){
            $this->id=$id;
        }

        public function getIdUsuario(){
            return $this->idUsuario;
        }

        public function setIdUsuario($idUsuario){
            $this->idUsuario=$idUsuario;
        }

        public function getEntrada(){
            return $this->entrada;
        }

        public function setEntrada($entrada){
            $this->entrada=$entrada;
        }

        public function getSaida(){
            return $this->saida;
        }

        public function setSaida($saida){
            $this->saida=$saida;
        }


    }

?>