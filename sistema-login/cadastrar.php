<!DOCTYPE html>
<html lang="pt-br">
	<head>
	<title>OldBikes</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Epilogue:wght@300;600&display=swap" rel="stylesheet"> 
	<link href="css/font-awesome.min.css" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet"> 
	<meta name="viewport" content="width=device-width;initial-scale=1.0;maximum-scale=1.0">
	<meta charset="UTF-8">
</head>
<?php
session_start();
ob_start();
$btnCadUsuario = filter_input(INPUT_POST, 'btnCadUsuario', FILTER_SANITIZE_STRING);
if($btnCadUsuario){
	include_once 'conexao.php';
	$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
	//var_dump($dados);
	$dados['senha'] = password_hash($dados['senha'], PASSWORD_DEFAULT);
	
	$result_usuario = "INSERT INTO usuarios (nome, email, usuario, senha) VALUES (
					'" .$dados['nome']. "',
					'" .$dados['email']. "',
					'" .$dados['usuario']. "',
					'" .$dados['senha']. "'
					)";
	$resultado_usario = mysqli_query($conn, $result_usuario);
	if(mysqli_insert_id($conn)){
		$_SESSION['msgcad'] = "<p class='php-session-deslog'>Usuário cadastrado com sucesso</p>";
		header("Location: login.php");
	}else{
		$_SESSION['msg'] = "<p class='php-session'>Erro ao cadastrar o usuário</p>";
	}
}
?>
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

		<section class="login-css">
		<h2>Cadastro</h2>
		<?php
			if(isset($_SESSION['msg'])){
				echo $_SESSION['msg'];
				unset($_SESSION['msg']);
			}
		?>
		<form method="POST" action="">
			<label>Nome</label>
			<input required type="text" name="nome" placeholder="Digite o nome e o sobrenome"><br><br>
			
			<label>E-mail</label>
			<input required type="text" name="email" placeholder="Digite o seu e-mail"><br><br>
			
			<label>Usuário</label>
			<input required type="text" name="usuario" placeholder="Digite o usuário"><br><br>
			
			<label>Senha</label>
			<input required type="password" name="senha" placeholder="Digite a senha"><br><br>
			
			<input type="submit" name="btnCadUsuario" value="Cadastrar"><br><br>
			<div class="lembretes" style="text-align: center;">
			<p><b>Lembrou? <a style="color:#8cc7fa;" href="login.php">Clique aqui</a> para logar</b></p>
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

	</body>
</html>