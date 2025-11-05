<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
	<?php define("base_url", "https://www.onthewayhotels.com/"); ?>
    <link href="<?php echo base_url;?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url;?>assets/css/jquery-ui.css" rel="stylesheet">
    <!-- Bootstrap Icon CSS -->
    <link href="<?php echo base_url;?>assets/css/bootstrap-icons.css" rel="stylesheet">
    <!-- CSS -->
    <link href="<?php echo base_url;?>assets/css/animate.min.css" rel="stylesheet">
    <!-- FancyBox CSS -->
    <link href="<?php echo base_url;?>assets/css/jquery.fancybox.min.css" rel="stylesheet">
    <!-- Swiper slider CSS -->
    <link rel="stylesheet" href="<?php echo base_url;?>assets/css/swiper-bundle.min.css">
    <!-- Slick slider CSS -->
    <link rel="stylesheet" href="<?php echo base_url;?>assets/css/slick.css">
    <link rel="stylesheet" href="<?php echo base_url;?>assets/css/slick-theme.css">
    <link rel="stylesheet" href="<?php echo base_url;?>assets/css/daterangepicker.css">
    <!-- BoxIcon  CSS -->
    <link href="<?php echo base_url;?>assets/css/boxicons.min.css" rel="stylesheet">
    <!--  Style CSS  -->
    <link rel="stylesheet" href="<?php echo base_url;?>assets/css/style.css">
    <!-- Title -->
    <title>On the Way Hospitality</title>
    <link rel="icon" href="<?php echo base_url;?>images/favicon.ico" type="image/gif" sizes="20x20">
</head>

<body class="tt-magic-cursor experience-02">

    <div id="magic-cursor">
        <div id="ball"></div>
    </div>

    <!-- Back To Top -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
        </svg>
        <svg class="arrow" width="22" height="25" viewBox="0 0 24 23" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M0.556131 11.4439L11.8139 0.186067L13.9214 2.29352L13.9422 20.6852L9.70638 20.7061L9.76793 8.22168L3.6064 14.4941L0.556131 11.4439Z"/>
            <path d="M23.1276 11.4999L16.0288 4.40105L15.9991 10.4203L20.1031 14.5243L23.1276 11.4999Z"/>
        </svg>
    </div>

    <!-- header Section Start-->
    <div class="topbar-area three d-lg-block d-none">
        <div class="container">
            <div class="topbar-wrap">
                <div class="logo-and-search-area">
                    <a href="<?php echo base_url;?>" class="header-logo">
                        <img src="<?php echo base_url;?>images/logo.png" alt="Logo">
                    </a>
                    <form class="search-area">
                        <div class="form-inner">
                            <button type="submit">
                                <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <path
                                            d="M15.8044 14.8855L13.0544 12.198L12.99 12.1002C12.8688 11.9807 12.7055 11.9137 12.5353 11.9137C12.3651 11.9137 12.2018 11.9807 12.0806 12.1002C9.74343 14.2443 6.14312 14.3605 3.66561 12.3724C1.18811 10.3843 0.604677 6.90645 2.30061 4.24832C3.99655 1.5902 7.44655 0.573637 10.3631 1.87332C13.2797 3.17301 14.755 6.38739 13.8125 9.38239C13.7793 9.48905 13.7753 9.60268 13.8011 9.71137C13.8269 9.82007 13.8815 9.91983 13.9591 10.0002C14.0375 10.082 14.1358 10.1421 14.2443 10.1746C14.3528 10.2071 14.4679 10.211 14.5784 10.1858C14.6883 10.1616 14.79 10.109 14.8732 10.0332C14.9564 9.95744 15.0182 9.86113 15.0525 9.75395C16.1775 6.19989 14.4781 2.37489 11.0525 0.75395C7.62686 -0.866988 3.50468 0.200824 1.35124 3.26864C-0.802198 6.33645 -0.34001 10.4818 2.43905 13.0239C5.21811 15.5661 9.47968 15.7408 12.4687 13.4377L14.9037 15.8183C15.026 15.9358 15.1889 16.0014 15.3584 16.0014C15.5279 16.0014 15.6909 15.9358 15.8131 15.8183C15.8728 15.7599 15.9201 15.6902 15.9525 15.6133C15.9848 15.5363 16.0015 15.4537 16.0015 15.3702C16.0015 15.2867 15.9848 15.2041 15.9525 15.1271C15.9201 15.0502 15.8728 14.9805 15.8131 14.9221L15.8044 14.8855Z"/>
                                    </g>
                                </svg>
                            </button>
                            <input type="text" placeholder="Find Your Perfect Tour Package">
                        </div>
                    </form>
                </div>
                <div class="topbar-right">
                    <div class="support-and-language-area">
                        <!--<a href="#">Need Help?</a>-->
                        <div class="language-area">
                            <div class="language-btn">
                                <span>Contact us</span>
                                <i class="bi bi-caret-down-fill"></i>
                            </div>
                            <ul class="language-list">
                                <li><a href="https://wa.me/918968782025" target="_blank"><i class="bx bxl-whatsapp-square"></i> Whatsapp</a></li>
                                <li><a href="tel:+918968782025"><i class="bx bxs-phone-call"></i> Call</a></li>
                                <li><a href="mailto:info@onthewayhotels.com"><i class="bx bx-envelope"></i> E-mail</a></li>
                                <li><a href="#form"><i class="bx bx-message-edit"></i> Fill Form</a></li>
                            </ul>
                        </div>
                    </div>
                    <a href="https://be.aiosell.com/book/23ca18ed6c" class="primary-btn1 four transparent">
                        <span>
                            Reserve Now
                        </span>
                        <span>
                            Reserve Now
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <header class="style-1 three">
        <div class="container d-flex flex-nowrap align-items-center justify-content-lg-center justify-content-between">
            <a href="<?php echo base_url;?>" class="header-logo d-lg-none d-block">
                <img src="<?php echo base_url;?>images/logo.png" alt="Logo">
            </a>
            <div class="main-menu">
                <div class="mobile-logo-area d-lg-none d-flex align-items-center justify-content-between">
                    <a href="<?php echo base_url;?>" class="mobile-logo-wrap">
                        <img src="<?php echo base_url;?>images/logo.png" alt="Logo">
                    </a>
                    <div class="menu-close-btn">
                        <i class="bi bi-x"></i>
                    </div>
                </div>
                <ul class="menu-list">
                    <li><a href="<?php echo base_url;?>">Home</a></li>
                    <li><a href="#about">About us</a></li>
                    <li><a href="#room">Our Rooms</a></li>
                    <li><a href="#attractions">Attractions</a></li>
                    <!--<li><a href="">Our Portfolio</a></li>-->
                    <li><a href="#feedback">Client Feedbacks</a></li>
                    <li><a href="#form">Contact us</a></li>
                </ul>
                <div class="language-and-login-area d-lg-none d-block">
                    <div class="language-area">
                        <div class="language-btn">
                            <div class="icon-and-content">
                                <span>Contact us</span>
                            </div>
                            <i class="bi bi-caret-down-fill"></i>
                        </div>
                        <ul class="language-list">
							<li><a href="https://wa.me/918968782025" target="_blank"><i class="bx bxl-whatsapp-square"></i> Whatsapp</a></li>
							<li><a href="tel:+918968782025"><i class="bx bxs-phone-call"></i> Call</a></li>
							<li><a href="mailto:info@onthewayhotels.com"><i class="bx bx-envelope"></i> E-mail</a></li>
							<li><a href="#form"><i class="bx bx-message-edit"></i> Fill Form</a></li>
						</ul>
                    </div>
                    <a href="https://be.aiosell.com/book/23ca18ed6c" class="primary-btn1 four transparent">
                        <span>
                            Reserve Now
                        </span>
                        <span>
                            Reserve Now
                        </span>
                    </a>
                </div>
            </div>
            <div class="nav-right">
                <div class="search-bar d-lg-none d-block">
                    <div class="search-btn">
                        <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                            <g>
                                <path
                                    d="M15.7417 14.6098L13.486 12.3621C14.7088 10.8514 15.3054 8.9291 15.1526 6.99153C14.9998 5.05396 14.1093 3.24888 12.6648 1.94851C11.2203 0.648146 9.33193 -0.0483622 7.38901 0.00261294C5.44609 0.0535881 3.59681 0.84816 2.22248 2.22248C0.84816 3.59681 0.0535881 5.44609 0.00261294 7.38901C-0.0483622 9.33193 0.648146 11.2203 1.94851 12.6648C3.24888 14.1093 5.05396 14.9998 6.99153 15.1526C8.9291 15.3054 10.8514 14.7088 12.3621 13.486L14.6098 15.7417C14.6839 15.8164 14.7721 15.8757 14.8692 15.9161C14.9664 15.9566 15.0705 15.9774 15.1758 15.9774C15.281 15.9774 15.3852 15.9566 15.4823 15.9161C15.5794 15.8757 15.6676 15.8164 15.7417 15.7417C15.8164 15.6676 15.8757 15.5794 15.9161 15.4823C15.9566 15.3852 15.9774 15.281 15.9774 15.1758C15.9774 15.0705 15.9566 14.9664 15.9161 14.8692C15.8757 14.7721 15.8164 14.6839 15.7417 14.6098ZM1.62572 7.60368C1.62572 6.42135 1.97632 5.26557 2.63319 4.2825C3.29005 3.29943 4.22368 2.53322 5.31601 2.08076C6.40834 1.62831 7.61031 1.50992 8.76992 1.74058C9.92953 1.97124 10.9947 2.54059 11.8307 3.37662C12.6668 4.21266 13.2361 5.27783 13.4668 6.43744C13.6974 7.59705 13.579 8.79902 13.1266 9.89134C12.6741 10.9837 11.9079 11.9173 10.9249 12.5742C9.94178 13.231 8.78601 13.5816 7.60368 13.5816C6.01822 13.5816 4.49771 12.9518 3.37662 11.8307C2.25554 10.7096 1.62572 9.18913 1.62572 7.60368Z"/>
                            </g>
                        </svg>
                    </div>
                    <!--<div class="search-input">
                        <div class="search-close"></div>
                        <form>
                            <div class="search-group">
                                <div class="form-inner2">
                                    <input type="text" placeholder="Enter your keywords">
                                    <button type="submit"><i class="bi bi-search"></i></button>
                                </div>
                            </div>
                            <div class="quick-search">
                                <ul>
                                    <li>Quick Search :</li>
                                    <li><a href="travel-package-01.html">Thailand Tour,</a></li>
                                    <li><a href="travel-package-01.html">Philippines Tour,</a></li>
                                    <li><a href="travel-package-01.html">Bali Tour,</a></li>
                                    <li><a href="travel-package-01.html">Hawaii, USA Tour,</a></li>
                                    <li><a href="travel-package-01.html">Switzerland Tour,</a></li>
                                    <li><a href="travel-package-01.html">Maldives Tour,</a></li>
                                    <li><a href="travel-package-01.html">Paris Tour,</a></li>
                                </ul>
                            </div>
                        </form>
                    </div>--->
                </div>
                <div class="sidebar-button mobile-menu-btn">
                    <svg width="20" height="18" viewBox="0 0 20 18" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1.29445 2.8421H10.5237C11.2389 2.8421 11.8182 2.2062 11.8182 1.42105C11.8182 0.635903 11.2389 0 10.5237 0H1.29445C0.579249 0 0 0.635903 0 1.42105C0 2.2062 0.579249 2.8421 1.29445 2.8421Z"></path>
                        <path d="M1.23002 10.421H18.77C19.4496 10.421 20 9.78506 20 8.99991C20 8.21476 19.4496 7.57886 18.77 7.57886H1.23002C0.550421 7.57886 0 8.21476 0 8.99991C0 9.78506 0.550421 10.421 1.23002 10.421Z"></path>
                        <path d="M18.8052 15.1579H10.2858C9.62563 15.1579 9.09094 15.7938 9.09094 16.5789C9.09094 17.3641 9.62563 18 10.2858 18H18.8052C19.4653 18 20 17.3641 20 16.5789C20 15.7938 19.4653 15.1579 18.8052 15.1579Z"></path>
                    </svg>
                </div>
            </div>
        </div>
    </header>
    <!-- header Section End-->
	<div class="error-page">
        <div class="container">
            <div class="row gy-5 align-items-center justify-content-between">
                <div class="col-xl-4 col-lg-5">
                    <div class="error-content">
                        <h2>Thanks for Booking</h2>
                        <p>We will contact you shortly with best deals for your query.</p>
                        <a href="<?php echo base_url;?>" class="primary-btn1 two black-bg">
                            <span>
                                Go to Homepage
                                <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.73535 1.14746C9.57033 1.97255 9.32924 3.26406 9.24902 4.66797C9.16817 6.08312 9.25559 7.5453 9.70214 8.73633C9.84754 9.12406 9.65129 9.55659 9.26367 9.70215C8.9001 9.83849 8.4969 9.67455 8.32812 9.33398L8.29785 9.26367L8.19921 8.98438C7.73487 7.5758 7.67054 5.98959 7.75097 4.58203C7.77875 4.09598 7.82525 3.62422 7.87988 3.17969L1.53027 9.53027C1.23738 9.82317 0.762615 9.82317 0.469722 9.53027C0.176829 9.23738 0.176829 8.76262 0.469722 8.46973L6.83593 2.10254C6.3319 2.16472 5.79596 2.21841 5.25 2.24902C3.8302 2.32862 2.2474 2.26906 0.958003 1.79102L0.704097 1.68945L0.635738 1.65527C0.303274 1.47099 0.157578 1.06102 0.310542 0.704102C0.463655 0.347333 0.860941 0.170391 1.22363 0.28418L1.29589 0.310547L1.48828 0.387695C2.47399 0.751207 3.79966 0.827571 5.16601 0.750977C6.60111 0.670504 7.97842 0.428235 8.86132 0.262695L9.95312 0.0585938L9.73535 1.14746Z"></path>
                                </svg>
                            </span>
                            <span>
                                Go to Homepage
                                <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.73535 1.14746C9.57033 1.97255 9.32924 3.26406 9.24902 4.66797C9.16817 6.08312 9.25559 7.5453 9.70214 8.73633C9.84754 9.12406 9.65129 9.55659 9.26367 9.70215C8.9001 9.83849 8.4969 9.67455 8.32812 9.33398L8.29785 9.26367L8.19921 8.98438C7.73487 7.5758 7.67054 5.98959 7.75097 4.58203C7.77875 4.09598 7.82525 3.62422 7.87988 3.17969L1.53027 9.53027C1.23738 9.82317 0.762615 9.82317 0.469722 9.53027C0.176829 9.23738 0.176829 8.76262 0.469722 8.46973L6.83593 2.10254C6.3319 2.16472 5.79596 2.21841 5.25 2.24902C3.8302 2.32862 2.2474 2.26906 0.958003 1.79102L0.704097 1.68945L0.635738 1.65527C0.303274 1.47099 0.157578 1.06102 0.310542 0.704102C0.463655 0.347333 0.860941 0.170391 1.22363 0.28418L1.29589 0.310547L1.48828 0.387695C2.47399 0.751207 3.79966 0.827571 5.16601 0.750977C6.60111 0.670504 7.97842 0.428235 8.86132 0.262695L9.95312 0.0585938L9.73535 1.14746Z"></path>
                                </svg>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 d-md-block d-none">
                    <div class="error-img-wrap">
                        <div class="error-img">
                            <img src="<?php echo base_url;?>images/thanks-page-img.png" alt="Thanks page img">
                        </div>
                        <img src="<?php echo base_url;?>images/thanks-page-img-vector.png" alt="" class="Thanks Vector">
                    </div>
                </div>
            </div>
        </div>
    </div><!--<div style="border:1px solid #990000;padding-left:20px;margin:0 0 10px 0;">

    <!-- home5 Footer Section Start-->
    <footer class="footer-section five">
        <div class="container">
            <div class="footer-menu-wrap">
                <div class="row gy-md-4 gy-5">
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="footer-logo-and-addition-info">
                            <a href="<?php echo base_url;?>" class="footer-logo">
                                <img src="<?php echo base_url;?>images/logo.png" alt="logo">
                            </a>
                            <div class="address-area">
                                <span>Our Location</span>
                                <a href="https://maps.app.goo.gl/yCdrhE5Zi3Urhd4d8">66/12-1, In side, Building No. 4, 5/12-1, Gagar Mal Rd, Hall Gate, Hall Bazar, Katra Ahluwalia, Amritsar, Punjab 143003</a>
                            </div>
                            <ul class="social-list">
                                <li><a href="https://www.facebook.com/"><i class="bx bxl-facebook"></i></a></li>
                                <li><a href="https://www.linkedin.com/"><i class="bx bxl-linkedin"></i></a></li>
                                <li><a href="https://www.instagram.com/"><i class="bx bxl-instagram-alt"></i></a></li>
                            </ul>
                            <a href="https://maps.app.goo.gl/yCdrhE5Zi3Urhd4d8"><img src="<?php echo base_url;?>images/google-review.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6 d-flex justify-content-md-end">
                        <div class="footer-widget">
                            <div class="widget-title">
                                <h5>Quick Links</h5>
                            </div>
                            <ul class="widget-list">
								<li><a href="<?php echo base_url;?>">Home</a></li>
								<li><a href="#about">About us</a></li>
								<li><a href="#room">Our Rooms</a></li>
								<li><a href="#attractions">Attractions</a></li>
								<!--<li><a href="">Our Portfolio</a></li>-->
								<li><a href="#feedback">Client Feedbacks</a></li>
								<li><a href="#form">Contact us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6 d-flex justify-content-md-end">
                        <div class="footer-widget">
                            <div class="widget-title">
                                <h5>Our Best Rooms</h5>
                            </div>
                            <ul class="widget-list">
                                <li><a href="#room">Aqua Marine Suite Room</a></li>
                                <li><a href="#room">Delux Marine Room</a></li>
                                <li><a href="#room">Aqua Marine Queen Room</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 d-flex justify-content-lg-end">
                        <div class="footer-widget">
                            <div class="widget-title">
                                <h5>Contact Info</h5>
                            </div>
                            <ul class="contact-list">
                                <li class="single-contact">
                                    <div class="icon">
                                        <img src="assets/img/home3/icon/whatsapp-icon.svg" alt="">
                                    </div>
                                    <div class="content">
                                        <span>WhatsApp</span>
                                        <a href="https://wa.me/918968782025" target="_blank">+91 8968782025</a>
                                    </div>
                                </li>
                                <li class="single-contact">
                                    <div class="icon">
                                        <img src="assets/img/home3/icon/mail-icon.svg" alt="">
                                    </div>
                                    <div class="content">
                                        <span>Mail Us</span>
                                        <a href="mailto:info@onthewayhotels.com">info@onthewayhotels.com</a>
                                    </div>
                                </li>
                                <li class="single-contact">
                                    <div class="icon">
                                        <img src="assets/img/home1/icon/call-icon.svg" alt="">
                                    </div>
                                    <div class="content">
                                        <span>More Inquiry</span>
                                        <a href="tel:+918968782025">+91 8968782025</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="copyright-and-payment-method-area">
                    <p>Copyright 2025 <a href="<?php echo base_url;?>">On The Way Hospitality </a> | All Right Reserved.</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- home5 Footer Section End-->


    <!--  Main jQuery  -->
	<script src="<?php echo base_url;?>assets/js/jquery-3.7.1.min.js"></script>
    <script src="<?php echo base_url;?>assets/js/jquery-ui.js"></script>
    <script src="<?php echo base_url;?>assets/js/moment.min.js"></script>
    <script src="<?php echo base_url;?>assets/js/daterangepicker.min.js"></script>
    
    <!-- Popper and Bootstrap JS -->
    <script src="<?php echo base_url;?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url;?>assets/js/popper.min.js"></script>
    <!-- Swiper slider JS -->
    <script src="<?php echo base_url;?>assets/js/swiper-bundle.min.js"></script>
    <script src="<?php echo base_url;?>assets/js/slick.js"></script>
    <!-- Waypoints JS -->
    <script src="<?php echo base_url;?>assets/js/waypoints.min.js"></script>
    <!-- Counterup JS -->
    <script src="<?php echo base_url;?>assets/js/jquery.counterup.min.js"></script>
    <!-- Wow JS -->
    <script src="<?php echo base_url;?>assets/js/wow.min.js"></script>
    <!-- Gsap  JS -->
    <script src="<?php echo base_url;?>assets/js/gsap.min.js"></script>
    <script src="<?php echo base_url;?>assets/js/ScrollTrigger.min.js"></script>
    <script src="<?php echo base_url;?>assets/js/jquery.fancybox.min.js"></script>
    <!-- Custom JS -->
    <script src="<?php echo base_url;?>assets/js/select-dropdown.js"></script>
    <script src="<?php echo base_url;?>assets/js/custom.js"></script>
</body>
</html>