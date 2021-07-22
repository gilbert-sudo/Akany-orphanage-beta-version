<!DOCTYPE html>
<html>
  <head>
    <title>Akany TAFITA - Blog</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">
    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
	  
	  
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light site-navbar-target" id="ftco-navbar">
	    <div class="container">
      <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="" style="width: 50px;">&nbsp;Akany Tafita/Sahasoa</a>
	      <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav nav ml-auto">
	          <li class="nav-item"><a href="index.php#home-section" class="nav-link"><span>Home</span></a></li>
	          <li class="nav-item"><a href="index.php#about-section" class="nav-link"><span>About</span></a></li>
	          <li class="nav-item"><a href="index.php#sermons-section" class="nav-link"><span>Witness</span></a></li>
	          <li class="nav-item"><a href="index.php#events-section" class="nav-link"><span>Events</span></a></li>
	          <li class="nav-item"><a href="index.php#causes-section" class="nav-link"><span>Causes</span></a></li>
	          <li class="nav-item"><a href="index.php#blog-section" class="nav-link"><span>Blog</span></a></li>
	         
	          <li class="nav-item"><a href="index.php#contact-section" class="nav-link"><span>Contact</span></a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
	  
	  <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_4.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate pb-5 text-center">
            <h1 class="mb-3 bread">Our <span>Blogs</span></h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a href="blog.html">Blog <i class="ion-ios-arrow-forward"></i></a></span> <span>Blog Single <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
		

    <section class="ftco-section">
      <?php 
     include 'Admin/php/connexion.php';
    if (isset($_GET['id_blog'])) {
      $get_id_blog = $_GET['id_blog'];
      $reqblog = $bdd->prepare("SELECT * FROM blog WHERE id_blog = ?");
      $reqblog->execute(array($get_id_blog));
      if ($reqblog->rowCount() == 1) {
          $showblog = $reqblog->fetch();
      }
     

  }
  
 
  
  ?>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 ftco-animate">
            <h2 class="mb-3"><?= $showblog['object']; ?></h2>
            <p><?= $showblog['contained'];?></p>
            <p>
              <img src="Admin/images/Blog/<?= $showblog['image']; ?>" alt="" class="img-fluid">
            </p>
            <p><?= $showblog['contained_2'];?></p>
           
            <div class="tag-widget post-tag-container mb-5 mt-5">
              <div class="tagcloud">
                <a href="#" class="tag-cloud-link">Life</a>
                <a href="#" class="tag-cloud-link">Sport</a>
                <a href="#" class="tag-cloud-link">Tech</a>
                <a href="#" class="tag-cloud-link">Travel</a>
              </div>
            </div>
            <!-- debut coms -->
            <?php include 'Admin/php/showcoms.php'; ?>
            <!-- fin coms -->

            <div class="pt-5 mt-1">
              <div class="comment-form-wrap pt-5">
                <h3 class="mb-5">Leave a comment</h3>

                  <!-- modal login -->
                   <?php include 'Admin/php/register.php';?>
                  <!-- end modal login -->
                

              </div>
            </div>

          </div> <!-- .col-md-8 -->
          <div class="col-lg-4 sidebar ftco-animate">
           <!--  <div class="sidebar-box">
              <form action="#" class="search-form">
                <div class="form-group">
                  <span class="icon icon-search"></span>
                  <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
                </div>
              </form>
            </div> -->
            <div class="sidebar-box ftco-animate">
            	<h3 class="heading-sidebar">Categories</h3>
              <ul class="categories">
                <li><a href="#">Meals <span>(12)</span></a></li>
                <li><a href="#">Helps<span>(22)</span></a></li>
              </ul>
            </div>

            <!-- sidebar blog -->
              <div class="sidebar-box ftco-animate">
              <h3 class="heading-sidebar">Recent Blog</h3>
              <?php include 'Admin/php/connexion.php';
              $reqBlog = $bdd->prepare("SELECT * FROM blog");
              $reqBlog->execute();
              $Blogexist = $reqBlog->rowCount ();
              if ($Blogexist != 0) {
                while ($recentBlog = $reqBlog->fetch()) {?>
                <!-- one block -->
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(Admin/images/Blog/<?= $recentBlog['image']; ?>);"></a>
                <div class="text">
                  <h3 class="heading"><a href="single.php?id_blog=<?= $recentBlog['id_blog']; ?>"><?= $recentBlog['object']; ?></a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> April 04, 2019</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
                <!-- end one block -->
                  <?php } 
            }?>

            </div>
         

            <div class="sidebar-box ftco-animate">
              <h3 class="heading-sidebar">Paragraph</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
            </div>
          </div>

        </div>
      </div>
    </section> <!-- .section -->

   <?php include 'footeren.php'; ?>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  
  <script src="js/main.js"></script>
    
  </body>
</html>