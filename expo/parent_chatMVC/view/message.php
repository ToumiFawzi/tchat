<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link href="../public/css/style_message.css" rel="stylesheet" /> 
</head>
<body>
	<?php include 'header.php' ?>

	<div class="container">
		<div class="membres">
			<div class="membres_avatar">
				<h1>Membres</h1>
				<img src="./images/avatar.png" class="avatar">
				<h2>Prenom Nom</h2>
			</div>
		</div>

		<div class="chat">
			<div class="messagerie">
				<h1>Discussion</h1>
				<div class="message">
					<img src="./images/avatar.png" class="boxA avatar2">
					<div class="boxB">
						<h2>Prenom Nom</h2>
						<p><?= nl2br(htmlspecialchars($post['content'])) ?></p>
						<a href="edit.php?idComment=<?= $comment['id'] ?>&idBillet=<?= $_GET['id']?>">Répondre</a>
					</div>
				</div>
				<div class="reponse">
					<img src="./images/avatar.png" class="boxA avatar3">
					<div class="boxB size">
						<h2><?= htmlspecialchars($comment['author']) ?> le <?= $comment['comment_date_fr'] ?></h2>
						<p><?= nl2br(htmlspecialchars($comment['comment'])) ?></p>
					</div>
				</div>
				
			</div>
			<div class="post_messagerie">
				<input type="text" name="message" value="" placeholder="Envoyer un message">
				<button type="submit" name="submit">Envoyer</button>
			</div>
		</div>
	</div>
	<?php include 'footer.php' ?>
</body>
</html>