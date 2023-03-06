<main id="trip-category" class="page-content" style="margin-bottom: 3em;">



    <!-- HOME HERO -->
    <section class="text-left d-none d-lg-block text-dark hero-section trip-category-page-hero" style="background-image: url('<?php echo site_url('assets/images/trip_categories/' . $trip_category_hero["banner_image"]); ?>'); background-position: top;" id="trip-hero">



        <div class="trip-category-page-hero-section">
            <h1 class="text-light"><?php echo $trip_category_hero["title"]; ?></h1>



        </div>





    </section>

    <section class="text-center d-lg-none text-dark hero-section text-left text-dark hero-section trip-category-page-hero" style="background-image: url('<?php echo site_url('assets/images/trip_categories/' . $trip_category_hero["banner_image"]); ?>'); background-position: top;" id="trip-hero">



        <div class="trip-category-page-hero-section">
            <h1 class="text-light"><?php echo $trip_category_hero["title"]; ?></h1>



        </div>





    </section>


    <section id="contact-form" class="regular-section">

        <div class="container">

            <div class="row">




                <?php foreach ($tcTripsObj as $trip) : if ($trip["slug"] != "") : ?>


                        <div class="col-lg-3 col-md-6 col-sm-12 text-center trip-card" style="margin-bottom: 7em; height: 100%;">
                            <a href="<?php echo site_url('trips/' . $trip["slug"]) ?>">
                                <img class="trip-card-image lazy" src="<?php echo site_url('assets/images/placeholder.png') ?>" data-src="<?php echo site_url('assets/images/trips/' . $trip["featured_image"]) ?>">
                                <div class="trip-meta">
                                    <span class="location"><img src="<?php echo site_url('assets/icons/location.svg') ?>" class="trip-meta-icon">
                                        <?php echo $trip["location"]; ?></span><br>
                                    <span class="duration"><img src="<?php echo site_url('assets/icons/schedule.svg') ?>" class="trip-meta-icon">
                                        <?php echo $trip["duration"]; ?></span>
                                    <p style="margin-bottom: 0; font-size: 15px; font-weight: 700" class="location">
                                        Starts at ₹ <?php if ($trip["sale_price"] == 0.00) {
                                                        echo $trip["price"];
                                                    } else {
                                                        echo $trip["sale_price"];
                                                    }    ?>
                                    </p>
                                </div>
                                <h2 class="trip-title"><?php echo $trip["title"]; ?></h2>
                            </a>
                        </div>


                <?php else : echo "<h4>No Trips added</h4>";
                    endif;
                endforeach; ?>


            </div>

        </div>

    </section>



</main>