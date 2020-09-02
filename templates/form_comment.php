<?php
$route = isset($post) && $post->get('id') ? 'editComment' : 'addComment';
$submit = $route === 'addComment' ? 'Ajouter' : 'Mettre à jour';
?>

<form method="post" action="../public/index.php?route=<?= $route; ?>&articleId=<?= htmlspecialchars($article->getId()); ?>">   
   <div class="my-2 ">
    <input type="text" id="pseudo" name="pseudo" placeholder="ton pseudo" value="<?= isset($post) ? htmlspecialchars($post->get('pseudo')): ''; ?>">
    <?= isset($errors['pseudo']) ? $errors['pseudo'] : ''; ?>   
    </div>
    <div class="my-2">
    <textarea id="content" name="content" placeholder="ton commentaire"><?= isset($post) ? htmlspecialchars($post->get('content')): ''; ?></textarea>
    <?= isset($errors['content']) ? $errors['content'] : ''; ?>
    </div>
    <div class="my-2 ">
    <input type="submit" class="btn btn-primary" value="<?= $submit; ?>" id="submit" name="submit">
    </div>
</form>