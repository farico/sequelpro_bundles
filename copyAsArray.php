#!/usr/bin/php
<?php
$stdIn = fopen("php://stdin", "r");
$result = [];
while($row = fgetcsv($stdIn, 0)) {
	array_push($result, $row);
}
$columns = array_shift($result);
if ($result) {
	foreach($result as $k => $data) {
		$result[$k] = array_combine($columns, $data);
	}
}

$cmd = 'echo '.escapeshellarg(var_export($result, true)).' | __CF_USER_TEXT_ENCODING='.posix_getuid().':0x8000100:0x8000100 pbcopy';
shell_exec($cmd);

