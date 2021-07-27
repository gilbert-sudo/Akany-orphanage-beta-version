<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Akany TAFITA</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/site.webmanifest">
    <link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <!-- end favicon -->
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
    <?php 
    include 'Admin/php/connexion.php';
    include 'Admin/php/function.php';
    ?>
    
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light site-navbar-target" id="ftco-navbar">
      <div class="container">
      <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="" style="width: 50px;">&nbsp;Akany Tafita</a>
        <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav nav ml-auto">
            <li class="nav-item"><a href="#home-section" class="nav-link"><span>Home</span></a></li>
            <li class="nav-item"><a href="#about-section" class="nav-link"><span>About</span></a></li>
            <li class="nav-item"><a href="#sermons-section" class="nav-link"><span>Witness</span></a></li>
            <li class="nav-item"><a href="#events-section" class="nav-link"><span>Events</span></a></li>
            <li class="nav-item"><a href="#causes-section" class="nav-link"><span>Causes</span></a></li>
            <li class="nav-item"><a href="#blog-section" class="nav-link"><span>Blog</span></a></li>
            <li class="nav-item"><a href="#contact-section" class="nav-link"><span>Contact</span></a></li>
            <li> <a data-toggle="modal" data-target="#myModal" href="#" style="color: #ffc107;"> <span>Language</span> <img src="images/flag.png" alt="" /> </a> </li>
          </ul>
        </div>
      </div>
    </nav> 

     <!-- Modal -->
      <div class="modal fade lug" id="myModal" role="dialog">
         <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content" style="border-radius: 15px;">
               <div class="modal-header">
                 
                  <h4 class="modal-title" style="color: white; margin-left: 41px;">Change language</h4>
                  <button type="button" style="color: white;" class="close" data-dismiss="modal">&times;</button>
               </div>
               <div class="modal-body">
                  <ul>
                     <li><a href="#"><img src="images/flag-up-1.png" alt="" style="width: 30px; text-decoration: none;"/> English</a></li>
                     <li><a href="indexfr.php"><img src="images/flag-up-2.png" alt="" style="width: 30px; text-decoration: none; margin-left: 100px;s"/>Français </a></li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   
    
    <section class="home-slider js-fullheight owl-carousel">
      <div class="slider-item js-fullheight" style="background-image:url(images/bg_1.jpg);">
        <div class="overlay"></div>
          <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
            <div class="col-md-8 text-center ftco-animate mt-1">
              <div class="text" style="margin-top: -98px;">
            <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt="" style="width: 180px;"></a> 
                <div class="subheading">
                  <span>Akany Tafita/Sahasoa</span>
                </div>
                <h1 class="mb-4"> as body without the <span>spirit</span> is dead,</h1>
               
                <p><a href="#contact-section" class="btn btn-primary py-2 px-4">Contact us</a> <a href="stories.php" class="btn btn-primary btn-outline-primary py-2 px-4">Read more</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="slider-item js-fullheight" style="background-image:url(images/about.jpg);">
        <div class="overlay"></div>
          <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
            <div class="col-md-8 text-center ftco-animate mt-1">
              <div class="text" style="margin-top: -98px;">
            <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt="" style="width: 180px;"></a> 
                <div class="subheading">
                  <span>Akany Tafita/Sahasoa</span>
                </div>
                
                <h1 class="mb-4"> so also faith without <span>actions</span> is dead </h1>
                
                <p><a href="#contact-section" class="btn btn-primary py-2 px-4">Contact us</a> <a href="stories.php" class="btn btn-primary btn-outline-primary py-2 px-4">Read more</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

   

    <section class="ftco-section ftco-no-pt ftco-no-pb ftco-about-section" id="about-section">
      <div class="container-fluid px-0">
        <div class="row d-md-flex text-wrapper">
          <div class="one-half img" style="background-image: url('images/1.jpg');"></div>
          <div class="one-half half-text d-flex justify-content-end align-items-center ftco-animate">
            <div class="text-inner pl-md-5">
              <h3 class="heading">Welcome to <span>Akany</span> Tafita/Sahasoa</h3>
              <p>Akany Tafita, also called « ATA », was founded by a people committee in the Anglican church in Madagascar whose goal is to share God’s love by helping needy people especially children but also the entire family. ATA is located in a very poor part of the city of Antananarivo and started to work in October 2002. </p>
              <p>Une école qui offre de la vie et de l’espoir aux enfants d'Antananarivo.</p>
              <strong><span>OUR GOALS:</span></strong>
              <ul class="my-4">
                <li><span class="ion-ios-checkmark-circle mr-2"></span> Improve the living conditions of families</li>
                <li><span class="ion-ios-checkmark-circle mr-2"></span> Behind the word mountains</li>
                <li><span class="ion-ios-checkmark-circle mr-2"></span> Separated they live in Bookmarksgrove</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <section class="ftco-section ftco-services-2" id="services-section">
      <div class="container">
        <div class="row justify-content-center pb-5">
          <div class="col-md-12 heading-section text-center ftco-animate">
            <span class="subheading">Services</span>
            <h2 class="mb-4">Akany Tafita/Sahasoa Services</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services text-center d-block">
              <div class="icon"><span class="flaticon-praying"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Daily Prayers</h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>      
          </div>
          <div class="col-md d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services text-center d-block">
              <div class="icon"><span class="flaticon-bible"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Continous Teaching</h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>      
          </div>
         
          <div class="col-md d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services text-center d-block">
              <div class="icon"><span class="flaticon-rings"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Events</h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>      
          </div>
          <div class="col-md d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services text-center d-block">
              <div class="icon"><span class="flaticon-social-care"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Community Helpers</h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>      
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section bg-light" id="sermons-section" style="padding: 0em 0;">
      <div class="container">
        <div class="row justify-content-center pb-5">
          <div class="col-md-12 heading-section text-center ftco-animate">
            <span class="subheading">Witness</span>
            <h2 class="mb-4">Akany Tafita/Sahasoa Witnesses</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
          </div>
        </div>
        <div class="row">
          <?php 
             $reqWitness = $bdd->prepare("SELECT * FROM temoignage");
              $reqWitness->execute();
          while ($showWitness = $reqWitness->fetch()) {?>
          <div class="col-md-4">
            <div class="sermon-wrap ftco-animate">
              <div class="img d-flex align-items-center justify-content-center" style="background-image: url(Admin/images/Temoin/<?= $showWitness['images'] ?>);">
                <div class="text-content p-4 text-center">
                  <span>by:</span>
                  <h3><?= $showWitness['nom_temoin'] ?></h3>
                  <p class="">
                    <a href="Sermon.html" class="btn-custom mb-2 p-2 text-center popup-vimeo"><span class="icon-play"></span> Watch</a>
                  </p>
                </div>
              </div>
              <div class="text pt-3 text-center">
                <h2 class="mb-0"><a href="sermon.html"><?= $showWitness['title'] ?></a></h2>
                <div class="meta">
                  <p class="mb-0">
                    <span><?= dateEn($showWitness['date_de_publication']) ?></span>
                  </p>
                </div>
              </div>
            </div>
          </div>
        <?php } ?>
        </div>
      </div>
    </section>

    <section class="ftco-intro img" id="events-section" style="background-image: url(images/bg_3.jpg);">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
        </div>
      </div>
    </section>

    <section class="ftco-section bg-light ftco-event" id="events-section">
      <div class="container-fluid px-4 ftco-to-top">
        <div class="row justify-content-center pb-5">
          <div class="col-md-12 heading-section text-center ftco-animate">
            <span class="subheading">Events</span>
            <h2 class="mb-5">Upcoming Events</h2>
          </div>
        </div>
        <div class="row">
        <?php 
        
             $reqevents = $bdd->prepare("SELECT * FROM ad_event");
             $reqevents->execute();
          while ($showevents = $reqevents->fetch()) {

            ?>
          <!--one events  -->
          <div class="col-md-12 col-lg-6 col-xl-4">
            <div class="event-wrap d-flex ftco-animate">
              <div class="img" style="background-image: url(Admin/images/Evenement/<?= $showevents['image'] ?>);"></div>
              <div class="text p-4 d-flex align-items-center">
                <div>
                  <span class="time">On <?=dateEn($showevents['date_event'])?></span>
                  <h3><a href="#"><?= $showevents['titre_event'] ?></a></h3>
                  <div class="meta">
                    <p class="desc1"><span class="icon-user mr-1"></span> by : <a href="#">Akany Tafita</a></p>
                    <p class="desc2"><span class="icon-location"></span> <?= $showevents['description_event'] ?></p>
                    <p class="mb-0"><span class="btn btn-primary">At <?= timeEn($showevents['time_event']) ?></a></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
              <!-- end of one events -->
              <?php } ?>
          
        </div>
      </div>
    </section>
    

    <section class="ftco-section ftco-causes ftco-no-pb" id="causes-section" style="padding: 0em 0;">
      <div class="container">
        <div class="row justify-content-center pb-5">
          <div class="col-md-12 heading-section text-center ftco-animate">
            <span class="subheading">Donate Charity</span>
            <h2 class="mb-5">Causes Needs Our Help</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
          </div>
        </div>
        <div class="row">
        <?php 
            
            $reqdons = $bdd->prepare("SELECT * FROM demande_dons");
              $reqdons->execute();
              $donatenbr = $reqdons->rowCount();
              $i = 0;
          while ($showdons = $reqdons->fetch()) { 
            $donationtotal[$i++] = $showdons['fond'];  
            $showdonseuro = $showdons['fond'] / 3793.47;
            ?>
                        <!-- one cause -->
          <div class="col-md-6 col-lg-3">
            <div class="cause-entry ftco-animate">
              <a href="#" class="img" style="background-image: url(Admin/images/Demande_dons/<?= $showdons['images'] ?>);"></a>
              <div class="text p-3">
                <h3><a href="cause.html"><?= $showdons['but'] ?></a></h3>
                <div class="progress mb-4">
                  <div class="progress-bar color-1" role="progressbar" aria-valuenow="90"
                    aria-valuemin="0" aria-valuemax="100" style="width:80%">
                   
                    </div>
                </div>
                <p class="donate"><span class="target-goal">we expect over </span><strong class="number" data-number="<?= $showdons['fond'] ?>">0</strong><span>&nbsp;AR</span>&nbsp;/&nbsp;<strong class="number" data-number="<?= $showdonseuro; ?>">0</strong><span>&nbsp;$</p>
                <p class="description"><?= $showdons['description'] ?></p>
                <p><a href="paiments.php" class="btn btn-primary popup-vimeo">Donate Now!</a></p>
               
              </div>
            </div>
          </div>
          <!-- end of one cause -->
          <?php }
          $i = 0;
          $total = 0;
          while ($i < $donatenbr) {
            $total = $total + $donationtotal[$i++];
          }
          $totaleuro = $total / 3793.47;
           ?>
        
        </div>
        <div class="row mt-4 justify-content-end">
          <div class="col-lg-10">

           
            <div class="donated-intro bg-darken p-4 p-md-5">
              <h2>We expect over <strong class="number" data-number="<?= $total; ?>">0</strong><span>&nbsp;AR</span></h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics </p>
              <p><a href="paiments.php" class="btn btn-black px-4 py-3 popup-vimeo">Donate now!</a></p>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section class="ftco-daily-verse img" style="background-image: url(images/bg_4.jpg);">
      <div class="overlay"></div>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-10">
            <div class="row justify-content-center align-items-center">
              <div class="col-md-2 ftco-animate">
                <div class="icon">
                  <span class="flaticon-church"></span>
                </div>
              </div>
              <div class="col-md-10 daily-verse pl-md-5 ftco-animate">
                <span class="subheading">Jesus Christ Said:</span>
                <h3>"I tell you, whenever you did this for one of the least important of these members of my family, you did this for me!."</h3>
                <h4 class="h5 mt-4 font-weight-bold"><span>Bible:</span> Mattew 25:40 </h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section bg-light" id="blog-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <span class="subheading">Blog</span>
            <h2 class="mb-4">Read the Latest Blog</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
          </div>
        </div>
        <div class="row d-flex">

           <?php
             $reqblog = $bdd->prepare("SELECT * FROM blog");
              $reqblog->execute();
          while ($showblog = $reqblog->fetch()) {?>

          <!-- one blog -->
          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry justify-content-end" style="width: 99%;">
              <a href="single.php?id_blog=<?= $showblog['id_blog']; ?>" class="block-20" style="background-image: url('Admin/images/Blog/<?= $showblog['image'] ?>');">
              </a>
              <div class="text float-right d-block">
                <div class="d-flex align-items-center pt-2 mb-4 topp">
                  <div class="one mr-2">
                    <span class="day">04</span>
                  </div>
                  <div class="two">
                    <span class="yr">2019</span>
                    <span class="mos">June</span>
                  </div>
                </div>
                <h3 class="heading"><a href="single.php?id_blog=<?= $showblog['id_blog']; ?>"><?= $showblog['object'];?> </a></h3>
                <p><?= $showblog['contained'];?></p>
                <div class="d-flex align-items-center mt-4 meta">
                  <p class="mb-0"><a href="single.php?id_blog=<?= $showblog['id_blog']; ?>" class="btn btn-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
                  <p class="ml-auto mb-0">
                    <a href="#" class="mr-2">Comment</a>
                    <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <!-- end one blog -->
          <?php } ?>
       
        </div>
      </div>
    </section>

    <section class="ftco-section contact-section ftco-no-pb" id="contact-section" style="padding: 0em 0;">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <span class="subheading">Contact</span>
            <h2 class="mb-4">Contact Us</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
          </div>
        </div>

        <div class="row block-9">
          <div class="col-md-7 order-md-last d-flex">
            
          <form class="bg-light p-4 p-md-5 contact-form addtomail" >
              
              <div class="form-group">
                <input type="text" class="form-control addtomailname" placeholder="Your Name" name="name">
              </div>
              <div class="form-group">
                <input type="email" class="form-control addtomailemail" placeholder="Your Email" name="email">
              </div>
              <div class="form-group">
                <input type="text" class="form-control addtomailsubject" placeholder="Subject" name="objet">
              </div>
              <div class="form-group">
                <textarea  cols="30" rows="7" class="form-control addtomailmsg" placeholder="Message" name="msg"></textarea>
              </div>
              <div class="form-group">
                <input type="submit"  value="Send Message" class="btn btn-primary py-3 px-5 addtomailbtn"><br><br>
               
                <p style="color: red;" id="erreur"></p>
              </div>
            </form>
   
          </div>

          <div class="col-md-5 d-flex">
            <div class="row d-flex contact-info mb-5">
              <div class="col-md-12 ftco-animate">
                <div class="box p-2 px-3 bg-light d-flex">
                  <div class="icon mr-3">
                    <span class="icon-map-signs"></span>
                  </div>
                  <div>
                    <h3 class="mb-3">Address</h3>
                    <p>Akany Tafta/Sahasoa, Lot III T 267 AB </p>
                  </div>
                </div>
              </div>
              <div class="col-md-12 ftco-animate">
                <div class="box p-2 px-3 bg-light d-flex">
                  <div class="icon mr-3">
                    <span class="icon-phone2"></span>
                  </div>
                  <div>
                    <h3 class="mb-3">Contact Number</h3>
                    <p><a href="tel://1234567920">+261 32 04 564 06</a></p>
                  </div>
                </div>
              </div>
              <div class="col-md-12 ftco-animate">
                <div class="box p-2 px-3 bg-light d-flex">
                  <div class="icon mr-3">
                    <span class="icon-paper-plane"></span>
                  </div>
                  <div>
                    <h3 class="mb-3">Email Address</h3>
                    <p><a href="mailto:info@yoursite.com">ravoniarisoa@freenet.mg</a></p>
                  </div>
                </div>
              </div>
              <div class="col-md-12 ftco-animate">
                <div class="box p-2 px-3 bg-light d-flex">
                  <div class="icon mr-3">
                    <span class="icon-globe"></span>
                  </div>
                  <div>
                    <h3 class="mb-3">Facebook Page</h3>
                    <p><a href="#">AKANY TAFITA SAHASOA</a></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

         
       <section class="ftco-section ftco-no-pt ftco-no-pb" id="gallery-section"> 
      <div class="bg-white">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15098.193356662397!2d47.559287999999995!3d-18.907107999999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x21f07f16c7344d09%3A0xd5c96d0e72aa23e5!2sAkany%20Tafita%20-%20SAHASOA!5e0!3m2!1sen!2smg!4v1624358274083!5m2!1sen!2smg" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      </div>
    </section>


    <section class="ftco-gallery ftco-section ftco-no-pb mb-4">
      <div class="container-fluid px-4">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h3 class="subheading">Gallery</h3>
            <h2 class="mb-1">Akany Tafita/Sahasoa Photo Gallery</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 ftco-animate">
            <a href="images/gallery-1.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/gallery-1.jpg);">
              <div class="icon mb-4 d-flex align-items-center justify-content-center">
                <span class="icon-instagram"></span>
              </div>
            </a>
          </div>
          <div class="col-md-3 ftco-animate">
            <a href="images/gallery-2.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/gallery-2.jpg);">
              <div class="icon mb-4 d-flex align-items-center justify-content-center">
                <span class="icon-instagram"></span>
              </div>
            </a>
          </div>
          <div class="col-md-3 ftco-animate">
            <a href="images/gallery-3.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/gallery-3.jpg);">
              <div class="icon mb-4 d-flex align-items-center justify-content-center">
                <span class="icon-instagram"></span>
              </div>
            </a>
          </div>
          <div class="col-md-3 ftco-animate">
            <a href="images/gallery-4.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/gallery-4.jpg);">
              <div class="icon mb-4 d-flex align-items-center justify-content-center">
                <span class="icon-instagram"></span>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>
  
   <?php include 'footeren.php'; ?>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

  <script src="Admin/js/mailbox.js"></script>
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