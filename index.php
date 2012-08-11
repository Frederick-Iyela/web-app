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
		<div>
			<fieldset><legend>LeaderBoard</legend>
						<dl>
							<dt>Name</dt>
							<dt>Score</dt>
							<?php foreach ($results as $user_score) : ?>
								<dd><?php echo $user_score['name']; ?></dd>
								<dd><?php echo $user_score['score']; ?></dd>
							<?php endforeach; ?>
						</dl>
			</fieldset>
		</div>
	</body>
</html>
