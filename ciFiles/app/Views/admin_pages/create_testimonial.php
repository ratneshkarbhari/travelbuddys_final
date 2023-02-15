<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 page-content" style="margin-top: 2em;">

    <div class="container-fluid">

        <h1 class="page-title"><?php echo $title; ?></h1>

        <p class="text-danger"><?php
        if(isset($_GET["error_message"])){
            echo $_GET["error_message"];
        }
        ?></p>

        <p class="text-success">
        <?php
        if(isset($_GET["success_message"])){
            echo $_GET["success_message"];
        }
        ?>
        </p>
       
        <a href="<?php echo site_url('manage/testimonials'); ?>" class="btn btn-primary">Back to Testimonials</a>

        <form enctype="multipart/form-data" action="<?php echo site_url('create/testimonials'); ?>" method="post">


            <div class="mb-3">
              <label for="title" class="form-label">Title / Name</label>
              <input type="text"
                class="form-control" name="title" id="title" aria-describedby="helpId" placeholder="">
                <small id="helpId" class="form-text text-muted">Testimonial Title / Name for your reference</small>
            </div>


            <div class="mb-3">
              <label for="text" class="form-label">Testimonial Text</label>
              <textarea class="form-control" name="text" id="text" rows="3"></textarea>
            </div>

            <div class="mb-3">
              <label for="" class="form-label">Image</label>
              <input type="file" class="form-control" name="thumbnail" accept="image/*" id="thumbnail" aria-describedby="fileHelpId">
              <div id="fileHelpId" class="form-text">Select a thumbnail Image to appear throughout the website</div>
            </div>

            <div class="mb-3">
            <label for="youtube_video_link" class="form-label">Youtube Video Link</label>
            <input type="text"
                class="form-control" name="youtube_video_link" id="youtube_video_link" aria-describedby="helpId" placeholder="">
                <small id="helpId" class="form-text text-muted">Link of testimonial youtube video</small>
            </div>
  
            <div class="mb-3">
              <label for="title" class="form-label">Stars</label>
              <input type="number"
                class="form-control" name="stars" id="stars" aria-describedby="helpId" min="1" max="5">
            </div>



            <button type="submit" class="btn btn-primary">Create</button>

        </form>

    </div>
    
</main>