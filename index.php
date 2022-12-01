<!DOCTYPE html>
<html lang="zxx">
  <head>
    <meta charset="utf-8">
    <title>h a n g o c m y</title>

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

    <section class="page-title-alt bg-primary position-relative">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 mx-auto">
            <h2 class="text-body font-tertiary"> Hi! I’m<br>Ha Ngoc My<br>Bachelor Of <br>Software Engineering</h2>
          </div>
        </div>
      </div>
      <img src="images/illustrations/leaf-bg-top.png" alt="illustrations" class="bg-shape-1 w-100">
      <img src="images/illustrations/dots-group-sm.png" alt="illustrations" class="bg-shape-2">
      <img src="images/illustrations/leaf-orange.png" alt="illustrations" class="bg-shape-4">
      <img src="images/illustrations/dots-group-cyan.png" alt="illustrations" class="bg-shape-5">
      
    </section>

    <?php //about ?>
    <section class="section pt-5">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <blockquote style="
              font-size: 0.8rem;
              line-height: 0.7rem;
              font-weight: 500;
              color: white;
              background-color: #5f9d51">
              - Never stop creating new ideas -
            </blockquote>
            <p>I'm a Bachelor of Software Engineering.
              I’m currently learning everything about:
              <br>📑 Web design, Web front-end.
              <br>📑 Software Testing: manual & automation testing:
              <br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp🔖 Test automation framework: Cypress, Playwright, Selenium.
              <br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp🔖 API testing tool: Postman.
              <br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp🔖 Performance Testing: JMeter, etc...
              <br>
              <br>As a result of my love towards web application, I began setting up this website.
              In the future, I will learn more technologies.
            </p>
            <p>
              During my projects, I worked as a Team leader as well as a Team player, and by doing so,
              I ensured the proper completion of work by team members.
            </p>
            <p>
              My goal is to build a successful career as a Automation Tester.
              This is all about me.
            </p>
            
            <blockquote style="font-size: 0.9rem; border-radius: 10px; font-weight: bold;">My favourite quote: "To be beautiful means to be yourself"</blockquote>

          </div>
          <div class="col-md-4 text-center drag-lg-top">
            <div class="shadow-down mb-4">
              <img src="images/about/hangocmy.jpg" alt="author" class="img-fluid w-100 rounded-lg border-thick border-white">
            </div>
            <img src="images/about/signature.png" alt="signature" class="img-fluid">
            <h4>Ha Ngoc My</h4>
          </div>
        </div>
      </div>
    </section>

    <?php //team ?>
    <section class="section bg-cover" data-background="images/backgrounds/team-bg.png">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">
            <h2 class="section-title text-dark">H O B B Y</h2>
          </div>
          <div class="col-md-4 col-sm-6 mb-4 mb-md-0">
            <div class="card text-center">
              <img src="images/team/member-1.png" class="card-img-top">
              <div class="card-body">
                <h4 class="card-title">Ha Ngoc My</h4>
                <p class="text-light font-secondary">Swimming, Badminton</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 mb-4 mb-md-0">
            <div class="card text-center">
              <img src="images/team/member-2.png" class="card-img-top">
              <div class="card-body">
                <h4 class="card-title">Ha Ngoc My</h4>
                <p class="text-light font-secondary">Cooking</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 mb-4 mb-md-0">
            <div class="card text-center">
              <img src="images/team/member-3.png" class="card-img-top">
              <div class="card-body">
                <h4 class="card-title">Ha Ngoc My</h4>
                <p class="text-light font-secondary">Photography, Reading, Music</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php //SKILLS ?>
    <section class="section">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-title text-dark">Skills</h2>
          </div>
          <div class="col-lg-2 col-sm-6 mb-4 mb-lg-0">
            <div class="card shadow text-center">
              <div class="position-relative rounded-top progress-wrapper" data-color="#fdb157">
                <div class="wave" data-progress="80%"></div>
              </div>
              <div class="card-footer bg-white">
                <h5 class="card-title">Automation Testing</h5>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-sm-6 mb-4 mb-lg-0">
            <div class="card shadow text-center">
              <div class="position-relative rounded-top progress-wrapper" data-color="#9473e6">
                <div class="wave" data-progress="100%"></div>
              </div>
              <div class="card-footer bg-white">
                <h5 class="card-title">Manual Testing</h5>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-sm-6 mb-4 mb-lg-0">
            <div class="card shadow text-center">
              <div class="position-relative rounded-top progress-wrapper" data-color="#bdecf6">
                <div class="wave" data-progress="75%"></div>
              </div>
              <div class="card-footer bg-white">
                <h5 class="card-title">Web Front-end</h5>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-sm-6 mb-4 mb-lg-0">
            <div class="card shadow text-center">
              <div class="position-relative rounded-top progress-wrapper" data-color="#F7C8EE">
                <div class="wave" data-progress="85%"></div>
              </div>
              <div class="card-footer bg-white">
                <h5 class="card-title">Presentation & Teamwork</h5>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-sm-6 mb-4 mb-lg-0">
            <div class="card shadow text-center">
              <div class="position-relative rounded-top progress-wrapper" data-color="#7CD4BB">
                <div class="wave" data-progress="95%"></div>
              </div>
              <div class="card-footer bg-white">
                <h5 class="card-title">Office Information</h5>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-sm-6 mb-4 mb-lg-0">
            <div class="card shadow text-center">
              <div class="position-relative rounded-top progress-wrapper" data-color="#F7AA9C">
                <div class="wave" data-progress="65%"></div>
              </div>
              <div class="card-footer bg-white">
                <h5 class="card-title">Video/Photo Editing</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php //education ?>
    <section class="section position-relative">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-title text-dark">Education Achievement</h2>
          </div>
          <div class="col-lg-6 col-md-6 mb-80">
            <div class="d-flex">
              <div class="mr-lg-5 mr-3">
                <i class="ti-medall icon icon-light icon-bg bg-white shadow rounded-circle d-block"></i>
              </div>
              <div>
                <p class="text-dark mb-1">
                  2020
                </p>
                <h4>
                  Human Resources Staff - TMOT Team
                </h4>
                <p class="mb-0 text-light">
                  I was assessed as a member who successfully completed the assignment for 4 consecutive semesters.
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 mb-80">
            <div class="d-flex">
              <div class="mr-lg-5 mr-3">
                <i class="ti-medall icon icon-light icon-bg bg-white shadow rounded-circle d-block"></i>
              </div>
              <div>
                <p class="text-dark mb-1">
                  July - 2021
                </p>
                <h4>
                  The second prize
                </h4>
                <p class="mb-0 text-light">
                  TDTU Unbind The Brains Contest
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 mb-80">
            <div class="d-flex">
              <div class="mr-lg-5 mr-3">
                <i class="ti-medall icon icon-light icon-bg bg-white shadow rounded-circle d-block"></i>
              </div>
              <div>
                <p class="text-dark mb-1">
                  December - 2021
                </p>
                <h4>
                  Scholarship
                </h4>
                <p class="mb-0 text-light">
                  Study Well - Practice Excellently for the 2020-2021 school year
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 mb-80">
            <div class="d-flex">
              <div class="mr-lg-5 mr-3">
                <i class="ti-medall icon icon-light icon-bg bg-white shadow rounded-circle d-block"></i>
              </div>
              <div>
                <p class="text-dark mb-1">
                  December - 2021
                </p>
                <h4>
                  Top 10
                </h4>
                <p class="mb-0 text-light">
                  CV Web Competition
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 mb-80">
            <div class="d-flex">
              <div class="mr-lg-5 mr-3">
                <i class="ti-medall icon icon-light icon-bg bg-white shadow rounded-circle d-block"></i>
              </div>
              <div>
                <p class="text-dark mb-1">
                  December - 2021
                </p>
                <h4>
                  QA Engineer 
                </h4>
                <p class="mb-0 text-light">
                  Automation & Manual Testing
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 mb-80">
            <div class="d-flex">
              <div class="mr-lg-5 mr-3">
                <i class="ti-medall icon icon-light icon-bg bg-white shadow rounded-circle d-block"></i>
              </div>
              <div>
                <p class="text-dark mb-1">
                  March - 2022
                </p>
                <h4>
                  Student of 5 merits
                </h4>
                <p class="mb-0 text-light">
                  Good Moral, Good Studying, Good Physical Training, Good Volunteer, Good Integration
                </p>
              </div>
            </div>
          </div>

        </div>
      </div>
      <img class="img-fluid edu-bg-image w-100" src="images/backgrounds/education-bg.png" alt="bg-image">
    </section>

    <?php //LEARNING PROCESS ?>
    <section class="section">
      <div class="container">
        <div class="row justify-content-around">
          <div class="col-lg-12 text-center">
            <h2 class="section-title text-dark">Learning Process</h2>
          </div>
          <div class="col-lg-3 col-md-4 text-center">
            <img src="images/experience/icon-1.png" alt="icon">
            <p class="mb-0">Aug 2018 - July 2019</p>
            <h4>Basic IT Knowledge</h4>
            <h6 class="text-light"></h6>
          </div>
          <div class="col-lg-3 col-md-4 text-center">
            <img src="images/experience/icon-2.png" alt="icon">
            <p class="mb-0">Mar 2019 - Aug 2021</p>
            <h4>UI & UX Design and<br>Web Application</h4>
            <h6 class="text-light"></h6>
          </div>
          <div class="col-lg-3 col-md-4 text-center">
            <img src="images/experience/icon-3.png" alt="icon">
            <p class="mb-0">Sep 2020 - Present</p>
            <h4>Software Testing: Manual & Automation Testing</h4>
            <h6 class="text-light"></h6>
          </div>
        </div>
      </div>
    </section>

    <?php //portfolio ?>
    <section class="section" >
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">
            <h2 class="section-title text-dark"><a class="text-dark" href="portfolio.php" title="Read More">Portfolio</a></h2>
          </div>
        </div>
        <div class="row shuffle-wrapper">
          <div class="col-lg-4 col-6 mb-4 shuffle-item">
            <div class="position-relative rounded hover-wrapper">
              <img src="images/portfolio/item-1.png" alt="portfolio-image" class="img-fluid rounded w-100">
              <div class="hover-overlay">
                <div class="hover-content">
                  <a class="btn btn-light btn-sm" href="https://tandmstoreapp.000webhostapp.com" target="_blank">AndroidStore Web</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-6 mb-4 shuffle-item">
            <div class="position-relative rounded hover-wrapper">
              <img src="images/portfolio/item-2.png" alt="portfolio-image" class="img-fluid rounded w-100">
              <div class="hover-overlay">
                <div class="hover-content">
                  <a class="btn btn-light btn-sm" href="https://coffeespace.000webhostapp.com" target="_blank">CoffeSpace Web</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-6 mb-4 shuffle-item">
            <div class="position-relative rounded hover-wrapper">
              <img src="images/portfolio/item-3.png" alt="portfolio-image" class="img-fluid rounded w-100">
              <div class="hover-overlay">
                <div class="hover-content">
                  <a class="btn btn-light btn-sm" href="https://bit.ly/3pw1Jyh" target="_blank">OnlineClass Protoype</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-6 mb-4 shuffle-item">
            <div class="position-relative rounded hover-wrapper">
              <img src="images/portfolio/item-4.png" alt="portfolio-image" class="img-fluid rounded w-100">
              <div class="hover-overlay">
                <div class="hover-content">
                  <a class="btn btn-light btn-sm" href="https://www.figma.com/file/9fdERNg3Md9tvAexCSlCCZ/Wireframe_MATRestaurant?node-id=0%3A1" target="_blank">Restaurant Wireframe</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-6 mb-4 shuffle-item">
            <div class="position-relative rounded hover-wrapper">
              <img src="images/portfolio/item-5.png" alt="portfolio-image" class="img-fluid rounded w-100">
              <div class="hover-overlay">
                <div class="hover-content">
                  <a class="btn btn-light btn-sm" href="https://hangocmy.github.io/cv-competition/" target="_blank">Create CV</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php //BLOG ?>
    <?php include "frame/blog-section.php"; ?>

    <?php //INSPIRATIONAL PERSON ?>
    <section class="section bg-primary position-relative testimonial-bg-shapes">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">
            <h2 class="section-title mb-5" style="color:#282828">Inspirational Person</h2>
          </div>
          <div class="col-lg-10 mx-auto testimonial-slider">
            
            <?php //slider item 1 ?>
            <div class="text-center testimonial-content">
              <i class="ti-quote-right text-white icon mb-4 d-inline-block"></i>
              <p class="mb-4" style="color: black; font-size:16px">
                She brought you into this world, she took many roles to fit your needs,
                and once you have grown up, she let you fly away to explore the world.
                <strong>A mother’s love is eternal, pure and unconditional.</strong>
                No matter how busy you get in life, make time for your mother
                <br>
                <strong style="font-style: italic; color: white ;background-color:#4a7d40; border-radius: 3px;">because you can have another job, earn more money,
                  but you cannot replace a mother’s love with anything else.</strong>
              </p>
              <img class="img-fluid rounded-circle mb-4 d-inline-block" style="max-width:200px" src="images/inspirational/inspirational-3.png" alt="client-image">
              <h4 class="text-secondary">My Mom</h4>
              <h6 class="text-secondary mb-4">The most inspired person in my life</h6>
            </div>
            
            <?php //slider item 2 ?>
            <div class="text-center testimonial-content">
              <i class="ti-quote-right text-white icon mb-4 d-inline-block"></i>
              <p class="mb-4" style="color: #000; font-size: 16px">
                While studying at Phan Boi Chau High School for the Gifted (Nghe An), Khanh Vy was dubbed <strong>"Hotgirl in 7 languages"</strong> by the online community.
                So far, the name Khanh Vy is no stranger to the audience when becoming <strong>the MC/Host of a series of big and small programs</strong>.
                At the same time, she is also <strong>a famous YouTuber</strong> in the English learning community with a series of videos with the label VyVocab, VyTalk, VyLog.
                After 4 years, she recently graduated from university, receiving <strong>a Diploma in International Relations from the Diplomatic Academy</strong>.
              </p>
              <img class="img-fluid rounded-circle mb-4 d-inline-block" style="max-width:200px" src="images/inspirational/inspirational-1.png" alt="client-image">
              <h4 class="text-dark">Tran Khanh Vy</h4>
              <h6 class="text-dark mb-4">She went to the Diplomatic Academy of Vietnam</h6>
            </div>
          </div>
        </div>
      </div>
      <img src="images/backgrounds/map.png" alt="map" class="img-fluid bg-map">
      <img src="images/illustrations/dots-group-v.png" alt="bg-shape" class="img-fluid bg-shape-1">
      <img src="images/illustrations/leaf-orange.png" alt="bg-shape" class="img-fluid bg-shape-2">
      <img src="images/illustrations/dots-group-sm.png" alt="bg-shape" class="img-fluid bg-shape-3">
      <img src="images/illustrations/leaf-pink-round.png" alt="bg-shape" class="img-fluid bg-shape-4">
      <img src="images/illustrations/leaf-cyan.png" alt="bg-shape" class="img-fluid bg-shape-5">
    </section>

    <?php
      //FOOTER
      include "frame/footer.php"
    ?>

    <script src="plugins/jQuery/jquery.min.js"></script>
    <script src="plugins/bootstrap/bootstrap.min.js"></script>
    <script src="plugins/slick/slick.min.js"></script>
    <script src="plugins/shuffle/shuffle.min.js"></script>
    <script src="js/script.js"></script>

  </body>
</html>
