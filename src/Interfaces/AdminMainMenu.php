<?php

require_once 'AdminInterfaces.php';

class AdminMainMenu implements AdminInterfaces
{
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
        echo '
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
        ';
        if(!isset($_GET['admin']))
        {
            echo '
            <div class="card text-center mx-auto w-50">
                <div class="card-header">
                    <ul class="nav nav-pills card-header-pills">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Admin</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/CMS_Sprint/logout.php">Log out</a>
                        </li>
                    </ul> 
                </div>
                <div class="card-body">
                    <h5 class="card-title">Manage Pages</h5>
                    <form action="" method="GET">
                        <input type="hidden" name="admin" value="Add_Page" class="btn btn-info"/>
                        <input type="submit" value="Add Page" class="btn btn-info"/>
                    </form>
                </div>
            </div>
            ';
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
        echo '
        <div class="card mx-auto w-50">
            <div class="card-header">
                <ul class="nav nav-pills card-header-pills">
                    <li class="nav-item">
                        <a class="nav-link active" href="/CMS_Sprint/admin.php">Admin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/CMS_Sprint/logout.php">Log out</a>
                    </li>
                </ul> 
            </div>
            <div class="card-body">
                <form action="" method="POST">
                    <div class="mb-3">
                        <label for="Title" class="form-label">Title:</label>
                        <input type="text" class="form-control" name="title" id="Title">
                    </div>
                    <div class="mb-3">
                    <label for="Content" class="form-label">Content:</label>
                    <textarea class="form-control pb-5" name="content" id="Content" rows="3"></textarea>
                </div>
                </form>
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
                <a href="index.php" class="btn btn-success"> Go and log in</a>
            </p>
        </form>
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
                    </div>
                </div>
            </div>
        </section>
    </div>
        ';
    }
}