<!DOCTYPE html>
<html lang="zxx">

  <head>
    <meta charset="utf-8">
    <title>hangocmy | portfolio</title>

    <?php //mobile responsive meta ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <?php //Plugins Needed for the Project ?>
    <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="plugins/slick/slick.css">
    <link rel="stylesheet" href="plugins/themify-icons/themify-icons.css">
    <link href="css/style.css" rel="stylesheet">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
  </head>

  <body>

    <?php 
      include "frame/header.php"
    ?>

    <section class="page-title bg-primary position-relative">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">
            <h1 class="text-body font-tertiary">Portfolio</h1>
          </div>
        </div>
      </div>
      <img src="images/illustrations/page-title.png" alt="illustrations" class="bg-shape-1 w-100">
      <img src="images/illustrations/leaf-pink-round.png" alt="illustrations" class="bg-shape-2">
      <img src="images/illustrations/dots-cyan.png" alt="illustrations" class="bg-shape-3">
      <img src="images/illustrations/leaf-orange.png" alt="illustrations" class="bg-shape-4">
      <img src="images/illustrations/dots-group-cyan.png" alt="illustrations" class="bg-shape-6">
    </section>

    <?php //portfolio ?>
    <section class="section">
      <div class="container">
        <div class="row mb-4">
          <div class="col-3"></div>
          <div class="col-6">
            <div class="btn-group btn-group-toggle justify-content-center d-flex" data-toggle="buttons">
              <label class="btn btn-sm btn-primary active" style="padding: 10px 20px; font-size: 12px">
                <input type="radio" name="shuffle-filter" value="all" checked="checked">All
              </label>
              <label class="btn btn-sm btn-primary" style="padding: 10px 20px; font-size: 12px">
                <input type="radio" name="shuffle-filter" value="design">UI/UX Design
              </label>
              <label class="btn btn-sm btn-primary" style="padding: 10px 20px; font-size: 12px">
                <input type="radio" name="shuffle-filter" value="branding">Web App
              </label>
              <label class="btn btn-sm btn-primary" style="padding: 10px 20px; font-size: 12px">
                <input type="radio" name="shuffle-filter" value="illustration">Web Design
              </label>
            </div>
          </div>
          <div class="col-3"></div>
        </div>

        <?php //CV ?>
        <div class="row shuffle-wrapper">
          <div class="col-lg-4 col-6 mb-4 shuffle-item" data-groups="[&quot;design&quot;,&quot;illustration&quot;]">
            <div class="position-relative rounded hover-wrapper">
              <img src="images/portfolio/item-1.png" alt="portfolio-image" class="img-fluid rounded w-100 d-block">
              <div class="hover-overlay">
                <div class="hover-content">
                  <a class="btn btn-light btn-sm" href="https://hangocmy.github.io/cv-competition/" target="_blank">Create CV</a>
                </div>
              </div>
            </div>
          </div>

          <?php //CV CoffeeSpace ?>
          <div class="col-lg-4 col-6 mb-4 shuffle-item" data-groups="[&quot;branding&quot;]">
            <div class="position-relative rounded hover-wrapper">
              <img src="images/portfolio/item-2.png" alt="portfolio-image" class="img-fluid rounded w-100 d-block">
              <div class="hover-overlay">
                <div class="hover-content">
                  <a class="btn btn-light btn-sm" href="https://coffeespace.000webhostapp.com" target="_blank">CoffeeSpace Web</a>
                </div>
              </div>
            </div>
          </div>

          <?php //TMOT Recruitment ?>
          <div class="col-lg-4 col-6 mb-4 shuffle-item" data-groups="[&quot;illustration&quot;]">
            <div class="position-relative rounded hover-wrapper">
              <img src="images/portfolio/item-3.png" alt="portfolio-image" class="img-fluid rounded w-100 d-block">
              <div class="hover-overlay">
                <div class="hover-content">
                  <a class="btn btn-light btn-sm" href="https://tmot-recruitment.000webhostapp.com/" target="_blank">TMOT Recruitment</a>
                </div>
              </div>
            </div>
          </div>

          <?php //Wireframe UIUX ?>
          <div class="col-lg-4 col-6 mb-4 shuffle-item" data-groups="[&quot;design&quot;,&quot;branding&quot;]">
            <div class="position-relative rounded hover-wrapper">
              <img src="images/portfolio/item-6.png" alt="portfolio-image" class="img-fluid rounded w-100 d-block">
              <div class="hover-overlay">
                <div class="hover-content">
                  <a class="btn btn-light btn-sm" href="https://www.figma.com/file/9fdERNg3Md9tvAexCSlCCZ/Wireframe_MATRestaurant?node-id=0%3A1" target="_blank">Wireframe Restaurant</a>
                </div>
              </div>
            </div>
          </div>

          <?php //TMOT Thousand Ideas ?>
          <div class="col-lg-4 col-6 mb-4 shuffle-item" data-groups="[&quot;illustration&quot;]">
            <div class="position-relative rounded hover-wrapper">
              <img src="images/portfolio/item-8.png" alt="portfolio-image" class="img-fluid rounded w-100 d-block">
              <div class="hover-overlay">
                <div class="hover-content">
                  <a class="btn btn-light btn-sm" href="https://thousandideastmot.web.app/" target="_blank">TMOT Unbind The Brains</a>
                </div>
              </div>
            </div>
          </div>

          <?php //Portfolio?>
          <div class="col-lg-4 col-6 mb-4 shuffle-item" data-groups="[&quot;design&quot;]">
            <div class="position-relative rounded hover-wrapper">
              <img src="images/portfolio/item-5.png" alt="portfolio-image" class="img-fluid rounded w-100 d-block">
              <div class="hover-overlay">
                <div class="hover-content">
                  <a class="btn btn-light btn-sm" href="https://hangocmy.herokuapp.com/" target="_blank">Portfolio</a>
                </div>
              </div>
            </div>
          </div>

          <?php //Web Store App?>
          <div class="col-lg-4 col-6 mb-4 shuffle-item" data-groups="[&quot;branding&quot;]">
            <div class="position-relative rounded hover-wrapper">
              <img src="images/portfolio/item-1.png" alt="portfolio-image" class="img-fluid rounded w-100 d-block">
              <div class="hover-overlay">
                <div class="hover-content">
                  <a class="btn btn-light btn-sm" href="https://tandmstoreapp.000webhostapp.com/" target="_blank">AndroidStore Web</a>
                </div>
              </div>
            </div>
          </div>

          <?php //UI/UX?>
          <div class="col-lg-4 col-6 mb-4 shuffle-item" data-groups="[&quot;design&quot;,&quot;illustration&quot;,&quot;branding&quot;]">
            <div class="position-relative rounded hover-wrapper">
              <img src="images/portfolio/item-3.png" alt="portfolio-image" class="img-fluid rounded w-100 d-block">
              <div class="hover-overlay">
                <div class="hover-content">
                  <a class="btn btn-light btn-sm" href="https://www.figma.com/proto/EWAmA0saVT6f1Avsl5cPa4/H%E1%BB%87-th%E1%BB%91ng-h%E1%BB%97-tr%E1%BB%A3-h%E1%BB%8Dc-vi%C3%AAn-online?page-id=0%3A1&node-id=11%3A1730&viewport=326%2C167%2C0.08043020963668823&scaling=min-zoom" target="_blank">OnlineClass Prototype</a>
                </div>
              </div>
            </div>
          </div>

          <?php //Thousand Ideas?>
          <div class="col-lg-4 col-6 mb-4 shuffle-item illustration" data-groups="[&quot;illustration&quot;]">
            <div class="position-relative rounded hover-wrapper">
              <img src="images/portfolio/item-7.png" alt="portfolio-image" class="img-fluid rounded w-100 d-block">
              <div class="hover-overlay">
                <div class="hover-content">
                  <a class="btn btn-light btn-sm" href="https://thousandideastmot.web.app/index.html" target="_blank">TMOT Web</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php 
      include "frame/footer.php"
    ?>

    <script src="plugins/jQuery/jquery.min.js"></script>
    <script src="plugins/bootstrap/bootstrap.min.js"></script>
    <script src="plugins/slick/slick.min.js"></script>
    <script src="plugins/shuffle/shuffle.min.js"></script>
    <script src="js/script.js"></script>

  </body>
</html>