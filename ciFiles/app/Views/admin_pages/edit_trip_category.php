<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 page-content" style="margin-top: 2em;">

    <div class="container-fluid">

        <h1 class="page-title"><?php echo $title; ?></h1>

        <p class="text-danger">

            <?php
                if(isset($error_message)){
                    echo $error_message;
                }
            ?>

        </p>

        <p class="text-success">
            <?php
                if(isset($success_message)){
                    echo $success_message;
                }
            ?>
        </p>

       
        <a href="<?php echo site_url("manage-trip-categories") ?>" class="btn btn-primary">Back to Trip Categories</a>

        <br><br>

            <?php echo form_open_multipart(site_url("update/trip-category")); ?>


            <input type="hidden" name="trip_category_id" value="<?php echo $trip_category["id"]; ?>">

            <div class="mb-3">
              <label for="title" class="form-label">Title</label>
              <input type="text"
                class="form-control" name="title" id="title" aria-describedby="helpId" value="<?php echo $trip_category["title"]; ?>">
                <small id="helpId" class="form-text text-muted">Public Name of the trip category</small>
            </div>

            <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" value="<?php echo $trip_category["slug"]; ?>"
                class="form-control" name="slug" id="slug" aria-describedby="helpId" placeholder="">
                <small id="helpId" class="form-text text-muted">Unique identifier used as a public Id in urls</small>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" name="description" id="description" rows="3"><?php echo $trip_category["description"]; ?></textarea>
                <small>Enter Description</small>
            </div>

            <img src="<?php echo site_url("assets/images/trip_categories/".$trip_category["featured_image"]); ?>" style="width: 30px; height: 30px;">

            <div class="mb-3">
              <label for="" class="form-label">Featured Image</label>
              <input type="file" class="form-control" name="featured_image" accept="image/*">
              <div id="fileHelpId" class="form-text">Select a featured image</div>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>

        </form>

    </div>
    
</main>