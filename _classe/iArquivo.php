<?php
    include_once('conexao.php');
    include_once('arquivo.php');

    interface repArquivo{
        public function cadastrar($arquivo);
        public function actualizar($arquivo);
        public function lista ($sql);
    }

    class iArquivo implements repArquivo{
        private $con;
        
        function __construct(){
            $this->con=new conexao("localhost","root","","concurso");
            $this->con->conectar();
        }

        public function cadastrar($arquivo){
            $id=$arquivo->getId();
            $idCandidato=$arquivo->getIdCandidato();
            $caminho=$arquivo->getCaminho();
            $tipo=$arquivo->getTipo();
            $sql="Insert into arquivo(idCandidato,caminho,tipo) values('$idCandidato', '$caminho', '$tipo' ) ";
            $this->$con->executar($sql);
        }

        public function actualizar($categoria){
            $id=$arquivo->getId();
            $idCandidato=$arquivo->getIdCandidato();
            $caminho=$arquivo->getCaminho();
            $tipo=$arquivo->getTipo();
            $sql="Update arquivo set idCandidato='$idCandidato' ,caminho='$caminho',tipo='$tipo' where id='$id' ";
            $this->$con->executar($sql);
        }

        public function lista($sql){
            $arrayArquivo=array();
            $lista=$this->$con->executar($sql);
            while($linha= mysqli_fecth_array($lista) ){
                $p=new categoria( $linha['id'],$linha['idCandidato'],$linha['caminho'],$linha['tipo'] );
                array_push($arrayArquivo,$p);
            }
            return $arrayArquivo;
              
        }
    }
    $rpArquivo=new iArquivo();
?>