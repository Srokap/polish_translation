<?php

//language strings that can be identical to English ones
$excluded = array(
	'blog:blog',
	'garbagecollector:ok',
	'groups:search:tags',
	'diagnostics:report:php',
	'install:require:php',
	'friendspicker:chararray',
	'admin:menu',
    'admin:statistics:cron',
	'admin:configure_utilities:robots',
	'admin:plugins:label:copyright',
	'admin:plugins:label:contributors:email',
	'admin:plugins:author',
    'admin:server:label:php',
    'usersettings:statistics:label:email',
    'ban',
    'import',
    'menu',
    'ok',
    'status',
	'word:blacklist',
	'ElggPlugin:Dependencies:Plugin',
	'admin:plugins:category:multimedia',
	'install:admin:help:email',
	'menu:page:header:develop',
	'admin:plugins:category:development',
	'aa', 'ab', 'af', 'am', 'as', 'ay', 'az', 'ba', 'be', 'bg', 'bh', 'bi', 'bn', 'bo', 'br', 'ca', 'co', 'cs', 'cy', 'da', 'dz', 'eo', 'eu', 'fi', 'fj', 'fo',
	'fy', 'ga', 'gd', 'gl', 'gn', 'gu', 'he', 'ha', 'hi', 'hr', 'hu', 'ia', 'id', 'ie', 'ik', 'is', 'it', 'iu', 'iw', 'ja', 'ji', 'jw', 'ka', 'kk', 'kl', 'km', 'ks',
	'ku', 'ky', 'la', 'ln', 'lo', 'lt', 'lv', 'mg', 'mi', 'mk', 'ml', 'mn', 'mo', 'mr', 'ms', 'mt', 'my', 'na', 'ne', 'nl', 'no', 'oc', 'om', 'or', 'pa',
	'ps', 'pt', 'qu', 'rm', 'rn', 'ro', 'rw', 'sa', 'sd', 'sg', 'sh', 'si', 'sk', 'sl', 'sm', 'sn', 'so', 'sq', 'sr', 'ss', 'st', 'su', 'sv', 'sw', 'ta', 'te',
	'tg', 'th', 'ti', 'tk', 'tl', 'tn', 'to', 'tr', 'ts', 'tt', 'tw', 'ug', 'uk', 'ur', 'uz', 'vi', 'vo', 'wo', 'xh', 'yo', 'za', 'zh', 'zu',
);

$path = dirname(__FILE__);
$lang = 'pl';


$i = new RecursiveDirectoryIterator($path, RecursiveDirectoryIterator::SKIP_DOTS);
$i = new RecursiveIteratorIterator($i, RecursiveIteratorIterator::LEAVES_ONLY);
$i = new RegexIterator($i, "/$lang\.php/");

$exitCode = 0;

$badCount = 0;
$filteredCount = 0;

foreach ($i as $key => $file) {
	$path = $file->getPathName();
	$enPath = dirname($path) . DIRECTORY_SEPARATOR . 'en.php';
	//var_dump($enPath);
	
	$valsCustom = include($path);
	$valsBase = include($enPath);
	
	$result = array_intersect_assoc((array)$valsCustom, (array)$valsBase);
	$filtered = array_intersect_key($result, array_flip($excluded));
	$result = array_diff_key($result, array_flip($excluded));

	$badCount += count($result);
	$filteredCount += count($filtered);

	if (count($result) > 0) {
		echo "Found untranslated strings in file $path\n";
		$exitCode = 1;
		print_r($result);
	}

}

echo "There are $badCount badly translated strings and $filteredCount filtered ones of total " . count($excluded) . " exceptions.";

if ($exitCode === 0) {
	echo "Everything checks out.";
}

exit($exitCode);

