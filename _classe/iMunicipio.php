<?php
    include_once('conexao.php');
    include_once('municipio.php');

    interface repMunicipio{
        public function cadastrar($municipio);
        public function actualizar($municipio);
        public function lista ($sql);
    }

    class iMunicipio implements repMunicipio{
        private $con;
        
        function __construct(){
            $this->con=new conexao("localhost","root","","concurso");
            $this->con->conectar();
        }

        public function cadastrar($municipio){
            $id=$municipio->getId();
            $descricao=$municipio->getDescricao();
            $vagasTM=$municipio->getVagasTM();
            $vagasTS=$municipio->getVagasTS();
            $vagasES=$municipio->getVagasES();
            $sql="Insert into municipio(descricao,vagasTM,vagasTS,vagasES) values($descricao', '$vagasTM','$vagasTS','$vagasES' ) ";
            $this->$con->executar($sql);
        }

        public function actualizar($categoria){
            $id=$municipio->getId();
            $descricao=$municipio->getDescricao();
            $vagasTM=$municipio->getVagasTM();
            $vagasTS=$municipio->getVagasTS();
            $vagasES=$municipio->getVagasES();
            $sql="Update municipio set descricao='$descricao',vagasTM='$vagasTM',vagasTS='$vagasTS',vagasES='$vagasES' where id='$id' ";
            $this->$con->executar($sql);
        }

        public function lista($sql){
            $arrayMunicipio=array();
            $lista=$this->$con->executar($sql);
            while($linha= mysqli_fecth_array($lista) ){
                $p=new municipio( $linha['id'],$linha['descricao'],$linha['vagasTM'],$linha['vagasTS'],$linha['vagasES']);
                array_push($arrayMunicipio,$p);
            }
            return $arrayMunicipio;
              
        }
    }
    $rpMunicipio=new iMunicipio();
?>