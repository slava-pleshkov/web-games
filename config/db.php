<?php
$host = $username = $password = $dbname = '';

$url = parse_url(getenv("CLEARDB_DATABASE_URL"));
if (isset($url["host"]) && isset($url["user"]) && isset($url["pass"]) && isset($url["path"])) {
	$host = $url["host"];
	$username = $url["user"];
	$password = $url["pass"];
	$dbname = substr($url["path"], 1);
}

return [
	'class' => 'yii\db\Connection',
	'dsn' => 'postgres:host=' . $host . ';dbname=' . $dbname,
	'username' => $username,
	'password' => $password,
	'charset' => 'utf8',

	// Schema cache options (for production environment)
	//'enableSchemaCache' => true,
	//'schemaCacheDuration' => 60,
	//'schemaCache' => 'cache',
];
