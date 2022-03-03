<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Home</title>

    <style>
        #navbarNav {
            display: flex;
            justify-content: right;
            margin-right: 200px;
        }

        .navbar {
            background-color: rgb(134, 223, 134);
        }

        .navbar-brand {
            margin-left: 100px;
        }


        #background-image {
            background: no-repeat;
            height: 100vh;
            width: 100%;
            background-size: cover;
            background-position: center;
        }

        .content {
            text-align: center;
            padding-top: 200px;
        }

        .first {
            color: white;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }

        .welcome {
            font-size: 20px;
            font-weight: 300;
            color: white;
            letter-spacing: 3px;
            animation: move 4s 1s;
            transition: 1s;
        }



        @keyframes move {
            0% {
                transform: translateX(-900px);
                color: whitesmoke;
            }

            25% {

                color: rgb(100, 223, 100);
            }

            50% {

                color: dodgerblue;
            }

            75% {

                color: deepskyblue;
            }



            100% {
                transform: translateX(1px);
                color: rgb(31, 31, 218);
            }
        }

        .row {
            margin-top: 50px;
            padding: 30px;
        }

        .card-body {
            width: 80%;
        }

        .service {
            font-size: bolder;
            color: darkturquoise;
            text-align: center;
            margin-bottom: 30px;
        }

        .about {
            font-size: bolder;
            color: darkturquoise;
            text-align: center;
        }


        #img {
            object-fit: cover;
            border-radius: 100%;
            width: 150px;
            height: 150px;
        }

        body {
            padding: 0px;
            margin: 0px;
        }

        .header {
            padding: 3px;
            text-align: center;
            background: skyblue;
        }

        .header h1 {
            font-size: 40px;

        }

        .header h1 {
            font-size: 25px;

        }

        .img {
            width: 700px;
            height: -20px;
            padding: 0px;
        }

        .card {
            background-color: white;
            padding: 20px;
            margin-top: 20px;

        }

        .footer .li {
            list-style: none;
            display: inline;
            padding: 0px 10px;
        }

        .footer {
            text-align: center;
            padding: 50px 0px;
            background-color: rgb(134, 223, 134);
        }

        .footer a {
            color: rgb(110 109);
        }

        .topnav {
            background-color: #e4e3f0;
            ;
            position: absolute;
            width: 100%;
        }

        .topnav li {
            list-style: none;
            display: inline;
            padding: 0px 10px;

        }

        ul li a {
            text-decoration: none;
            color: #7b5f55;

        }

    </style>

</head>

<body>
    <div class="Container">
        <!-- First Section -->
        <div class="section1">
            <div class="nav-bar">
                <nav class="navbar navbar-expand-lg navbar-dark">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">Dcrown Website</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="/home">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/aboutme">About Me</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/createpost">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <!-- End Of Nav Bar -->
        </div>
        <!-- End Of First Section -->

        <!-- Background image Section -->
        <div>
            <div class="bg-image" id="background-image" style="background-image: url('./thumb-1920-82317.jpg')">
                <div class="content">
                    <div class="">
                        <h1 class="first">My Frist Website</h1>
                    </div>
                    <div class="welcome">
                        <p>Welcome to my first Website</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Of Background Image Section -->

        <!-- Service Section -->
        <div class="container">
            <div class="row">
                <h1 class="service">Services</h1>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <h5>Web Development</h5>
                            <p class="card-text">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa delectus et repellat
                                nihil, voluptate odit? Obcaecati eum reprehenderit placeat aspernatur.
                                With supporting text below as a natural lead-in to additional content.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <h5>Mobile App Development</h5>
                            <p class="card-text">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa delectus et repellat
                                nihil, voluptate odit? Obcaecati eum reprehenderit placeat aspernatur.
                                With supporting text below as a natural lead-in to additional content.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <h5>Software Development</h5>
                            <p class="card-text">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa delectus et repellat
                                nihil, voluptate odit? Obcaecati eum reprehenderit placeat aspernatur.
                                With supporting text below as a natural lead-in to additional content.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Service Section End -->

            <!-- About The Company -->
            <div>
                <h1 class="about">About Me</h1>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <img id="img" src="./pic.jpg" alt="">
                </div>
                <div class="col-lg-8">
                    <h5 class="card-title">Oluwadarasimi Emmanuel</h5>
                    <p class="card-text">With supporting text below as a natural lorem ipsum natural Lorem ipsum
                        dolor
                        sit amet consectetur adipisicing elit. Earum reiciendis asperiores voluptas soluta ab modi
                        officia quis amet veniam hic. lead-in to additional content.</p>
                </div>
            </div>
        </div>
        <!--End Of About -->

        <!-- Footer -->
        <div class="footer">
            <ul>
                <li class="li"><a href="">Terms and conditions</a></li>
                <li class="li"><a href="">Partners</a></li>
                <li class="li"><a href="">Recent Post</a></li>
                <li class="li"><a href="">Previous Post</a></li>
                <li class="li"><a href="">Football News</a></li>
            </ul>
        </div>
        <!-- Footer -->

    </div>
</body>

</html>
