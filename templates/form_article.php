<?php
// si un article n'existe pas, on utilisera la route addArticle 
// si un article existe, il a un identifiant associé, et on fera appel à la route editArticle en lui passant l'identifiant en conséquence.
// Les champs title, content et author seront gérés de la même manière que la route, en se basant sur l'existence de l'article.
$route = isset($post) && $post->get('id') ? 'editArticle&articleId='.$post->get('id') : 'addArticle';
$submit = $route === 'addArticle' ? 'Envoyer' : 'Mettre à jour';
?>


<div class="col-md-6 mx-auto mt-3 mb-5">
	<div class="card shadow">
		<div class="card-body">
			<h3 class="text-center font-weight text-uppercase">Poste ton article</h3>
		</div>
		<div class="card">
			<form class="form-group text-center" method="post"  action="../public/index.php?route=<?= $route; ?>" enctype="multipart/form-data">				
					<div class="form-group">
					<input type="text" id="title" name="title" placeholder="Votre Titre" value="<?= isset($post) ? htmlspecialchars($post->get('title')): ''; ?>">
					</div>
					<?= isset($errors['title']) ? $errors['title'] : ''; ?>
					<div class="form-group">
					<textarea id="content" name="content" placeholder="Votre Texte"><?= isset($post) ? htmlspecialchars($post->get('content')): ''; ?></textarea>
					</div>
					<?= isset($errors['content']) ? $errors['content'] : ''; ?>
					<div class="form-goup">
                        <input type="file" name="the_file" id="fileToUpload">
                    </div>
					<input type="submit" value="<?= $submit; ?>" id="submit" class="btn btn-success" name="submit">
				</form>
			</div>
		</form>
	</div>		     	
</div>	
</div>


