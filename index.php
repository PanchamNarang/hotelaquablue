<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
	<?php define("base_url", "https://www.aroracreations.in/ontheway/"); ?>
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
    <title>On The Way Hospitality | Luxury Hotel Experience</title>
	<meta name="title" content="On The Way Hospitality | Luxury Hotel Experience">
	<meta name="description" content="Experience elegance and comfort at On The Way Hospitality. Luxury rooms designed for style, sophistication, and unforgettable stays.">
	<meta name="keywords" content="luxury hotel, premium stay, On The Way Hospitality, elegant rooms, luxury accommodation, comfort and style, sophisticated hotels, best hotels, hotel near me">
	<meta name="author" content="On The Way Hospitality">
	<meta name="robots" content="index, follow">

	<!-- Open Graph / Facebook -->
	<meta property="og:type" content="website">
	<meta property="og:url" content="https://www.onthewayhotels.com/">
	<meta property="og:title" content="On The Way Hospitality | Luxury Hotel Experience">
	<meta property="og:description" content="Experience elegance and comfort at On The Way Hospitality. Luxury rooms designed for style, sophistication, and unforgettable stays.">
	<meta property="og:image" content="https://www.onthewayhotels.com/images/slide.jpg">

	<!-- Twitter -->
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:url" content="https://www.onthewayhotels.com/">
	<meta name="twitter:title" content="On The Way Hospitality | Luxury Hotel Experience">
	<meta name="twitter:description" content="Experience elegance and comfort at On The Way Hospitality. Luxury rooms designed for style, sophistication, and unforgettable stays.">
	<meta name="twitter:image" content="https://www.onthewayhotels.com/images/slide.jpg">
    <link rel="icon" href="<?php echo base_url;?>images/favicon.ico" type="image/gif" sizes="20x20">
</head>

<body class="tt-magic-cursor experience-02">

    <!--<div id="magic-cursor">
        <div id="ball"></div>
    </div>--->

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
                    <!--<form class="search-area">
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
                    </form>-->
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
                    <a href="https://be.aiosell.com/book/23ca18ed6c" target="_blank" class="primary-btn1 four transparent">
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
                    <!--<div class="search-btn">
                        <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                            <g>
                                <path
                                    d="M15.7417 14.6098L13.486 12.3621C14.7088 10.8514 15.3054 8.9291 15.1526 6.99153C14.9998 5.05396 14.1093 3.24888 12.6648 1.94851C11.2203 0.648146 9.33193 -0.0483622 7.38901 0.00261294C5.44609 0.0535881 3.59681 0.84816 2.22248 2.22248C0.84816 3.59681 0.0535881 5.44609 0.00261294 7.38901C-0.0483622 9.33193 0.648146 11.2203 1.94851 12.6648C3.24888 14.1093 5.05396 14.9998 6.99153 15.1526C8.9291 15.3054 10.8514 14.7088 12.3621 13.486L14.6098 15.7417C14.6839 15.8164 14.7721 15.8757 14.8692 15.9161C14.9664 15.9566 15.0705 15.9774 15.1758 15.9774C15.281 15.9774 15.3852 15.9566 15.4823 15.9161C15.5794 15.8757 15.6676 15.8164 15.7417 15.7417C15.8164 15.6676 15.8757 15.5794 15.9161 15.4823C15.9566 15.3852 15.9774 15.281 15.9774 15.1758C15.9774 15.0705 15.9566 14.9664 15.9161 14.8692C15.8757 14.7721 15.8164 14.6839 15.7417 14.6098ZM1.62572 7.60368C1.62572 6.42135 1.97632 5.26557 2.63319 4.2825C3.29005 3.29943 4.22368 2.53322 5.31601 2.08076C6.40834 1.62831 7.61031 1.50992 8.76992 1.74058C9.92953 1.97124 10.9947 2.54059 11.8307 3.37662C12.6668 4.21266 13.2361 5.27783 13.4668 6.43744C13.6974 7.59705 13.579 8.79902 13.1266 9.89134C12.6741 10.9837 11.9079 11.9173 10.9249 12.5742C9.94178 13.231 8.78601 13.5816 7.60368 13.5816C6.01822 13.5816 4.49771 12.9518 3.37662 11.8307C2.25554 10.7096 1.62572 9.18913 1.62572 7.60368Z"/>
                            </g>
                        </svg>
                    </div>-->
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

    <!-- home7 Banner Section Start-->
    <div class="home7-banner-section">
        <div class="swiper home6-banner-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="banner-wrapper">
                        <div class="banner-img-area">
                            <img src="<?php echo base_url;?>images/slide.jpg" alt="Slide">
                        </div>
                        <div class="banner-content-wrap">
                            <div class="container">
                                <div class="banner-content">
                                    <span>Luxury. Comfort. Hospitality.</span>
									<h1>Welcome to On the Way Hospitality</h1>
									<p>Discover an exceptional blend of elegance and warmth across our exclusive hotels. Whether it’s a peaceful getaway or a business retreat, every stay is crafted to perfection — just for you.</p>
                                    <a href="#room" class="primary-btn1 four two white-bg">
                                        <span>
                                            View Rooms
                                            <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M9.73535 1.14746C9.57033 1.97255 9.32924 3.26406 9.24902 4.66797C9.16817 6.08312 9.25559 7.5453 9.70214 8.73633C9.84754 9.12406 9.65129 9.55659 9.26367 9.70215C8.9001 9.83849 8.4969 9.67455 8.32812 9.33398L8.29785 9.26367L8.19921 8.98438C7.73487 7.5758 7.67054 5.98959 7.75097 4.58203C7.77875 4.09598 7.82525 3.62422 7.87988 3.17969L1.53027 9.53027C1.23738 9.82317 0.762615 9.82317 0.469722 9.53027C0.176829 9.23738 0.176829 8.76262 0.469722 8.46973L6.83593 2.10254C6.3319 2.16472 5.79596 2.21841 5.25 2.24902C3.8302 2.32862 2.2474 2.26906 0.958003 1.79102L0.704097 1.68945L0.635738 1.65527C0.303274 1.47099 0.157578 1.06102 0.310542 0.704102C0.463655 0.347333 0.860941 0.170391 1.22363 0.28418L1.29589 0.310547L1.48828 0.387695C2.47399 0.751207 3.79966 0.827571 5.16601 0.750977C6.60111 0.670504 7.97842 0.428235 8.86132 0.262695L9.95312 0.0585938L9.73535 1.14746Z"></path>
                                            </svg>
                                        </span>
                                        <span>
                                            View Rooms
                                            <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M9.73535 1.14746C9.57033 1.97255 9.32924 3.26406 9.24902 4.66797C9.16817 6.08312 9.25559 7.5453 9.70214 8.73633C9.84754 9.12406 9.65129 9.55659 9.26367 9.70215C8.9001 9.83849 8.4969 9.67455 8.32812 9.33398L8.29785 9.26367L8.19921 8.98438C7.73487 7.5758 7.67054 5.98959 7.75097 4.58203C7.77875 4.09598 7.82525 3.62422 7.87988 3.17969L1.53027 9.53027C1.23738 9.82317 0.762615 9.82317 0.469722 9.53027C0.176829 9.23738 0.176829 8.76262 0.469722 8.46973L6.83593 2.10254C6.3319 2.16472 5.79596 2.21841 5.25 2.24902C3.8302 2.32862 2.2474 2.26906 0.958003 1.79102L0.704097 1.68945L0.635738 1.65527C0.303274 1.47099 0.157578 1.06102 0.310542 0.704102C0.463655 0.347333 0.860941 0.170391 1.22363 0.28418L1.29589 0.310547L1.48828 0.387695C2.47399 0.751207 3.79966 0.827571 5.16601 0.750977C6.60111 0.670504 7.97842 0.428235 8.86132 0.262695L9.95312 0.0585938L9.73535 1.14746Z"></path>
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>      
                    </div>
                </div>
				
            </div>
        </div>
    </div>
    <div class="home7-banner-bottom">
        <div class="container">
            <div class="row gy-md-5 gy-4 align-items-center">
                <div class="col-lg-6 col-md-6 divider order-lg-1 order-2 d-flex justify-content-md-start justify-content-center">
                    <div class="single-contact">
                        <div class="icon">
                            <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                <g>
                                    <path
                                        d="M15.5645 11.7424L13.3317 9.50954C12.5342 8.7121 11.1786 9.03111 10.8596 10.0678C10.6203 10.7855 9.8229 11.1842 9.1052 11.0247C7.51031 10.626 5.3572 8.55261 4.95848 6.87797C4.71925 6.16024 5.19771 5.36279 5.91542 5.12359C6.9521 4.80461 7.27107 3.44895 6.47363 2.65151L4.24078 0.418659C3.60282 -0.139553 2.64589 -0.139553 2.08768 0.418659L0.57253 1.93381C-0.942617 3.5287 0.732019 7.75516 4.48001 11.5032C8.22801 15.2512 12.4545 17.0056 14.0494 15.4106L15.5645 13.8955C16.1228 13.2575 16.1228 12.3006 15.5645 11.7424Z"/>
                                </g>
                            </svg>
                        </div>
                        <div class="content">
                            <span>Need Help?</span>
                            <a href="tel:+918968782025">+91 8968782025</a>
                        </div>
                    </div>
                </div>
                <!--<div class="col-lg-4 divider order-lg-2">
                    <div class="award-rating-area">
                        <img src="assets/img/home3/travel-award.png" alt="">
                        <h4>The World Travel Award</h4>
                        <div class="rating">
                            <span>(</span>
                            <ul>
                                <li><i class="bi bi-star-fill"></i></li>
                                <li><i class="bi bi-star-fill"></i></li>
                                <li><i class="bi bi-star-fill"></i></li>
                                <li><i class="bi bi-star-fill"></i></li>
                                <li><i class="bi bi-star-fill"></i></li>
                            </ul>
                            <span>)</span>
                        </div>
                    </div>
                </div>--->
                <div class="col-lg-6 col-md-6 d-flex justify-content-lg-end justify-content-center order-lg-3">
                    <div class="single-contact">
                        <div class="icon">
                            <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M1.96372 3.07415L6.28622 7.39852C7.22897 8.33946 8.77003 8.34027 9.71356 7.39852L14.0361 3.07415C14.0463 3.06399 14.0541 3.0517 14.0591 3.03816C14.064 3.02462 14.0659 3.01016 14.0647 2.99581C14.0634 2.98145 14.059 2.96755 14.0517 2.95509C14.0445 2.94263 14.0346 2.93192 14.0227 2.92371C13.5819 2.61624 13.0455 2.43396 12.4677 2.43396H3.53216C2.95431 2.43396 2.41791 2.61627 1.97703 2.92371C1.96519 2.93192 1.95529 2.94263 1.94805 2.95509C1.9408 2.96755 1.93639 2.98145 1.93512 2.99581C1.93385 3.01016 1.93575 3.02462 1.9407 3.03816C1.94564 3.0517 1.9535 3.06399 1.96372 3.07415ZM0.808595 5.15749C0.808243 4.71811 0.915024 4.28527 1.11969 3.89646C1.12683 3.88275 1.13711 3.87093 1.14969 3.86194C1.16226 3.85295 1.17678 3.84706 1.19207 3.84474C1.20735 3.84242 1.22296 3.84373 1.23764 3.84858C1.25232 3.85343 1.26564 3.86168 1.27653 3.87265L5.54431 8.14043C6.89578 9.49387 9.10322 9.49465 10.4555 8.14043L14.7233 3.87265C14.7342 3.86168 14.7475 3.85343 14.7622 3.84858C14.7769 3.84373 14.7925 3.84242 14.8077 3.84474C14.823 3.84706 14.8376 3.85295 14.8501 3.86194C14.8627 3.87093 14.873 3.88275 14.8801 3.89646C15.0848 4.28527 15.1916 4.71811 15.1912 5.15749V10.843C15.1912 12.3459 13.9687 13.5666 12.4677 13.5666H3.53216C2.03116 13.5666 0.808595 12.3459 0.808595 10.843V5.15749Z"/>
                            </svg>
                        </div>
                        <div class="content">
                            <span>Email Now</span>
                            <a href="mailto:info@onthewayhotels.com">info@onthewayhotels.com</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- home7 Banner Section End-->


    <!-- home7 About Section Start-->
    <div class="home7-about-section" id="about">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-5 col-lg-6 wow animate fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <div class="about-content">
                        <div class="section-title">
                            <h2>Redefining Hospitality, One Stay at a Time</h2>
                        </div>
                        <div class="content">
                            <p><strong>On the Way Hospitality</strong>, we believe that true luxury lies in the details — in warm welcomes, personalized service, and moments that make every guest feel special. With a curated collection of distinctive hotels, we bring you experiences that blend modern elegance with heartfelt hospitality.</p>
							<p>Whether you’re traveling for leisure or business, our properties are designed to make your journey seamless and memorable. From thoughtfully designed rooms to gourmet dining and impeccable service, every stay with us reflects our promise of comfort, care, and class.</p>
                        </div>
                        <div class="btn-and-counter-area">
                            <a href="#room" class="primary-btn1 two four black-bg">
                                <span>
                                    Check Rooms
                                    <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.73535 1.14746C9.57033 1.97255 9.32924 3.26406 9.24902 4.66797C9.16817 6.08312 9.25559 7.5453 9.70214 8.73633C9.84754 9.12406 9.65129 9.55659 9.26367 9.70215C8.9001 9.83849 8.4969 9.67455 8.32812 9.33398L8.29785 9.26367L8.19921 8.98438C7.73487 7.5758 7.67054 5.98959 7.75097 4.58203C7.77875 4.09598 7.82525 3.62422 7.87988 3.17969L1.53027 9.53027C1.23738 9.82317 0.762615 9.82317 0.469722 9.53027C0.176829 9.23738 0.176829 8.76262 0.469722 8.46973L6.83593 2.10254C6.3319 2.16472 5.79596 2.21841 5.25 2.24902C3.8302 2.32862 2.2474 2.26906 0.958003 1.79102L0.704097 1.68945L0.635738 1.65527C0.303274 1.47099 0.157578 1.06102 0.310542 0.704102C0.463655 0.347333 0.860941 0.170391 1.22363 0.28418L1.29589 0.310547L1.48828 0.387695C2.47399 0.751207 3.79966 0.827571 5.16601 0.750977C6.60111 0.670504 7.97842 0.428235 8.86132 0.262695L9.95312 0.0585938L9.73535 1.14746Z"></path>
                                    </svg>
                                </span>
                                <span>
                                    Check Rooms
                                    <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.73535 1.14746C9.57033 1.97255 9.32924 3.26406 9.24902 4.66797C9.16817 6.08312 9.25559 7.5453 9.70214 8.73633C9.84754 9.12406 9.65129 9.55659 9.26367 9.70215C8.9001 9.83849 8.4969 9.67455 8.32812 9.33398L8.29785 9.26367L8.19921 8.98438C7.73487 7.5758 7.67054 5.98959 7.75097 4.58203C7.77875 4.09598 7.82525 3.62422 7.87988 3.17969L1.53027 9.53027C1.23738 9.82317 0.762615 9.82317 0.469722 9.53027C0.176829 9.23738 0.176829 8.76262 0.469722 8.46973L6.83593 2.10254C6.3319 2.16472 5.79596 2.21841 5.25 2.24902C3.8302 2.32862 2.2474 2.26906 0.958003 1.79102L0.704097 1.68945L0.635738 1.65527C0.303274 1.47099 0.157578 1.06102 0.310542 0.704102C0.463655 0.347333 0.860941 0.170391 1.22363 0.28418L1.29589 0.310547L1.48828 0.387695C2.47399 0.751207 3.79966 0.827571 5.16601 0.750977C6.60111 0.670504 7.97842 0.428235 8.86132 0.262695L9.95312 0.0585938L9.73535 1.14746Z"></path>
                                    </svg>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow animate fadeInRight" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <div class="about-img-area">
                        <div class="about-img">
                            <img src="<?php echo base_url;?>images/about.webp" alt="About">
                        </div>
                        <div class="counter-wrapper">
                            <div class="single-counter">
                                <h2><strong class="counter">10</strong><span>+</span></h2>
                                <span>Years of <br> Experience</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- home7 About Section End-->

    <!-- home7 Popular Activity Section Start-->
    <div class="home7-popular-activity-section mb-70" id="room">
        <div class="container">
            <div class="row justify-content-center mb-30 wow animate fadeInDown" data-wow-delay="200ms" data-wow-duration="1500ms">
                <div class="col-xl-6 col-lg-8">
                    <div class="section-title text-center">
                        <h2>Luxury Accommodations</h2>
                        <p>Each room is meticulously designed to provide the ultimate in comfort, style, and sophistication for the discerning traveler.</p>
                    </div>
                </div>
            </div>
            <div class="row">
				<div class="col-md-4 col-sm-6">
					<div class="package-card three">
						<div class="package-img-wrap">
							<a href="https://be.aiosell.com/book/23ca18ed6c" class="package-img">
								<img src="images/aqua-marine.webp" alt="Aqua Marine Suite Room">
							</a>
							<div class="batch">
								<span class="yellow-bg">₹5000/night</span>
							</div>
						</div>
						<div class="package-content">
							<h5 class="mb-10"><a href="experience-details.html">Aqua Marine Suite Room</a></h5>
							<div class="location-and-time">
								<span>King Bed</span> | <span>City View</span> | <span>Kettle</span> | <span>TV</span> | <span>AC</span> | <span>Iron</span> | <span>2 Extra Bedding Space</span> | <span>Rooftop</span> | <span>Restaurant</span> | <span>WiFi</span>
							</div>
							<div class="btn-and-price-area">
								<a href="https://be.aiosell.com/book/23ca18ed6c" target="_blank" class="primary-btn1 four">
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
				<div class="col-md-4 col-sm-6">
					<div class="package-card three">
						<div class="package-img-wrap">
							<a href="https://be.aiosell.com/book/23ca18ed6c" class="package-img">
								<img src="images/deluxe-marine.webp" alt="Delux Marine Room">
							</a>
							<div class="batch">
								<span class="yellow-bg">₹3000/night</span>
							</div>
						</div>
						<div class="package-content">
							<h5 class="mb-10"><a href="">Delux Marine Room</a></h5>
							<div class="location-and-time">
								<span>King Bed</span> | <span>Kettle</span> | <span>TV</span> | <span>AC</span> | <span>Iron</span> | <span>Rooftop</span> | <span>Restaurant</span> | <span>WiFi</span>
							</div>
							<div class="btn-and-price-area">
								<a href="https://be.aiosell.com/book/23ca18ed6c" target="_blank" class="primary-btn1 four">
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
				<div class="col-md-4 col-sm-6">
					<div class="package-card three">
						<div class="package-img-wrap">
							<a href="https://be.aiosell.com/book/23ca18ed6c" class="package-img">
								<img src="images/queen-room.webp" alt="Aqua Marine Queen Room">
							</a>
							<div class="batch">
								<span class="yellow-bg">₹2000/night</span>
							</div>
						</div>
						<div class="package-content">
							<h5 class="mb-10"><a href="">Aqua Marine Queen Room</a></h5>
							<div class="location-and-time">
								<span>King Bed</span> | <span>Kettle</span> | <span>TV</span> | <span>AC</span> | <span>Iron</span> | <span>Rooftop</span> | <span>Restaurant</span> | <span>WiFi</span>
							</div>
							<div class="btn-and-price-area">
								<a href="https://be.aiosell.com/book/23ca18ed6c" target="_blank" class="primary-btn1 four">
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
				
            </div>
        </div>
    </div>
    <!-- home7 Popular Activity Section End-->
	
	<div class="home1-offer-package-section mb-100" id="attractions">
        <div class="container">
            <div class="row justify-content-center mb-10 wow animate fadeInDown" data-wow-delay="200ms" data-wow-duration="1500ms">
                <div class="col-xl-6 col-lg-8">
                    <div class="section-title text-center">
                        <h2>Attractions</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 wow animate fadeInDown" data-wow-delay="400ms" data-wow-duration="1500ms">
                    <div class="package-card">
                        <div class="package-img-wrap">
							<img src="<?php echo base_url;?>images/rooftop.jpg" alt="Rooftop">
                            <!--<div class="batch">
                                <span class="discount">20% off</span>
                            </div>-->
                        </div>
                        <div class="package-content">
                            <h5>Rooftop</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow animate fadeInDown" data-wow-delay="400ms" data-wow-duration="1500ms">
                    <div class="package-card">
                        <div class="package-img-wrap">
							<img src="<?php echo base_url;?>images/restaurent.jpg" alt="Restaurants">
                            <!--<div class="batch">
                                <span class="discount">20% off</span>
                            </div>-->
                        </div>
                        <div class="package-content">
                            <h5>Restaurants</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow animate fadeInDown" data-wow-delay="400ms" data-wow-duration="1500ms">
                    <div class="package-card">
                        <div class="package-img-wrap">
							<img src="<?php echo base_url;?>images/driver.jpg" alt="Free Driver Accomodation">
                            <!--<div class="batch">
                                <span class="discount">20% off</span>
                            </div>-->
                        </div>
                        <div class="package-content">
                            <h5>Free Driver Accomodation</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow animate fadeInDown" data-wow-delay="400ms" data-wow-duration="1500ms">
                    <div class="package-card">
                        <div class="package-img-wrap">
							<img src="<?php echo base_url;?>images/golden-temple.jpg" alt="Just 1 KM from Golden Temple">
                            <!--<div class="batch">
                                <span class="discount">20% off</span>
                            </div>-->
                        </div>
                        <div class="package-content">
                            <h5>Just 1 KM from Golden Temple</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow animate fadeInDown" data-wow-delay="400ms" data-wow-duration="1500ms">
                    <div class="package-card">
                        <div class="package-img-wrap">
							<img src="<?php echo base_url;?>images/durgiana-temple.jpg" alt="Just 1 KM from Durgiana Temple">
                            <!--<div class="batch">
                                <span class="discount">20% off</span>
                            </div>-->
                        </div>
                        <div class="package-content">
                            <h5>Just 1 KM from Durgiana Temple</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow animate fadeInDown" data-wow-delay="400ms" data-wow-duration="1500ms">
                    <div class="package-card">
                        <div class="package-img-wrap">
							<img src="<?php echo base_url;?>images/railway-station.jpg" alt="Just 1 KM from Railway Station">
                            <!--<div class="batch">
                                <span class="discount">20% off</span>
                            </div>-->
                        </div>
                        <div class="package-content">
                            <h5>Just 1.5 KM from Railway Station</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow animate fadeInDown" data-wow-delay="400ms" data-wow-duration="1500ms">
                    <div class="package-card">
                        <div class="package-img-wrap">
							<img src="<?php echo base_url;?>images/bus-stand.jpg" alt="Just 1 KM from Bus Stand">
                            <!--<div class="batch">
                                <span class="discount">20% off</span>
                            </div>-->
                        </div>
                        <div class="package-content">
                            <h5>Just 2 KM from Bus Stand</h5>
                        </div>
                    </div>
                </div>
				
			</div>
		</div>
	</div>

    <!-- home2 service Section Start-->
    <div class="home2-service-section mb-100">
        <div class="container">
            <div class="service-wrapper two">
                <div class="row justify-content-center wow animate fadeInDown" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <div class="col-lg-9">
                        <div class="section-title">
                            <h2>On the Way Hospitality – Where Every Stay Feels Special</h2>
                            <svg height="6" viewBox="0 0 872 6" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5 2.5L0 0.113249V5.88675L5 3.5V2.5ZM867 3.5L872 5.88675V0.113249L867 2.5V3.5ZM4.5 3.5H867.5V2.5H4.5V3.5Z" />
                            </svg>
                        </div>
                    </div>
                </div>
                <ul class="service-list wow animate fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <li class="single-service">
                        <div class="icon">
                            <svg width="30" height="30" viewBox="0 0 30 30" xmlns="http://www.w3.org/2000/svg">
								<g>
									<path d="M27.2713 21.3914L13.5213 10.1414C13.4297 10.0664 13.3187 10.0188 13.2012 10.0044C13.0836 9.98999 12.9644 10.0092 12.8574 10.0599C12.7504 10.1106 12.66 10.1906 12.5968 10.2907C12.5335 10.3908 12.4999 10.5068 12.5 10.6252V29.3752C12.5001 29.5093 12.5433 29.6398 12.6233 29.7474C12.7033 29.8551 12.8157 29.9341 12.9441 29.9729C13.0724 30.0117 13.2099 30.0083 13.3361 29.963C13.4623 29.9177 13.5706 29.833 13.645 29.7214L18.46 22.5002H26.875C27.004 22.5003 27.1298 22.4605 27.2353 22.3862C27.3407 22.312 27.4207 22.207 27.4641 22.0855C27.5075 21.9641 27.5122 21.8322 27.4777 21.7079C27.4432 21.5836 27.3711 21.4731 27.2713 21.3914Z"/>
									<path d="M9.75999 19.3751C4.93499 17.5201 2.51999 12.0851 4.37499 7.26008C6.22999 2.43508 11.665 0.020083 16.49 1.87508C21.315 3.73008 23.73 9.16633 21.875 13.9901C21.8203 14.1437 21.8278 14.3126 21.8958 14.4607C21.9639 14.6089 22.0871 14.7246 22.2393 14.7831C22.3915 14.8417 22.5605 14.8384 22.7103 14.7741C22.8601 14.7098 22.9789 14.5895 23.0412 14.4388C25.1437 8.97008 22.4062 2.81008 16.9387 0.707583C11.4712 -1.39492 5.31124 1.34258 3.20874 6.81008C1.10624 12.2788 3.84374 18.4388 9.31124 20.5413C9.46607 20.6008 9.63819 20.5965 9.78981 20.5292C9.94143 20.462 10.0602 20.3373 10.12 20.1826C10.1787 20.0277 10.1738 19.8559 10.1064 19.7047C10.0389 19.5534 9.91442 19.4349 9.75999 19.3751Z"/>
								</g>
                        </svg>
                        </div>
                        <div class="content">
                            <h4>Effortless Booking</h4>
                            <p>Book your stay instantly with our quick and secure online system.</p>
                        </div>
                    </li>
                    <li class="single-service">
                        <div class="icon">
							<svg width="30" height="30" viewBox="0 0 30 30" xmlns="http://www.w3.org/2000/svg">
								<path d="M20.4896 4.14404C19.8384 3.81275 19.0419 4.07233 18.7107 4.72379L8.87091 24.0772C8.53971 24.7285 8.79929 25.5249 9.45066 25.8561C9.63601 25.9507 9.84112 26 10.0492 26C10.5313 26 10.996 25.7356 11.2296 25.2763L21.0694 5.92297C21.4006 5.27161 21.141 4.47523 20.4896 4.14404ZM13.4243 10.5172C13.4243 7.75042 11.1733 5.49943 8.40653 5.49943C5.63991 5.49943 3.38892 7.75042 3.38892 10.5172C3.38892 13.2839 5.63991 15.5349 8.40662 15.5349C11.1734 15.5349 13.4243 13.2839 13.4243 10.5172ZM8.40662 12.8889C7.09894 12.8889 6.03496 11.8249 6.03496 10.5172C6.03496 9.20945 7.09894 8.14548 8.40662 8.14548C9.71438 8.14548 10.7784 9.20937 10.7784 10.5172C10.7783 11.8249 9.71438 12.8889 8.40662 12.8889ZM21.5934 14.4653C18.8266 14.4653 16.5756 16.7163 16.5756 19.483C16.5756 22.2497 18.8265 24.5007 21.5934 24.5007C24.3601 24.5007 26.6111 22.2498 26.6111 19.483C26.6111 16.7162 24.3602 14.4653 21.5934 14.4653ZM21.5934 21.8546C20.2856 21.8546 19.2216 20.7906 19.2216 19.4829C19.2216 18.1752 20.2856 17.1113 21.5934 17.1113C22.901 17.1113 23.965 18.1752 23.965 19.4829C23.965 20.7906 22.9011 21.8546 21.5934 21.8546Z"/>
							</svg>
                        </div>
                        <div class="content">
                            <h4>Exclusive Offers</h4>
                            <p>Unlock seasonal discounts and special stay packages crafted for you.</p>
                        </div>
                    </li>
                    <li class="single-service">
                        <div class="icon">
							<svg width="30" height="30" viewBox="0 0 30 30" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" clip-rule="evenodd"
									d="M15 0C21.4662 0 26.7081 5.24194 26.7081 11.7081C26.7081 18.1743 21.4662 23.4163 15 23.4163C8.53375 23.4163 3.29187 18.1743 3.29187 11.7081C3.29187 5.24194 8.53375 0 15 0ZM23.7899 20.886C22.1639 22.4438 20.1246 23.5736 17.8531 24.0947L19.8539 28.7401L22.0141 25.2591L26.0274 26.081L23.7899 20.886ZM12.758 24.2191C10.4637 23.8108 8.38243 22.7867 6.69112 21.324L3.97262 27.1631L8.00831 26.4579L10.0666 30L12.758 24.2191ZM15.1981 7.58544C15.1294 7.40431 14.8707 7.40431 14.8019 7.58544L13.7848 10.2644C13.7706 10.3033 13.7451 10.337 13.7117 10.3613C13.6782 10.3856 13.6383 10.3994 13.597 10.4009L10.7348 10.5404C10.5401 10.5498 10.4604 10.7951 10.6124 10.9172L12.8459 12.7124C12.8785 12.7379 12.9027 12.7726 12.9154 12.8119C12.9282 12.8512 12.929 12.8934 12.9177 12.9332L12.1659 15.6984C12.1147 15.8865 12.3233 16.0381 12.4864 15.9313L14.8839 14.3618C14.9182 14.3387 14.9586 14.3264 15 14.3264C15.0413 14.3264 15.0817 14.3387 15.116 14.3618L17.5136 15.9313C17.6767 16.0381 17.8853 15.8865 17.8341 15.6984L17.0823 12.9333C17.071 12.8935 17.0717 12.8513 17.0845 12.8119C17.0973 12.7726 17.1215 12.738 17.154 12.7125L19.3876 10.9172C19.5395 10.7951 19.4598 10.5499 19.2652 10.5404L16.403 10.4009C16.3617 10.3994 16.3218 10.3856 16.2883 10.3613C16.2549 10.337 16.2294 10.3033 16.2152 10.2645L15.1981 7.58544Z"/>
							</svg>
                        </div>
                        <div class="content">
                            <h4>Guest Care</h4>
                            <p>24/7 support and personalized attention for every guest’s comfort.</p>
                        </div>
                    </li>
                </ul>
                <div class="bottom-area d-flex justify-content-center wow animate fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <div class="batch">
                        <span>Discover Exceptional Hospitality with Us!</span>
                    </div>
                    <div class="batch two">
                        <a href="#attractions">Explore Our Attractions
                            <svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 9L9 1M9 1C7.22222 1.33333 3.33333 2 1 1M9 1C8.66667 2.66667 8 6.33333 9 9" stroke-width="1.5" stroke-linecap="round" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
	
	<div class="contact-page mt-70 mb-70" id="form">
		<div class="container">
			<div class="row g-xl-4 g-lg-3 g-4 mb-70">
				<div class="col-lg-4 col-md-6">
					<div class="single-contact">
						<div class="icon">
							<i class="bx bxs-phone-call"></i>
						</div>
						<h4>Contact Number</h4>
						<h6><a href="tel:+918968782025">+91 8968782025</a></h6>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-contact two">
						<div class="icon">
							<i class="bx bxs-envelope"></i>
						</div>
						<h4>E-mail Address</h4>
						<h6><a href="mailto:info@onthewayhotels.com">info@onthewayhotels.com</a></h6>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-contact three">
						<div class="icon">
							<i class="bx bx-map"></i>
						</div>
						<h4>Address</h4>
						<p>66/12-1, In side, Building No. 4, 5/12-1, Gagar Mal Rd, Hall Gate, Hall Bazar, Katra Ahluwalia, Amritsar, Punjab 143003</p>
					</div>
				</div>
			</div>
			<div class="contact-form">
				<div class="row justify-content-center">
					<div class="col-xl-8 col-lg-10">
						<div class="contact-form-wrap">
							<div class="section-title text-center m">
								<h2>Get in Touch!</h2>
								<p>Experience personalized service from our dedicated hospitality team. We're here to make your stay exceptional.</p>
							</div>
							<script language="Javascript">
								function validate1()
								{
									var valid = true;
								if (document.item.Name.value == "")	
									{
										alert("Please enter Name");
										document.item.Name.focus();
										return false;
									}
								if (document.item.Email.value == "")	
									{
										alert("Please enter Email ID");
										document.item.Email.focus();
										return false;
									}
								if (document.item.Mobile.value == "")	
									{
										alert("Please enter your Mobile No.");
										document.item.Mobile.focus();
										return false;
									}
									
								if (document.item.letters_code.value == "")	
									{
										alert("Please enter the Characters Shown in Image");
										document.item.letters_code.focus();
										return false;
									}
								if (document.layers||document.getElementById||document.all)
								{
								if (document.item.Email.value != "Your_Email")	
									{
										var str=document.item.Email.value
								var filter=/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i

								if (filter.test(str))
									return true;
								else
								{
									alert("Please enter the correct Email");
									document.item.Email.focus();
									return false;
								}
									}
								}
								}
								function CheckKeyCode()
								{
								   if( (event.keyCode == 189 || event.keyCode == 109 || event.keyCode == 9 || event.keyCode == 8 || event.keyCode == 190) ||
									  (event.keyCode >= 48 && event.keyCode <= 57) || 
									  (event.keyCode >= 96 && event.keyCode <= 105) ) {
									return true;
								 }
								  else {
									return false;
								  }
								}
							</script>
							<?php
								if(isset($captcha) && $captcha == "error")
								{
									?>
									<div class="alert alert-danger">Captcha Required</div>
									<?php
								}
							?>
							<form class="comments-form__form form-one" method="get" action="<?php echo base_url;?>contact-us-mail.php" onsubmit="return validate();">
								<div class="row">
									<div class="col-md-6">
										<div class="form-inner">
											<label>Full Name</label>
											<input type="text" name="Name" placeholder="Your Name" required>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-inner">
											<label>Email Address</label>
											<input type="email" name="Email" placeholder="Your Email" required>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-inner">
											<label>Phone Number</label>
											<input type="text" name="Mobile" placeholder="Your Mobile Number" required>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-inner">
											<label>Subject</label>
											<input type="text" name="Subject" placeholder="Subject" required>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-inner">
											<label>Brief/Message</label>
											<textarea type="text" name="Remarks" id="message" placeholder="Write Message"></textarea>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-8">
										<div class="form-inner">
											<script src="https://www.google.com/recaptcha/api.js" async defer></script>
											<div class="g-recaptcha" data-sitekey="6LdEWPsrAAAAACeMyaAUdPlGlZgtfgsOtU9nanNk"></div>
										</div>
									</div>
									<div class="col-md-4">
										<button type="submit" class="primary-btn1">
											<span>
												Submit
												<svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
													<path d="M9.73535 1.14746C9.57033 1.97255 9.32924 3.26406 9.24902 4.66797C9.16817 6.08312 9.25559 7.5453 9.70214 8.73633C9.84754 9.12406 9.65129 9.55659 9.26367 9.70215C8.9001 9.83849 8.4969 9.67455 8.32812 9.33398L8.29785 9.26367L8.19921 8.98438C7.73487 7.5758 7.67054 5.98959 7.75097 4.58203C7.77875 4.09598 7.82525 3.62422 7.87988 3.17969L1.53027 9.53027C1.23738 9.82317 0.762615 9.82317 0.469722 9.53027C0.176829 9.23738 0.176829 8.76262 0.469722 8.46973L6.83593 2.10254C6.3319 2.16472 5.79596 2.21841 5.25 2.24902C3.8302 2.32862 2.2474 2.26906 0.958003 1.79102L0.704097 1.68945L0.635738 1.65527C0.303274 1.47099 0.157578 1.06102 0.310542 0.704102C0.463655 0.347333 0.860941 0.170391 1.22363 0.28418L1.29589 0.310547L1.48828 0.387695C2.47399 0.751207 3.79966 0.827571 5.16601 0.750977C6.60111 0.670504 7.97842 0.428235 8.86132 0.262695L9.95312 0.0585938L9.73535 1.14746Z"></path>
												</svg>
											</span>
											<span>
												Submit
												<svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
													<path d="M9.73535 1.14746C9.57033 1.97255 9.32924 3.26406 9.24902 4.66797C9.16817 6.08312 9.25559 7.5453 9.70214 8.73633C9.84754 9.12406 9.65129 9.55659 9.26367 9.70215C8.9001 9.83849 8.4969 9.67455 8.32812 9.33398L8.29785 9.26367L8.19921 8.98438C7.73487 7.5758 7.67054 5.98959 7.75097 4.58203C7.77875 4.09598 7.82525 3.62422 7.87988 3.17969L1.53027 9.53027C1.23738 9.82317 0.762615 9.82317 0.469722 9.53027C0.176829 9.23738 0.176829 8.76262 0.469722 8.46973L6.83593 2.10254C6.3319 2.16472 5.79596 2.21841 5.25 2.24902C3.8302 2.32862 2.2474 2.26906 0.958003 1.79102L0.704097 1.68945L0.635738 1.65527C0.303274 1.47099 0.157578 1.06102 0.310542 0.704102C0.463655 0.347333 0.860941 0.170391 1.22363 0.28418L1.29589 0.310547L1.48828 0.387695C2.47399 0.751207 3.79966 0.827571 5.16601 0.750977C6.60111 0.670504 7.97842 0.428235 8.86132 0.262695L9.95312 0.0585938L9.73535 1.14746Z"></path>
												</svg>
											</span>
										</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<img src="assets/img/innerpages/vector/contact-page-vector1.svg" alt="" class="vector1">
		<img src="assets/img/innerpages/vector/contact-page-vector2.svg" alt="" class="vector2">
		<img src="assets/img/innerpages/vector/contact-page-vector3.svg" alt="" class="vector3">
	</div>
	
    <!-- Destination Details customer gallery Section End-->
    <div class="home7-testimonial-bg" style="background-image: url(<?php echo base_url;?>images/rooftop-bg.webp);"></div>
    <div class="home7-testimonial-section" id="feedback">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="testimonial-wrapper">
                        <div class="swiper home3-testimonial-slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="testimonial-card five">
                                        <ul class="rating-area">
                                            <li><i class="bi bi-circle-fill"></i></li>
                                            <li><i class="bi bi-circle-fill"></i></li>
                                            <li><i class="bi bi-circle-fill"></i></li>
                                            <li><i class="bi bi-circle-fill"></i></li>
                                            <li><i class="bi bi-circle-fill"></i></li>
                                        </ul>
                                        <p>“Such a wonderful place to stay in Amritsar! Just a short walk from the Golden Temple. Staff were very friendly and made my stay truly comfortable. Highly recommend!”</p>
                                        <div class="author-area">
                                            <div class="author-info">
                                                <h5>Varinder Kumar Sharma</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial-card five">
                                        <ul class="rating-area">
                                            <li><i class="bi bi-circle-fill"></i></li>
                                            <li><i class="bi bi-circle-fill"></i></li>
                                            <li><i class="bi bi-circle-fill"></i></li>
                                            <li><i class="bi bi-circle-fill"></i></li>
                                            <li><i class="bi bi-circle-fill"></i></li>
                                        </ul>
                                        <p>“Beautiful rooms and perfect location—close to Golden Temple, Durgiana Temple, and markets. Loved the rooftop restaurant and the staff was super helpful!”</p>
                                        <div class="author-area">
                                            <div class="author-info">
                                                <h5>Payal</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial-card five">
                                        <ul class="rating-area">
                                            <li><i class="bi bi-circle-fill"></i></li>
                                            <li><i class="bi bi-circle-fill"></i></li>
                                            <li><i class="bi bi-circle-fill"></i></li>
                                            <li><i class="bi bi-circle-fill"></i></li>
                                            <li><i class="bi bi-circle-fill"></i></li>
                                        </ul>
                                        <p>“Clean, budget-friendly, and polite staff. Stayed for one night, two days — walking distance from Golden Temple, Jallianwala Bagh, and Partition Museum. Great value!”</p>
                                        <div class="author-area">
                                            <div class="author-info">
                                                <h5>Vishal Sapale</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial-card five">
                                        <ul class="rating-area">
                                            <li><i class="bi bi-circle-fill"></i></li>
                                            <li><i class="bi bi-circle-fill"></i></li>
                                            <li><i class="bi bi-circle-fill"></i></li>
                                            <li><i class="bi bi-circle-fill"></i></li>
                                            <li><i class="bi bi-circle-fill"></i></li>
                                        </ul>
                                        <p>“Nice and neat rooms near the Golden Temple. Supportive staff and peaceful environment made our stay very pleasant. Would definitely visit again!”</p>
                                        <div class="author-area">
                                            <div class="author-info">
                                                <h5>Snehal Vibhandik</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial-card five">
                                        <ul class="rating-area">
                                            <li><i class="bi bi-circle-fill"></i></li>
                                            <li><i class="bi bi-circle-fill"></i></li>
                                            <li><i class="bi bi-circle-fill"></i></li>
                                            <li><i class="bi bi-circle-fill"></i></li>
                                            <li><i class="bi bi-circle-fill"></i></li>
                                        </ul>
                                        <p>“Excellent hospitality and cozy rooms! The rooftop dining with a city view made our trip unforgettable. Perfect blend of comfort and convenience near the temple.”</p>
                                        <div class="author-area">
                                            <div class="author-info">
                                                <h5>Neha Gupta</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
								
                            </div>
                        </div>
                        <div class="slider-btn-grp three">
                            <div class="slider-btn testimonial-slider-prev">
                                <svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0 5.31421H16V6.68564H0V5.31421Z"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M0.685714 6.68569C3.9104 6.68569 6.54629 3.84958 6.54629 0.825119V0.139404H5.17486V0.825119C5.17486 3.12181 3.12412 5.31426 0.685714 5.31426H0V6.68569H0.685714Z"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M0.685714 5.31421C3.9104 5.31421 6.54629 8.15032 6.54629 11.1748V11.8605H5.17486V11.1748C5.17486 8.87901 3.12412 6.68564 0.685714 6.68564H0V5.31421H0.685714Z"/>
                                </svg>
                            </div>
                            <div class="slider-btn testimonial-slider-next">
                                <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M16 7.31421H-3.8147e-06V8.68564H16V7.31421Z"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M15.3143 8.68569C12.0896 8.68569 9.45371 5.84958 9.45371 2.82512V2.1394H10.8251V2.82512C10.8251 5.12181 12.8759 7.31426 15.3143 7.31426H16V8.68569H15.3143Z"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M15.3143 7.31421C12.0896 7.31421 9.45371 10.1503 9.45371 13.1748V13.8605H10.8251V13.1748C10.8251 10.879 12.8759 8.68564 15.3143 8.68564H16V7.31421H15.3143Z"/>
                                    </g>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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