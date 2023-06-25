<?php

if (empty($_POST) || !$_POST['date'] || !$_POST['time'] || !$_POST['treatment']) {
	echo "Invalid request";
}

function csvBuilder() {
	$csvStr = '';

	foreach ($_POST as $val) {
		if (empty($csvStr)) {
			$csvStr .= $val;
			return;
		}

		$csvStr .= $val . ';';
	}
}
