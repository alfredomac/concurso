<?php
    include_once('conexao.php');
    include_once('candidato.php');

    interface repCandidato{
        public function cadastrar($candidato);
        public function actualizar($candidato);
        public function lista ($sql);
    }

    class iCandidato implements repCandidato{
        private $con;
        
        function __construct(){
            $this->con=new conexao("localhost","root","","concurso");
            $this->con->conectar();
        }

        public function cadastrar($candidato){
            $id=$candidato->getId();
            $idCategoria=$candidato->getIdCategoria();
            $idMunicipio=$candidato->getIdMunicipio();
            $idHabilitacao=$candidato->getIdHabilitacao();
            $nome=$candidato->getNome();
            $bi=$candidato->getBi();
            $dataNascimento=$candidato->getDataNascimento();
            $sexo=$candidato->getSexo();
            $email=$candidato->getEmail();
            $telefone=$candidato->getTelefone();
            $morada=$candidato->getMorada();
            $curso=$candidato->getCurso();
            $sql="Insert into candidato(idCategoria,idMunicipio,idHabilitacao,nome,bi,dataNascimento,sexo,email,telefone,morada,curso) values( '$idCategoria', '$idMunicipio','$idHabilitacao','$nome','$bi','$dataNascimento','$sexo','$email','$telefone','$morada','$curso' ) ";
            $this->$con->executar($sql);
        }

        public function actualizar($categoria){
            $id=$candidato->getId();
            $idCategoria=$candidato->getIdCategoria();
            $idMunicipio=$candidato->getIdMunicipio();
            $idHabilitacao=$candidato->getIdHabilitacao();
            $nome=$candidato->getNome();
            $bi=$candidato->getBi();
            $dataNascimento=$candidato->getDataNascimento();
            $sexo=$candidato->getSexo();
            $email=$candidato->getEmail();
            $telefone=$candidato->getTelefone();
            $morada=$candidato->getMorada();
            $curso=$candidato->getCurso();
            $sql="Update candidato set idCategoria='$idCategoria',idMunicipio='$idMunicipio',idHabilitacao='$idHabilitacao',nome='$nome',bi='$bi',dataNascimento='$dataNascimento',sexo='$sexo',email='$email',telefone='$telefone',morada='$morada',curso='$curso' where id='$id' ";
            $this->$con->executar($sql);
        }

        public function lista($sql){
            $arrayCandidato=array();
            $lista=$this->$con->executar($sql);
            while($linha= mysqli_fecth_array($lista) ){
                $p=new candidato( $linha['id'],$linha['idCategoria'],$linha['idMunicipio'],$linha['idHabilitacao'],$linha['nome'],$linha['bi'],$linha['dataNascimento'],$linha['sexo'],$linha['email'],$linha['telefone'],$linha['morada'],$linha['curso'] );
                array_push($arrayCandidato,$p);
            }
            return $arrayCandidato;
              
        }
    }
    $rpCandidato=new iCandidato();
?>