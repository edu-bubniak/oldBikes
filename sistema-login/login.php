<!DOCTYPE html>
<html>
<head>
	<title>OldBikes</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Epilogue:wght@300;600&display=swap" rel="stylesheet"> 
	<link href="css/font-awesome.min.css" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet"> 
	<meta name="viewport" content="width=device-width;initial-scale=1.0;maximum-scale=1.0">
	<meta charset="UTF-8">
</head>
<body>
<header>
	<div class="container-header">
			
		<a href="../index.php"><div class="logo-desktop"></div></a>
			<nav class="nav-desktop">
				
				<ul>
					<li><a href="../index.php">Home</a></li>
					<li><a href="../loja.php">Loja</a></li>
					<li><a href="../sobre.php">Sobre</a></li>
					<li><a href="">Contato</a></li>
					<a href="login.php"><button>Faça seu login <i class="fa fa-angle-double-right"></i></button></a>
				</ul>
	
			</nav><!--dekstop-->
			</div><!--container-header-->
			<nav class="mobile">
				<a href="index.php"><div class="logo-mobile"></div></a>
				<h3><i class="fa fa-bars"></i></h3>
				<ul>
					<li><a href="../index.php">Home</a></li>
					<li><a href="../loja.php">Loja</a></li>
					<li><a href="../sobre.php">Sobre</a></li>
					<li><a href="">Contato</a></li>
					
				</ul>
				<a href="login.php"><button>Faça seu login <i id="arrow"class="fa fa-angle-double-right"></i></button></a>
				
			</nav><!--mobile-->
			<div class="clear"></div>
		
</header>

		
<link rel="stylesheet" type="text/css" href="../css/style.css">
<section class="login-css">
		<form method="POST" action="valida.php">
		<?php
			if(isset($_SESSION['msg'])){
				echo $_SESSION['msg'];
				unset($_SESSION['msg']);
			}
			if(isset($_SESSION['msgcad'])){
				echo $_SESSION['msgcad'];
				unset($_SESSION['msgcad']);
			}
		?>
		
			<h2>Faça seu login</h2>
			<label>Usuário</label>
			<input type="text" name="usuario" placeholder="Digite o seu usuário"><br><br>
			
			<label>Senha</label>
			<input type="password" name="senha" placeholder="Digite a sua senha"><br><br>
			
			<input type="submit" name="btnLogin" value="Acessar">
			
			<div class="lembretes" style="text-align: center;">
			<h4 >Você ainda não possui uma conta?</h4>
			<a style="color:#8cc7fa" href="cadastrar.php"><b>Cadastre-se agora</b></a>
			</div>
		</form>
</section>

<footer>
		<div class="container">
			<a href= "index.php"><div class="logo-footer"><img src="../images/logo-definitiva.png"></div></a>
			<div class="total-footer">
				<div class="onde-estamos">
					<h2>Onde estamos</h2>
						<p>Campo Largo/PR</p>
						<p>Rua Julio Razera, 420 - Rondinha</p>
						<p>CEP: 99999-999</p>
				</div>
				<div class="redes-sociais">
					<h2>Redes sociais</h2>
					<a href="http://facebook.com"><i class="fa fa-facebook"></i></a>
					<a href="http://instagram.com"><i class="fa fa-instagram"></i></a>
				</div>
				<div class="suporte">
					<h2>Suporte</h2>
					<a href="#">Fale conosco</a>
					<a href="#">Termos de uso</a>
					<a href="#">Política de Privacidade</a>
				</div>
			</div>
		</div><!--container-->
		<div class="clear"></div>
	</footer>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="js/functions.js"></script>
</html>