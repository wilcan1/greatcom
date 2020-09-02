<?php $this->title = 'Mon profil'; ?>
<div class="container">

<?= $this->session->show('update_password'); ?>
<!-- <div class="card">
    <h2><?= $this->session->get('username'); ?></h2>
    <p><?= $this->session->get('id'); ?></p>
    
    <a href="../public/index.php?route=deleteAccount">Supprimer mon compte</a>
</div>
<br>
<a href="../public/index.php">Retour à l'accueil</a> -->

<section class="my-5">
  <div class="row">
    <div class="col-md-8 col-lg-6 mx-auto">
      <div class="card card-personal">
        <img class="card-img-top" src="img/livres.jpg">     
        <div class="card-body">         
          
            <h2 class="card-title title-one"><?= $this->session->get('username'); ?></h2>
          
          <p class="card-meta">Numéro d'abonné <?= $this->session->get('id'); ?></p>
          <hr>
          <div>
          <a href="../public/index.php?route=updatePassword" class="btn btn-warning">Modifier mot de passe</a>
          </div>
          <hr>
          	<a href="../public/index.php?route=deleteAccount" class="btn btn-danger">Supprimer mon compte</a>
          <hr>
          	<div class="my-3">
			<a href="../public/index.php" class="btn btn-primary" ><i class="fas fa-undo-alt"></i> Retour à l'accueil</a>
			</div>
        </div>     
      </div>     
    </div>
  </div>
</section>
</div>



    
            







