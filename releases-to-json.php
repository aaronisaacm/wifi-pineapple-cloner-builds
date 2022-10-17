<?php
# by DSR! from https://github.com/xchwarze/wifi-pineapple-cloner

error_reporting(E_ALL);

if (!isset($_SERVER['argv']) && !isset($argv)) {
    echo "Please enable the register_argc_argv directive in your php.ini\n";
    exit(1);
} elseif (!isset($argv)) {
    $argv = $_SERVER['argv'];
}

if (!isset($argv[1])) {
    echo "Run with \"php releases-to-json.php [VERSION]\"\n";
    echo "    VERSION  -> fw version\n";
    exit(1);
}



// config
$version  = $argv[1];
$folder	  = 'releases';
$flag     = '-universal';
$repo_url = 'https://github.com/xchwarze/wifi-pineapple-cloner-builds/commits/main';
$base_url = 'https://raw.githubusercontent.com/xchwarze/wifi-pineapple-cloner-builds/main/releases';


// blah
echo "[*] Iterate folder content\n";
$updates = []; 
$files = array_slice(scandir($folder), 2);
foreach ($files as $item) {
	$board = (explode($flag, $item))[0];
	echo "    [+] Processing board: {$board}\n";

	$updates[ $board ] = [
		'upgradeUrl' => "{$base_url}/{$item}",
		'size'       => filesize("{$folder}/{$item}"),
		'checksum'   => hash_file('sha256', "{$folder}/{$item}"),
	];
}

echo "[*] Generating file: upgrades.json\n";
file_put_contents('upgrades.json', json_encode([
	'changelog' => "See complete changelog in <a href='{$repo_url}' target='_blank'>Wifi Pineapple Cloner builds repo</a>!",
	'version'   => $version,
	'updates'   => $updates,
]));
