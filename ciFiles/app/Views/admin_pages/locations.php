<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4" style="margin-top: 2em;">

    <div class="container-fluid">

        <h1 class="page-title"><?php echo $title; ?></h1>

        <p class="text-danger"><?php if (isset($_GET["error_message"])) {
            echo $_GET["error_message"];
        } ?></p>


        <p class="text-success"><?php if (isset($_GET["success_message"])) {
            echo $_GET["success_message"];
        } ?></p>


        <a href="<?php  echo site_url('add/locations'); ?>" class="btn btn-primary">Add New</a>
        
        <?php
        if(empty($locations)): ?>
        <h3 style="margin-top: 1em;">No Locations  added</h3>
        
        <?php else: ?>

        <table class="table">
            <thead>
              <tr>
                <th scope="col">Title</th>
                <th scope="col">Slug</th>
                <th scope="col">Featured Image</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>

                <?php
                    if(isset($locations)):
                    foreach($locations as $location):
                ?>
                 
                    <tr>
          
                        <td><?php echo $location["title"]; ?></td>
                        <td><?php echo $location["slug"]; ?></td>
                        <th scope="col">
                            <img src="<?php  echo site_url('assets/images/locations/'.$location["featured_image"]); ?>" style="width: 30px;">
                        </th>
                        <td>

                            <a href="<?php  echo site_url('/edit/location/'.$location["slug"]) ?>" class="btn btn-info">Edit</a>

                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#<?php echo $location["slug"] ?>">
                                Delete
                            </button>
                            
                            <!-- Modal -->
                            <div class="modal fade" id="<?php echo $location["slug"] ?>" tabindex="-1" aria-labelledby="<?php echo $location["slug"] ?>Label" aria-hidden="true">
                                <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="{{ $location->slug }}Label">
                                        Confirm Deletion?                                    
                                    </h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Are you sure you want to delete this Trip Category?</p>
                                    <?php echo form_open(site_url("delete/trip-categories")); ?>
                                        <input type="hidden" name="tcid" value="<?php echo $location["id"] ?>">
                                    </div>
                                    <div class="modal-footer">
                                    <button type="submit" class="btn btn-danger">Confirm </button>
                                    <?php echo form_close(); ?>
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                                </div>
                            </div>

                        </td>
                    
                    </tr>
                <?php endforeach; endif; ?>
              


                
            </tbody>
        </table>



        <?php endif; ?>


        

        


    </div>
    
</main>