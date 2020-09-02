<?php $this->title = "Inscription"; ?>

<div class="container">
    <div class= "card col-md-6 d-block text-center shadow px-5 py-5 my-5 mx-auto">
        <form method="post" action="../public/index.php?route=register">
            <h1 class="mb-5 font-weight text-uppercase">S'inscrire</h1>

            <div class="form-group">
                <input type="text" id="username" name="username" class="form-control rounded-pill form-control-lg" placeholder="Identifiant" value="<?= isset($post) ? htmlspecialchars($post->get('username')): ''; ?>">
            </div>

            <div class="form-group">
                <input type="password" id="password" name="password" class="form-control rounded-pill form-control-lg" placeholder="Mot de Passe" >
            </div>
            <?= isset($errors['password']) ? $errors['password'] : ''; ?>


            <div class="form-group">

                <input type="text" id="email" name="email" class="form-control rounded-pill form-control-lg" placeholder="Email" value="<?= isset($post) ? htmlspecialchars($post->get('email')): ''; ?>">
            </div>


            <div class="form-group">

                <input type="text" id="nameuser" name="nameuser" class="form-control rounded-pill form-control-lg" placeholder="Nom" value="<?= isset($post) ? htmlspecialchars($post->get('nameuser')): ''; ?>">
            </div>

            <div class="form-group">
                <input type="text" id="firstname" name="firstname" class="form-control rounded-pill form-control-lg" placeholder="Prénom" value="<?= isset($post) ? htmlspecialchars($post->get('firstname')): ''; ?>">
            </div>

            <?= isset($errors['username']) ? $errors['username'] : ''; ?>
            <div class="form-group">
                <input type="submit" class="btn btn-lg btn-primary btn-block rounded-pill" value="Inscription" id="submit" name="submit">
            </div>
        </form>
        <div class="form-group">
            <a href="../public/index.php" class="text-decoration-none"><i class="fas fa-undo-alt"></i> Retour à l'accueil</a>
        </div>
    </div>

</div>

<script type="text/javascript" src="js/script.js"></script>