<?php
    include_once('conexao.php');
    include_once('usuario.php');

    interface repUsuario{
        public function cadastrar($categoria);
        public function actualizar($categoria);
        public function lista ($sql);
    }

    class iUsuario implements repUsuario{
        private $con;
        
        function __construct(){
            $this->con=new conexao("localhost","root","","concurso");
            $this->con->conectar();
        }

        public function cadastrar($usuario){
            $id=$usuario->getId();
            $nome=$usuario->getNome();
            $senha=$usuario->getSenha();
            $nivel=$usuario->getNivel();
            $sql="Insert into usuario(nome,senha,nivel) values('$nome', '$senha' , '$nivel') ";
            $this->$con->executar($sql);
        }

        public function actualizar($categoria){
            $id=$usuario->getId();
            $nome=$usuario->getNome();
            $senha=$usuario->getSenha();
            $nivel=$usuario->getNivel();
            $sql="Insert usuario set nome='$nome',senha='$senha',nivel='$nivel' where id='$id' ";
            $this->$con->executar($sql);
        }

        public function lista($sql){
            $arrayUsuario=array();
            $lista=$this->$con->executar($sql);
            while($linha= mysqli_fecth_array($lista) ){
                $p=new usuario( $linha['id'],$linha['nome'],$linha['senha'],$linha['nivel'] );
                array_push($arrayUsuario,$p);
            }
            return $arrayUsuario;

        }
    }
    $rpUsuario=new iUsuario();
?>