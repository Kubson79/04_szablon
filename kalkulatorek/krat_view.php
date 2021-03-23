<!DOCTYPE HTML>
<!--
	Aerial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Aerial by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
		<div id="wrapper">
			<div id="bg"></div>
			<div id="overlay"></div>
			<div id="main">

				<!-- Header -->
					<header id="header">
						<h1>Kalkulator rat</h1>
						<a href = "<?php print(_APP_ROOT); ?>/inna_chroniona.php" class="pure-button pure-button-active"id="button">
    Strona chroniona  </a><br>
	
	
	<form action="<?php print(_APP_URL);?>/krat.php" method="get"><br>
	<label for="id_x">Kwota zaciągniętego kredytu: </label>
	<input style="color:green";id="id_x" type="text" name="x" value="<?php if (isset ($x)) print($x); ?>" /><br />
	<br/>
	<label for="id_y">Liczba lat: </label>
	<input style="color:green";id="id_y" type="text" name="y" value="<?php if (isset ($x)) print($y); ?>" /><br />
	<br/>
	<label for="id_y">Oprocentowanie: </label>
	<input style="color:green";id="id_z" type="text" name="z" value="<?php if (isset ($x)) print($z); ?>" /><br />
	<br/>
	<input type="submit"; style=" background-color: #C2F3F4;color: green" value="Oblicz ratę"/>
	
	<div style="text-align:center;">
	<br>
	<a href = "<?php print(_APP_ROOT); ?>" class="pure-button pure-button-active">
    Zeruj </a>
	
	
	</div><br>
</form>	

				<?php
                                        //wyświeltenie listy błędów, jeśli istnieją
                                        if (isset($messages)) {
                                            if (count ( $messages ) > 0) {
                                                echo '<ol style="margin-left:40%; padding: 1em 1em 1em 2em; border-radius: 10px; background-color: #E97451; width:20%; height:auto; color:white; font-weight:bold;">';
                                                foreach ( $messages as $msg ) {
                                                    echo '<li>'.$msg.'</li>';
                                                }
                                                echo '</ol>';
                                            }
                                        }
                                        ?>

                                        <?php if (isset($result)){ ?>
                                        <div style="margin-left:40%; padding: 1em; border-radius: 10px; background-color: #E97451; width:20%; height:5.5em; color:white; font-weight:bold; text-align: center;">
                                        <?php echo 'Wynik: '.$result; ?>
                                        </div>
                                        <?php } ?>
                                    </div>

			</div>
		</div>
		<script>
			window.onload = function() { document.body.classList.remove('is-preload'); }
			window.ontouchmove = function() { return false; }
			window.onorientationchange = function() { document.body.scrollTop = 0; }
		</script>
	</body>
</html>