
<main id="trip-category" class="page-content" style="margin-bottom: 3em;">



<!-- HOME HERO -->
<section class="text-left d-none d-lg-block text-dark hero-section trip-category-page-hero" style="background-image: url( '<?php echo site_url('assets/images/trip_bg.jpg') ?>'); background-size: 'cover';" id="trip-hero">



    <div class="trip-category-page-hero-section">
        <h1 class="text-light"><?php echo $title ?></h1>



    </div>




</section>

<section class="text-center d-lg-none text-dark hero-section text-left text-dark hero-section trip-category-page-hero" style="background-image: site_url( '<?php echo site_url('assets/images/trip_bg.jpg') ?>'); background-size: 'cover';"  id="contact-hero-touch">



    <div class="trip-category-page-hero-section" style="justify-content:left;">
        <h1 class="text-light"><?php echo $title ?></h1>



    </div>






</section>

<section id="contact-form" class="regular-section">

    <div class="container">

        <div class="row">


            <?php foreach($trips as $trip): ?>
                

            <div class="col-lg-3 col-md-6 col-sm-12 text-center" style="margin-bottom: 7em; height: 100%;">
                <a href="<?php echo site_url('trips/'.$trip->slug) ?>">
                    <img class="trip-card-image lazy" src="<?php echo site_url("assets/images/placeholder.png") ?>" data-src="<?php echo site_url('assets/images/trips/'.$trip->featured_image) ?>">
                    <div class="trip-meta">
                        <span class="location"><img src="<?php echo site_url('assets/icons/location.svg') ?>" class="trip-meta-icon">
                            <?php echo $trip->location ?></span>
                        <span class="duration"><img src="<?php echo site_url('assets/icons/schedule.svg') ?>" class="trip-meta-icon">
                            <?php echo $trip->duration ?></span>
                    </div>
                    <h2 class="trip-title"><?php echo $trip->title ?></h2>
                </a>
            </div>


            <?php endforeach; ?>

        </div>

    </div>

</section>



</main>