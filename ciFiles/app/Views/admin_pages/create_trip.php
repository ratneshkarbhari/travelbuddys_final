<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 page-content" style="margin-top: 2em;">

    <div class="container-fluid">

        <h1 class="page-title"><?php echo $title; ?></h1>

        <p class="text-danger">

            <?php
                if(isset($_GET["error_message"])){
                    echo $_GET["error_message"];
                }
            ?>

        </p>

        <p class="text-success">
            <?php
                if(isset($_GET["success_message"])){
                    echo $_GET["success_message"];
                }
            ?>
        </p>

       
        <a href="<?php echo site_url("manage/trips") ?>" class="btn btn-primary">Back to Trips</a>

        <br><br>

        <?php echo form_open_multipart(site_url("create/trip")); ?>

            <div class="mb-3">
              <label for="title" class="form-label">Title</label>
              <input type="text"
                class="form-control" name="title" id="title" aria-describedby="helpId" placeholder="">
                <small id="helpId" class="form-text text-muted">Public Name of the trip category</small>
            </div>

            <p>Is this a featured Trip?</p>

            <div class="form-check">
              <input class="form-check-input" type="radio" name="featured" id="featured-yes">
              <label class="form-check-label" for="featured-yes">
                Yes
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="featured" id="featured-no" checked>
              <label class="form-check-label" for="featured-no">
                No
              </label>
            </div>

            <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text"
                class="form-control" name="slug" id="slug" aria-describedby="helpId" placeholder="">
                <small id="helpId" class="form-text text-muted">Unique identifier used as a public Id in urls</small>
            </div>

            <div class="mb-3">
                <label for="trip_category" class="form-label">Select Trip Catgegories</label>
                <br>
                <?php foreach($trip_categories as $trip_category): ?>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" name="trip_categories[]" type="checkbox" id="" value="<?php echo $trip_category["id"]; ?>">
                    <label class="form-check-label" for=""><?php echo $trip_category["title"]; ?></label>
                </div>
                <?php endforeach; ?>

            </div>

            <div class="mb-3">
                <label for="" class="form-label">Location</label>
                <select class="form-select" name="location" id="">
                    <?php foreach($locations as $location): ?>
                        <option value="<?php echo $location["id"]; ?>"><?php echo $location["title"]; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control ckeditor" name="description" id="description" rows="3"></textarea>
                <small>Enter Description</small>
            </div>

            <div class="mb-3">
              <label for="" class="form-label">Brochure</label>
              <input type="file" class="form-control" name="brochure" accept="application/pdf">
              <div id="fileHelpId" class="form-text">Select a brochure pdf</div>
            </div>

            <div class="mb-3">
              <label for="" class="form-label">Featured Image</label>
              <input type="file" class="form-control" name="featured_image" accept="image/*">
              <div id="fileHelpId" class="form-text">Select a featured image</div>
            </div>

            <div class="mb-3">
              <label for="" class="form-label">Banner Image</label>
              <input type="file" class="form-control" name="banner_image" accept="image/*">
              <div id="fileHelpId" class="form-text">Select a banner image</div>
            </div>


            <div class="mb-3">
              <label for="" class="form-label">Banner Image Mobile  / Touch</label>
              <input type="file" class="form-control" name="banner_image_touch" accept="image/*">
              <div id="fileHelpId" class="form-text">Select a banner image for touch</div>
            </div>


            <div class="mb-3">
              <label for="" class="form-label">Gallery Images</label>
              <input type="file" class="form-control" name="gallery_images[]" accept="image/*" multiple>
              <div id="fileHelpId" class="form-text">Select gallery Images</div>
            </div>

            <div class="mb-3">
                <label for="youtube_videos" class="form-label">YouTube Videos</label>
                <textarea class="form-control" name="youtube_videos" id="youtube_videos" rows="3"></textarea>
                <small>Enter YouTube video links separated by commas</small>
            </div>

            <div class="mb-3">
              <label for="dates" class="form-label">Dates</label>
              <input type="text"
                class="form-control" name="dates" id="dates" aria-describedby="helpId" placeholder="">
                <small id="helpId" class="form-text text-muted">Enter dates separated by commas</small>
            </div>
            <div class="mb-3">
              <label for="pickup_city" class="form-label">Pickup City</label>
              <input type="text"
                class="form-control" name="pickup_city" id="pickup_city" aria-describedby="helpId" placeholder="">
                <small id="helpId" class="form-text text-muted">Pickup City</small>
            </div>
            <div class="mb-3">
              <label for="drop_city" class="form-label">Drop City</label>
              <input type="text"
                class="form-control" name="drop_city" id="drop_city" aria-describedby="helpId" placeholder="">
                <small id="helpId" class="form-text text-muted">Drop City</small>
            </div>
            <div class="mb-3">
              <label for="price" class="form-label">Price</label>
              <input type="text"
                class="form-control" name="price" id="price" aria-describedby="helpId" placeholder="">
                <small id="helpId" class="form-text text-muted">Price</small>
            </div>
            <div class="mb-3">
              <label for="sale_price" class="form-label">Sale Price</label>
              <input type="text"
                class="form-control" name="sale_price" id="sale_price" aria-describedby="helpId" placeholder="">
                <small id="helpId" class="form-text text-muted">Sale Price</small>
            </div>
            <div class="mb-3">
              <label for="duration" class="form-label">Duration</label>
              <input type="text"
                class="form-control" name="duration" id="duration" aria-describedby="helpId" placeholder="">
                <small id="helpId" class="form-text text-muted">Duration</small>
            </div>

            <div class="mb-3">
                <label for="inclusion" class="form-label">Inclusion</label>
                <textarea class="form-control ckeditor" name="inclusion" id="inclusion" rows="3"></textarea>
                <small>Enter Inclusion</small>
            </div>

            <div class="mb-3">
                <label for="itinerary" class="form-label">Itinerary</label>
                <textarea class="form-control ckeditor" name="itinerary" id="itinerary" rows="3"></textarea>
                <small>Enter itinerary</small>
            </div>

            <div class="mb-3">
                <label for="exclusion" class="form-label">Exclusion</label>
                <textarea class="form-control ckeditor" name="exclusion" id="exclusion" rows="3"></textarea>
                <small>Enter exclusion</small>
            </div>

            <div class="mb-3">
                <label for="hotel_info" class="form-label">Hotel Info</label>
                <textarea class="form-control ckeditor" name="hotel_info" id="hotel_info" rows="3"></textarea>
                <small>Enter Hotel Info</small>
            </div>


            <button type="submit" class="btn btn-primary">Create</button>

        </form>

    </div>
    
</main>