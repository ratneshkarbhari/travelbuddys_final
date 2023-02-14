<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> <?php echo $title; ?> | Travel Buddy</title>
    <link rel="shortcut icon" href="<?php echo site_url('assets/images/favicon.png'); ?>" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo site_url("assets/css/bootstrap.min.css"); ?>">

    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
/>

    <link rel="stylesheet" href="<?php echo site_url("assets/css/app.min.css"); ?>">
<body>


    <div id="preloader" class="d-none" style="background-color: #F5F5F7; position: fixed; z-index: 5; top: 0; left:0; right:0; bottom:0;">
        <div class="text-center">
            
            <h4>Loading</h4>
        </div>
    </div>

    <header id="universal">
        <nav class="navbar navbar-expand-lg ">
            <div class="container-fluid">
                <a class="navbar-brand" href="<?php echo site_url(''); ?>"><img src="<?php echo site_url('assets/images/tblogo.png'); ?>"></a>
                <a href="#" id="sideNavToggle" class="d-sm-block d-md-block d-lg-none" style="margin-right: 1em;">
                    <img src="<?php echo site_url('assets/icons/menu.svg'); ?>" style="width: 30px; height: 30px;">
                </a>
                <div id="sidenavCloser" class="d-none"></div>
                <div class="d-none" id="sideNav">

                    <ul class="navbar-nav">
                        <li class="nav-itemx">
                            <a class="nav-link active" aria-current="page" href="<?php echo site_url(''); ?>">Home</a>
                        </li>
                        <li class="nav-itemx dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Types of Trips
                            </a>
                            <ul class="dropdown-menu">
                                <?php foreach ($trip_categories as $trip_category): ?>
                                <li><a class="dropdown-item" href="<?php echo site_url('trip-categories/'.$trip_category["slug"]); ?>"><?php echo $trip_category["title"]; ?></a></li>                                    
                                <?php endforeach; ?>
                            </ul>
                        </li>
                        <li class="nav-itemx">
                            <a href="<?php echo site_url('about'); ?>" class="nav-link">About</a>
                        </li>
                        <li class="nav-itemx">
                            <a href="<?php echo site_url('contact'); ?>" class="nav-link">Contact</a>
                        </li>

                    </ul>


                </div>
                <div class="collapse navbar-collapse" id="desktopNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="<?php echo site_url(''); ?>">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Types of Trips
                            </a>
                            <ul class="dropdown-menu">
                                <?php foreach ($trip_categories as $trip_category): ?>
                                <li><a class="dropdown-item" href="<?php echo site_url('trip-categories/'.$trip_category["slug"]); ?>"><?php echo $trip_category["title"]; ?></a></li>                                    
                                <?php endforeach; ?>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo site_url('about')?>" class="nav-link">About</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo site_url('contact')?>" class="nav-link">Contact</a>
                        </li>


                    </ul>


                  </div>
                </div>

                
            </div>
        </nav>
    </header>

    <header id="scroll">
        <nav class="navbar navbar-expand-lg ">
            <div class="container-fluid">
                <a class="navbar-brand" href="<?php echo site_url(''); ?>"><img src="<?php echo site_url('assets/images/tblogo.png'); ?>"></a>
                <a href="#" id="sideNavToggle" class="d-sm-block d-md-block d-lg-none" style="margin-right: 1em;">
                    <img src="<?php echo site_url('assets/icons/menu.svg'); ?>" style="width: 30px; height: 30px;">
                </a>
                <form class="d-none d-lg-block" style="width: 37%;" action="<?php echo site_url('trip-search'); ?>" method="get">
                    <input type="text" name="universal_search" placeholder="Find what you love!" class="form-control">
                </form>
                <form class="d-sm-block d-md-block d-lg-none w-100"  action="<?php echo site_url('trip-search'); ?>" method="get">
                    <input type="text" name="universal_search" placeholder="Find what you love!" class="form-control">
                </form>
                <div id="sidenavCloser" class="d-none"></div>
                <div class="d-none" id="sideNav">

                    <ul class="navbar-nav">
                        <li class="nav-itemx">
                            <a class="nav-link active" aria-current="page" href="<?php echo site_url(''); ?>">Home</a>
                        </li>
                        <li class="nav-itemx dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Types of Trips
                            </a>
                            <ul class="dropdown-menu">
                            <?php foreach ($trip_categories as $trip_category): ?>
                                <li><a class="dropdown-item" href="<?php echo site_url('trip-categories/'.$trip_category["slug"]); ?>"><?php echo $trip_category["title"]; ?></a></li>                                    
                                <?php endforeach; ?>
                            </ul>
                        </li>
                        <li class="nav-itemx">
                            <a href="<?php echo site_url('about')?>" class="nav-link">About</a>
                        </li>
                        <li class="nav-itemx">
                            <a href="<?php echo site_url('contact')?>" class="nav-link">Contact</a>
                        </li>

                    </ul>


                </div>
                
                <div class="collapse navbar-collapse" id="desktopNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="<?php echo site_url(''); ?>">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Types of Trips
                            </a>
                            <ul class="dropdown-menu">
                            <?php foreach ($trip_categories as $trip_category): ?>
                                <li><a class="dropdown-item" href="<?php echo site_url('trip-categories/'.$trip_category["slug"]); ?>"><?php echo $trip_category["title"]; ?></a></li>                                    
                                <?php endforeach; ?>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo site_url('about')?>" class="nav-link">About</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo site_url('contact')?>" class="nav-link">Contact</a>
                        </li>


                    </ul>


                  </div>
                </div>

                
            </div>
        </nav>
    </header>