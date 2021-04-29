<?php

    class categoria{
        private id;
        private descricao;
        private vagas;

        function __construct ($id,$descricao,$vagas) {
            $this->id=$id;
            $this->descricao=$descricao;
            $this->vagas=$vagas;
        }
        
        public function getId(){
            return $this->id;
        }

        public function setId($id){
            $this->id=$id;
        }

        public function getDescricao(){
            return $this->descricao;
        }

        public function setDescricao($descricao){
            $this->descricao=$descricao;
        }

        public function getVagas(){
            return $this->vagas;
        }

        public function setVagas($vagas){
            $this->vagas=$vagas;
        }


    }

?>