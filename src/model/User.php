<?php

namespace App\src\model;

class User
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $username;

    /**
     * @var string
     */
    private $password;
    /**
     /**
     * @var string
     */
    private $email;
    /**
     * @var string
     */
    private $nameuser;

    /**
     * @var string
     */
    private $firstname;
    /**
     * @var \DateTime
     */
    private $createdAt;
     /**
     * @var string
     */
    private $role;
    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param string $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }



    /**
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }
     /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }



    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }
     /**
     * @return string
     */
    public function getNameuser()
    {
        return $this->nameuser;
    }

    /**
     * @param string $firstname
     */
    public function setName($nameuser)
    {
        $this->name = $nameuser;
    }

     /**
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @param string $firstname
     */
    public function setName($firstname)
    {
        $this->firstname = $firstname;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param \DateTime $createdAt
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }
    /**
     * @return string
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * @param string $role
     */
    public function setRole($role)
    {
        $this->role = $role;
    }
}