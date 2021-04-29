<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Cesar Szpak - Celke">
    <link rel="icon" href="imagens/favicon.ico">

    <title>CONCURSO PÚBLICO/CC</title>
    <link href="adm/css/bootstrap.css" rel="stylesheet">
    <link href="adm/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="adm/css/signin.css" rel="stylesheet">
    <script src="adm/js/ie-emulation-modes-warning.js"></script>
  </head>

  <body>

  
  <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
		<div class="container-fluid">
			<div class="navbar-header">

				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">CONCURSO PÚBLICO - CC | </a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					
				<li><a href="adm/index.php">ENTRAR</a></li>
						

				</ul>
			</div><!--/.nav-collapse -->
		</div>
    </nav>
	
    

    <div class="container theme-showcase" role="main" >

  <div class="well">

    

    <div class="page-header text-center">
        <h1>CANDIDATURA PARA O CONCURSO PÚBLICO DO REGIME GERAL/2021 - CUANDO CUBANGO </h1>
    </div>
    
    <form name="CadObs" class="form-horizontal" action="_classe/opCandidato.php" method="post" enctype="multipart/form-data">
       
	 	
     
    <div class="form-group">
            <label class="col-sm-2 control-label">Nome:</label>
            <div class="col-sm-4">
                <input type="text"  class="form-control" name="nome" placeholder="Nome Completo"></div>
        </div>
     
      <div class="form-group">
            <label class="col-sm-2 control-label">N.º BI:</label>
            <div class="col-sm-5">
                <input type="text"  class="form-control" name="bi" placeholder="Número do Bilhete de Identidade"></div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label">DataNascimento:</label>
            <div class="col-sm-5">
                <input type="date"  class="form-control" name="dataNascimento" placeholder="Data de Nascimento"></div>
        </div>
    
 			<div class="form-group">
            	<label class="col-sm-2 control-label">Morada:</label>
            	<div class="col-sm-5">
                	<input type="text"  class="form-control" name="morada" placeholder="Bairro/rua/aldeia"></div>
        	</div>
        

          <div class="form-group">
            	<label class="col-sm-2 control-label">Província:</label>
            	<div class="col-sm-5">
                	<input type="text"  class="form-control" name="provincia" placeholder="Naturalidade"></div>
        	</div>


          <div class="form-group">
            	<label class="col-sm-2 control-label">País:</label>
            	<div class="col-sm-5">
                	<input type="text"  class="form-control" name="pais" placeholder="País onde nasceu"></div>
        	</div>


			<div class="form-group">
            	<label class="col-sm-2 control-label">Telefone:</label>
            	<div class="col-sm-5">
                	<input type="text"  class="form-control" name="telefone" placeholder="Contacto Telefonico"></div>
        	</div>

			<div class="form-group">
            	<label class="col-sm-2 control-label">E-mail:</label>
            	<div class="col-sm-5">
                	<input type="email" class="form-control" name="email" placeholder="Correio Electronico"></div>
        	</div>

          <div class="form-group">
            	<label class="col-sm-2 control-label">Curso de Formação:</label>
            	<div class="col-sm-5">
                	<input type="text"  class="form-control" name="curso" placeholder="Curso feito na escola/faculdade"></div>
        	</div>


          


          <hr>

              <div class="form-group">

              <label class="col-sm-2 control-label">H. Literarias:</label>
            	
              <div class="col-sm-5">
                	
                    <select class="form-control form-select-lg mb-3" name="idHabilitacao" aria-label="Default select example">
                    <option selected>Seleciona o teu nivel academico</option>
                    <option value="Licenciado">Licenciado/a</option>
                    <option value="Técnico Médio">Técnico(a) Médio(a)</option>
                    <option value="9ª Classe">9ª Classe</option>
              </div>

            </select>

        </div> <br><br><br>



        <div class="form-group">

              <label class="col-sm-2 control-label"> Categoria:</label>
            	
              <div class="col-sm-5">
                	
                    <select class="form-control form-select-lg mb-3"  name="idCategoria" aria-label="Default select example">
                    <option selected>Seleciona a categoria a se candidatar</option>
                    <option value="Técnico Superior de 2ª Classe">Técnico Superior de 2ª Classe</option>
                    <option value="Técnico Médio de 3ª Classe ">Técnico Médio de 3ª Classe</option>
                    <option value="Escriturário Dactlografo">Escriturário Dactilografo</option>

            </div>
            </select>

        </div> <br><br><br>



        <div class="form-group">

<label class="col-sm-2 control-label"> Município:</label>

<div class="col-sm-5">
    
      <select class="form-control form-select-lg mb-3" name="idMunicipio" aria-label="Default select example">
      <option selected>Seleciona o Município a se candidatar</option>
      <option value="Menongue">Menongue</option>
      <option value="Cuchi">Cuchi</option>
      <option value="Cuito Cuanavale">Cuito Cuanavale</option>
      <option value="Nancova">Nancova</option>
      <option value="Dirico">Dirico</option>
      <option value="Cuangar">Cuangar</option>
      <option value="Calai">Calai</option>
      <option value="Mavinga">Mavinga</option>
      <option value="Rivungo">Rivungo</option>

</div>
</select>

</div> <br><br><br>


<div class="form-group">

              <label class="col-sm-2 control-label"> Sexo:</label>
            	
              <div class="col-sm-5">
                	
                    <select class="form-control form-select-lg mb-3" name="sexo" aria-label="Default select example">
                    <option selected>Seleciona o genero</option>
                    <option value="Masculino">Masculino</option>
                    <option value="Feminino">Feminino</option>

              </div>
                    
            </select>

        </div> <br><br><br>

<hr>


<div class="form-group">

<label class="col-sm-2 control-label"> Anexo1:</label>

  <div class="col-sm-5">


        <label for="formFile" class="form-label">Carrega o Requerimento</label>
        <input class="form-control" type="file" id="formFile">


  </div>


</div>


<div class="form-group">

<label class="col-sm-2 control-label"> Anexo2:</label>

  <div class="col-sm-5">

        <label for="formFile" class="form-label">Carrega a Cópia do BI</label>
        <input class="form-control" type="file" id="formFile">

  </div>

</div>


<div class="form-group">

<label class="col-sm-2 control-label"> Anexo3:</label>

  <div class="col-sm-5">

        <label for="formFile" class="form-label">Carrega o Certificado</label>
        <input class="form-control" type="file" id="formFile">

  </div>

</div>


<div class="form-group">

<label class="col-sm-2 control-label"> Anexo4:</label>

  <div class="col-sm-5">

        <label for="formFile" class="form-label">Carrega o Recenseamento Militar</label>
        <input class="form-control" type="file" id="formFile">

  </div>

</div>














       <div class="form-group">
            	
        	</div>
       

        <div class="form-group">

            <div class="col-sm-offset-2 col-sm-10">
                <input type="submit" class="btn btn-sm btn-success" value="Cadastrar" name="SendCadObs">
            </div>
        </div>
    </form>
    
 </div>
</div>
























    <script src="adm/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
