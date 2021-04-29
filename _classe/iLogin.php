<?php
    include_once('conexao.php');
    include_once('login.php');

    interface repLogin{
        public function cadastrar($login);
        public function actualizar($login);
        public function lista ($sql);
    }

    class iLogin implements repLogin{
        private $con;
        
        function __construct(){
            $this->con=new conexao("localhost","root","","concurso");
            $this->con->conectar();
        }

        public function cadastrar($login){
            $id=$login->getId();
            $idUsuario=$login->getIdUsuario();
            $entrada=$login->getEntrada();
            $saida=$login->getSaida();
            $sql="Insert into login(idUsuario) values('$idUsuario' ) ";
            $this->$con->executar($sql);
        }

        public function actualizar($categoria){
            $id=$login->getId();
            $idUsuario=$login->getIdUsuario();
            $entrada=$login->getEntrada();
            $saida=$login->getSaida();
            $sql="Update login set idUsuario='$idUsuario', entrada='$entrada', saida='$saida' where id='$id' ";
            $this->$con->executar($sql);
        }

        public function lista($sql){
            $arrayLogin=array();
            $lista=$this->$con->executar($sql);
            while($linha= mysqli_fecth_array($lista) ){
                $p=new login( $linha['id'],$linha['idUsuario'],$linha['entrada'],$linha['saida'] );
                array_push($arrayLogin,$p);
            }
            return $arrayLogin;

        }
    }
    $rpLogin=new iLogin();
?>