<?php

$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
$score = filter_input(INPUT_POST, 'score', FILTER_SANITIZE_NUMBER_INT);


//var_dump($_POST);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	/*if (strlen($score) < 1 || strlen($score) > 10) {
		$errors['score'] = true;
	}*/

	if (strlen($name) < 1 || strlen($name) > 50) {
		$errors['name'] = true;
	}

	if (empty($errors)) {
		// Do DB stuff
		require_once 'includes/db.php';

		$sql = $db->prepare('
		INSERT INTO user_scores (name, score)
		VALUES (:name, :score)
		');
		$sql->bindValue(':name', $name, PDO::PARAM_STR);
		$sql->bindValue(':score', $score, PDO::PARAM_STR);
		$sql->execute();


		var_dump($db->errorInfo());

	}
}

?>