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
?>
<pre>
<?php var_export($result); ?>
</pre>

