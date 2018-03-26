<?php $title = 'communauté'; ?>

<?php ob_start(); ?>

	<div class="contenue">
	<div class="container">
		<div class="membres">
			<div class="membres_avatar">
				<h1>Membres</h1>
				<img src="./images/avatar.png" class="avatar">
				<h2>DUPONT David</h2>
			</div>
		</div>

		<div class="chat">
			<h1>Discussion</h1>
			<div class="messagerie">
				<div class="message">
					<img src="./images/avatar.png" class="boxA avatar2">
					<div class="boxB">
						<h2>DUPONT David</h2>
						<p><?= nl2br(htmlspecialchars($post['content'])) ?></p>
						<a href="#">Répondre</a>
					</div>
				</div>
        <?php
        while ($comment = $comments->fetch())
        {
        ?>
				<div class="reponse">
					<img src="./images/avatar.png" class="boxA avatar3">
					<div class="boxB size">
						<h2><?= htmlspecialchars($comment['author']) ?></h2><span style="color:#80b62a;"> le <?= $comment['comment_date_fr'] ?></span>
						<p><?= nl2br(htmlspecialchars($comment['comment'])) ?></p>
						<a href="edit.php?idComment=<?= $comment['id'] ?>&idBillet=<?= $_GET['id']?>">Modifier</a>
					</div>
				</div>
        <?php
        }
        ?>				
			</div>
			<div class="post_messagerie">
            <form action="index.php?action=addComment&amp;id=<?= $post['id'] ?>" method="post">
                <input type="text" name="author" value="DUPONT David" placeholder="DUPONT David" hidden>
				<input type="text" name="comment" value="" placeholder="Envoyer un message">
				<button type="submit" name="submit">Envoyer</button>
				</form>
			</div>
		</div>
	</div>
	</div>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>