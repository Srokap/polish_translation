<?php

if (!getenv('TRAVIS')) {
	echo "Must be run in Travis-CI environment";
	exit(1);
}

$password = getenv('TRANSIFEX_PASSWORD');
if (!$password) {
	echo "Transifex password not found!";
	exit(2);
}

$fileContents =<<<EOF
[https://www.transifex.com]
hostname = https://www.transifex.com
password = $password
token = 
username = SrokapBot

EOF;

$homePath = getenv('HOME');
if (file_put_contents($homePath . '/.transifexrc', $fileContents) === false) {
	echo "Error writing $homePath/.transifexrc";
	exit(3);
}

echo "Everything checks out.";
exit(0);
