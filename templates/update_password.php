<?php $this->title = 'Modifier mot mot de passe'; ?>
<h1>Greatcom +</h1>

<div>
	<p>Le mot de passe de <?= $this->session->get('username'); ?> sera modifié</p>
	<form method="post" action="../public/index.php?route=updatePassword">
		<div class="form-group">
			<label for="password">Mot de passe</label><br>
			<input type="password" id="password" name="password">
		</div>
		<div class="form-group">
			<input type="submit" value="Mettre à jour" id="submit" name="submit">
		</div>
	</form>
</div>
<div class="my-5">
<a href="../public/index.php" class="btn btn-primary" ><i class="fas fa-undo-alt"></i> Retour à l'accueil</a>
</div>