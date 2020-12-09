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
<?php require_once 'componentes-site/header.php'?>

			<section class="bg-sobre">
				<div class="container">
						<div class="img-bike"><h2>OldBikes</h2><img src="images/bike-definitivo.png"></div><!--img-bike-->
						<div class="sobre-bike">
							<h2>De volta aos velhos tempos</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
							<button id="dois">Comprar <i id="arrow1"class="fa fa-angle-double-right"></i></button>
							<button id="um" >Vender <i id="arrow2" class="fa fa-angle-right"></i></button>
							<button id="tres">Monte sua Bike <i id="arrow"class="fa fa-angle-double-right"></i></button>
						</div><!--sobre-->
				</div><!--container-->
				<div class="clear"></div><!--clear-->
			</section><!--bg-sobre-->

			<section class="destaques">
				<h2>Destaques semanais</h2>
					<div class="destaque-wraper">
						<img src="images/foto1.jpeg">
						<h2>Monark</h2>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
						<input type="submit" value="Comprar">
					</div><!--destaque-wraper-->

					<div class="destaque-wraper">
						<img src="images/foto1.jpeg">
						<h2>Monark</h2>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
						<input type="submit" value="Comprar">
					</div><!--destaque-wraper-->

					<div class="destaque-wraper">
						<img src="images/foto1.jpeg">
						<h2>Monark</h2>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
						<input type="submit" value="Comprar">
					</div><!--destaque-wraper-->
					<div class="clear"></div>
				</section>


		<section class="social">
			<div class="instagram-chamada">
			<a href="http://instagram.com"><i class="fa fa-instagram"></i></a>
			<p>Acesse o nosso Instagram<br />
			@instagram</p>
		</div><!--instagram-chamada-->

		<div class="parallax">
			<div class="container">
				<form>
					<h2>Contato</h2>
					<div class="form-wraper w100">
						<span>Nome:</span>
						<input placeholder="" name="nome" type="text" />
					</div><!--form-wraper-->
					<div class="form-wraper w50">
						<span>E-mail:</span>
						<input placeholder="" name="e-mail" type="text" />
					</div><!--form-wraper-->
					<div class="form-wraper w50">
						<span>Telefone:</span>
						<input placeholder="" name="e-mail" type="text" />
					</div><!--form-wraper-->
					<div class="form-wraper w100">
						<span>Mensagem:</span>
						<textarea placeholder=""></textarea>
					</div><!--form-wraper-->
					<div class="form-wraper w100" style="text-align: center;">
						<input type="submit" name="acao" value="Enviar">
					</div><!--form-wraper-->
				</form>
			</div><!--container-->
			<div class="clear"></div>
		</div><!--parallax-->

		<div class="facebook-chamada">
			<a href="http://facebook.com"><i class="fa fa-facebook"></i></a>
			<p>Acesse o nosso Facebook<br />
			facebook</p>
		</div>
		<div class="clear"></div>
	</section><!--social-->

	

	<?php require_once 'componentes-site/footer.php'; ?>
	<p class="direitos">Todos os direitos reservados™</p>	

	

<script src="js/jquery.js"></script>
<script src="js/functions.js"></script>
</body>
</html>