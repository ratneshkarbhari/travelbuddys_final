<title>Login | TravelBuddys</title>
<link rel="stylesheet" href="<?php echo site_url("assets/css/styles.min.css"); ?>">
<main class="page-content" id="login">

    <div class="container" id="loginBox" style="margin-top: 2em;">

        <div class="row">
            <div class="col-lg-4 col-md-2 col-sm-12"></div>
            <div class="col-lg-4 col-md-8 col-sm-12">

                <h1 class="page-title text-center"><img class="w-100" src="<?php echo site_url("assets/images/tblogo.png"); ?>"></h1>
                <p id="errorMessage" class="text-danger text-center">  
                    <?php 
                    if (isset($_GET["error"])) {
                        echo $_GET["error"];
                    }
                    
                    ?> 
                </p>
                <p class="text-success text-center">
                    <?php
                        if (isset($_GET["success"])) {
                            echo $_GET["success"];
                        }
                    ?>
                </p>

                <?php echo form_open(site_url("authenticate")); ?>
                                  
                    <div class="mb-3">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" id="email" value="">
                    </div>
                    <div class="mb-3">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" id="password" value="">
                    </div>
                    <button type="submit" class="btn btn-success w-100">Login</button>

                <?php echo form_close(); ?>

                

            </div>
            <div class="col-lg-4 col-md-2 col-sm-12"></div>
        </div>

    </div>

</main>
<script src="<?php echo site_url("assets/js/scripts.min.js"); ?>"></script>