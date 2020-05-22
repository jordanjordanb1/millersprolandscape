<?php
$page = 'projects';
$page_name = 'Projects';
require('./includes/head.php');

function getImages($directoryToLoad) {
    return glob($directoryToLoad . "*.{[jJ][pP][gG],[pP][nN][gG],[gG][iI][fF]}", GLOB_BRACE);
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
        $directory = 'img/masonry/';

        $images = getImages($directory);

        if (!is_array($images)) {
          echo "No images";
        } else {
          for ($i = 1; $i < count($images); $i++) {
            $num = $images[$i];

            echo '
            <a href="' . $num . '" data-lightbox="gallery" id="images" class="d-flex justify-content-center align-items-center">
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
        $directory = 'img/maintenance/';

        $images = getImages($directory);

        if (!is_array($images)) {
          echo "No images";
        } else {
          for ($i = 1; $i < count($images); $i++) {
            $num = $images[$i];

            echo '
            <a href="' . $num . '" data-lightbox="gallery" id="images" class="d-flex justify-content-center align-items-center">
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
        $directory = 'img/irrigation/';

        $images = getImages($directory);

        if (!is_array($images)) {
          echo "No images";
        } else {
          for ($i = 1; $i < count($images); $i++) {
            $num = $images[$i];

            echo '
            <a href="' . $num . '" data-lightbox="gallery" id="images" class="d-flex justify-content-center align-items-center">
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
        $directory = 'img/lawn_care/';

        $images = getImages($directory);

        if (!is_array($images)) {
          echo "No images";
        } else {
          for ($i = 1; $i < count($images); $i++) {
            $num = $images[$i];

            echo '
            <a href="' . $num . '" data-lightbox="gallery" id="images" class="d-flex justify-content-center align-items-center">
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
        $directory = 'img/tree_work/';

        $images = getImages($directory);

        if (!is_array($images)) {
          echo "No images";
        } else {
          for ($i = 1; $i < count($images); $i++) {
            $num = $images[$i];

            echo '
            <a href="' . $num . '" data-lightbox="gallery" id="images" class="d-flex justify-content-center align-items-center">
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
$add_scripts = "<script async src='js/lightbox.min.js'></script><script async src='js/lightbox-plus-jquery.min.js'></script>
<script>var el=document.getElementById('images');el.addEventListener('click',function(){ga.send('send','event','Image clicked - Projects','click');})
</script>";

include('./includes/footer.php');
?>