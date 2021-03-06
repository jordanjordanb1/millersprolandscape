<?php
  $page = 'pool_installation';
  $page_name = 'Pool Installation';
  include_once('./includes/head.php');
?>

<style>
  .image-container a {
    position: relative;
    width: 20%;
    height: 15vw;
    overflow: hidden;
    margin: 10px 10px;
  }

  .image-container a img {
    position: absolute;
    width: 100%;
    min-height: 100%;
  }
</style>

<!-- section -->
<!-- ================ -->
<section>
  <div class="container">
    <div class="row paragraph">
      <div class="col-md-9">
        <h1 class="text-center g-pt-80">Pool Installation</h1>
        <div class="divider"></div>
        <p class="text-large">Millers now offers customized fiberglass pool installations. We believe that every customer has inspiration for the perfect pool for his or her backyard and we aim to get the job done right the first time with professional results. A certified pool technician will meet with the customer at the jobsite, and will help along every step of the process. From planning to construction, with plenty of time to explore options from our latham pool catalog. </p>
        <div class="clearfix g-mt-40"></div>
      </div>
      <!-- side bar start -->
      <?php include_once('./includes/side_bar.php'); ?>
      <!-- side bar end -->
    </div>
  </div>
  
  <div class="container-fluid g-mb-20">
    <div class="row">
        <div class="col-12">
            <h3 class="g-mt-40 text-center">Pool Installation</h3>
            <div class="divider"></div>
        </div>
    </div>

    <div class="row">
            <div class="col-12 d-flex justify-content-center flex-wrap image-container">
                <?php
                  $directory = 'static/assets/img/pool/';

                  $images = glob($directory . "*.*");

                  if (!is_array($images)) {
                    echo "No images";
                  } else {
                    for ($i = 1; $i < count($images); $i++) {
                      $num = $images[$i];

                      echo '
                        <a href="' . $num . '" data-lightbox="gallery" class="d-flex justify-content-center align-items-center" onclick="window.ga(\'send\', \'event\', \'Image - Millers Pools\', \'click\')">
                        <img loading="lazy" src="' . $num . '" class="img-fluid" alt="A picture of pool installation or pool work">
                        </a>
                      ';
                    }
                  }
                ?>
            </div>
    </div>
  </div>
</section>
<?php 
  $add_scripts = '<script defer src="js/lightbox.min.js"></script><script defer src="js/lightbox-plus-jquery.min.js"></script>';
  include_once('./includes/footer.php'); 
?>