<?php $this->title = 'Administration'; ?>
<div class="container">
	<?= $this->session->show('add_article'); ?>
	<?= $this->session->show('edit_article'); ?>
	<?= $this->session->show('delete_article'); ?>
	<?= $this->session->show('unflag_comment'); ?>
	<?= $this->session->show('delete_comment'); ?>
		
		<div class="grid">
			<h2>Articles</h2>
			<a href="../public/index.php?route=addArticle" class="btn btn-success">Nouvel article</a>
			<a href="../public/index.php" class="btn btn-primary"><i class="fas fa-undo-alt"></i></a>
		</div>
				
			<table class="table table-striped table-bordered mt-3"> 				
				<tr>
					<th class="th-sm">Id</th>
					<th class="th-sm">Titre</th>
					<th class="th-sm">Contenu</th>
					<th class="th-sm">Utilisateur</th>
					<th class="th-sm">Date</th>
					<th class="th-sm">Actions</th>
				</tr>
				<?php
				foreach ($articles as $article)
				{
					?>
					<tr>
						<td><?= htmlspecialchars($article->getId());?></td>
						<td><a href="../public/index.php?route=article&articleId=<?= htmlspecialchars($article->getId());?>"><?= htmlspecialchars($article->getTitle());?></a></td>
						<td><?= substr(htmlspecialchars($article->getContent()), 0, 150);?></td>
						<td><?= htmlspecialchars($article->getAuthor());?></td>
						<td>Créé le : <?= htmlspecialchars($article->getCreatedAt());?></td>
						<td>
							<a href="../public/index.php?route=editArticle&articleId=<?= $article->getId(); ?>" class="btn btn-warning mb-3">Modifier</a>
							<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalLong">
								Supprimer
							</button>
							<!-- Modal -->
							<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="exampleModalLongTitle">Supprimer cet article</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">
											<p>Voulez-vous vraiment supprimer cet article ?</p>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
											<button type="button" class="btn btn-danger"><a href="../public/index.php?route=deleteArticle&articleId=<?= $article->getId(); ?>"class="text-white text-decoration-none" >Supprimer</a></button>
										</div>
									</div>
								</div>
							</div>
						</td>
					</tr>

					<?php
				}
				?>
			</table>
			
		
	

	<h2>Commentaires signalés</h2>
<table class="table table-striped table-bordered mt-3">
    <tr>
        <th class="th-sm">Id</th>
        <th class="th-sm">Pseudo</th>
        <th class="th-sm">Message</th>
        <th class="th-sm">Date</th>
        <th class="th-sm">Actions</th>
    </tr>
    <?php
    foreach ($comments as $comment)
    {
         ?>
        <tr>
            <td><?= htmlspecialchars($comment->getId());?></td>
            <td><?= htmlspecialchars($comment->getPseudo());?></td>
            <td><?= substr(htmlspecialchars($comment->getContent()), 0, 150);?></td>
            <td>Créé le : <?= htmlspecialchars($comment->getCreatedAt());?></td>
            <td>
                <a href="../public/index.php?route=unflagComment&commentId=<?= $comment->getId(); ?>" class="btn btn-warning mb-3">Désignaler le commentaire</a>
                <a href="../public/index.php?route=deleteComment&commentId=<?= $comment->getId(); ?>" class="btn btn-danger">Supprimer le commentaire</a>
            </td>
        </tr>
        <?php
    }
    ?>
</table>


<h2>Utilisateurs</h2>
</div>