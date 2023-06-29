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
	.image {
		text-align: center;
	}
</style>

<body>
	<div class="image">
		<img src="./images/Klinik.png">
	</div>
<div class="confirmation">
<h1>Tak for at bestille en tid.<br>Behandlingen er hermed bekræftet.</h1>
<h2>Din Tid:<br>
	<b>Tid: <?php echo $_POST['time'] ?></b><br>
	<b>Dato: <?php echo $_POST['date'] ?></b><br>
	<b>Type: <?php echo $_POST['treatment'] ?></b>

</h2>


</div>

<div class="goback">
	<a href="index.html">
		<button>Tilbage Til Starten</button>
	</a>
</div>
</body>