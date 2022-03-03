<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>About Me</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
    <link rel="stylesheet" href="./style.css">

    <style>
        @import url('https://use.fontawesome.com/releases/v5.6.1/css/all.css');
        @import url('https://fonts.googleapis.com/css?family=Cairo:300,600,700,900');

        body {
            font-family: 'Cairo', sans-serif;
            font-weight: 300;
            letter-spacing: .025rem;
            color: #494949;
        }

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

        h1 {
            font-weight: 900;
        }

        h2,
        h3 {
            font-weight: 700;
        }

        h4,
        h5,
        h6 {
            font-weight: 600;
        }

        p {
            color: #6c757d;
        }

        img {
            max-width: 100%;
        }

        .about-section {
            width: 100%;
            height: 100vh;
        }

        .left-header {
            position: sticky;
            top: 0;
            left: 0;
            color: #fff;
            height: 100vh;
            width: 100%;
            max-width: 100%;
            background-image: linear-gradient(to bottom, rgba(0, 0, 0, .5), rgba(0, 0, 0, .5)), url('https://source.unsplash.com/4kkYkFNfJV8/706x900');
            background-size: cover;
            padding: 4rem;
        }

        .left-header::before {
            background-color: #fff;
            position: absolute;
            content: '';
            bottom: 50px;
            left: 30px;
            margin: 0 1rem;
            width: 80%;
            height: 2px;
        }

        .left-header::after {
            background-color: #fff;
            position: absolute;
            content: '';
            bottom: 50px;
            left: 30px;
            margin: 0 1rem;
            height: 80%;
            width: 2px;
        }

        .left-header h2 {
            margin-left: 4rem;
        }

        .v-center-box {
            min-height: 100%;
        }

        .sub-heading {
            font-size: .8rem;
            font-weight: 700;
            letter-spacing: .15rem;
            word-spacing: .05rem;
        }

        .about-data {
            position: relative;
        }

        .about-data::before {
            position: absolute;
            content: '\003c/ ABOUT \003e';
            top: 0;
            left: 50%;
            transform: translate(-50%, -60%);
            text-align: center;
            font-size: .8rem;
            font-weight: 900;
            color: #dee2e6;
            background-color: #fff;
            width: 8rem;
        }

        .about-data i {
            color: #f12d2d;
        }

        .about-data p {
            font-size: .7rem;
            letter-spacing: .05rem;
            word-spacing: .2rem;
        }

        .about-data .data-number {
            color: #494949;
            font-size: 1.2rem;
        }

        .icon-18 {
            font-size: 1.8rem;
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

        ul li a {
            text-decoration: none;
            color: #7b5f55;

        }

        @media (min-width: 992px) and (max-width: 1199px) {
            .left-header::before {
                width: 70%;
            }
        }

        @media (min-height: 590px) {
            .left-header::after {
                height: 85%;
            }
        }

    </style>

</head>

<body>
    <!-- partial:index.partial.html -->
    <section class="about-section">
        <!-- First Section -->
        <div class="section1">
            <div class="nav-bar">
                <nav class="navbar navbar-expand-lg navbar-dark">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="/home">Dcrown Website</a>
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
        <div class="container-fluid p-0">
            <div class="row no-gutters position-relative">
                <div class="left-header d-none d-lg-block col-lg-3 col-xl-4">
                    <div class="v-center-box d-flex align-items-end text-uppercase">
                        <h2 class="mb-0">About Me</h2>
                    </div>
                </div>
                <div class="col-lg-9 col-xl-8">
                    <div class="main-content p-5">
                        <div class="main-header mb-4">
                            <h6 class="sub-heading text-uppercase d-block mb-2">Who I am</h6>
                            <h1 class="main-heading d-inline-block text-uppercase pb-3 border-bottom">&lt; About &gt;
                            </h1>
                        </div>

                        <div class="row mb-5">
                            <div class="mb-5 mb-sm-4 col-md-4">
                                <img src="https://source.unsplash.com/35sVnCCynWA/784x1250" alt="Colorful Wall">
                            </div>
                            <div class="col-md-8">
                                <div class="about__text mb-5 mb-sm-4 mb-md-4">
                                    <h3>Oluwadarasimi Emmanuel</h3>
                                    <p class="m-0">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Eius nulla
                                        rerum doloribus qui, neque placeat veniam est deserunt eum aperiam quia, ab
                                        fuga sed? Commodi laboriosam nulla hic amet sint.</p>
                                </div>
                                <div class="about__skills">
                                    <div class="row no-gutters mb-0 mb-sm-4">
                                        <div class="mb-4 mb-sm-0 pr-sm-3 col-sm-6">
                                            <div class="media">
                                                <i class="fab fa-js-square icon-18 mr-3"></i>
                                                <div class="media-body">
                                                    <h4 class="m-0">Javascript</h4>
                                                    <p class="m-0">Quasea minus animi sequi sit nostrum?
                                                        Lorem ipsum
                                                        dolor sit amet
                                                        consectetur adipisicing elit.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-4 mb-sm-0 pl-sm-3 col-sm-6 ">
                                            <div class="media">
                                                <i class="fab fa-react icon-18 mr-3"></i>
                                                <div class="media-body">
                                                    <h4 class="m-0">React</h4>
                                                    <p class="m-0">Ducimus facere vitae sapiente ab sit.
                                                        Lorem ipsum
                                                        dolor sit amet
                                                        consectetur adipisicing elit.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row no-gutters mb-0 mb-sm-4">
                                        <div class="mb-4 mb-sm-0 pr-sm-3 col-sm-6">
                                            <div class="media">
                                                <i class="fab fa-sass icon-18 mr-2"></i>
                                                <div class="media-body">
                                                    <h4 class="m-0">Sass</h4>
                                                    <p class="m-0">Eaque voluptatibus dolores. Quod. Lorem
                                                        dolor sit
                                                        amet
                                                        consectetur. Minus, asperiores.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-0 pl-sm-3 col-sm-6">
                                            <div class="media">
                                                <i class="fab fa-node-js icon-18 mr-3"></i>
                                                <div class="media-body">
                                                    <h4 class="m-0">Node.js</h4>
                                                    <p class="m-0">Numquam saepe deserunt obcaecati?
                                                        Doloribus. Lorem
                                                        ipsum dolor
                                                        sit amet adipisicing elit.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="about-data">
                            <div class="row no-gutters pt-5 border-top">
                                <div class="mb-4 mb-md-0 pr-sm-3 p-md-0 col-sm-6 col-md-3">
                                    <div class="media">
                                        <i class="fas fa-mug-hot icon-18 mr-2"></i>
                                        <div class="media-body">
                                            <p class="data-number m-0 font-weight-bold">10,950</p>
                                            <p class="m-0 text-uppercase">Cups of coffee</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-4 mb-md-0 pl-sm-3 p-md-0 col-sm-6 col-md-3">
                                    <div class="media">
                                        <i class="fas fa-code icon-18 mr-2"></i>
                                        <div class="media-body">
                                            <p class="data-number m-0 font-weight-bold">8,475,000</p>
                                            <p class="m-0 text-uppercase">Lines of code</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-4 mb-md-0 pr-sm-3 p-md-0 col-sm-6 col-md-3">
                                    <div class="media">
                                        <i class="fas fa-bus icon-18 mr-2"></i>
                                        <div class="media-body">
                                            <p class="data-number m-0 font-weight-bold">8,214</p>
                                            <p class="m-0 text-uppercase">Buses taken</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-4 mb-md-0 pl-sm-3 p-md-0 col-sm-6 col-md-3">
                                    <div class="media">
                                        <i class="far fa-smile-wink icon-18 mr-2"></i>
                                        <div class="media-body">
                                            <p class="data-number m-0 font-weight-bold">3,165</p>
                                            <p class="m-0 text-uppercase">Awkward winks</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
    </section>
    <!-- partial -->

</body>

</html>
