
<?php
    include 'iCandidato.php';

    $linha=new candidato( '0',$_REQUEST['idCategoria'],$_REQUEST['idMunicipio'],$_REQUEST['idHabilitacao'], $_REQUEST['nome'] ,$_REQUEST['bi'],$_REQUEST['dataNascimento'],$_REQUEST['sexo'],,$_REQUEST['email'] ,$_REQUEST['telefone'] ,$_REQUEST['morada'] ,$_REQUEST['curso']);

    $sql="Select * from candidato"
    $candidatos=$rpCandidato->lista();
    $v=0;
    while($lista=array_shift($candidatos)){
        if ( $lista->getBi()== $linha->getBi() ) {
            $v=1; /* Se  tiver um nº do BI igual */
        }
    }


    if  ( $v==0 ){
      $rpCandidato->cadastrar($linha);
    }else{
        $rpCandidato->cadastrar($linha);
    }
   //header('Location: ../cad_aluno.php ');
    exit;
?>