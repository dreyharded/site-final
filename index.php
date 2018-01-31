<?php
$link = mysql_connect('localhost','root','');
if(!$link)
{
	die('nao foi possivel conectar: ' .mysql_error());

}

echo "conecao bem sucedida <br/>";

$db_selected = mysql_select_db('meusite', $link);
if (!$db_selected) {
	
	die('banco nao encontrado: ' .mysql_error()); 
}
$result = mysql_query('SELECT * from produtos WHERE 1=1');
if (!$result) {
    die('consulta invalida: ' . mysql_error());
}

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>bik craft</title>
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/styles.css">
	<script src="js/animacao.js"></script>
</head>
<body>

<header class="header">	
<?php include_once ('cabecalho.php'); ?>
</header>

	<section class="row introducao">
		<div class="container animated fadeInDown">
			<h1>Bicicletas Feitas a Mão</h1>
			<blockquote class="quote-externo">
				<p>"não tenha nada em sua casa que voce
				não considere útil ou acredita ser bonito"</p>
				<cite>WILLIAM MORRIS</cite>
			</blockquote>
			<a href="produtos.html" class="btn botao">Orçamento</a>
		</div>
	</section>
    <?php
	while ($row = mysql_fetch_assoc($result)) {
	
	echo $row['modelo'];
	echo "<br/>";
	echo $row['marca'];
	echo "<br/>";
	echo $row['descricao'];
	echo "<br/>";
	}
	?>
	
	<section class="container produtos animated fadeInDown">
		<h2 class="subtitulo">Produtos</h2>
		<ul class="produtos_lista">
			<li class="col-md-4 col-sm-4 col-xs-12">
				<div class="produtos_lista_icone animar-interno1">
					<div class="produtos_icone">
						<img src="img/produtos/passeio.png" alt="Bicicleta Passeio">
					</div>
					<h3>Passeio</h3>
					<p>Muito melhor do que passear pela orla a vidros fechados.</p>
				</div>
			</li>
			<li class="col-md-4 col-sm-4 col-xs-12">
				<div class="produtos_lista_icone animar-interno2">
					<div class="produtos_icone">
						<img src="img/produtos/esporte.png" alt="Bicicleta Esporte">
					</div>
					<h3>Esporte</h3>
					<p>Mais rápida do que Forrest Gump, ninguém vai pegar você.</p>
				</div>	
			</li>
			<li class="col-md-4 col-sm-4 col-xs-12">
				<div class="produtos_lista_icone animar-interno3">
					<div class="produtos_icone">
						<img src="img/produtos/retro.png" alt="Bicicleta Retrô">
					</div>
					<h3>Retrô</h3>
					<p>O passado volta para lembrarmos o que devemos fazer no futuro.</p>
				</div>	
			</li>
		</ul>
		<div class="call">
			<p>clique aqui e veja os detalhes dos produtos</p>
			<a href="produtos.html" class="btn botao botao-preto">Produtos</a>
		</div>
	</section>	
	<section class="row portfolio">
		<div class="container">
			<h2 class="subtitulo">Portfólio</h2>
				<div class="portfolio_lista">
					<div class="col-md-6 col-sm-6 col-xs-12">
						<img src="img/portfolio/passeio.jpg" class="img-rounded" 
						alt="Bicicleta Passeio">
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12">
						<img src="img/portfolio/retro.jpg" class="img-rounded"	
						alt="Bicicleta Retrô">
					</div>
					<div class="col-md-12 col-sm-12 col-xs-12">
						<img src="img/portfolio/esporte.jpg" class="img-rounded" 
						alt="Bicicleta Esporte">
					</div>	
				</div>	
			<div class="call">
				<p>conheça mais o nosso portfólio</p>
				<a href="portfolio.html" class="btn botao">Portfólio</a>
			</div>
		</div>
	</section>
	<section class="qualidade container">
		<h2 class="subtitulo">Qualidade</h2>
		<img src="img/bikcraft-qualidade.png" alt="Bikcraft">
		<!-- ul.qualidade_lista>li.col-md-6*3>h3+p -->
		<ul class="qualidade_lista">
			<li class="col-md-4">
				<h3>Durabilidade</h3>
				<p></p>
			</li>
			<li class="col-md-4">
				<h3>Design</h3>
				<p></p>
			</li>
			<li class="col-md-4">
				<h3>Sustentabilidade</h3>
				<p></p>
			</li>
		</ul>
			<div class="call">
				<p>conheça mais a nossa história</p>
				<a href="sobre.html" class="btn botao botao-preto">Sobre</a>
			</div>

	</section>

	<footer class="">
		<div class="footer">
			<div class="container">
				<div class="footer_historia col-md-4">
                  <h3 >nossa historia</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis ab eius non velit, itaque, quo quaerat recusandae! Assumenda magni, odit accusantium incidunt placeat, eveniet eligendi dignissimos error quae pariatur, dolor?</p>
					
				</div>
                <div class="footer_contato col-md-4">
                	<h3>contato</h3>
                <ul>
                	<li>21 9988-7766</li>
                	<li>contato@bickaft.com</li>
                	<li>botafogo-R3</li>
                </ul>
                </div>
                <div class="footer_redes col-md-4">
                	<h3>redes socias</h3>
                	<ul>
                		<li ><a href="#"><img src="img/redes-sociais/facebook.png" alt="facebook"></a></li>
                		<li ><a href="#"><img src="img/redes-sociais/instagram.png" alt="instagram"></a></li>
                		<li ><a href="#"><img src="img/redes-sociais/twitter.png" alt="twitter"></a></li>
                	</ul>
                </div>
			</div>
		</div>
		<div class="copy">
			<div class="container">
				<p> bickcraft 2017 - alguns diretos </p>
			</div>
		</div>
	</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>	


</body>
</html>

				
			

      

			