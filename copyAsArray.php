#!/usr/bin/php
<?php
$stdIn = fopen("php://stdin", "r");
$result = [];
while($row = fgetcsv($stdIn, 0)) {
	array_push($result, $row);
}
$columns = array_shift($result);
?>
<h1><?php echo "Exported columns: " . implode(', ', $columns);?></h1>
<pre>
<?php var_export($result); ?>
</pre>

