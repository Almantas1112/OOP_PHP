<?php

class linkController
{
    public function link()
    {
        session_start();
        if(null !== @$_SESSION['valid'] and null !== @$_SESSION['timeout'] and null !== @$_SESSION['username'])
        {
            return '/CMS_Sprint/admin';
        } 
        else if(null === @$_SESSION['valid'] and null === @$_SESSION['timeout'] and null === @$_SESSION['username'])
        {
            return '/CMS_Sprint/admin/Main';
        }
    }
}