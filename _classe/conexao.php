<?php

class conexao{
    private $host;
    private $user;
    private $senha;
    private $banco;
    private $conex;
    function __construct($host,$user,$senha,$banco){
        $this->host=$host;
        $this->user=$user;
        $this->senha=$senha;
        $this->banco=$banco;
    }

    function conectar(){
        $this->conex=mysqli_connect($this->host,$this->user,$this->senha,$this->banco);

        if(mysqli_connect_error($this->conex)){
            return false;
        }else{

            mysqli_query($this->conex,"SET NAMES 'utf8'; ");
            return true;
        }
    }
    function executar($sql){
        return mysqli_query($this->conex,$sql);
    }
}
?>