<?php

use Doctrine\ORM\EntityManager;

class dbFunction
{

    public function UserRegister($username, $password){
        $password = hash('sha256', $password);
        $user = new users();
        $user->setName($username);
        $user->setPassword($password);
        require 'bootstrap.php';
        $entityManager->persist($user);
        $entityManager->flush();
    }

    public function Login($username, $password)
    {
        $passwordHash = hash('sha256', $password);
        require 'bootstrap.php';
        $users = $entityManager->getRepository('users')->findBy(array('name' => "$username"));
        $pass = $entityManager->getRepository('users')->findBy(array('password' => "$passwordHash"));
        foreach ($users as $u)
        {
            $userFound = $u->getName();
        }
        foreach ($pass as $p)
        {
            $passFound = $p->getPassword();
        }
        if($username == @$userFound and $passwordHash == @$passFound)
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }
    }
    public function isUserExist($username)
    {
        require 'bootstrap.php';
        $exist = $entityManager->getRepository('users')->findBy(array('name' => "$username"));
        return $exist;
    }
    public function isUserApproved($username)
    {
        require 'bootstrap.php';
        $approved = $entityManager->getRepository('users')->findBy(array('name' => "$username", 'approved' => '1'));
        return $approved;
    }
}