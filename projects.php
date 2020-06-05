<?php
  $page = 'projects';
  $page_name = 'Projects';
  include_once('./includes/head.php');

  function getImages($directoryToLoad) {
    return glob($directoryToLoad . "*.*");
  }
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

<section id="main" class="p-4 greay">
  <div class="container-fluid">
    <h3 class="text-center g-mb-30 g-mt-40">Masonry Projects</h3>
    <div class="divider"></div>
    <div class="row g-mt-30">
      <div class="col-12 d-flex justify-content-center flex-wrap image-container">
        <?php
          $directory = 'static/assets/img/masonry/';
          $name = 'Masonry';

          $images = getImages($directory);

          if (!is_array($images)) {
            echo "No images";
          } else {
            for ($i = 1; $i < count($images); $i++) {
              $num = $images[$i];

              echo '
              <a href="' . $num . '" data-lightbox="gallery" id="images" class="d-flex justify-content-center align-items-center" onclick="window.ga(\'send\', \'event\', \''.$name.' - Image - Projects\', \'click\')">
                <img loading="lazy" src="' . $num . '" class="img-fluid" alt="' . $num . '">
              </a>
              ';
            }
          }
        ?>
      </div>
    </div>

    <h3 class="text-center g-mb-30 g-mt-40">Maintenance Projects</h3>
    <div class="divider"></div>

    <div class="row g-mt-30">
      <div class="col-12 d-flex justify-content-center flex-wrap image-container">
        <?php
          $directory = 'static/assets/img/maintenance/';
          $name = 'Maintenance';

          $images = getImages($directory);

          if (!is_array($images)) {
            echo "No images";
          } else {
            for ($i = 1; $i < count($images); $i++) {
              $num = $images[$i];

              echo '
              <a href="' . $num . '" data-lightbox="gallery" id="images" class="d-flex justify-content-center align-items-center" onclick="window.ga(\'send\', \'event\', \''.$name.' - Image - Projects\', \'click\')">
                <img loading="lazy" src="' . $num . '" class="img-fluid" alt="' . $num . '">
              </a>
              ';
            }
          }
        ?>
      </div>
    </div>

    <h3 class="text-center g-mt-40">Irrigation</h3>
    <div class="divider"></div>

    <div class="row g-mt-30">
      <div class="col-12 d-flex justify-content-center flex-wrap image-container">
        <?php
          $directory = 'static/assets/img/irrigation/';
          $name = 'Irrigation';

          $images = getImages($directory);

          if (!is_array($images)) {
            echo "No images";
          } else {
            for ($i = 1; $i < count($images); $i++) {
              $num = $images[$i];

              echo '
              <a href="' . $num . '" data-lightbox="gallery" id="images" class="d-flex justify-content-center align-items-center" onclick="window.ga(\'send\', \'event\', \''.$name.' - Image - Projects\', \'click\')">
                <img loading="lazy" src="' . $num . '" class="img-fluid" alt="' . $num . '">
              </a>
              ';
            }
          }
        ?>
      </div>
    </div>

    <h3 class="text-center g-mt-40">Lawn Care</h3>
    <div class="divider"></div>

    <div class="row g-mt-30">
      <div class="col-12 d-flex justify-content-center flex-wrap image-container">
        <?php
          $directory = 'static/assets/img/lawn_care/';
          $name = 'Lawn Care';

          $images = getImages($directory);

          if (!is_array($images)) {
            echo "No images";
          } else {
            for ($i = 1; $i < count($images); $i++) {
              $num = $images[$i];

              echo '
              <a href="' . $num . '" data-lightbox="gallery" id="images" class="d-flex justify-content-center align-items-center" onclick="window.ga(\'send\', \'event\', \''.$name.' - Image - Projects\', \'click\')">
                <img loading="lazy" src="' . $num . '" class="img-fluid" alt="' . $num . '">
              </a>
              ';
            }
          }
        ?>
      </div>
    </div>

    <h3 class="text-center g-mt-40">Tree Work</h3>
    <div class="divider"></div>

    <div class="row g-mt-30">
      <div class="col-12 d-flex justify-content-center flex-wrap image-container">
        <?php
          $directory = 'static/assets/img/tree_work/';
          $name = 'Tree Work';

          $images = getImages($directory);

          if (!is_array($images)) {
            echo "No images";
          } else {
            for ($i = 1; $i < count($images); $i++) {
              $num = $images[$i];

              echo '
              <a href="' . $num . '" data-lightbox="gallery" id="images" class="d-flex justify-content-center align-items-center" onclick="window.ga(\'send\', \'event\', \''.$name.' - Image - Projects\', \'click\')">
                <img loading="lazy" src="' . $num . '" class="img-fluid" alt="' . $num . '">
              </a>
              ';
            }
          }
        ?>
      </div>
    </div>
  </div>
  </div>
</section>

<?php
  $add_scripts = "<script defer src='js/lightbox.min.js'></script><script defer src='js/lightbox-plus-jquery.min.js'></script>";

  include_once('./includes/footer.php');
?>