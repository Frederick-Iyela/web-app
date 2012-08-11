<?php

	require_once 'includes/db.php';
	
	$sql = $db->query('
		SELECT name, score
		FROM user_scores
		ORDER BY score DESC
	');
	$results = $sql->fetchAll();

?>

<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<title>Abunai! (Watch Out!)</title>
	</head>
	
	<body>
		<div id="wrapper">
			<h1>Abunai!</h1>
			<iframe src="projects/index.html" width="1000" height="700"></iframe>
		</div>
		<div id="score">
			<fieldset id="record"><legend>LeaderBoard</legend>
						<dl>
							<dt id="name">Name</dt>
							<dt id="time">Score</dt>
							<?php foreach ($results as $user_score) : ?>
								<dd id="data-1"><?php echo $user_score['name']; ?></dd>
								<dd id="data-2"><?php echo $user_score['score']; ?></dd>
							<?php endforeach; ?>
						</dl>
			</fieldset>
		</div>
	</body>
</html>
