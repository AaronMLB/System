<h1>British Comedy Guide v4</h1>
<h4>Attempting MySQL connection from PHP.</h4>
<?php
$host = 'mysql';
$user = 'bcg_site';
$pass = 'yfv(%&gdsa5B';

$options = [
	PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
	PDO::ATTR_STRINGIFY_FETCHES => false,
];

try {
	$DB = new PDO('mysql:host=' . $host . ';charset=utf8', $user, $pass, $options);
}
catch ( PDOException $Exception ) {
	var_dump($Exception);
	exit;
}

mb_internal_encoding('UTF-8');
mb_http_output('UTF-8');