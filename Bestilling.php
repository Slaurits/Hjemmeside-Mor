<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bestil her</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
</head>
<style>
    .select-date {
        text-align: center;
    }

    .select-time {
        text-align: center;
    }
    .select-treatment {
        text-align: center;
    }
</style>
<body>
	<img src="./images/Klinik.png" style="float:left">
	<img src="./images/Klinik.png" style="float:right">

    <form action="/SubmitAppointment.php" method="POST">
    <div class="select-date">
        <h1 class="select-date__title">Vælg Datoen</h1>
        <input class="select-date__input" type="date" name="date" id="date" min="<?php echo date('Y-m-d') ?>" value="<?php echo $_POST['date'] ?? '' ?>" required>
    </div>
    <br>
    <div class="select-time">
<script>
	$(() => {
		$('#time').timepicker({
			timeFormat: 'HH:mm',
			interval: 30,
			defaultTime: '830',
			minTime: '830',
			maxTime: '17'
		});
	});
</script>
        <h1 class="select-time__title">Vælg Tiden</h1>
		<input type="text" name="time" id="time" value="<?php echo $_POST['time'] ?? '' ?>" required>
	</div>
    <br>
    <div class="select-treatment">
        <h1>Vælg hvilken behandling du vil have</h1>
        <select name="treatment" id="treatment" required >
            <option value="">None</option>
            <option value="massage">Massage</option>
            <option value="akupunktur">Akupunktur</option>
            <option value="kraniosakral">Kranio-Sakral</option>
        </select>
        <br><br>
        <input type="submit" id="submit" value="Submit">
    </div>
    </form>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
</body>
</html>
