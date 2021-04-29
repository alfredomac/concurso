<?php
    include_once('conexao.php');
    include_once('habilitacao.php');

    interface repHabilitacao{
        public function cadastrar($habilitacao);
        public function actualizar($habilitacao);
        public function lista ($sql);
    }

    class iHabilitacao implements repHabilitacao{
        private $con;
        
        function __construct(){
            $this->con=new conexao("localhost","root","","concurso");
            $this->con->conectar();
        }

        public function cadastrar($habilitacao){
            $id=$habilitacao->getId();
            $descricao=$habilitacao->getDescricao();
            $sql="Insert into habilitacao(descricao) values('$descricao') ";
            $this->$con->executar($sql);
        }

        public function actualizar($habilitacao){
            $id=$habilitacao->getId();
            $descricao=$habilitacao->getDescricao();
            $sql="Update habilitacao set  descricao='$descricao' where id='$id' ";
            $this->$con->executar($sql);
        }

        public function lista($sql){
            $arrayHabilitacao=array();
            $lista=$this->$con->executar($sql);
            while($linha= mysqli_fecth_array($lista) ){
                $p=new habilitacao( $linha['id'],$linha['descricao']);
                array_push($arrayHabilitacao,$p);
            }
            return $arrayHabilitacao;

        }
    }
    $rpHabilitacao=new iHabilitacao();
?>