<!DOCTYPE html>
<html lang="zxx">

  <head>
    <meta charset="utf-8">
    <title>hangocmy | blog</title>

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
            <h1 class="text-body font-tertiary">Blogs</h1>
          </div>
        </div>
      </div>
      <img src="images/illustrations/page-title.png" alt="illustrations" class="bg-shape-1 w-100">
      <img src="images/illustrations/leaf-pink-round.png" alt="illustrations" class="bg-shape-2">
      <img src="images/illustrations/dots-cyan.png" alt="illustrations" class="bg-shape-3">
      <img src="images/illustrations/leaf-orange.png" alt="illustrations" class="bg-shape-4">
      <img src="images/illustrations/dots-group-cyan.png" alt="illustrations" class="bg-shape-6">
    </section>

    <section class="section">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">
            <h2 class="section-title">Blogs</h2>
          </div>

          <?php //Blog 1 ?>
          <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
            <article class="card shadow">
              <img class="rounded card-img-top" src="images/blog/post-1.gif" alt="post-thumb">
              <div class="card-body">
                <h4 class="card-title"><a class="text-dark" href="blog-single.php">5 Tips for Improving Your Web Development Skills</a>
                </h4>
                <p class="cars-text">
                  Web development is a fast-changing industry.
                  As a developer, there is no excuse for slacking off.
                  You have to constantly learn and improve your skills if you want to stay on top of the industry trends and ahead of the game.
                </p>
                <a href="blog-single.php" class="btn btn-xs btn-primary">Read More</a>
              </div>
            </article>
          </div>

          <?php //Blog 2 ?>
          <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
            <article class="card shadow">
              <img class="rounded card-img-top" src="images/blog/post-2.gif" alt="post-thumb">
              <div class="card-body">
                <h4 class="card-title"><a class="text-dark" href="blog-single-2.php">Why can you do right now to save the earth?</a>
                </h4>
                <p class="cars-text">
                  Can the Earth Be Saved?
                  The answer is 'yes,' with some big 'if's. Here are 3 things we must do.
                  We don’t have to accept a fate of gloom and doom.
                  This is a hopeful wake-up call, but only if we act with great urgency.
                </p>
                <a href="blog-single-2.php" class="btn btn-xs btn-primary">Read More</a>
              </div>
            </article>
          </div>

          <?php //Blog 3 ?>
          <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
            <article class="card shadow">
              <img class="rounded card-img-top" src="images/blog/post-3.gif" alt="post-thumb">
              <div class="card-body">
                <h4 class="card-title"><a class="text-dark" href="blog-single-3.php">9 Simple Tips for a Smoother Trip</a>
                </h4>
                <p class="cars-text">
                  Travel is full of major decisions — like which country to visit, how much to spend and finally make that all-important airfare purchase. But beyond the big picture, it’s the little things that can make a trip easier and less stressful.
              </p>
                <a href="blog-single-3.php" class="btn btn-xs btn-primary">Read More</a>
              </div>
            </article>
          </div>
        </div>
      </div>
    </section>

    <?php include "frame/footer.php"?>

    <script src="plugins/jQuery/jquery.min.js"></script>
    <script src="plugins/bootstrap/bootstrap.min.js"></script>
    <script src="plugins/slick/slick.min.js"></script>
    <script src="plugins/shuffle/shuffle.min.js"></script>
    <script src="js/script.js"></script>

  </body>
</html>