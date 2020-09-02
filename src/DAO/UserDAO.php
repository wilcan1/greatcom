<?php

namespace App\src\DAO;

use App\config\Parameter;

class UserDAO extends DAO
{
    // private function buildObject($row)
    // {
    //     $user = new User();
    //     $user->setId($row['id']);
    //     $user->setPseudo($row['pseudo']);
    //     $user->setCreatedAt($row['createdAt']);
    //     $user->setRole($row['name']);
    //     return $user;
    // }

    // public function getUsers()
    // {
    //     $sql = 'SELECT user.id, user.username, user.createdAt, role.name FROM user INNER JOIN role ON user.role_id = role.id ORDER BY user.id DESC';
    //     $result = $this->createQuery($sql);
    //     $users = [];
    //     foreach ($result as $row){
    //         $userId = $row['id'];
    //         $users[$userId] = $this->buildObject($row);
    //     }
    //     $result->closeCursor();
    //     return $users;
    // }
    public function register(Parameter $post)
    {
        $this->checkUser($post);
        $sql = 'INSERT INTO user (nameuser, firstname, username, password, email, createdAt, role_id) VALUES (?, ?, ?, ?, ?, NOW(), ?)';
        $this->createQuery($sql, [$post->get('nameuser'), $post->get('firstname'), $post->get('username'), password_hash($post->get('password'), PASSWORD_BCRYPT), $post->get('email'), 2]);
    }
    public function checkUser(Parameter $post)
    {
        $sql = 'SELECT COUNT(username) FROM user WHERE username = ?';
        $result = $this->createQuery($sql, [$post->get('username')]);
        $isUnique = $result->fetchColumn();
        if($isUnique) {
            return '<p>Cet identifiant existe déjà</p>';
        }
    }
    public function login(Parameter $post)
     {
        $sql = 'SELECT user.id, user.role_id, user.password, role.name FROM user INNER JOIN role ON role.id = user.role_id WHERE username = ?';
        $data = $this->createQuery($sql, [$post->get('username')]);
        $result = $data->fetch();
        $isPasswordValid = password_verify($post->get('password'), $result['password']);
        return [
            'result' => $result,
            'isPasswordValid' => $isPasswordValid
        ];
    }
    public function updatePassword(Parameter $post, $username)
    {
        $sql = 'UPDATE user SET password = ? WHERE username = ?';
        $this->createQuery($sql, [password_hash($post->get('password'), PASSWORD_BCRYPT), $username]);
    }
    public function deleteAccount($username)
    {
        $sql = 'DELETE FROM user WHERE username = ?';
        $this->createQuery($sql, [$username]);
    }
}