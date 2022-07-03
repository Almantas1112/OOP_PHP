<?php

require_once 'MainInterfaces.php';

class Main implements MainInterfaces
{
    public function index()
    {
        echo '
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
        ';
        echo '
        <body class="bg-light">
        <div class="card">
            <h1 class="card-header text-center bg-primary">CMS</h1>
            <nav class="navbar navbar-expand-lg bg-info">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="card-body bg-light">
                <h5 class="card-title text-center">Special title treatment</h5>
                <p class="card-text">
                With supporting text below as a natural lead-in to additional content.
                </p>
            </div>
            <div class="card-footer text-center">
                © Almantas Anciūnas 2022 - '.date("Y").' CMS | TO ADMIN DASHBOARD -> <a class="btn btn-primary" href="/CMS_Sprint/admin/Main" role="button">ADMIN</a>
            </div>
        </div>
        <body>
        ';
    }

    public function Error_404()
    {
        $images = array(
            '0' => 'https://i.imgflip.com/4iblnq.jpg',
            '1' => 'http://static1.squarespace.com/static/56209259e4b03bf3899b56ce/572581bb40261dcef4e0f05e/5b18f3561ae6cf93c243c576/1528363025299/technicaldifficulties.jpg?format=1500w',
            '2' => 'https://live.staticflickr.com/3562/3454581387_a677f0b64f_w.jpg',
            '3' => 'https://i.pinimg.com/originals/6b/22/98/6b2298fec93ad8240f87c8228ab87969.jpg',
            '4' => 'https://i.pinimg.com/originals/31/81/3d/31813d7d73a653f64f2bce641c505b2a.jpg',
            '5' => 'https://c.tenor.com/jN9NkivpVCoAAAAM/meme-funny-as-hell.gif'
        );
        $randomNumber = rand(0, count($images)-1);
        $image = $images[$randomNumber];
        echo '
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
        ';
        echo '
        <body class="bg-warning">
            <h1 class="card-header text-center bg-warning mt-5">ERROR 404</h1>
            <ul class="nav nav-pills card-header-pills ">
            <li class="nav-item text-center mx-auto w-50">
                <a class="btn btn-danger" href="/CMS_Sprint/">Home</a>
            </li>
            </ul>
            <img src="'.$image.'" class="img-fluid rounded-3 w-25 position-absolute top-50 start-50 translate-middle" alt="Error 404">
        </body>
        ';
    }
}