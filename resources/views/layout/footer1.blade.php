<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html lang="en">

<head>
    <!--<title>Footer Example</title>-->
   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    
    <style>
        .footer-section {
            background: #166a84;
            padding-bottom: 80px;
        }
        
        .footer-section-row {
            background: #1d7590;
            padding: 18px;
            margin-bottom: 50px;
        }
        
        .address {
            padding: 10px;
            display: flex;
        }
        
        .right-text {
            padding-left: 28px;
        }
        
        .right-text h3 {
            text-transform: uppercase;
            letter-spacing: 2px;
            color: #fff;
            font-size: 17px;
            font-weight: 700;
        }
        
        .right-text p {
            margin: 0px;
            color: #fff;
            font-size: 15px;
            line-height: 23px;
        }
        
        .footer-title {
            text-transform: uppercase;
            letter-spacing: 2px;
            color: #f7bb07;
            font-size: 20px;
            margin-bottom: 23px;
            font-weight: 700;
            position: relative;
        }
        /* .footer-title span::before {
            content: "";
            position: absolute;
            right: 0px;
            bottom: 0px;
            width: 117px;
            height: 2px;
            background-color: #f7bb07;
        } */
        
        .footer-title-text {
            background: #166a84;
            z-index: 999;
            position: relative;
        }
        
        .footer-title-underline {
            height: 1px;
            background-color: #f7bb07;
            width: 100%;
            position: absolute;
            bottom: 3px;
            left: 0px;
        }
        
        .quick-link-list {
            list-style-type: none;
            padding: 0px;
        }
        
        .quick-link-list li a {
            color: #fff;
            margin-bottom: 8px;
            display: block;
        }
        
        .footer-section-bottom {
            background: #1d7590;
            padding: 17px 0px;
        }
        
        .footer-bottom-left p {
            margin: 0px;
            color: #fff;
        }
        
        .footer-bottom-right p {
            margin: 0px;
            color: #fff;
            text-align: right;
        }
        
        .footer-bottom-right p a {
            color: #dcd735;
        }
        
        .title-transparent {
            opacity: 0 !important;
        }
        
        #social {
            margin: 20px 10px;
            text-align: center;
        }
        
        .smGlobalBtn {
            /* global button class */
            display: inline-block;
            position: relative;
            cursor: pointer;
            width: 50px;
            height: 50px;
            border: 2px solid #ddd;
            /* add border to the buttons */
            box-shadow: 0 3px 3px #999;
            padding: 0px;
            text-decoration: none;
            text-align: center;
            color: #fff;
            font-size: 22px;
            font-weight: normal;
            line-height: 2em;
            border-radius: 27px;
            -moz-border-radius: 27px;
            -webkit-border-radius: 27px;
        }
        /* facebook button class*/
        
        .facebookBtn {
            background: #4060A5;
        }
        
        .facebookBtn:before {
            /* use :before to add the relevant icons */
            font-family: "FontAwesome";
            content: "\f09a";
            /* add facebook icon */
        }
        
        .facebookBtn:hover {
            color: #4060A5;
            background: #fff;
            border-color: #4060A5;
            /* change the border color on mouse hover */
        }
        /* twitter button class*/
        
        .twitterBtn {
            background: #00ABE3;
        }
        
        .twitterBtn:before {
            font-family: "FontAwesome";
            content: "\f099";
            /* add twitter icon */
        }
        
        .twitterBtn:hover {
            color: #00ABE3;
            background: #fff;
            border-color: #00ABE3;
        }
        /* google plus button class*/
        
        .googleplusBtn {
            background: #e64522;
        }
        
        .googleplusBtn:before {
            font-family: "FontAwesome";
            content: "\f0d5";
            /* add googleplus icon */
        }
        
        .googleplusBtn:hover {
            color: #e64522;
            background: #fff;
            border-color: #e64522;
        }
        /* linkedin button class*/
        
        .linkedinBtn {
            background: #0094BC;
        }
        
        .linkedinBtn:before {
            font-family: "FontAwesome";
            content: "\f0e1";
            /* add linkedin icon */
        }
        
        .linkedinBtn:hover {
            color: #0094BC;
            background: #fff;
            border-color: #0094BC;
        }
        /* youtube button class */
        
        .youtubeBtn {
            background: #bf1d23;
        }
        
        .youtubeBtn:before {
            font-family: "FontAwesome";
            content: "\f167";
            /* add linkedin icon */
        }
        
        .youtubeBtn:hover {
            color: #bf1d23;
            background: #fff;
            border-color: #bf1d23;
        }
        /* youtube button class */
        /* pinterest button class*/
        
        .pinterestBtn {
            background: #cb2027;
        }
        
        .pinterestBtn:before {
            font-family: "FontAwesome";
            content: "\f0d2";
            /* add pinterest icon */
        }
        
        .pinterestBtn:hover {
            color: #cb2027;
            background: #fff;
            border-color: #cb2027;
        }
        /* tumblr button class*/
        
        .tumblrBtn {
            background: #3a5876;
        }
        
        .tumblrBtn:before {
            font-family: "FontAwesome";
            content: "\f173";
            /* add tumblr icon */
        }
        
        .tumblrBtn:hover {
            color: #3a5876;
            background: #fff;
            border-color: #3a5876;
        }
        /* rss button class*/
        
        .rssBtn {
            background: #e88845;
        }
        
        .rssBtn:before {
            font-family: "FontAwesome";
            content: "\f09e";
            /* add rss icon */
        }
        
        .rssBtn:hover {
            color: #e88845;
            background: #fff;
            border-color: #e88845;
        }
        
        .form-control-new {
            border-radius: 0px;
            position: relative;
        }
        
        .form-control-new:before {
            content: "/f0e0";
            font-family: FontAwesome;
            position: absolute;
            left: 0px;
            top: 0px;
        }
        
        .newsletter {
            color: #fff;
        }
        
        .subscribe {
            width: 100%;
            border-radius: 0px;
            background: #24829f;
            border: 1px solid #6ac5e1;
            text-transform: uppercase;
            letter-spacing: 2px;
            font-weight: 600;
        }
    </style>
</head>

<body>

    <section class="footer-section">
        <div class="container">
            <div class="row footer-section-row">
                <div class="col-md-4">
                    <div class="address">
                        <div class="left-icon">
                            <img src="">
                        </div>
                        <div class="right-text">
                            <h3>Address</h3>
                            <p>St. 233</p>
                            <p>Depo2, 7 Mokra</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="address">
                        <div class="left-icon">
                            <img src="mail.png">
                        </div>
                        <div class="right-text">
                            <h3>Mail Id</h3>
                            <p>phone@yahoo.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="address">
                        <div class="left-icon">
                            <img src="call.png">
                        </div>
                        <div class="right-text">
                            <h3>Phone</h3>
                            <p>+855 120000000, </p>
                            <p>+855 100000000</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <h3 class="footer-title"><span class="footer-title-text">Quick Link</span><span class="footer-title-underline"></span></h3>
                    <ul class="quick-link-list">
                        <li><a href="#"> The Secretary</a></li>
                        <li><a href="#">  Shree Ramakrishna Dev</a></li>
                        <li><a href="#">  Maa Sarada Devi</a></li>
                        <li><a href="#"> Swami Vivekananda</a></li>
                        <li><a href="#"> Education</a></li>
                        <li><a href="#"> Medical</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h3 class="footer-title title-transparent">Quick Link</h3>
                    <ul class="quick-link-list">
                        <li><a href="#"> Old Age Home</a></li>
                        <li><a href="#"> Video Archive</a></li>
                        <li><a href="#"> News & Events</a></li>
                        <li><a href="#"> News & Events</a></li>
                        <li><a href="#"> Youth Welfare Programme</a></li>
                        <li><a href="#"> Relief Work</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h3 class="footer-title title-transparent">Quick Link</h3>
                    <ul class="quick-link-list">
                        <li><a href="#"> Donation</a></li>
                        <li><a href="#"> Future Plan</a></li>
                        <li><a href="#"> Feedback</a></li>
                        <li><a href="#"> Site Map</a></li>
                        <li><a href="#"> Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h3 class="footer-title"><span class="footer-title-text">Get Updates</span><span class="footer-title-underline"></span></h3>
                    <p class="newsletter">Signup to Our Newsletter.</p>
                    <form action="">
                        <div class="form-group">
                            <input type="text" class="form-control form-control-new" id="usr" name="username" placeholder="Enter Your Mail Id">
                        </div>
                        <button type="submit" class="btn btn-primary subscribe">Subscribe</button>
                    </form>
                    <div id="social">
                        <a class="facebookBtn smGlobalBtn" href="#"></a>
                        <a class="twitterBtn smGlobalBtn" href="#"></a>
                        <a class="youtubeBtn smGlobalBtn" href="#"></a>
                        <a class="linkedinBtn smGlobalBtn" href="#"></a>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="footer-section-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-6 footer-bottom-left">
                    <p>© All Rights 2021</p>
                </div>
                <div class="col-md-6 footer-bottom-right">
                    <p>Developed by <a href="#">Co Ltd.</a></p>
                </div>
            </div>
        </div>
    </section>
</body>

</html>