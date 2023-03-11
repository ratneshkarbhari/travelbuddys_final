<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lity/2.4.1/lity.min.css" integrity="sha512-UiVP2uTd2EwFRqPM4IzVXuSFAzw+Vo84jxICHVbOA1VZFUyr4a6giD9O3uvGPFIuB2p3iTnfDVLnkdY7D/SJJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<main id="trip" class="page-content">



    <!-- HOME HERO -->
    <section class="text-left d-none d-lg-block text-dark hero-section trip-page-hero"
        style="background-image: url('<?php echo site_url("assets/images/trips/".$focus_trip["banner_image"]); ?>'); background-size: cover;" id="trip-hero">



        <div class="trip-page-hero-section">
            <h1 class="text-light"><?php echo $focus_trip["title"] ?></h1>



        </div>

        <div class="container-fluid" style="margin-bottom: 2em;">
            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center mt-3 btn-mobile-resp" id="ctaBox"><a target="_blank" download=""
                        href="<?php echo site_url('assets/brochures/'.$focus_trip["brochure"]); ?>"
                        class="banr-btn btn" style="margin-right: 1em;">GET ITINERARY</a>
                        <a data-bs-toggle="modal" data-bs-target="#bookingModal" class="banr-btn btn"
                        href="#">BOOK NOW</a></div>
            </div>
        </div>




    </section>
    <section class="text-left d-sm-block d-md-block d-lg-none text-dark hero-section trip-page-hero"
        style="background-image: url('<?php echo site_url("assets/images/trips/".$focus_trip["banner_image_touch"]); ?>'); background-size: cover; background-position: center;" id="trip-hero-touch">



        <div class="trip-page-hero-section" >
            <h1 class="text-light"><?php echo $focus_trip["title"] ?></h1>



        </div>
        <br><br>
        <div class="container-fluid" style="margin-bottom: 2em;">
            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center mt-3 btn-mobile-resp" id="ctaBox"><a target="_blank" download=""
                        href="<?php echo site_url('assets/brochures/'.$focus_trip["brochure"]); ?>"
                        class="banr-btn btn" style="margin-right: 1em;">GET ITINERARY</a>
                        <a data-bs-toggle="modal" data-bs-target="#bookingModal" class="banr-btn btn"
                        href="#">BOOK NOW</a></div>
            </div>
        </div>




    </section>
   
    <section id="trip-details" class="regular-section">
        <div class="container">

            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12 text-center">
                    <img src="<?php echo site_url('assets/icons/schedule.svg'); ?>" class="trip-icons">
                    <p class="detail-heading">Duration</p>
                    <p class="detail-info"><?php echo $focus_trip["duration"] ?></p>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 text-center">
                    <img src="<?php echo site_url('assets/icons/rupee.svg') ?>" class="trip-icons">
                    <p class="detail-heading">Starting price</p>
                    <p class="detail-info"><?php if (isset($focus_trip["sale_price"])) {
                        echo $focus_trip["sale_price"];
                    } else {
                        echo $focus_trip["price"];
                    }
                     ?></p>
                    <em>No cost emi available</em>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 text-center">
                    <img src="<?php echo site_url('assets/icons/location.svg') ?>" class="trip-icons">
                    <p class="detail-heading">Pickup and Drop</p>
                    <p class="detail-info"><?php echo $focus_trip["pickup_city"] ?> to <?php echo $focus_trip["drop_city"] ?></p>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-8 col-md-12 col-sm-12">

                    <div class="c-box mt-5 card trip-page-card">

                        <div class="card-body">


                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link tab-link active" id="description-tab" data-bs-toggle="tab"
                                        data-bs-target="#description-tab-pane" type="button" role="tab"
                                        aria-controls="description-tab-pane" aria-selected="true">DESCRIPTION</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link tab-link" id="profile-tab" data-bs-toggle="tab"
                                        data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane"
                                        aria-selected="false">ITINERARY</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link tab-link" id="contact-tab" data-bs-toggle="tab"
                                        data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane"
                                        aria-selected="false">DATES</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link tab-link" id="inclusion-tab" data-bs-toggle="tab"
                                        data-bs-target="#hotelinfo-tab-pane" type="button" role="tab" aria-controls="hotelinfo-tab-pane"
                                        aria-selected="false">HOTEL INFO</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link tab-link" id="inclusion-tab" data-bs-toggle="tab"
                                        data-bs-target="#inclusion-tab-pane" type="button" role="tab" aria-controls="inclusion-tab-pane"
                                        aria-selected="false">INCLUSION</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link tab-link" id="exclusion-tab" data-bs-toggle="tab"
                                        data-bs-target="#exclusion-tab-pane" type="button" role="tab" aria-controls="exclusion-tab-pane"
                                        aria-selected="false">EXCLUSION</button>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="description-tab-pane" role="tabpanel"
                                    aria-labelledby="description-tab" tabindex="0">
                                    <?php echo  $focus_trip["description"]; ?>
                                </div>
                                <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab"
                                    tabindex="0">
                                    <?php echo  $focus_trip["itinerary"]; ?>
                                </div>
                                <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab"
                                    tabindex="0">
                                    
                                    <?php $parts = explode(",",$focus_trip["dates"]); foreach ($parts as $part): ?>
                                        <div class="date-box">
                                        <?php echo $part; ?></div>
                                    <?php endforeach; ?>
                                    <br>                                    <br>

                                    <a data-bs-toggle="modal" data-bs-target="#bookingModal" class="btn-primary btn" href="#">BOOK NOW</a>
                                </div>
                                <div class="tab-pane fade" id="hotelinfo-tab-pane" role="tabpanel" aria-labelledby="hotelinfo-tab"
                                tabindex="0">
                                <?php echo $focus_trip["hotel_info"]; ?>
                            </div>
                                <div class="tab-pane fade" id="inclusion-tab-pane" role="tabpanel" aria-labelledby="inclusion-tab"
                                tabindex="0">
                                <?php echo $focus_trip["inclusion"] ?>
                            </div>
                            <div class="tab-pane fade" id="exclusion-tab-pane" role="tabpanel" aria-labelledby="exclusion-tab"
                            tabindex="0">
                            <?php echo $focus_trip["exclusion"]; ?>

                        </div>

                            </div>





                        </div>

                    </div>

                    <div class="card trip-page-card">

                        <div class="card-body">

                            <h4>Photos</h4>

                            <?php
                                $gallery_images = explode(",",$focus_trip["gallery_images"]);

                            ?>

                            <div class="swiper swiper-trips d-none d-lg-block">
                                <!-- Additional required wrapper -->
                                <div class="swiper-wrapper container">

                                    

                                    <?php if(is_array($gallery_images)): foreach($gallery_images as $gallery_image): ?>

                                                
                                    <div class="swiper-slide text-center trip-card">
                                        <a href="<?php echo site_url("assets/images/trips/".$gallery_image) ?>" data-lity>
                                            <img class="trip-card-image" src="<?php echo site_url("assets/images/trips/".$gallery_image) ?>">
                                            <div class="trip-meta d-none">
                                                <span class="location"><img src="<?php echo site_url('assets/icons/location.svg') ?>" class="trip-meta-icon"><?php $focus_trip["location"] ?></span>
                                                <span class="duration"><img src="<?php echo site_url('assets/icons/schedule.svg') ?>" class="trip-meta-icon"><?php $focus_trip["duration"] ?><</span>
                                            </div>
                                        </a>
                                    </div>

                                        
                                    <?php  endforeach; endif; ?>

            
            
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
            

                                    <?php if(is_array($gallery_images)):  foreach($gallery_images as $gallery_image): ?>

                                                
                                    <div class="swiper-slide text-center trip-card">
                                        <a href="<?php echo site_url("assets/images/trips_gallery_images/".$gallery_image) ?>" data-lity>
                                            <img class="trip-card-image" src="<?php echo site_url("assets/images/trips_gallery_images/".$gallery_image) ?>">
                                            <div class="trip-meta d-none">
                                                <span class="location"><img src="<?php echo site_url('assets/icons/location.svg') ?>" class="trip-meta-icon"><?php $focus_trip["location"] ?></span>
                                                <span class="duration"><img src="<?php echo site_url('assets/icons/schedule.svg') ?>" class="trip-meta-icon"><?php $focus_trip["duration"] ?><</span>
                                            </div>
                                        </a>
                                    </div>

                                        
                                    <?php  endforeach; endif; ?>

                                </div>
                                <!-- If we need pagination -->
                                <!-- <div class="swiper-pagination"></div> -->
            
                                <!-- If we need navigation buttons -->
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-button-next"></div>
            
                                <!-- If we need scrollbar -->
                                <!-- <div class="swiper-scrollbar"></div> -->
                            </div>
                            

                        </div>
                    </div>

                    <?php if($focus_trip["youtube_videos"]!=""): ?>

                    <div class="card trip-page-card">

                        <div class="card-body">

                            <h4>Videos</h4>

                            <?php

                                $videos = explode(",",$focus_trip["youtube_videos"]);
                                $videoIds = [];

                                foreach ($videos as $video) {
                                
                                    $linkParts = parse_url($video);


                                    $videoIds[] = str_replace("v=","",$linkParts["query"]);

                                }
                                
                            ?>

                            <div class="swiper swiper-trips d-none d-lg-block">
                                <!-- Additional required wrapper -->
                                <div class="swiper-wrapper container">
            

                                    <?php foreach($videos as $key => $video): ?>

                                    <div class="swiper-slide text-center trip-card">
                                        <a href="<?php echo $video ?>" data-lity>
                                            <img class="trip-card-image" src="https://img.youtube.com/vi/<?php echo $videoIds[$key] ?>/0.jpg">
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
            
                            <div class="swiper swiper-trips-touch d-md-block d-sm-block d-lg-none">
                                <!-- Additional required wrapper -->
                                <div class="swiper-wrapper container">
            

            
                                     <?php foreach($videos as $key => $video): ?>

                                    <div class="swiper-slide text-center trip-card">
                                        <a href="<?php echo $video?>" data-lity>
                                            <img class="trip-card-image" src="https://img.youtube.com/vi/<?php echo $videoIds[$key] ?>/0.jpg">
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
                            

                        </div>
                    </div>

                    <?php endif; ?>
                   
                    

                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">

                    <div class="c-box mt-5 card">

                        <div class="card-body">

                            <h1 class="s-title text-center">Book now</h1>
                        <div class="row">
                             
                            <div class="form-quote">
                                <form action="<?php echo site_url('create-lead'); ?>" method="POST" class="w-100">
                                    <label for="name"><span class="visually-hidden">Enter
                                            Name</span></label><input name="name" type="text" class="form-control"
                                        id="name" placeholder="Enter Name..."><label for="contact"><span
                                            class="visually-hidden">Contact Number</span></label><input name="phone"
                                        type="tel" maxlength="10" class="form-control" id="contact"
                                        placeholder="Enter Number..."><label for="email"><span
                                            class="visually-hidden">Email Id</span></label><input name="email"
                                        type="email" class="form-control" id="email"
                                        placeholder="Email Id..."><label for="destination"><span
                                            class="visually-hidden">Destination</span></label><input
                                        name="destination" type="text" class="form-control" id="destination"
                                        placeholder="Destination...">
                                        <input type="hidden" name="date" value="No date selected">
                                        <button class="btn btn-primary d-block w-100" type="submit" style="margin-top: 1em;">Get Quote</button></form>
                                        <a
                                    href="https://wa.me/919967491105?text=Hey I am interested in your trips"
                                    target="_blank" class="btn btn-success d-block"><span class="wtsicon"></span>
                                    Whatsapp</a><a  href="tel:9967491105 " target="_blank"
                                    class="btn btn-info d-block"><span class="callnowicon"></span> Call Now</a>
                            </div>
                            
                        </div>

                        </div>
                        
                    </div>

                </div>
            </div>

            

        </div>
    </section>
    <section id="testimonials" class="regular-section">

        <div class="container">

            <h1 class="section-title">testimonials</h1>

            <div class="swiper swiper-trips d-none d-lg-block">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper container">

                    <?php foreach($testimonials as $testimonial):
                        
                    if(!isset($testimonial->youtube_video_link)): ?>

                    <div class="swiper-slide text-center trip-card">
                        <a href="#">
                            <img class="trip-card-image" src="<?php echo site_url('assets/images/testimonials/'.$testimonial->thumbnail) ?>">
                            
                            <h4 class="trip-title"><?php $testimonial->title ?></h4>

                            <?php
                                $truncated = substr($testimonial->text,0,25);
                            ?>

                            <?php for ($i = 0; $i < $testimonial->stars; $i++): ?>
                            &#9733
                            <?php endfor; ?>

                            <h5><?php echo $testimonial->title; ?></h5>

                            <?php echo $testimonial->text; ?>

                            
                        </a>
                    </div>
                        
                    



                    <?php endif; endforeach; ?>


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


                    <?php foreach($testimonials as $testimonial):
                        
                    if (!isset($testimonial->youtube_video_link)): ?>

                    <div class="swiper-slide text-center trip-card">
                        <a href="#">
                            <img class="trip-card-image" src="<?php echo site_url('assets/images/testimonials/'.$testimonial->thumbnail) ?>">
                            
                            <h4 class="trip-title"><?php $testimonial->title ?></h4>
                            
                            <?php echo $testimonial->text; ?>

                        </a>
                    </div>
                        

                    <?php endif; endforeach; ?>

                </div>
                <!-- If we need pagination -->
                <!-- <div class="swiper-pagination"></div> -->

                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>

                <!-- If we need scrollbar -->
                <!-- <div class="swiper-scrollbar"></div> -->
            </div>

        </div>

    </section>

    <section id="featured-trips" class="regular-section">

        <div class="container">

            <h1 class="section-title">Featured Trips</h1>

            <div class="swiper swiper-trips d-none d-lg-block">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper container">

                    <?php foreach($featured_trips as $featured_trip):
                    if($focus_trip["slug"]!=$featured_trip->slug): ?>
                                            
                    <div class="swiper-slide text-center trip-card">
                        <a href="<?php echo site_url('trips/'.$featured_trip->slug) ?>">
                            <img class="trip-card-image" src="<?php echo site_url('assets/images/trips/'.$featured_trip->featured_image) ?>">
                            <div class="trip-meta">
                                <span class="location"><img src="<?php echo site_url('assets/icons/location.svg') ?>" class="trip-meta-icon">
                                    <?php echo $featured_trip->location ?></span>
                                <span class="duration"><img src="<?php echo site_url('assets/icons/schedule.svg') ?>" class="trip-meta-icon">
                                    <?php echo $featured_trip->duration ?></span>
                            </div>
                            <h6 class="trip-title"><?php echo $featured_trip->title ?></h6>
                        </a>
                    </div>


                    <?php endif; endforeach; ?>



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

                    <?php foreach($featured_trips as $featured_trip):
                    if($focus_trip["slug"]!=$featured_trip->slug): ?>

                    <div class="swiper-slide text-center trip-card">
                        <a href="<?php echo site_url('trips/'.$featured_trip->slug) ?>">
                            <img class="trip-card-image" src="<?php echo site_url('assets/images/trips/'.$featured_trip->featured_image) ?>">
                            <div class="trip-meta">
                                <span class="location"><img src="<?php echo site_url('assets/icons/location.svg') ?>" class="trip-meta-icon">
                                    <?php $featured_trip->location ?></span>
                                <span class="duration"><img src="<?php echo site_url('assets/icons/schedule.svg') ?>" class="trip-meta-icon">
                                    <?php $featured_trip->duration ?></span>
                            </div>
                            <h2 class="trip-title"><?php $featured_trip->title ?></h2>
                        </a>
                    </div>


                    <?php endif; endforeach; ?>

                </div>
                <!-- If we need pagination -->
                <!-- <div class="swiper-pagination"></div> -->

                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>

                <!-- If we need scrollbar -->
                <!-- <div class="swiper-scrollbar"></div> -->
            </div>

            

        </div>

    </section>

    <div class="modal fade" id="bookingModal" tabindex="-1" aria-labelledby="bookingModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="bookingModalLabel">BOOK NOW</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?php echo site_url("create-lead") ?>" method="POST" class="w-100">
                    <label for="name"><span class="visually-hidden">Enter
                    Name</span></label><input name="name" type="text" class="form-control" id="name" placeholder="Enter Name..."><label for="contact"><span class="visually-hidden">Contact Number</span></label><input name="phone" type="tel" maxlength="10" class="form-control" id="contact" placeholder="Enter Number..."><label for="email"><span class="visually-hidden">Email Id</span></label><input name="email" type="email" class="form-control" id="email" placeholder="Email Id..."><label for="destination">
                    <label>Select a date</label>
                    <br>
                    <?php foreach($parts as $part): ?>
                        <input class="form-check-input" type="radio" name="date" id="date" value="<?php echo $part ?>" required>
                        <label class="form-check-label" for=""><?php echo $part ?></label>
                    <?php endforeach; ?>    
                    <span class="visually-hidden">Destination</span></label><input name="destination" type="text" class="form-control" id="destination" placeholder="Destination...">
                   
                <button class="btn btn-primary d-block w-100" type="submit" style="margin-top: 1em;">Get Quote</button>
            </div>
            <div class="modal-footer d-none">
                <button type="submt" class="btn btn-primary">BOOK NOW</button>
                </form>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
        </div>

</main>