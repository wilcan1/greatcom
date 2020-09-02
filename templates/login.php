<?php $this->title = "Connexion"; ?>

<?= $this->session->show('error_login'); ?>
<div class="container">
	<div class= "card col-md-6 d-block text-center shadow my-5 px-5 py-5 my-2 mx-auto">
				
		<h1 class="mb-5 font-weight text-uppercase">Connectez-Vous</h1>
		
		<form class="form-group " method="post" action="../public/index.php?route=login">
			<input type="text" class="form-control rounded-pill form-control-lg" placeholder="Votre identifiant" id="username" name="username" value="<?= isset($post) ? htmlspecialchars($post->get('username')): ''; ?>"><br>

			<input type="password" class="form-control rounded-pill form-control-lg" placeholder="Votre mot de passe" id="password" name="password"><br>
			<input type="submit" class="btn btn-lg btn-primary btn-block rounded-pill" value="Connexion" id="submit" name="submit">
		</form>
		<a href="../public/index.php"><i class="fas fa-undo-alt"></i> Retour à l'accueil</a>
	</div>


</div>
