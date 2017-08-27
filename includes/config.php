<?php
ob_start();
session_start();

//set timezone
date_default_timezone_set('Europe/London');

//database credentials
define('DBHOST','ec2-54-247-119-245.eu-west-1.compute.amazonaws.com');
define('DBUSER','mcsrmexgtpzjgj');
define('DBPASS','69504d4d26ef8e273de69ffb401ff3a6048c3528ea6c2deab1629111f5c500d5');
define('DBNAME','d306sj6ieqet92');

//application address
define('DIR','http://domain.com/');
define('SITEEMAIL','noreply@domain.com');

try {

	
	
	$dsn = "pgsql:"
    . "host=ec2-54-247-119-245.eu-west-1.compute.amazonaws.com;"
    . "dbname=d306sj6ieqet92;"
    . "user=mcsrmexgtpzjgj;"
    . "port=5432;"
    . "sslmode=require;"
    . "password=69504d4d26ef8e273de69ffb401ff3a6048c3528ea6c2deab1629111f5c500d5";

	//$db = new PDO($dsn); new
	
	//create PDO connection
	//$db = new PDO("mysql:host=".DBHOST.";dbname=".DBNAME, DBUSER, DBPASS);
	$db = new PDO($dsn);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e) {
	//show error
	echo "here";
    echo '<p class="bg-danger">'.$e->getMessage().'</p>';
    exit;
}

//include the user class, pass in the database connection
include('classes/user.php');
include('classes/phpmailer/mail.php');
$user = new User($db);

?>

 
