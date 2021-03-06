<?php

require_once 'AdminInterfaces.php';

class AdminMainMenu implements AdminInterfaces
{
    public function modal()
    {
                    /////////////////////////////////////MODAL/////////////////////////////////////
                    echo '
                    <div class="modal fade" id="Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Dev mode options</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <a class="btn btn-primary w-100" href="/CMS_Sprint/?=Approvals">Approvals</a>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                            </div>
                        </div>
                    </div>
                    ';
    }

    public function getApprovalsPage()
    {
        require 'bootstrap.php';
        $approvals = $entityManager->getRepository('users')->findAll();
        $app = $entityManager->getRepository('users')->findBy(array('name' => $_SESSION['username']));
        echo '
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
        ';
        foreach ($approvals as $app)
        {
            if($app->getName() == 'Admin')
            {
                echo '
                <div class="card text-center mx-auto w-50">
                    <div class="card-header">
                        <ul class="nav nav-pills card-header-pills">
                            <li class="nav-item mx-1">
                                <a class="nav-link active" href="/CMS_Sprint/admin">Admin</a>
                            </li>
                            <li class="nav-item mx-1">
                            <a class="nav-link bg-warning" href="/CMS_Sprint/">View website!</a>
                            </li>
                            <li class="nav-item">
                            <button type="button" class="btn my-1" data-bs-toggle="modal" data-bs-target="#Modal">
                            <i class="bi bi-gear"></i>
                            </button>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="/CMS_Sprint/logout">Log out</a>
                            </li>
                        </ul> 
                    </div>';
            } else {
                echo '
                <div class="card text-center mx-auto w-50">
                    <div class="card-header">
                        <ul class="nav nav-pills card-header-pills">
                            <li class="nav-item mx-1">
                                <a class="nav-link active" href="/CMS_Sprint/admin">Admin</a>
                            </li>
                            <li class="nav-item mx-1">
                            <a class="nav-link bg-warning" href="/CMS_Sprint/">View website!</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="/CMS_Sprint/logout">Log out</a>
                            </li>
                        </ul> 
                    </div>';
            }
        }
            echo '
            <div class="card-body">
            <h5 class="card-title">Manage Approvals</h5>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Username</th>
                        <th scope="col">Actions</th>
                    </tr>';
                foreach ($approvals as $approval){
                    if($approval->getId() == 1)
                    {

                    } else if ($approval->getApproval() == 1)
                    {
                        echo '<tbody><tr>
                        <td class="w-50">'. $approval->getId() .'(Approved)</td>
                        <td class="w-50">'. $approval->getName() .'</td>
                        <td class="btn-group w-100">
                        <form action="" method="POST" class="mx-1">
                        <input type="hidden" name="Decline" value="'. $approval->getId() .'"/>
                        <input type="submit" value="Decline" class="btn btn-danger" />
                        </form>
                        <form action="" method="POST">
                        <input type="hidden" name="Approve" value="'. $approval->getId() .'"/>
                        <input type="submit" value="Approve" class="btn btn-success"/>
                        </form></td></tbody></tr>';
                    } else
                    {
                        echo '<tbody><tr>
                        <td class="w-50">'. $approval->getId() .'</td>
                        <td class="w-50">'. $approval->getName() .'</td>
                        <td class="btn-group w-100">
                        <form action="" method="POST" class="mx-1">
                        <input type="hidden" name="Decline" value="'. $approval->getId() .'"/>
                        <input type="submit" value="Decline" class="btn btn-danger" />
                        </form>
                        <form action="" method="POST">
                        <input type="hidden" name="Approve" value="'. $approval->getId() .'"/>
                        <input type="submit" value="Approve" class="btn btn-success"/>
                        </form></td></tbody></tr>';
                    }
                }
                echo '</thead>
            </table>
        </div>
    </div>
    ';
    }

    public function getLogoutPage()
    {
        echo '
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
        ';
        echo '
        <div class="card text-center postion-absolute top-50 start-50 translate-middle" style="width: 18rem;">
            <img src="https://i1.sndcdn.com/artworks-000221933945-qmn5yk-t500x500.jpg" class="card-img-top" alt="Thank you!">
            <div class="card-body pb-5">
                <p class="card-text">You logged out successfully!</p>
                <ul class="nav nav-pills card-header-pills">
                    <li class="nav-item postion-relative">
                        <a class="nav-link active position-absolute top-90 start-50 translate-middle mt-2" href="/CMS_Sprint/">Okay</a>
                    </li>
                </ul>
            </div>
        </div>
        ';
    }

    public function getAdminDashboard()
    {
        require_once 'bootstrap.php';
        $title = $entityManager->getRepository('pages')->findAll();
        $app = $entityManager->getRepository('users')->findBy(array('name' => $_SESSION['username']));
        echo '
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
        ';
        if(!isset($_GET['admin']))
        {
            if(!isset($_GET['update']))
            {
                if($_SERVER['REQUEST_URI'] !== '/CMS_Sprint/?=Approvals')
                {
                    foreach ($app as $app)
                    {
                        if($app->getName() == 'Admin')
                        {
                            echo '
                            <div class="card text-center mx-auto w-50">
                                <div class="card-header">
                                    <ul class="nav nav-pills card-header-pills">
                                        <li class="nav-item mx-1">
                                            <a class="nav-link active" href="/CMS_Sprint/admin">Admin</a>
                                        </li>
                                        <li class="nav-item mx-1">
                                        <a class="nav-link bg-warning" href="/CMS_Sprint/">View website!</a>
                                        </li>
                                        <li class="nav-item">
                                        <button type="button" class="btn my-1" data-bs-toggle="modal" data-bs-target="#Modal">
                                        <i class="bi bi-gear"></i>
                                        </button>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link " href="/CMS_Sprint/logout">Log out</a>
                                        </li>
                                    </ul> 
                                </div>';
                        } else {
                            echo '
                            <div class="card text-center mx-auto w-50">
                                <div class="card-header">
                                    <ul class="nav nav-pills card-header-pills">
                                        <li class="nav-item mx-1">
                                            <a class="nav-link active" href="/CMS_Sprint/admin">Admin</a>
                                        </li>
                                        <li class="nav-item mx-1">
                                        <a class="nav-link bg-warning" href="/CMS_Sprint/">View website!</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link " href="/CMS_Sprint/logout">Log out</a>
                                        </li>
                                    </ul> 
                                </div>';
                        }
                    }
                       echo '<div class="card-body">
                            <h5 class="card-title">Manage Pages</h5>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Page</th>
                                        <th scope="col">Actions</th>
                                    </tr>';
                                foreach ($title as $t){
                                    echo '<tbody><tr>
                                    <td class="w-50">'. $t->getTitle() .'</td>
                                    <td class="btn-group w-100">
                                    <form action="" method="POST" class="mx-1">
                                    <input type="hidden" name="delete" value="'. $t->getId() .'"/>
                                    <input type="submit" value="Delete" class="btn btn-danger" />
                                    </form>
                                    <form action="" method="GET">
                                    <input type="hidden" name="update" value="'. $t->getId() .'"/>
                                    <input type="submit" value="Update" class="btn btn-success" />
                                    </form></td></tbody></tr>';
                                }
                                echo '</thead>
                            </table>
                            <form action="" method="GET">
                                <input type="hidden" name="admin" value="Add_Page" class="btn btn-info"/>
                                <input type="submit" value="Add Page" class="btn btn-info"/>
                            </form>
                        </div>
                    </div>
                    ';
                } 
            } else {
                echo '
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
                ';
                $name = $entityManager->getRepository('pages')->findBy(array('id' => $_GET['update']));
                $app = $entityManager->getRepository('users')->findBy(array('name' => $_SESSION['username']));
                foreach ($name as $n)
                {
                    $pageTitle = $n->getTitle();
                    $pageContent = $n->getContent();
                }
                foreach ($app as $app)
                {
                    if($app->getName() == 'Admin')
                    {
                        echo '
                        <div class="card text-center mx-auto w-50">
                            <div class="card-header">
                                <ul class="nav nav-pills card-header-pills">
                                    <li class="nav-item mx-1">
                                        <a class="nav-link active" href="/CMS_Sprint/admin">Admin</a>
                                    </li>
                                    <li class="nav-item mx-1">
                                    <a class="nav-link bg-warning" href="/CMS_Sprint/">View website!</a>
                                    </li>
                                    <li class="nav-item">
                                    <button type="button" class="btn my-1" data-bs-toggle="modal" data-bs-target="#Modal">
                                    <i class="bi bi-gear"></i>
                                    </button>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="/CMS_Sprint/logout">Log out</a>
                                    </li>
                                </ul> 
                            </div>';
                    } else {
                        echo '
                        <div class="card text-center mx-auto w-50">
                            <div class="card-header">
                                <ul class="nav nav-pills card-header-pills">
                                    <li class="nav-item mx-1">
                                        <a class="nav-link active" href="/CMS_Sprint/admin">Admin</a>
                                    </li>
                                    <li class="nav-item mx-1">
                                    <a class="nav-link bg-warning" href="/CMS_Sprint/">View website!</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="/CMS_Sprint/logout">Log out</a>
                                    </li>
                                </ul> 
                            </div>';
                    }
                }
                    echo '<div class="card-body">
                        <form action="" method="POST">
                            <div class="mb-3">
                                <label for="Title" class="form-label">Title:</label>
                                <input type="text" class="form-control" name="newTitle" id="Title" required value="'.$pageTitle.'">
                            </div>
                            <div class="mb-3">
                            <label for="Content" class="form-label">Content:</label>
                            <textarea class="form-control pb-5" name="newContent" id="Content" rows="3" required>'.$pageContent.'</textarea>
                        </div>
                            <input type="submit" name="updateContent" value="Submit" class="btn btn-info"/>
                        </form>
                    </div>
                </div>
                ';
            }
        }
    }

    public function getAdminPost()
    {
        echo '
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
        ';
        require 'bootstrap.php';
        $approvals = $entityManager->getRepository('users')->findAll();
        $app = $entityManager->getRepository('users')->findBy(array('name' => $_SESSION['username']));
        foreach ($app as $app)
        {
            if($app->getName() == 'Admin')
            {
                echo '
                <div class="card text-center mx-auto w-50">
                    <div class="card-header">
                        <ul class="nav nav-pills card-header-pills">
                            <li class="nav-item mx-1">
                                <a class="nav-link active" href="/CMS_Sprint/admin">Admin</a>
                            </li>
                            <li class="nav-item mx-1">
                            <a class="nav-link bg-warning" href="/CMS_Sprint/">View website!</a>
                            </li>
                            <li class="nav-item">
                            <button type="button" class="btn my-1" data-bs-toggle="modal" data-bs-target="#Modal">
                            <i class="bi bi-gear"></i>
                            </button>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="/CMS_Sprint/logout">Log out</a>
                            </li>
                        </ul> 
                    </div>';
            } else {
                echo '
                <div class="card text-center mx-auto w-50">
                    <div class="card-header">
                        <ul class="nav nav-pills card-header-pills">
                            <li class="nav-item mx-1">
                                <a class="nav-link active" href="/CMS_Sprint/admin">Admin</a>
                            </li>
                            <li class="nav-item mx-1">
                            <a class="nav-link bg-warning" href="/CMS_Sprint/">View website!</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="/CMS_Sprint/logout">Log out</a>
                            </li>
                        </ul> 
                    </div>';
            }
        }
            echo '<div class="card-body">
                <form action="" method="POST">
                    <div class="mb-3">
                        <label for="Title" class="form-label">Title:</label>
                        <input type="text" class="form-control" name="title" id="Title" required>
                    </div>
                    <div class="mb-3">
                    <label for="Content" class="form-label">Content:</label>
                    <textarea class="form-control pb-5" name="content" id="Content" rows="3" required></textarea>
                </div>
                    <input type="submit" name="submit" value="Submit" class="btn btn-info"/>
                </form>
            </div>
        </div>
        ';
    }

    public function getAdminRegister()
    {
        echo '
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
        ';
        echo '
        <div class="card text-center position-absolute top-50 start-50 translate-middle w-50">
        <div class="card-header bg-warning">
            <h1>Admin dashboard</h1>
        </div>
        <div id="register" class="card-body">
        <form name="register" method="POST" action="">
            <h1> Sign up </h1>
            <div class="input-group mb-3 w-50 mx-auto my-auto">
                <span class="input-group-text" id="basic-addon1"><i class="bi bi-person-bounding-box"></i></span>
                <input id="usernameSignup" name="username" required="required" type="text" placeholder="Username" class="form-control" aria-label="Username" aria-describedby="basic-addon1"/>
            </div>
            <div class="input-group mb-3 w-50 mx-auto my-auto">
                <span class="input-group-text" id="basic-addon1"><i class="bi bi-key"></i></span>
                <input id="passwordSignup" name="password" required="required" type="password" placeholder="Password" class="form-control" aria-label="Password" aria-describedby="basic-addon1"/>
            </div>
            <div class="input-group mb-3 w-50 mx-auto my-auto">
                <span class="input-group-text" id="basic-addon1"><i class="bi bi-key-fill"></i></span>
                <input id="pass_confirm" name="pass_confirm" required="required" type="password" placeholder="Confirm Password" class="form-control" aria-label="Password" aria-describedby="basic-addon1"/>
            </div>
            <p class="signin button">
                <input type="submit" name="register" value="Sign up" class="btn btn-primary"/>
            </p>
            <p class="change_link">
                Already a member ?
                <a href="index" class="btn btn-success"> Go and log in</a>
            </p>
        </form>
        <p class="change_link">
        <a class="btn btn-warning" href="/CMS_Sprint/">Home</a>
        </p>
    </div>
        ';
    }
    public function getAdminLogin()
    {
        echo '
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
        ';
        echo '
        <div id="hide" class="card text-center position-absolute top-50 start-50 translate-middle w-50">
        <div class="card-header bg-warning">
            <h1>Admin dashboard</h1>
        </div>
        <section>
            <div id="container_demo">
                <a class="hiddenAnchor" id="toRegister"></a>
                <a class="hiddenAnchor" id="toLogin"></a>
                <div class="wrapper">
                    <div id="login" class="card-body">
                        <form name="login" method="POST" action="">
                            <h1>Log in</h1>
                            <div class="input-group mb-3 w-50 mx-auto my-auto">
                                <span class="input-group-text" id="basic-addon1"><i class="bi bi-person-bounding-box"></i></span>
                                <input id="username" name="username" required="required" type="text" placeholder="Username" class="form-control" aria-label="Username" aria-describedby="basic-addon1"/>
                            </div>
                            <div class="input-group mb-3 w-50 mx-auto">
                                <span class="input-group-text" id="basic-addon1"><i class="bi bi-key"></i></span>
                                <input id="password" name="password" required="required" type="password" placeholder="Password" class="form-control" aria-label="Password" aria-describedby="basic-addon1"/>
                            </div>
                            <p class="login button">
                                <input type="hidden" name="path" value="Login" />
                                <input type="submit" name="login" value="Login" class="btn btn-primary"/>
                            </p>
                        </form>
                        <form name="Register" method="GET" action="">
                            <p class="change_link">
                                Not a member yet ?
                                <input type="hidden" name="path" value=' . str_replace(' ', '-', 'Join us now') . '/>
                                <input type="submit" value="Join us now" class="btn btn-success"/>
                            </p>
                        </form>
                        <p class="change_link">
                            <a class="btn btn-warning" href="/CMS_Sprint/">Home</a>
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </div>
        ';
    }
}