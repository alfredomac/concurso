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

    <title>Area Restrita</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="css/signin.css" rel="stylesheet">
    <script src="js/ie-emulation-modes-warning.js"></script>
  </head>

  <body>

  <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
		<div class="container-fluid">
			<div class="navbar-header">

				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">CONCURSO PÚBLICO - CC | </a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					
				<li><a href="../index.php">VOLTAR</a></li>
						

				</ul>
			</div><!--/.nav-collapse -->
		</div>
    </nav>

  <div class="container theme-showcase" role="main" >

<div class="well">

    

    <div class="page-header text-center">
        <h1>CANDIDATURA PARA O CONCURSO PÚBLICO DO REGIME GERAL/2021 - CUANDO CUBANGO</h1>
    </div>
    


    <div class="container">

      <form class="form-signin" method="POST" action="valida.php">
        
        <label for="inputEmail" class="sr-only">Usuário</label>
        <input type="email" name="txt_usuario" id="inputEmail" class="form-control" placeholder="Usuário" required autofocus>
        <label for="inputPassword" class="sr-only">Senha</label>
        <input type="password" name="txt_senha" id="inputPassword" class="form-control" placeholder="Senha" required>
        <button class="btn btn-lg btn-danger btn-block" type="submit">Acessar</button>
		<p class="text-center text-danger">
			<?php if(isset($_SESSION['loginErro'])){
				echo $_SESSION['loginErro'];
				unset ($_SESSION['loginErro']);
			}?>
		</p>
		<p class="text-center text-success">
			<?php if(isset($_SESSION['loginDeslogado'])){
				echo $_SESSION['loginDeslogado'];
				unset ($_SESSION['loginDeslogado']);
			}?>
		</p>
      </form>
    </div> <!-- /container -->
    
    
 </div>
</div>














    
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>









