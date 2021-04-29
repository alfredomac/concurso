<?php

    class candidato{
        private id;
        private idCategoria;
        private idMunicipio;
        private idHabilitacao;
        private nome;
        private bi;
        private dataNascimento;
        private sexo;
        private email;
        private telefone;
        private morada;
        private curso;

        function __construct ($id,$idCategoria,$idMunicipio,$idHabilitacao,$nome,$bi,$dataNascimento,$sexo,$email,$telefone,$morada,$curso) {
            $this->id=$id;
            $this->idCategoria=$idCategoria;
            $this->idMunicipio=$idMunicipio;
            $this->idHabilitacao=$idHabilitacao;
            $this->nome=$nome;
            $this->bi=$bi;
            $this->dataNascimento=$dataNascimento;
            $this->sexo=$sexo;
            $this->email=$email;
            $this->telefone=$telefone;
            $this->morada=$morada;
            $this->curso=$curso;
        }
        
        public function getId(){
            return $this->id;
        }

        public function setId($id){
            $this->id=$id;
        }

        public function getIdCategoria(){
            return $this->idCategoria;
        }

        public function setIdCategoria($idCategoria){
            $this->idCategoria=$idCategoria;
        }

        public function getIdMunicipio(){
            return $this->idMunicipio;
        }

        public function setIdMunicipio($idMunicipio){
            $this->idMunicipio=$idMunicipio;
        }

        public function getIdHabilitacao(){
            return $this->idHabilitacao;
        }

        public function setIdHabilitacao($idHabilitacao){
            $this->idHabilitacao=$idHabilitacao;
        }

        public function getNome(){
            return $this->nome;
        }

        public function setNome($nome){
            $this->nome=$nome;
        }

        public function getBi(){
            return $this->bi;
        }

        public function setBi($bi){
            $this->bi=$bi;
        }

        public function getDataNascimento(){
            return $this->dataNascimento;
        }

        public function setDataNascimento($dataNascimento){
            $this->dataNascimento=$dataNascimento;
        }

        public function getSexo(){
            return $this->sexo;
        }

        public function setSexo($sexo){
            $this->sexo=$sexo;
        }

        public function getEmail(){
            return $this->email;
        }

        public function setEmail($email){
            $this->email=$email;
        }

        public function getTelefone(){
            return $this->telefone;
        }

        public function setTelefone($telefone){
            $this->telefone=$telefone;
        }
            
        public function getMorada(){
            return $this->morada;
        }

        public function setMorada($morada){
            $this->morada=$morada;
        }

        public function getCurso(){
            return $this->curso;
        }

        public function setCurso($curso){
            $this->curso=$curso;
        }

    }

?>