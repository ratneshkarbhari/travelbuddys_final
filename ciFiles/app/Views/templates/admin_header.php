
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.108.0">
    <title><?php echo $title; ?>| Travel Buddy's Admin Section</title>


    

    

<link href="<?php echo site_url('assets/admin/bootstrap.min.css'); ?>" rel="stylesheet" >

    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.3/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.3/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.3/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
<link rel="icon" href="/docs/5.3/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#712cf9">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="<?php echo  site_url('assets/admin/admin.min.css'); ?>" rel="stylesheet">
  </head>
  <body>
    
<!-- <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="<?php echo site_url("dashboard"); ?>">Travel Buddy's</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
    <input class="form-control form-control-dark w-100 rounded-0 border-0" type="text" placeholder="Search" aria-label="Search"> 
  <div class="navbar-nav" style="text-align: right; margin-left:auto; width: 100%;">
    <div class="nav-item">
      <a class="nav-link px-3" href="<?php echo site_url('logout'); ?>">Sign out</a>
    </div>
  </div>
</header> -->

<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="<?php echo site_url("dashboard"); ?>">Travel Buddys</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="d-block w-100 rounded-0 border-0" type="text" placeholder="Search" aria-label="Search"></div>
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3" href="<?php echo site_url('logout'); ?>">Sign out</a>
    </div>
  </div>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="<?php echo site_url('dashboard'); ?>">
              <span class="align-text-bottom"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('manage/trip-categories'); ?>">
              <span class="align-text-bottom"></span>
              Trip Categories
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('manage/trips'); ?>">
              <span class="align-text-bottom"></span>
              Trips
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('manage/testimonials'); ?>">
              <span class="align-text-bottom"></span>
              Testimonials
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('manage/locations'); ?>">
              <span class="align-text-bottom"></span>
              Locations
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('leads/manage'); ?>">
              <span class="align-text-bottom"></span>
              Leads
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('rebuild-cache'); ?>">
              <span class="align-text-bottom"></span>
              Rebuild Cache
            </a>
          </li>
          
        </ul>

        
      </div>
    </nav>