<?php

namespace App\src\controller;

use App\config\Parameter;

class BackController extends Controller
{

    public function administration()
    {
        $articles = $this->articleDAO->getArticles();
        $comments = $this->commentDAO->getFlagComments();
        // $users = $this->userDAO->getUsers();
        return $this->view->render('administration', [
            'articles' => $articles,
            'comments' => $comments,
            // 'users' => $users
        ]);
    }
    //  notre méthode addArticle renvoie en cas d'erreurs deux variables :  $post, qui est le contenu saisi par notre utilisateur, et $errors, qui sont les éventuelles erreurs remontées par notre validateur.
    public function addArticle(Parameter $post, $photo)
    {
        if($post->get('submit')) {
            $errors = $this->validation->validate($post, 'Article');
            if(!$errors) {
                $directory="";
                if (!empty($photo['the_file'])) {
                    $media = $photo['the_file']['name'];
                    $directory='../public/img/medias/' .$media;
                    move_uploaded_file($photo['the_file']['tmp_name'], $directory);
                     
          }
          $this->articleDAO->addArticle($post, $this->session->get('id'), $directory);
          $this->session->set('add_article', '<p class="alert alert-success mt-3">Le nouvel article a bien été ajouté</p>');
          header('Location: ../public/index.php');
      }
      return $this->view->render('add_article', [
        'post' => $post,
        'errors' => $errors
    ]);
        }
  return $this->view->render('add_article');
    }







public function editArticle(Parameter $post, $articleId)
{
    $article = $this->articleDAO->getArticle($articleId);
    if($post->get('submit')) {
        $this->articleDAO->editArticle($post, $articleId);
        $this->session->set('edit_article', '<p class="alert alert-warning mt-3">L\' article a bien été modifié</p>');
        header('Location: ../public/index.php');
    }
    return $this->view->render('edit_article', [
        'article' => $article
    ]);
}
public function deleteArticle($articleId)
{
    $this->articleDAO->deleteArticle($articleId);
    $this->session->set('delete_article', '<p class="alert alert-danger mt-3">L\' article a bien été supprimé</p>');
    header('Location: ../public/index.php');
}
public function unflagComment($commentId)
{
    $this->commentDAO->unflagComment($commentId);
    $this->session->set('unflag_comment', '<p class="alert alert-danger mt-3">Le commentaire a bien été désignalé</p>');
    header('Location: ../public/index.php?route=administration');
}
public function deleteComment($commentId)
{
    $this->articleDAO->deleteArticle($articleId);
    $this->session->set('delete_article', '<p class="alert alert-danger mt-3">L\' article a bien été supprimé</p>');
    header('Location: ../public/index.php');
}
public function profil()
{
    return $this->view->render('profil');
}
public function updatePassword(Parameter $post)
{
    if($post->get('submit')) {
        $this->userDAO->updatePassword($post, $this->session->get('username'));
        $this->session->set('update_password', '<p class="alert alert-info mt-3">Votre mot de passe a été mis à jour</p>');
        header('Location: ../public/index.php?route=profil');
    }
    return $this->view->render('update_password');
}
public function logout()
{
    $this->logoutOrDelete('logout');
}

public function deleteAccount()
{
    $this->userDAO->deleteAccount($this->session->get('username'));
    $this->logoutOrDelete('delete_account');
}
public function deleteUser($userId)
    {
        $this->userDAO->deleteUser($userId);
        $this->session->set('delete_user', '<p class="alert alert-primary mt-3">L\'utilisateur a bien été supprimé</p>');
        header('Location: ../public/index.php?route=administration');
    }
private function logoutOrDelete($param)
{
    $this->session->stop();
    $this->session->start();
    if($param === 'logout') {
        $this->session->set($param, '<p class="alert alert-primary mt-3">À <i class="fas fa-plus icoplus"></i><p>');
    } else {
        $this->session->set($param, '<p class="alert alert-danger mt-3">Votre compte a bien été supprimé</p>');
    }
    header('Location: ../public/index.php');
}
}