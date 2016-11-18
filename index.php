<?php
	$page = "home";
	if (isSet($_GET["page"]))
		$page = $_GET["page"];

	$pages = array (
			"home" => "Home",
			"about-us" => "About Us",
			"services" => "Services",
			"contact" => "Contact"
	);

	$pagesKeys = array_keys($pages);

	$templates = "../tmpl";

	$form = array (
		"nome" => "Nome",
		"cognome" => "Cognome"
	);
?>

<!DOCTYPE html>
<html>

<head>
	<title>Webbing x2</title>
	<link rel="stylesheet" type="text/css" href="style/style.css">
	<link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700" rel="stylesheet">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>


</head>

<body>
	<div id="header">
		<div class="container">

			<did id="logo">
				<h1>Logo Here</h1>
			</did>

			<nav>
				<ul>
					<?php foreach ($pages as $k => $v) :?>
					<li>
						<a
								<?php if($k == $page) :?>
									class="active"
								<?php endif; ?>
								href="index.php?page=<?php echo $k;?>" data-classe="immagine-b"> <?php echo "<span>".$v."</span>"; ?>
						</a>
					</li>
				<?php endforeach; ?>
				</ul>
			</nav>

		</div>
	</div>

	<div id="slideshow" class="immagine-a">
		<div class="button">
			<a href="#"><strong> Inizia ora</strong></a>
		</div>
	</div>

	<div class="content">
		<div class="container">
			<?php
				$page = isSet($_GET["page"]) ? $_GET["page"] : $pagesKeys[0];
				echo file_get_contents("tmpl/".$page.".html");
			?>
		</div>
		<!-- Fine Container -->
	</div>
	<!-- Fine Content -->

	<div id="footer">
		<div class="container">

			<form method="post" action="registrazione.php" class="form">
				<h2>Inscriviti alla nostra newsletter</h2>

				<?php foreach($form as $k => $v){
					echo "<input type=\"text\" name=\"$k\" placeholder=\"$v\" data-validation=\"length\"
					data-validation-length=\"min4\" > ";
				}?>

				<input type="email" name="email" autocomplete="on" placeholder="E-mail" class="required">
				<input type="submit" value="Iscriviti">
			</form>
		</div>
	</div>


	<script>
	  $.validate();
	</script>

</body>

</html>
