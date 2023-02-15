<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4" style="margin-top: 2em;">

    <div class="container-fluid">

        <h1 class="page-title"><?php echo $title; ?></h1>

        <p class="text-danger"><?php if(isset($_GET["error_message"])){
            echo $_GET["error_message"];
        } ?></p>

<p class="text-success"><?php if(isset($_GET["success_message"])){
            echo $_GET["success_message"];
        } ?></p>


        <?php if(empty($leads)): ?>

        <h3 style="margin-top: 1em;">No Trip Categories  added</h3>
        
        <?php else: ?>

        <table class="table">
            <thead>
              <tr>
                <th scope="col">Name</th>
                <th scope="col">Phone</th>
                <th scope="col">Email</th>
                <th scope="col">Date</th>
                <th scope="col">Destination</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>

                
                <?php 
                if ($leads):
                foreach ($leads as $lead):
                    ?>
                    <tr>
          
                        <td><?php echo $lead["name"]; ?></td>
                        <td><?php echo $lead["phone"]; ?></td>
                        <td><?php echo $lead["email"]; ?></td>
                        <td><?php echo $lead["date"]; ?></td>
                        <td><?php echo $lead["destination"]; ?></td>
                        <td>

                          
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#lead-<?php echo $lead["id"]; ?>">
                                Delete
                            </button>
                            
                            <!-- Modal -->
                            <div class="modal fade" id="lead-<?php echo $lead["id"]; ?>" tabindex="-1" aria-labelledby="lead-<?php echo $lead["id"]; ?>Label" aria-hidden="true">
                                <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="lead-<?php echo $lead["id"]; ?>Label">
                                        Confirm Deletion?                                    
                                    </h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Are you sure you want to delete this Lead?</p>
                                    <form action="<?php echo site_url("leads/delete") ?>" method="post">
                                        <input type="hidden" name="lead_id" value="<?php echo $lead["id"]; ?>">
                                    </div>
                                    <div class="modal-footer">
                                    <button type="submit" class="btn btn-danger">Confirm </button>
                                    </form>
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