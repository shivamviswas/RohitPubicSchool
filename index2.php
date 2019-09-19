<!DOCTYPE html>
<html>
<head>
    <title>Rohit Public School</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.css">
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="js/jquery.js"></script>
    <script src="js/proper.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>

        #slider-animation {
            max-height: 550px;
        }

        .heading-box h2 {
            width: 100%;
            color: red;
        }

        h2, p {
            color: #fff;
        }

        .carousel-item img {
            width: 100%;
        }

        .text-box {
            position: absolute;
            top: 50%;
            left: 15%;
            right: 15%;
            color: #000;
            transform: translateY(-50%);
        }

        #err {
            position: relative;
            background: url(image/icons/title.png) bottom no-repeat;
            font-family: Acme;
            text-align: center;
            padding: 30px;
            color: black;
            margin-top: 30px;

        }

        #weldiv {
            background: url("image/bg/24.jpg") center;
        }

        #carddivocn {
            background-image: url("image/bg/1.jpg");
            height: 501px;
        }

        .boxidheading {
            font-size: 1.4em;
            font-weight: bolder;
            color: black;
            text-align: center;
            margin-top: 20%;
        }

        .boxidcontant {
            color: black;
            text-align: center;
            margin-top: 20px;
            font-size: 1em;
        }

        .boxdiv {

            padding: 15px;
            background-color: white;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);
            height: 300px;
            width: 100px;
            margin: 0px 20px;

        }

        .boxdiv:hover {

            transform: translateY(-20px);
            transition: 0.5s;

        }

        .boxdiv:hover .circel {
            background-color: black;
        }

        .circel {
            background: #fff none repeat scroll 0 0;
            border-radius: 100%;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            height: 85px;
            left: 50%;
            line-height: 85px;
            margin: auto;
            position: absolute;
            text-align: center;
            top: -43px;
            transform: translateX(-50%);
            width: 85px;
        }

        #bannerphoto {
            background-image: url("image/bg-png/3.png");
            background-repeat: no-repeat;
            height: 170px;
        }

        #greenbackground {
            background: url("image/bg/2.jpg") center no-repeat;
        }

        #greencenterimageaa {
            background: url("image/testimonial/bg/1.png") center no-repeat;
            height: 450px;
            width: 60%;
            margin: 100px auto;
            display: block;
        }
        #demo{
            margin-top: 100px;
            margin-right: 45px;
            margin-left: 40px;
        }

        #vedioplay{
            background: url("image/board.png");
        }




        /*footer*/

        body { color: #ccc }
        .footer-widget p {
            margin-bottom: 27px;
        }
        p {
            font-family: 'Nunito', sans-serif;
            font-size: 16px;
            line-height: 28px;
        }

        .animate-border {
            position: relative;
            display: block;
            width: 115px;
            height: 3px;
            background: #007bff; }

        .animate-border:after {
            position: absolute;
            content: "";
            width: 35px;
            height: 3px;
            left: 0;
            bottom: 0;
            border-left: 10px solid #fff;
            border-right: 10px solid #fff;
            -webkit-animation: animborder 2s linear infinite;
            animation: animborder 2s linear infinite; }

        @-webkit-keyframes animborder {
            0% {
                -webkit-transform: translateX(0px);
                transform: translateX(0px); }
            100% {
                -webkit-transform: translateX(113px);
                transform: translateX(113px); } }

        @keyframes animborder {
            0% {
                -webkit-transform: translateX(0px);
                transform: translateX(0px); }
            100% {
                -webkit-transform: translateX(113px);
                transform: translateX(113px); } }

        .animate-border.border-white:after {
            border-color: #fff; }

        .animate-border.border-yellow:after {
            border-color: #F5B02E; }

        .animate-border.border-orange:after {
            border-right-color: #007bff;
            border-left-color: #007bff; }

        .animate-border.border-ash:after {
            border-right-color: #EEF0EF;
            border-left-color: #EEF0EF; }

        .animate-border.border-offwhite:after {
            border-right-color: #F7F9F8;
            border-left-color: #F7F9F8; }

        /* Animated heading border */
        @keyframes primary-short {
            0% {
                width: 15%; }
            50% {
                width: 90%; }
            100% {
                width: 10%; } }

        @keyframes primary-long {
            0% {
                width: 80%; }
            50% {
                width: 0%; }
            100% {
                width: 80%; } }

        .dk-footer {
            padding: 75px 0 0;
            background-color: #151414;
            position: relative;
            z-index: 2; }
        .dk-footer .contact-us {
            margin-top: 0;
            margin-bottom: 30px;
            padding-left: 80px; }
        .dk-footer .contact-us .contact-info {
            margin-left: 50px; }
        .dk-footer .contact-us.contact-us-last {
            margin-left: -80px; }
        .dk-footer .contact-icon i {
            font-size: 24px;
            top: -15px;
            position: relative;
            color:#007bff; }

        .dk-footer-box-info {
            position: absolute;
            top: -122px;
            background: #202020;
            padding: 40px;
            z-index: 2; }
        .dk-footer-box-info .footer-social-link h3 {
            color: #fff;
            font-size: 24px;
            margin-bottom: 25px; }
        .dk-footer-box-info .footer-social-link ul {
            list-style-type: none;
            padding: 0;
            margin: 0; }
        .dk-footer-box-info .footer-social-link li {
            display: inline-block; }
        .dk-footer-box-info .footer-social-link a i {
            display: block;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            text-align: center;
            line-height: 40px;
            background: #000;
            margin-right: 5px;
            color: #fff; }
        .dk-footer-box-info .footer-social-link a i.fa-facebook {
            background-color: #3B5998; }
        .dk-footer-box-info .footer-social-link a i.fa-twitter {
            background-color: #55ACEE; }
        .dk-footer-box-info .footer-social-link a i.fa-google-plus {
            background-color: #DD4B39; }
        .dk-footer-box-info .footer-social-link a i.fa-linkedin {
            background-color: #0976B4; }
        .dk-footer-box-info .footer-social-link a i.fa-instagram {
            background-color: #B7242A; }

        .footer-awarad {
            margin-top: 285px;
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-flex: 0;
            -webkit-flex: 0 0 100%;
            -moz-box-flex: 0;
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -moz-box-align: center;
            -ms-flex-align: center;
            align-items: center; }
        .footer-awarad p {
            color: #fff;
            font-size: 24px;
            font-weight: 700;
            margin-left: 20px;
            padding-top: 15px; }

        .footer-info-text {
            margin: 26px 0 32px; }

        .footer-left-widget {
            padding-left: 80px; }

        .footer-widget .section-heading {
            margin-bottom: 35px; }

        .footer-widget h3 {
            font-size: 24px;
            color: #fff;
            position: relative;
            margin-bottom: 15px;
            /*max-width: -webkit-fit-content;*/
            /*max-width: -moz-fit-content;*/
            max-width: fit-content; }

        .footer-widget ul {
            width: 50%;
            float: left;
            list-style: none;
            margin: 0;
            padding: 0; }

        .footer-widget li {
            margin-bottom: 18px; }

        .footer-widget p {
            margin-bottom: 27px; }

        .footer-widget a {
            color: #878787;
            -webkit-transition: all 0.3s;
            -o-transition: all 0.3s;
            transition: all 0.3s; }
        .footer-widget a:hover {
            color: #007bff; }

        .footer-widget:after {
            content: "";
            display: block;
            clear: both; }

        .dk-footer-form {
            position: relative; }
        .dk-footer-form input[type=email] {
            padding: 14px 28px;
            border-radius: 50px;
            background: #2E2E2E;
            border: 1px solid #2E2E2E; }
        .dk-footer-form input::-webkit-input-placeholder, .dk-footer-form input::-moz-placeholder, .dk-footer-form input:-ms-input-placeholder, .dk-footer-form input::-ms-input-placeholder, .dk-footer-form input::-webkit-input-placeholder {
            color: #878787;
            font-size: 14px; }
        .dk-footer-form input::-webkit-input-placeholder, .dk-footer-form input::-moz-placeholder, .dk-footer-form input:-ms-input-placeholder, .dk-footer-form input::-ms-input-placeholder, .dk-footer-form input::placeholder {
            color: #878787;
            font-size: 14px; }
        .dk-footer-form button[type=submit] {
            position: absolute;
            top: 0;
            right: 0;
            padding: 12px 24px 12px 17px;
            border-top-right-radius: 25px;
            border-bottom-right-radius: 25px;
            border: 1px solid #007bff;
            background: #007bff;
            color: #fff; }
        .dk-footer-form button:hover {
            cursor: pointer; }

        /* ==========================

            Contact

        =============================*/
        .contact-us {
            position: relative;
            z-index: 2;
            margin-top: 65px;
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -moz-box-align: center;
            -ms-flex-align: center;
            align-items: center; }

        .contact-icon {
            position: absolute; }
        .contact-icon i {
            font-size: 36px;
            top: -5px;
            position: relative;
            color: #007bff; }

        .contact-info {
            margin-left: 75px;
            color: #fff; }
        .contact-info h3 {
            font-size: 20px;
            color: #fff;
            margin-bottom: 0; }

        .copyright {
            padding: 28px 0;
            margin-top: 55px;
            background-color: #202020; }
        .copyright span,
        .copyright a {
            color: #878787;
            -webkit-transition: all 0.3s linear;
            -o-transition: all 0.3s linear;
            transition: all 0.3s linear; }
        .copyright a:hover {
            color:#007bff; }

        .copyright-menu ul {
            text-align: right;
            margin: 0; }

        .copyright-menu li {
            display: inline-block;
            padding-left: 20px; }

        .back-to-top {
            position: relative;
            z-index: 2; }

        .back-to-top .btn-dark {
            width: 35px;
            height: 35px;
            border-radius: 50%;
            padding: 0;
            position: fixed;
            bottom: 20px;
            right: 20px;
            background: #2e2e2e;
            border-color: #2e2e2e;
            display: none;
            z-index: 999;
            -webkit-transition: all 0.3s linear;
            -o-transition: all 0.3s linear;
            transition: all 0.3s linear; }

        .back-to-top .btn-dark:hover {
            cursor: pointer;
            background: #FA6742;
            border-color: #FA6742; }

        #sliderdiv{
            max-height: 700px;
        }

    </style>
</head>

<body style="height: 1500px">

<div class="header bg-light py-3">
    <div class="container">

        <div class="row ml-lg-5">
            <div class="col-md-6 my-auto mx-auto d-block">
                <a href="#"><span class="glyphicon glyphicon-envelope"></span> <i class="fa fa-envelope-o"
                                                                                  aria-hidden="true"></i> Email:
                    rohitpublicschool@gmail.com &nbsp;</a>
                <a href="#"><span class="glyphicon glyphicon-earphone"></span> <i class="fa fa-phone"></i> Phone:
                    +918003800564</a>
            </div>
            <div class="col-md-4 text-right d-block my-auto mx-auto">
                <a href="#"><span class="glyphicon glyphicon-user"></span><i class="fa fa-sign-out"
                                                                             aria-hidden="true"></i> Sign Up &nbsp;</a>
                <a href="#"><span class="glyphicon glyphicon-log-in"></span><i class="fa fa-sign-in"
                                                                               aria-hidden="true"></i>&nbsp;Login</a>
            </div>
        </div>
        <!--/row-->
    </div>
    <!--container-->
</div>


<nav class="navbar navbar-expand-sm sticky-top navbar-dark bg-primary wave navbarLay">
    <div class="container">
        <div class="navbar-brand">

            <img src="image/rohitpublicschool.png" class="img-fluid"/>
            <h5 id="brandname" style=" text-align: right">Rohit Public School</h5>
        </div>


        <button class="navbar-toggler navbar-toggler-right" style="" type="button" data-toggle="collapse"
                data-target="#navbar1">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar1">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Admission</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Event</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Activity</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Payment</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact Us</a>
                </li>
            </ul>
        </div>
    </div>

</nav>

<div class="clearfix"></div>

<section>
    <div id="slider-animation" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <!-- The slideshow -->
        <div id="sliderdiv" class="carousel-inner">
            <div class="carousel-item active">
                <img src="image/19.jpg" alt="Los Angeles">
                <div class="text-box">
                    <h2 style="background-color: #ec2227 ; display: inline-block ; padding: 5px"
                        class="wow slideInRight" data-wow-duration="2s">This is heading text</h2>
                    <div style="background-color: #ec2227 ; width:auto; padding: 5px" class="col-md-4 wow slideInLeft"
                         data-wow-duration="2s"><p style="color: white">There is now an abundance of readable dummy
                            texts.<br> These are usually used when a text is required purely to fill a space. </p>
                    </div>
                </div>
            </div>



            <div class="carousel-item">
                <img src="image/bg/11.jpg" alt="Los Angeles">
                <div class="text-box">
                    <div class="row align-items-center">

                        <div class="col-md-6">
                            <h2 style="background-color: #ec2227 ; display: inline-block ; padding: 5px"
                                class="wow fadeInUp" data-wow-duration="4s">This is heading text</h2>
                            <p style="background-color: #ec2227 ; display: inline-block ; padding: 5px"
                               class="wow fadeInUp" data-wow-duration="2s">There is now an abundance of readable dummy
                                texts. These are usually used when a text is required purely to fill a space. </p>
                        </div>
                        <div class="col-md-6 wow slideInLeft" data-wow-duration="4s">
                            <img src="image/slider/1.png">

                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="image/class/big-img/1.jpg" alt="Chicago">
                <div class="text-box">
                    <div class="row align-items-center">

                        <div class="col-md-6  wow slideInRight" data-wow-duration="4s">
                            <img src="http://www.branding24x7.com/wp-content/uploads/2017/12/web-design-icon-2.png">

                        </div>
                        <div class="col-md-6  wow slideInLeft" data-wow-duration="4s">
                            <h2 style="background-color: #ec2227 ; display: inline-block ; padding: 5px">This is heading
                                text</h2>
                            <p style="background-color: #ec2227 ; display: inline-block ; padding: 5px">There is now an
                                abundance of readable dummy texts. These are usually used when a text is required purely
                                to fill a space. </p>

                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#slider-animation" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#slider-animation" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>

    </div>

</section>



</body>
</html>