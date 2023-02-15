<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4" style="margin-top: 2em;">
    <div class="container-fluid">
        <h1 class="page-title"><?php echo $title; ?></h1>
        <p class="text-danger"><?php if (isset($_GET["error_message"])) {
            echo $_GET["error_message"];
        } ?></p>
        <p class="text-success"> <?php if (isset($_GET["success_message"])) {
            echo $_GET["success_message"];
        } ?> </p> <a href="<?php echo site_url("create/testimonials") ?>" class="btn btn-primary">Add New</a> <?php if(empty($testimonials)): ?> 
        <h3 style="margin-top: 1em;">No testimonials added</h3>
        <?php else: ?>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Text</th>
                    <th scope="col">Stars</th>
                    <th scope="col">Thumbnail</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody> 
                <?php if(isset($testimonials)): foreach ($testimonials as $testimonial): ?> <tr>
                    <td><?php echo $testimonial["title"] ?></td>
                    <td><?php echo $testimonial["text"]; ?></td>
                    <td><?php echo $testimonial["stars"]; ?></td>

                    <th scope="col"> <img src="<?php echo site_url('assets/images/testimonials/'.$testimonial["thumbnail"]) ?>" style="width: 30px;"> </th>
                    <td>  <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete-<?php echo $testimonial["id"]; ?>"> Delete </button> <!-- Modal -->
                        <div class="modal fade" id="delete-<?php echo  $testimonial["id"]; ?>" tabindex="-1" aria-labelledby="<?php echo  $testimonial["id"];  ?>Label" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="<?php echo  $testimonial["id"];  ?>Label"> Confirm Deletion? </h1> <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Are you sure you want to delete this Trip Category?</p>
                                        <form action="<?php echo site_url("testimonials/delete") ?>" method="post"> <input type="hidden" name="testimonial_id" value="<?php echo  $testimonial["id"];  ?>">
                                    </div>
                                    <div class="modal-footer"> <button type="submit" class="btn btn-danger">Confirm </button> </form> <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr> <?php endforeach; endif; ?> </tbody>
        </table> <?php endif; ?>
    </div>
</main>