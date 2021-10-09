<?php
	$type = $_GET['type'];

	if (empty($type)) {
		die('Please include all required url parameters.');
	}

	if ($type === 'Minecraft') {
		$db = 'Minecraft.txt';

		$account = file($db, FILE_IGNORE_NEW_LINES);
		echo $account[array_rand($account)];
	} else if ($type === 'Spotify') {
		$db = 'spotify.txt';

		$account = file($db, FILE_IGNORE_NEW_LINES);
		echo $account[array_rand($account)];
	} else if ($type === 'Netflix') {
		$db = 'netflix.txt';

		$account = file($db, FILE_IGNORE_NEW_LINES);
		echo $account[array_rand($account)];
	} else {
		echo 'Invalid account type selected.';
	}
?>
