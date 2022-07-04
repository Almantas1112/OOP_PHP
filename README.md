# OOP PHP project (CMS)

## Description

This is CMS (Content Managment System) created with OOP PHP, ORM Doctrine, Mysqli.
In This CMS you can create new pages, edit pages if you log in with DEV account you can approve or decline new users!

## IMPORTANT!

1. If you want to access DEV options you need to create account in admin dashboard with name Admin and through MySQL workbench or PhpMyAdmin approve Admin account (set approved to 1)
2. You can insert mysqli .sql file into your DB and access DEV account with username Admin and password Admin

## About

In this page you can:
1. Create, delete and edit pages!
2. Register as new user(need approval from DEV menu) and login.
3. Approve ar decline new users (Dev menu only[Username = Admin ; Password = Admin]).

## Installation

1. In VScode terminal use "git clone https://github.com/Almantas1112/OOP_PHP.git"
2. Move cloned files into live server (htdocs folder).
3. OPTION 1: Import project mysqli dump file into PhpMyAdmin or with MySQL workbench then open vscode terminal and use code "php composer.phar install" and "vendor/bin/doctrine orm:schema-tool:update --force --dump-sql"
3. OPTION 2: Open vscode terminal and use code "php composer.phar install" then use code "vendor/bin/doctrine orm:schema-tool:update --force --dump-sql" and create user with username Admin(IMPORTANT) and approve yourself in PhpMyAdmin or MySQL workbench (Admin username for DEV options, approval for logging into admin dashboard).
4. Open xampp in apache line press config and press "PHP (php.ini)"
5. In php.ini press ctrl+f and search for "include_path=" it should look like this "include_path=C:\xampp\php\PEAR". This option suppose to be blocked to run this project so change it to ";include_path=C:\xampp\php\PEAR" or just put ;(semi-colon) in front.
6. Open web browser and put "http://localhost/CMS_Sprint/".
7. ENJOY!
