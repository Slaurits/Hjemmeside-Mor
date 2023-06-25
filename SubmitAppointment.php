<?php

if (empty($_POST) || !$_POST['date'] || !$_POST['time'] || !$_POST['treatment']) {
	echo "Invalid request";
}

$headers = ['Date', 'Time', 'Treatment'];

$fp = fopen('appointments.csv', 'w');

// Add headers at the top
fputcsv($fp, $headers, ';');

// Add the data from the client
fputcsv($fp, $_POST, ';');

fclose($fp);

?>


<h1>Behandlingen er hermed bekræftet.</h1>
<h2>Din tid:</h2>


<p><?php echo $_POST['date'] ?></p>
<p><?php echo $_POST['time'] ?></p>
<p><?php echo $_POST['treatment'] ?></p>
