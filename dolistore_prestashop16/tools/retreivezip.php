#!/usr/bin/php
<?php
include '../config/settings.inc.php';

$nbfound = 0;
$nbnotfound = 0;


$sapi_type = php_sapi_name();
$script_file = basename(__FILE__);
$path=dirname(__FILE__).'/';

// Test if batch mode
if (substr($sapi_type, 0, 3) == 'cgi') {
	echo "Error: You are using PHP for CGI. To execute ".$script_file." from command line, you must use PHP for CLI mode.\n";
	exit;
}


$mode=isset($argv[1])?$argv[1]:'';

if (empty($mode)) {
	echo "Usage:  retreivezip.php  test|confirm\n";
	exit;
}

$connect = mysqli_connect(_DB_SERVER_, _DB_USER_, _DB_PASSWD_, _DB_NAME_);

$resql = mysqli_query($connect, $sql);

if ($resql) {
	$arrayoffiles = array();
	$arrayoflabel = array();


	print 'Scan dir /home/dolibarr/dolistore.com/httpdocs/download'."\n";
	$files = scandir('/home/dolibarr/dolistore.com/httpdocs/download');
	foreach($files as $file) {
		$ziparchive = new ZipArchive();


	}
}

print 'Result of scan of /home/dolibarr/dolistore.com/httpdocs/download: found='.$nbfound.' notfound='.$nbnotfound."\n";

