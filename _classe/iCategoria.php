<?php
    include_once('conexao.php');
    include_once('categoria.php');

    interface repCategoria{
        public function cadastrar($categoria);
        public function actualizar($categoria);
        public function lista ($sql);
    }

    class iCategoria implements repCategoria{
        private $con;
        
        function __construct(){
            $this->con=new conexao("localhost","root","","concurso");
            $this->con->conectar();
        }

        public function cadastrar($categoria){
            $id=$categoria->getId();
            $descricao=$categoria->getDescricao();
            $vagas=$categoria->getVagas();
            $sql="Insert into categoria(descricao,vagas) values('$descricao', '$vagas' ) ";
            $this->$con->executar($sql);
        }

        public function actualizar($categoria){
            $id=$categoria->getId();
            $descricao=$categoria->getDescricao();
            $vagas=$categoria->getVagas();
            $sql="Update categoria set  descricao='$descricao', vagas='$vagas' where id='$id' ";
            $this->$con->executar($sql);
        }

        public function lista($sql){
            $arrayCategoria=array();
            $lista=$this->$con->executar($sql);
            while($linha= mysqli_fecth_array($lista) ){
                $p=new categoria( $linha['id'],$linha['descricao'],$linha['vagas'] );
                array_push($arrayCategoria,$p);
            }
            return $arrayCategoria;

        }
    }
    $rpCategoria=new iCategoria();
?>