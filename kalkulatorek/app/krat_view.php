<?php //góra strony z szablonu 
include _ROOT_PATH.'/templates/top.php';
?>

<?php require_once dirname(__FILE__) .'/../config.php';?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
<meta charset="utf-8" />
<title>Kalkulator</title>
	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
</head>
<body>

	<div style="width:90%; margin: 2em auto; background-color: #C6CECE; width: 260px;border: 0.3em solid #aaa"><br>
	<div style="margin: 30px; padding: 7px; border-radius: 40px; background-color: #63D904; width:190px; text-align: center;border: 0.3em solid #aaa">
    <a href = "<?php print(_APP_ROOT); ?>/app/inna_chroniona.php" class="pure-button pure-button-active">
    Strona chroniona  </a>
	<br><br/>
    <a href="<?php print(_APP_ROOT); ?>/app/security/logout.php" class="pure-button pure-button-active"> Wyloguj</a>
		 
    
</div>
<div style="width:90%; margin: 2em auto;">

<form action="<?php print(_APP_URL);?>/app/krat.php" method="get">
	<label for="id_x">Kwota zaciągniętego kredytu: </label>
	<input id="id_x" type="text" name="x" value="<?php if (isset ($x)) print($x); ?>" /><br />
	<br/>
	<label for="id_y">Liczba lat: </label>
	<input id="id_y" type="text" name="y" value="<?php if (isset ($x)) print($y); ?>" /><br />
	<br/>
	<label for="id_y">Oprocentowanie: </label>
	<input id="id_z" type="text" name="z" value="<?php if (isset ($x)) print($z); ?>" /><br />
	<br/>
	<input type="submit" value="Oblicz ratę"/>
	
	<div style="text-align:center;">
	<br>
	<a href = "<?php print(_APP_ROOT); ?>/../kalkulatorek" class="pure-button pure-button-active">
    Zeruj </a>
	</div>
</form>	


<?php
//wyświeltenie listy błędów, jeśli istnieją
if (isset($messages)) {
	if (count ( $messages ) > 0) {
		echo '<ol style="margin: 5px; padding: 15px 3px 15px 25px; border-radius: 5px; background-color: #f88; width:200px;">';
		foreach ( $messages as $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}
}

?>
<br/>
<?php if (isset($result)){ ?>
<div style="margin: 30px; padding: 7px; border-radius: 40px; background-color: #50BE00; width:160px;text-align: center;">
<?php echo 'Wynik: '.$result; ?>

</div>
<br/>
<?php } ?>

</div>
<?php //dół strony z szablonu 
include _ROOT_PATH.'/templates/bottom.php';
?>
</body>

</html>