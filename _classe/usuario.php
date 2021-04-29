<?php

    class usuario{
        private id;
        private nome;
        private senha;
        private nivel;
        
        function __construct ($id,$nome,$senha,$nivel) {
            $this->id=$id;
            $this->nome=$nome;
            $this->senha=$senha;
            $this->nivel=$nivel;
        }
        
        public function getId(){
            return $this->id;
        }

        public function setId($id){
            $this->id=$id;
        }

        public function getNome(){
            return $this->nome;
        }

        public function setNome($nome){
            $this->nome=$nome;
        }

        public function getSenha(){
            return $this->senha;
        }

        public function setSenha($senha){
            $this->senha=$senha;
        }

        public function getNivel(){
            return $this->nivel;
        }

        public function setNivel($vagasTS){
            $this->nivel=$nivel;
        }

    }

?>