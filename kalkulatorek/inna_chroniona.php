<?php
require_once dirname(__FILE__).'/config.php';
//ochrona widoku
include _ROOT_PATH.'/security/check.php';
?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
	<meta charset="utf-8" />
	<title>Chroniona strona</title>
	<link rel="stylesheet" href="../css/main.css">
</head>
<body>

<div style="width:90%; margin: 2em auto;">
	<a href="<?php print(_APP_ROOT); ?>/../kalkulatorek" class="pure-button">Powrót do kalkulatora</a><br>
	<a href="<?php print(_APP_ROOT); ?>/security/logout.php" class="pure-button pure-button-active">Wyloguj</a>
</div>

<div style="width:90%; margin: 2em auto;">
	<p>STRONA JEST CHRONIONA :O</p>
</div>	

</body>
</html>