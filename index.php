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
		<link href="css/general.css" rel="stylesheet">
	</head>
	
	<body>
		<div id="wrapper">
			<h1>Abunai!</h1>
			<iframe src="projects/index.html" width="1000" height="700"></iframe>
			
			<div>
				<fieldset><legend>LeaderBoard</legend>
					<?php foreach ($results as $user_score) : ?>
						<div class="names">
							<p><?php echo $user_score['name']; ?>  <?php echo $user_score['score']; ?></p>
						</div>
						
					<?php endforeach; ?>
							<?php /*?><dl>
								<dt>Name</dt>
								<dt>Score</dt>
								<?php foreach ($results as $user_score) : ?>
									<dd><?php echo $user_score['name']; ?></dd>
									<dd><?php echo $user_score['score']; ?></dd>
								<?php endforeach; ?>
							</dl><?php */?>
				</fieldset>
			</div>
		</div>
		
	</body>
</html>
