<?php

use Doctrine\ORM\EntityManager;

class dbFunction
{
    public function setContent($title, $content)
    {
        require 'bootstrap.php';
        $page = new Pages();
        $page->setTitle($title);
        $page->setContent($content);
        $entityManager->persist($page);
        $entityManager->flush();
    }

    public function UserRegister($username, $password)
    {
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
    public function samePage($title){
        require 'bootstrap.php';
        $exists = $entityManager->getRepository('pages')->findBy(array('title' => $title));
        return $exists;
    }
    public function deletePage($id)
    {
        require 'bootstrap.php';
        $id = $entityManager->getRepository('pages')->find($id);
        $entityManager->remove($id);
        $entityManager->flush();
        header("Location: /CMS_Sprint/admin");
    }
}