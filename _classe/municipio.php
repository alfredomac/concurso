<?php

    class municipio{
        private id;
        private descricao;
        private vagasTM;
        private vagasTS;
        private vagasES;

        function __construct ($id,$descricao,$vagasTM,$vagasTS,$vagasES) {
            $this->id=$id;
            $this->descricao=$descricao;
            $this->vagasTM=$vagasTM;
            $this->vagasTS=$vagasTS;
            $this->vagasES=$vagasES;
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

        public function getVagasTM(){
            return $this->vagasTM;
        }

        public function setVagasTM($vagasTM){
            $this->vagasTM=$vagasTM;
        }

        public function getVagasTS(){
            return $this->vagasTS;
        }

        public function setVagasTS($vagasTS){
            $this->vagasTS=$vagasTS;
        }

        public function getVagasES(){
            return $this->vagasES;
        }

        public function setVagasES($vagasES){
            $this->vagasES=$vagasES;
        }

    }

?>