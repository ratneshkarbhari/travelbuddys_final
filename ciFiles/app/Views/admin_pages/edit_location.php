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
       
        <a href="<?php echo site_url('manage/locations'); ?>" class="btn btn-primary">Back to Locations</a>

        <form enctype="multipart/form-data" action="<?php echo site_url('locations/update'); ?>" method="post">

            <input type="hidden" name="location_id" value="<?php echo $location["id"]; ?>">

            <div class="mb-3">
              <label for="title" class="form-label">Title</label>
              <input type="text"
                class="form-control" name="title" id="title" aria-describedby="helpId" value="<?php echo $location["title"]; ?>">
                <small id="helpId" class="form-text text-muted">Public Name of the trip Category</small>
            </div>

            <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text"
                class="form-control" name="slug" id="slug" aria-describedby="helpId" value="<?php echo $location["slug"]; ?>">
                <small id="helpId" class="form-text text-muted">Unique identifier used as a public Id in urls</small>
            </div>

            <div class="mb-3">
              <label for="description" class="form-label">Description</label>
              <textarea class="form-control ckeditor" name="description" id="description" rows="3"><?php echo $location["description"]; ?></textarea>
            </div>

            <img src="<?php echo site_url("assets/images/locations/".$location["featured_image"]); ?>" style="width: 30px; height: 30px;">

            <div class="mb-3">
              <label for="" class="form-label">Featured Image</label>
              <input type="file" class="form-control" name="featured_image" accept="image/*" id="featured_image" aria-describedby="fileHelpId">
              <div id="fileHelpId" class="form-text">Select a featured Image to appear throughout the website</div>
            </div>

            <img src="<?php echo site_url("assets/images/locations/".$location["thumbnail"]); ?>" style="width: 30px; height: 30px;">

            <div class="mb-3">
                <label for="" class="form-label">Thumbnail Image</label>
                <input type="file" class="form-control" name="thumbnail_image" accept="image/*" id="thumbnail_image" aria-describedby="fileHelpId">
                <div id="fileHelpId" class="form-text">Select a thumbnail Image to appear on mobile</div>
            </div>

            <img src="<?php echo site_url("assets/images/locations/".$location["banner_image"]); ?>" style="width: 30px; height: 30px;">


            <div class="mb-3">
              <label for="" class="form-label">Banner Image</label>
              <input type="file" class="form-control" name="banner_image" accept="image/*" id="banner_image" aria-describedby="fileHelpId">
              <div id="fileHelpId" class="form-text">Select a banner Image to appear on location page</div>
            </div>


            <button type="submit" class="btn btn-primary">Update</button>

        </form>

    </div>
    
</main>