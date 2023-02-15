<main id="home" class="page-content" >



    <!-- HOME HERO -->
    <section class="text-center d-none d-lg-block" id="home-hero">

        <div class="section">

            <h1>Buddy Who Never Ditch Plans</h1>


            <form action="<?php  echo site_url('trip-search'); ?>" class="d-block" method="get" style="position: absolute;
            display: block !important;
            bottom: 27vh;
            width: 50%;" accept-charset="utf-8">
                <div class="form-group">
                    <input style="border: 1px solid black; height: 2.5em;" placeholder="Find your calling"
                        type="search" name="universal_search" id="universal-search" class="form-control">
                </div>
            </form>

            <div class="video-container">
                <div class="color-overlay"></div>
                <video poster="<?php echo
                site_url("assets/images/trip_bg.jpg"); ?>" autoplay loop muted src="<?php echo site_url("assets/videos/video.mp4"); ?>" type="video/mp4">
                </video>
            </div>

        </div>



    </section>

    <section class="text-center d-lg-none" id="home-hero-touch">

        <div class="section">

            <h1>Random Travel Quote</h1>


            <form action="<?php  echo site_url('trip-search'); ?>" class="d-block" method="get" style="position: absolute;
            display: block !important;
            bottom: 20vh;
            width: 80%;" accept-charset="utf-8">
                <div class="form-group">
                    <input style="border: 1px solid black; height: 2.5em;" placeholder="Find your calling"
                        type="search" name="universal_search" id="universal_search" class="form-control">
                </div>
            </form>

            <div class="video-container">
                <div class="color-overlay"></div>
                <video poster="<?php echo site_url("assets/images/touch_poster.jpg"); ?>" autoplay loop muted style="    bottom: 2em;
                position: absolute;
                z-index: -7;
                left: 0;
                right: 0;">
                    <source src="<?php echo site_url("assets/videos/hero_touch.mp4"); ?>" type="video/mp4">
                </video>
            </div>

        </div>



    </section>

    <section id="featured-trips" class="regular-section">
        <div class="container">

            <h1 class="section-title">Featured Trips</h1>

            <div class="swiper swiper-trips d-none d-lg-block">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper container">


                    <?php foreach($featured_trips as $featured_trip): ?>
                    
                    <div class="swiper-slide text-center trip-card">
                        <a href="<?php  echo site_url('trips/'.$featured_trip->slug) ?>">
                            <img class="trip-card-image lazy" src="<?php  echo site_url('assets/images/placeholder.png') ?>" data-src="<?php  echo site_url('assets/images/trips/'.$featured_trip->featured_image) ?>">
                            <div class="trip-meta">
                                <span class="location"><img src="<?php  echo site_url('assets/icons/location.svg') ?>" class="trip-meta-icon">
                                    <?php echo $featured_trip->location ; ?></span>
                                <span class="duration"><img src="<?php  echo site_url('assets/icons/schedule.svg') ?>" class="trip-meta-icon">
                                    <?php echo $featured_trip->duration ; ?></span>
                            </div>
                            <h2 class="trip-title"><?php echo $featured_trip->title ; ?></h2>
                        </a>
                    </div>

                    <?php endforeach; ?>



                </div>
                <!-- If we need pagination -->
                <!-- <div class="swiper-pagination"></div> -->

                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>

                <!-- If we need scrollbar -->
                <!-- <div class="swiper-scrollbar"></div> -->
            </div>

            <div class="swiper swiper-trips-touch d-sm-block d-md-block d-lg-none">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper container">

                    <?php foreach($featured_trips as $featured_trip): ?>


                    <div class="swiper-slide text-center trip-card">
                        <a href="<?php  echo site_url('trips/'.$featured_trip->slug) ?>">
                            <img class="trip-card-image lazy" src="<?php  echo site_url('assets/images/placeholder.png') ?>" data-src="<?php  echo site_url('assets/images/trips/'.$featured_trip->featured_image) ?>">
                            <div class="trip-meta">
                                <span class="location"><img src="<?php  echo site_url('assets/icons/location.svg') ?>" class="trip-meta-icon">
                                    <?php echo $featured_trip->location ; ?></span>
                                <span class="duration"><img src="<?php  echo site_url('assets/icons/schedule.svg') ?>" class="trip-meta-icon">
                                    <?php echo $featured_trip->duration ; ?></span>
                            </div>
                            <h2 class="trip-title"><?php echo $featured_trip->title ; ?></h2>
                        </a>
                    </div>

                    <?php  endforeach; ?>

                </div>
                <!-- If we need pagination -->
                <!-- <div class="swiper-pagination"></div> -->

                <!-- If we need navigation buttons -->
                <!-- <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div> -->

                <!-- If we need scrollbar -->
                <!-- <div class="swiper-scrollbar"></div> -->
            </div>

            <div class="text-center see-all-block">
                <a href="<?php  echo site_url('all-trips') ?>" class="btn btn-primary">
                    see all
                </a>
            </div>

        </div>
    </section>

    <section id="trip-categories" class="regular-section bg-light-gray">

        <div class="container">

            <h1 class="section-title text-center">cATEGORIES</h1>


            <div class="row">

                <?php foreach($trip_categories as $trip_category): ?>


                <div class="col-4 col-lg-3 col-md-6 col-sm-12 text-center">
                    <a href="<?php  echo site_url('trip-categories/'.$trip_category["slug"]) ?>">
                        <img class="w-50 lazy" src="<?php  echo site_url('assets/images/placeholder.png') ?>" data-src="<?php  echo site_url('assets/images/trip_categories/'.$trip_category["featured_image"]) ?>">
                        
                        <h2 class="trip-title d-none d-lg-block"><?php echo $trip_category["title"] ; ?></h2>
                    </a>
                </div>
    
                <?php  endforeach; ?>
                
            </div>



        </div>

    </section>

    <section id="locations" class="regular-section">

        <div class="container">

            <h1 class="section-title">Locations</h1>

            <div class="swiper swiper-trips d-none d-lg-block">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper container">

                    <?php foreach($locations as $location): ?>
                    
                    <div class="swiper-slide text-center trip-card">
                        <a href="<?php  echo site_url('locations/'.$location->slug) ?>">
                            <img class="trip-card-image lazy" src="<?php  echo site_url('assets/images/placeholder.png'); ?>" data-src="<?php  echo site_url('assets/images/locations/'.$location->featured_image); ?>">
                            <h2 class="trip-title"><?php echo $location->title ; ?></h2>
                        </a>
                    </div>


                    <?php  endforeach; ?>



                </div>
                <!-- If we need pagination -->
                <!-- <div class="swiper-pagination"></div> -->

                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>

                <!-- If we need scrollbar -->
                <!-- <div class="swiper-scrollbar"></div> -->
            </div>

            <div class="swiper swiper-trips-touch d-sm-block d-md-block d-lg-none">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper container">

                    <?php foreach($locations as $location): ?>
                    
                    <div class="swiper-slide text-center trip-card">
                        <a href="<?php  echo site_url('locations/'.$location->slug) ?>">
                            <img class="trip-card-image lazy"  src="<?php  echo site_url('assets/images/placeholder.png') ?>" data-src="<?php  echo site_url('assets/images/locations/'.$location->thumbnail) ?>">
                            <h5 class="trip-title"><?php echo $location->title ; ?></h5>
                        </a>
                    </div>


                    <?php  endforeach; ?>

                </div>
                <!-- If we need pagination -->
                <!-- <div class="swiper-pagination"></div> -->

                <!-- If we need navigation buttons -->

        </div>
    </section>

    <section id="discounted-trips" class="regular-section">

        <div class="container">

            <h1 class="section-title">Travel at a discount</h1>

            <div class="swiper swiper-trips d-none d-lg-block">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper container">

                    <?php foreach($trips as $trip): ?>

                    <?php if($trip->sale_price!=0.00): ?>
                        
                    <div class="swiper-slide text-center trip-card">
                        <a href="<?php  echo site_url('trips/'.$featured_trip->slug) ?>">
                            <img class="trip-card-image lazy" src="<?php  echo site_url('assets/images/placeholder.png') ?>" data-src="<?php  echo site_url('assets/images/trips/'.$featured_trip->featured_image) ?>">
                            <div class="trip-meta">
                                <span class="location"><img src="<?php  echo site_url('assets/icons/location.svg') ?>" class="trip-meta-icon">
                                    <?php echo $featured_trip->location ; ?></span>
                                <span class="duration"><img src="<?php  echo site_url('assets/icons/schedule.svg') ?>" class="trip-meta-icon">
                                    <?php echo $featured_trip->duration ; ?></span>
                            </div>
                            <h2 class="trip-title"><?php echo $featured_trip->title ; ?></h2>
                        </a>
                    </div>


                    <?php  endif; ?>
                    

                    <?php  endforeach; ?>



                </div>
                <!-- If we need pagination -->
                <!-- <div class="swiper-pagination"></div> -->

                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>

                <!-- If we need scrollbar -->
                <!-- <div class="swiper-scrollbar"></div> -->
            </div>

            <div class="swiper swiper-trips-touch d-sm-block d-md-block d-lg-none">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper container">

                    
                    <?php foreach($trips as $trip): ?>

                    <?php if ($trip->sale_price!=0.00): ?>
                        
                    <div class="swiper-slide text-center trip-card">
                        <a href="<?php  echo site_url('trips/'.$featured_trip->slug) ?>">
                            <img class="trip-card-image lazy" src="<?php  echo site_url('assets/images/placeholder.png') ?>" data-src="<?php  echo site_url('assets/images/trips/'.$featured_trip->featured_image) ?>">
                            <div class="trip-meta">
                                <span class="location"><img src="<?php  echo site_url('assets/icons/location.svg') ?>" class="trip-meta-icon">
                                    <?php echo $featured_trip->location ; ?></span>
                                <span class="duration"><img src="<?php  echo site_url('assets/icons/schedule.svg') ?>" class="trip-meta-icon">
                                    <?php echo $featured_trip->duration ; ?></span>
                            </div>
                            <h2 class="trip-title"><?php echo $featured_trip->title ; ?></h2>
                        </a>
                    </div>
                    <?php  endif; ?>
                    

                    <?php  endforeach; ?>

                </div>
                <!-- If we need pagination -->
                <!-- <div class="swiper-pagination"></div> -->

                <!-- If we need navigation buttons -->
                <!-- <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div> -->

                <!-- If we need scrollbar -->
                <!-- <div class="swiper-scrollbar"></div> -->
            </div>

            <div class="text-center see-all-block">
                <a href="<?php  echo site_url('all-trips') ?>" class="btn btn-primary">
                    see all
                </a>
            </div>

        </div>

    </section>

    <?php foreach($trip_categories as $trip_category): ?>
        <section id="<?php echo $trip_category["slug"] ?>" class="regular-section">

            <div class="container">

                <h1 class="section-title"><?php echo $trip_category["title"]; ?></h1>

                <div class="swiper swiper-trips d-none d-lg-block">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper container">

                        <?php  foreach($tcTripsObj[$trip_category["id"]] as $trip): ?>

                            <?php if(count($trip)>1): ?>

                            <?php foreach($trips as $trip): ?>

                                <div class="swiper-slide text-center trip-card"> <a href="<?php  echo site_url('trips/'.$trip->slug); ?>"> <img class="trip-card-image lazy" src="<?php  echo site_url('assets/images/placeholder.png'); ?>" data-src="<?php  echo site_url('assets/images/trips/'.$trip->featured_image); ?>"> <div class="trip-meta"> <span class="location"><img src="<?php  echo site_url('assets/icons/location.svg') ?>" class="trip-meta-icon"> <?php echo $trip->location ; ?></span> <span class="duration"><img src="<?php  echo site_url('assets/icons/schedule.svg') ?>" class="trip-meta-icon"> <?php echo $trip->duration ; ?></span> </div> <h2 class="trip-title"><?php echo $trip->title ; ?></h2> </a> </div>


                            <?php endforeach; ?>

                            <?php else: $trip = $trip[0]; ?>
                           
                            <div class="swiper-slide text-center trip-card"> <a href="<?php  echo site_url('trips/'.$trip->slug); ?>"> <img class="trip-card-image lazy" src="<?php  echo site_url('assets/images/placeholder.png'); ?>" data-src="<?php  echo site_url('assets/images/trips/'.$trip->featured_image); ?>"> <div class="trip-meta"> <span class="location"><img src="<?php  echo site_url('assets/icons/location.svg') ?>" class="trip-meta-icon"> <?php echo $trip->location ; ?></span> <span class="duration"><img src="<?php  echo site_url('assets/icons/schedule.svg') ?>" class="trip-meta-icon"> <?php echo $trip->duration ; ?></span> </div> <h2 class="trip-title"><?php echo $trip->title ; ?></h2> </a> </div>


                            <?php endif; ?>
                        <?php  endforeach; ?>



                    </div>
                    <!-- If we need pagination -->
                    <!-- <div class="swiper-pagination"></div> -->

                    <!-- If we need navigation buttons -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>

                    <!-- If we need scrollbar -->
                    <!-- <div class="swiper-scrollbar"></div> -->
                </div>

                <div class="swiper swiper-trips-touch d-sm-block d-md-block d-lg-none">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper container">

                        <?php  foreach($tcTripsObj[$trip_category["id"]] as $trip): ?>

                            <?php if(count($trip)>1): ?>

                            <?php foreach($trips as $trip): ?>

                                <div class="swiper-slide text-center trip-card"> <a href="<?php  echo site_url('trips/'.$trip->slug); ?>"> <img class="trip-card-image lazy" src="<?php  echo site_url('assets/images/placeholder.png'); ?>" data-src="<?php  echo site_url('assets/images/trips/'.$trip->featured_image); ?>"> <div class="trip-meta"> <span class="location"><img src="<?php  echo site_url('assets/icons/location.svg') ?>" class="trip-meta-icon"> <?php echo $trip->location ; ?></span> <span class="duration"><img src="<?php  echo site_url('assets/icons/schedule.svg') ?>" class="trip-meta-icon"> <?php echo $trip->duration ; ?></span> </div> <h2 class="trip-title"><?php echo $trip->title ; ?></h2> </a> </div>


                            <?php endforeach; ?>

                            <?php else: $trip = $trip[0]; ?>
                           
                            <div class="swiper-slide text-center trip-card"> <a href="<?php  echo site_url('trips/'.$trip->slug); ?>"> <img class="trip-card-image lazy" src="<?php  echo site_url('assets/images/placeholder.png'); ?>" data-src="<?php  echo site_url('assets/images/trips/'.$trip->featured_image); ?>"> <div class="trip-meta"> <span class="location"><img src="<?php  echo site_url('assets/icons/location.svg') ?>" class="trip-meta-icon"> <?php echo $trip->location ; ?></span> <span class="duration"><img src="<?php  echo site_url('assets/icons/schedule.svg') ?>" class="trip-meta-icon"> <?php echo $trip->duration ; ?></span> </div> <h2 class="trip-title"><?php echo $trip->title ; ?></h2> </a> </div>


                            <?php endif; ?>
                        <?php  endforeach; ?>



                    </div>
                    <!-- If we need pagination -->
                    <!-- <div class="swiper-pagination"></div> -->

                    <!-- If we need navigation buttons -->
                    <!-- <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div> -->

                    <!-- If we need scrollbar -->
                    <!-- <div class="swiper-scrollbar"></div> -->
                </div>

                <div class="text-center see-all-block">
                    <a href="<?php  echo site_url('all-trips') ?>" class="btn btn-primary">
                        see all
                    </a>
                </div>

            </div>

        </section>
    <?php  endforeach; ?>

    <section id="testimonials" class="regular-section">

        <div class="container">

            <h1 class="section-title">testimonials</h1>

            <div class="swiper swiper-trips d-none d-lg-block">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper container">

                    <?php foreach($testimonials as $testimonial): ?>
                        
                    <?php if($testimonial->youtube_video_link!=""): ?>

                    <div class="swiper-slide text-center trip-card">
                        <a href="<?php echo $testimonial->youtube_video_link ?>" data-lity>
                            <img class="trip-card-image lazy" src="<?php  echo site_url('assets/images/placeholder.png') ?>" data-src="<?php  echo site_url('assets/images/testimonials/'.$testimonial->thumbnail) ?>">
                            
                            <h2 class="trip-title"><?php echo $testimonial->title ; ?></h2>
                            
                        </a>
                    </div>
                        
                    <?php  endif; ?>



                    <?php  endforeach; ?>


                </div>
                <!-- If we need pagination -->
                <!-- <div class="swiper-pagination"></div> -->

                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>

                <!-- If we need scrollbar -->
                <!-- <div class="swiper-scrollbar"></div> -->
            </div>

            <div class="swiper swiper-trips-touch d-md-block d-sm-block d-lg-none">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper container">


                    <?php foreach($testimonials as $testimonial): ?>
                        
                    <?php if($testimonial->youtube_video_link!=""): ?>

                    <div class="swiper-slide text-center trip-card">
                        <a href="<?php echo $testimonial->youtube_video_link ?>" data-lity>
                            <img class="trip-card-image lazy" src="<?php  echo site_url('assets/images/placeholder.png') ?>" data-src="<?php  echo site_url('assets/images/testimonials/'.$testimonial->thumbnail) ?>">
                            
                            <h2 class="trip-title"><?php echo $testimonial->title ; ?></h2>
                            
                        </a>
                    </div>
                        
                    <?php  endif; ?>



                    <?php  endforeach; ?>

                </div>
                <!-- If we need pagination -->
                <!-- <div class="swiper-pagination"></div> -->

                <!-- If we need navigation buttons -->
                <!-- <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div> -->

                <!-- If we need scrollbar -->
                <!-- <div class="swiper-scrollbar"></div> -->
            </div>

        </div>

    </section>

</main>