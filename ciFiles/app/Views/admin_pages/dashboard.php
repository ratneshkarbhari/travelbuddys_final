<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">

    <h1 class="page-title d-block"><?php echo $title; ?></h1>

    

  </div>

  <div class="container">

    <p class="text-success"> <?php if(isset($_GET["success_message"])){
        echo $_GET["success_message"];
    } ?></p>
    <div class="row">

      <div class="col-lg-3 col-md-6 col-sm-12">

        <a href="<?php echo site_url("manage/trip-categories") ?>">
          <div class="card">
            <div class="card-body">
              <h5>Trip Categories</h5>
            </div>
          </div>
        </a>

      </div>
      <div class="col-lg-3 col-md-6 col-sm-12">

        <a href="<?php echo site_url("manage/trips") ?>">
          <div class="card">
            <div class="card-body">
              <h5>Trips</h5>
            </div>
          </div>
        </a>

      </div>
      <div class="col-lg-3 col-md-6 col-sm-12">

        <a href="<?php echo site_url("manage/locations") ?>">
          <div class="card">
            <div class="card-body">
              <h5>Locations</h5>
            </div>
          </div>
        </a>

      </div>
      <div class="col-lg-3 col-md-6 col-sm-12">

        <a href="<?php echo site_url("manage/leads") ?>">
          <div class="card">
            <div class="card-body">
              <h5>Leads</h5>
            </div>
          </div>
        </a>

      </div>

    </div>
  </div>

</main>