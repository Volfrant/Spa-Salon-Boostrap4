<?php 
$title = 'About Us';
include 'templates/header.php';
include 'templates/navigation.php';
?>

<div class="container">
  <div class="row no-gutters">
    <div class="col-12 hero">
      <img src="img/about_us.jpg" class="img-fluid">
      <h2 class="text-uppercase d-none d-md-block">About Us</h2>
    </div>
  </div>
</div>

<div class="container py-4">
  <div class="row">
    <main class="col-lg-8 main-content">
      <h2 class=" text-uppercase text-center d-block d-md-none">About Us</h2>
      <p>It is a long established fact that a reader will be distracted
      by the readable content of a page when 
      looking at its layout. The point of 
      using Lorem Ipsum is that it has a more-or-less 
      normal distribution of letters, as opposed to using 
      'Content here, content here', making it look like 
      readable English. Many desktop publishing packages and 
      web page editors now use. </p>
      <p>It is a long established fact that a reader will be distracted
      by the readable content of a page when 
      looking at its layout. The point of 
      using Lorem Ipsum is that it has a more-or-less 
      normal distribution of letters, as opposed to using 
      'Content here, content here', making it look like 
      readable English. Many desktop publishing packages and 
      web page editors now use.Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites 
      still in their infancy.</p>

      <div class="facilities-gallery">
      <h3 class="text-center text-uppercase p-4"><span class="text-lowercase">Checkout our</span>Facilities</h3>
        <a href="" data-target="#image_1" data-toggle="modal">
          <img src="img/gallery_thumb_01.jpg" class="rounded">
        </a>
        <a href="" data-target="#image_2" data-toggle="modal">
          <img src="img/gallery_thumb_02.jpg" class="rounded">
        </a>
        <a href="" data-target="#image_3" data-toggle="modal">
          <img src="img/gallery_thumb_03.jpg" class="rounded">
        </a>
        <div class="modal fade" id="image_1" tabindex="-1" role="dialog" aria-labelledby="image_1" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-body">
                <img src="img/gallery_large_01.jpg" class="img-fluid">
              </div>
            </div>
          </div>
        </div>
        <div class="modal fade" id="image_2" tabindex="-1" role="dialog" aria-labelledby="image_2" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-body">
                <img src="img/gallery_large_02.jpg" class="img-fluid">
              </div>
            </div>
          </div>
        </div>
        <div class="modal fade" id="image_3" tabindex="-1" role="dialog" aria-labelledby="image_3" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-body">
                <img src="img/gallery_large_03.jpg" class="img-fluid">
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <aside class="col-lg-4 pt-4 pt-lg-0">
      <div class="sidebar hours p-3">
        <?php include 'templates\business_hours.php'; ?>
      </div>
    </aside>
  </div>
</div>

<?php include 'templates\footer.php'; ?>