<?php

include "conexao/conexao.php";

    $pdo = conectar();
//Desativar o Display Error
    ini_set("Display_errors",0);
    error_reporting(0);

//Chamada dos Valores Via POST

        $nome =  addslashes($_POST["nome"]);
        $apelido = addslashes($_POST["apelido"]);
		$morada = addslashes($_POST["morada"]);
		$provincia = addslashes($_POST["provincia"]);
		$pais = addslashes($_POST["pais"]);
		$telefone = addslashes($_POST["telefone"]);
		$email = addslashes($_POST["email"]);
		$curso = addslashes($_POST["curso"]);
		$habilitacao = addslashes($_POST["habilitacao"]);
		$bi = addslashes($_POST["bi"]);
        $data_nasc = addslashes($_POST["data_nasc"]); 
		$categoria = addslashes($_POST["categoria"]);
        $municipio = addslashes($_POST["municipio"]);        
        $sexo = addslashes($_POST["sexo"]);
       

//Inserir_Aluno

    $inserir_aluno = 'INSERT INTO candidato(nome,apelido,morada,provincia,pais,telefone,email,curso,habilitacao,bi,data_nasc,categoria,municipio,sexo) VALUES (:nome,:apelido,:morada,:provincia,:pais,:telefone,:email,:curso,:habilitacao,:bi,:data_nasc,:categoria,:municipio,:sexo)';

    $stmt = $pdo->prepare($inserir_aluno);

    $stmt->execute(['nome' => $nome,'apelido' => $apelido,'morada' => $morada,'provincia' => $provincia,'pais' => $pais,'telefone' => $telefone,'email' => $email,'curso' => $curso,'habilitacao' => $habilitacao,'bi' => $bi,'data_nasc' => $data_nasc,'categoria' => $categoria,'municipio' => $municipio,'sexo' => $sexo,]);



	$id = "1";
	$result_usuario = "SELECT * FROM usuarios WHERE id = '$id' LIMIT 1";
	$resultado_usuario = mysqli_query($conn, $result_usuario);	
	$row_usuario = mysqli_fetch_assoc($resultado_usuario);	
	
	
?>


<script>
    alert("Inscricao Feita com Sucesso");
    location.href='gerar_pdf.php';
</script>














