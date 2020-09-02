<?php $this->title = 'Article'; ?>
<div class="container">

    <div class="row mx-auto my-5">
        <div class="col-md-8 col-lg-6 mt-5 py-3 mx-auto card news-card">
          <div class="card news-card">
            <div class="card-body">
                <h2><?= htmlspecialchars($article->getTitle());?></h2>
            </div>
            <div class="form-group">
                <img src="<?= $article->getPhoto(); ?>" style="width: 100%" >
            </div>
            <div class="card-body">
              <div class="social-meta">
                <p><?= htmlspecialchars($article->getContent());?></p>
                <div class="md-form">
                    <p><?= htmlspecialchars($article->getAuthor());?></p>
                    <p>Créé le : <?= htmlspecialchars($article->getCreatedAt());?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<div class="actions text-right my-3">
    <a href="../public/index.php?route=editArticle&articleId=<?= $article->getId(); ?>" class="btn btn-warning">Modifier</a>

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
                <div class="modal-body text-left">
                    <p>Voulez-vous vraiment supprimer cet article ?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                    <button type="button" class="btn btn-danger"><a href="../public/index.php?route=deleteArticle&articleId=<?= $article->getId(); ?>"class="text-white text-decoration-none" >Supprimer</a></button>
                </div>
            </div>
        </div>
    </div>
    <a href="../public/index.php" class="btn btn-outline-primary" ><i class="fas fa-undo-alt"></i> Retour à l'accueil</a>
</div>
<br>
<div id="comments" class="text-left" style="margin-left: 50px">
    <h3>Ajouter un commentaire</h3>
    <?php include('form_comment.php'); ?>
    <h3>Commentaires</h3>
    <?php
    foreach ($comments as $comment)
    {
        ?>
        <h4><?= htmlspecialchars($comment->getPseudo());?></h4>
        <p><?= htmlspecialchars($comment->getContent());?></p>
        <p>Posté le <?= htmlspecialchars($comment->getCreatedAt());?></p>
        <?php
        if($comment->isFlag()) {
            ?>
            <p class="alert alert-warning">Ce commentaire a déjà été signalé</p>
            <?php
        } else {
            ?>
            <p><a href="../public/index.php?route=flagComment&commentId=<?= $comment->getId(); ?>">Signaler le commentaire</a></p>
            <?php
        }
        ?>
        <p><a href="../public/index.php?route=deleteComment&commentId=<?= $comment->getId(); ?>">Supprimer le commentaire</a></p>
        <br>        
        <?php
    }
    ?>
</div>
</div>
</div>