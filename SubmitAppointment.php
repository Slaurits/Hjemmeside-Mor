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

<style>
	.confirmation {
		text-align: center;
	}
	.goback {
		position: absolute;
		right: 0;
		bottom: 0;
	}
</style>

<body>
<div class="confirmation">
<h1>Tak for at Bestille en tid</h1>
<h1>Behandlingen er hermed bekræftet.</h1>
<h2>Din tid:</h2>

<p><?php echo $_POST['date'] ?></p>
<p><?php echo $_POST['time'] ?></p>
<p><?php echo $_POST['treatment'] ?></p>
</div>

<div class="goback">
	<a href="index.html">
		<button>Tilbage Til Starten</button>
	</a>
</div>
</body>