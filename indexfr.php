<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Akany TAFITA</title>
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
	          <li class="nav-item"><a href="#home-section" class="nav-link"><span>Acceuil</span></a></li>
	          <li class="nav-item"><a href="#about-section" class="nav-link"><span>à propos</span></a></li>
	          <li class="nav-item"><a href="#sermons-section" class="nav-link"><span>témoingnages</span></a></li>
	          <li class="nav-item"><a href="#events-section" class="nav-link"><span>Evènements</span></a></li>
	          <li class="nav-item"><a href="#causes-section" class="nav-link"><span>Causes</span></a></li>
	          <li class="nav-item"><a href="#blog-section" class="nav-link"><span>Blogs</span></a></li>
	          <li class="nav-item"><a href="#contact-section" class="nav-link"><span>Contact</span></a></li>
            <li style="margin-top: 5px;"> <a data-toggle="modal" data-target="#myModal" href="#" style="color: #ffc107;"> <span>Langue</span> <img src="images/flagfr.png" alt="" /> </a> </li>
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
                 
                  <h4 class="modal-title" style="color: white; margin-left: 41px;">Changer de language</h4>
                  <button type="button" style="color: white;" class="close" data-dismiss="modal">&times;</button>
               </div>
               <div class="modal-body">
                  <ul>
                     <li><a href="index.php"><img src="images/flag-up-1.png" alt="" style="width: 30px; text-decoration: none;"/> English</a></li>
                     <li><a href="#"><img src="images/flag-up-2.png" alt="" style="width: 30px; text-decoration: none; margin-left: 100px;s"/> Français </a></li>
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
	          <div class="col-md-8 text-center ftco-animate mt-5">
	          	<div class="text">
						<a class="navbar-brand" href="index.html"><img src="images/logo.png" alt="" style="width: 180px;"></a> 
	          		<div class="subheading">
	          			<span>Akany Tafita/Sahasoa</span>
	          		</div>
		           
		            <h1 class="mb-4"> Car le corps sans l'<span>esprit</span> est mort,</h1>
		            <p><a href="#contact-section" class="btn btn-primary py-2 px-4">Contactez-nous</a> <a href="story.php" class="btn btn-primary btn-outline-primary py-2 px-4">en-savoir plus</a></p>
	            </div>
	          </div>
	        </div>
        </div>
      </div>

      <div class="slider-item js-fullheight" style="background-image:url(images/about.jpg);">
      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
	          <div class="col-md-8 text-center ftco-animate mt-5">
	          	<div class="text">
						<a class="navbar-brand" href="index.html"><img src="images/logo.png" alt="" style="width: 180px;"></a> 
	          		<div class="subheading">
	          			<span>Akany Tafita/Sahasoa</span>
	          		</div>
                <h1 class="mb-4"> ainsi aussi, la foi sans <span>actiont</span> est morte.</h1>
		            
		          
		            <p><a href="#contact-section" class="btn btn-primary py-2 px-4">Contactez-nous</a> <a href="story.php" class="btn btn-primary btn-outline-primary py-2 px-4">en-savoir plus</a></p>
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
              <h3 class="heading">Bienvenue à <span>Akany</span> Tafita/Sahasoa</h3>
              <p>Far far away,<strong>creative</strong> behind the word mountains, far from the countries Vokalia and Consonantia, there live the <strong>success</strong> blind texts. Separated they live in Bookmarksgrove</p>
              <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
              <strong><span>NOS OBJECTIFS:</span></strong>
              <ul class="my-4">
              	<li><span class="ion-ios-checkmark-circle mr-2"></span> Ameliorer la condition de vie des familles</li>
              	<li><span class="ion-ios-checkmark-circle mr-2"></span> Venir en aide aux enfant et jeunes nécessiteux</li>
              	<li><span class="ion-ios-checkmark-circle mr-2"></span> Contribute to the education of children and young Malagasies</li>
              </ul>
            </div>
					</div>
    		</div>
    	</div>
    </section>

    <section class="ftco-counter" id="section-counter">
    	<div class="container-fluid px-0">
    		<div class="row no-gutters">
          <div class="col-md-3 justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center py-5">
              <div class="text">
              	<div class="icon d-flex justify-content-center align-items-center">
              		<span class="icon-users"></span>
              	</div>
                <strong class="number" data-number="74">0</strong>
                <span>Enfants</span>
              </div>
            </div>
          </div>
          <div class="col-md-3 justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center py-5">
              <div class="text">
              	<div class="icon d-flex justify-content-center align-items-center">
              		<span class="icon-user"></span>
              	</div>
                <strong class="number" data-number="8">0</strong>
                <span>Résponsables</span>
              </div>
            </div>
          </div>
          <div class="col-md-3 justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center py-5">
              <div class="text">
              	<div class="icon d-flex justify-content-center align-items-center">
              		<span class="icon-money"></span>
              	</div>
                <?php include_once 'Admin/php/total.php';?>
                <strong class="number" data-number="<?= $totalnbreuro; ?>">0</strong>&nbsp;$
                <span>besoin</span>
              </div>
            </div>
          </div>
          <div class="col-md-3 justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center py-5">
              <div class="text">
              	<div class="icon d-flex justify-content-center align-items-center">
              		<span class="icon-home"></span>
              	</div>
                <strong class="number" data-number="206">0</strong>
                <span>Occupation</span>
              </div>
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
              <div class="icon"><span class="flaticon-church"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Set of Sermons</h3>
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

		<section class="ftco-section bg-light" id="sermons-section">
			<div class="container">
				<div class="row justify-content-center pb-5">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	<span class="subheading">Témoingnages</span>
            <h2 class="mb-4">Témoingnages sur l'Akany Tafita/Sahasoa</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
          </div>
        </div>
				<div class="row">
        	<div class="col-md-4">
        		<div class="sermon-wrap ftco-animate">
    					<div class="img d-flex align-items-center justify-content-center" style="background-image: url(images/sermon-1.jpg);">
    						<div class="text-content p-4 text-center">
    							<span>par:</span>
    							<h3>Gilbert Ranaivo</h3>
    							<p class="">
										<a href="https://vimeo.com/45830194" class="btn-custom mb-2 p-2 text-center popup-vimeo"><span class="icon-play"></span> Lire</a>
										<a href="#" class="btn-custom p-2 text-center"><span class="icon-download"></span> Télécharger</a>
									</p>
    						</div>
    					</div>
    					<div class="text pt-3 text-center">
    						<h2 class="mb-0"><a href="sermon.html">Let the Sunset Inspire You</a></h2>
    						<div class="meta">
		  						<p class="mb-0">
			  						<span>24 Mars 2021</span>
		  						</p>
		  					</div>
    					</div>
  					</div>
        	</div>
        	<div class="col-md-4">
        		<div class="sermon-wrap ftco-animate">
    					<div class="img d-flex align-items-center justify-content-center" style="background-image: url(images/sermon-2.jpg);">
    						<div class="text-content p-4 text-center">
    							<span>par:</span>
    							<h3>Gilbert Ranaivo</h3>
    							<p class="">
										<a href="https://vimeo.com/45830194" class="btn-custom mb-2 p-2 text-center popup-vimeo"><span class="icon-play"></span> Lire</a>
										<a href="#" class="btn-custom p-2 text-center"><span class="icon-download"></span> Télécharger</a>
									</p>
    						</div>
    					</div>
    					<div class="text pt-3 text-center">
    						<h2 class="mb-0"><a href="sermon.html">Developing Spiritual Mentality</a></h2>
    						<div class="meta">
		  						<p class="mb-0">
			  						<span>24 Mars 2021</span>
		  						</p>
		  					</div>
    					</div>
  					</div>
        	</div>
        	<div class="col-md-4">
        		<div class="sermon-wrap ftco-animate">
    					<div class="img d-flex align-items-center justify-content-center" style="background-image: url(images/sermon-3.jpg);">
    						<div class="text-content p-4 text-center">
    							<span>par:</span>
    							<h3>Gilbert Ranaivo</h3>
    							<p class="">
										<a href="https://vimeo.com/45830194" class="btn-custom mb-2 p-2 text-center popup-vimeo"><span class="icon-play"></span> Lire</a>
										<a href="#" class="btn-custom p-2 text-center"><span class="icon-download"></span> Télécharger</a>
									</p>
    						</div>
    					</div>
    					<div class="text pt-3 text-center">
    						<h2 class="mb-0"><a href="sermon.html">Let the Bible Motivate You</a></h2>
    						<div class="meta">
		  						<p class="mb-0">
			  						<span>24 Mars 2021</span>
		  						</p>
		  					</div>
    					</div>
  					</div>
        	</div>

        
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
          	<span class="subheading">Evènements</span>
            <h2 class="mb-5">Evènements à venir</h2>
          </div>
        </div>
				<div class="row">
				<?php	include 'Admin/php/connexion.php';
         		 $reqevents = $bdd->prepare("SELECT * FROM ad_event");
       			  $reqevents->execute();
					while ($showevents = $reqevents->fetch()) {?>
					<!--one events  -->
        	<div class="col-md-12 col-lg-6 col-xl-4">
        		<div class="event-wrap d-flex ftco-animate">
        			<div class="img" style="background-image: url(Admin/images/Evenement/<?= $showevents['image'] ?>);"></div>
        			<div class="text p-4 d-flex align-items-center">
        				<div>
	        				<span class="time"><?= $showevents['date_event'] ?></span>
	        				<h3><a href="#"><?= $showevents['titre_event'] ?></a></h3>
	        				<div class="meta">
		        				<p class="desc1"><span class="icon-user mr-1"></span> by professor: <a href="#">Jerry Simon</a></p>
		        				<p class="desc2"><span class="icon-location"></span> <?= $showevents['description_event'] ?></p>
		        				<p class="mb-0"><span class="btn btn-primary"><?= $showevents['time_event'] ?></a></span>
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
		

		<section class="ftco-section ftco-causes ftco-no-pb" id="causes-section">
			<div class="container">
				<div class="row justify-content-center pb-5">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	<span class="subheading">œuvre de charité</span>
            <h2 class="mb-5">  Nous avons besoin de vous pour</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
          </div>
        </div>
				<div class="row">
				<?php	include 'Admin/php/connexion.php';
         		
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
								<p><a href="#" class="btn btn-primary">Donner maintenant !</a></p>
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
							<h2>On prévoit de récolter prés de<strong class="number" data-number="<?= $total; ?>">0</strong><span>&nbsp;AR</span>&nbsp;/&nbsp;<strong class="number" data-number="<?= $totaleuro; ?>">0</strong><span>&nbsp;$</span></h2>
    					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics </p>
    					<p><a href="#" class="btn btn-black px-4 py-3">Donner maintenant !</a></p>
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
		    				<span class="subheading">Jesus Christ a dit:</span>
		    				<h3>"I tell you, whenever you did this for one of the least important of these members of my family, you did this for me!."</h3>
		    				<h4 class="h5 mt-4 font-weight-bold"><span>Bible:</span> Mattieu 25:40 </h4>
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
            <h2 class="mb-4">Lisez notre blog</h2>
            <p>As body without the spirit is dead, so also faith without actions is dead</p>
          </div>
        </div>
        <div class="row d-flex">
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <a href="single.php" class="block-20" style="background-image: url('images/image_1.jpg');">
              </a>
              <div class="text float-right d-block">
              	<div class="d-flex align-items-center pt-2 mb-4 topp">
              		<div class="one mr-2">
              			<span class="day">24</span>
              		</div>
              		<div class="two">
              			<span class="yr">2021</span>
              			<span class="mos">mars</span>
              		</div>
              	</div>
                <h3 class="heading"><a href="single.php">Why Lead Generation is Key for Business Growth</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                <div class="d-flex align-items-center mt-4 meta">
	                <p class="mb-0"><a href="#" class="btn btn-primary">Lire plus <span class="ion-ios-arrow-round-forward"></span></a></p>
	                <p class="ml-auto mb-0">
	                	<a href="#" class="mr-2">Admin</a>
	                	<a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
	                </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <a href="single.php" class="block-20" style="background-image: url('images/image_2.jpg');">
              </a>
              <div class="text float-right d-block">
              	<div class="d-flex align-items-center pt-2 mb-4 topp">
              		<div class="one mr-2">
              			<span class="day">24</span>
              		</div>
              		<div class="two">
              			<span class="yr">2021</span>
              			<span class="mos">mars</span>
              		</div>
              	</div>
                <h3 class="heading"><a href="single.php">Why Lead Generation is Key for Business Growth</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                <div class="d-flex align-items-center mt-4 meta">
	                <p class="mb-0"><a href="#" class="btn btn-primary">Lire plus <span class="ion-ios-arrow-round-forward"></span></a></p>
	                <p class="ml-auto mb-0">
	                	<a href="#" class="mr-2">Admin</a>
	                	<a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
	                </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry">
              <a href="single.php" class="block-20" style="background-image: url('images/image_3.jpg');">
              </a>
              <div class="text float-right d-block">
              	<div class="d-flex align-items-center pt-2 mb-4 topp">
              		<div class="one mr-2">
              			<span class="day">24</span>
              		</div>
              		<div class="two">
              			<span class="yr">2021</span>
              			<span class="mos">mars</span>
              		</div>
              	</div>
                <h3 class="heading"><a href="single.php">Why Lead Generation is Key for Business Growth</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                <div class="d-flex align-items-center mt-4 meta">
	                <p class="mb-0"><a href="#" class="btn btn-primary">Lire plus <span class="ion-ios-arrow-round-forward"></span></a></p>
	                <p class="ml-auto mb-0">
	                	<a href="#" class="mr-2">Admin</a>
	                	<a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
	                </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section contact-section ftco-no-pb" id="contact-section">
      <div class="container">
      	<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <span class="subheading">Contact</span>
            <h2 class="mb-4">Contactez-nous</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
          </div>
        </div>

        <div class="row block-9">
          <div class="col-md-7 order-md-last d-flex">
            
            <form class="bg-light p-4 p-md-5 contact-form addtomail" >
              
              <div class="form-group">
                <input type="text" class="form-control addtomailname" placeholder="Votre Nom" name="name">
              </div>
              <div class="form-group">
                <input type="email" class="form-control addtomailemail" placeholder="Votre Email" name="email">
              </div>
              <div class="form-group">
                <input type="text" class="form-control addtomailsubject" placeholder="Object" name="objet">
              </div>
              <div class="form-group">
                <textarea  cols="30" rows="7" class="form-control addtomailmsg" placeholder="Message" name="msg"></textarea>
              </div>
              <div class="form-group">
                <input type="submit"  value="Envoyer le message" class="btn btn-primary py-3 px-5 addtomailbtn"><br><br>
               
                <?php include 'Admin/php/error.php'; ?>
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
			          		<h3 class="mb-3">Addrèsse</h3>
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
			          		<h3 class="mb-3">Numéro de contact</h3>
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
			          		<h3 class="mb-3">Addrèsse Email </h3>
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
			          		<h3 class="mb-3">Page Facebook </h3>
				            <p><a href="#">AKANY TAFITA SAHASOA</a></p>
			            </div>
			          </div>
		          </div>
		        </div>
          </div>
        </div>
      </div>
    </section>
		
		<section class="ftco-section ftco-no-pt ftco-no-pb">
			<div id="map" class="bg-white"></div>
		</section>

		<section class="ftco-gallery ftco-section ftco-no-pb mb-4">
    	<div class="container-fluid px-4">
    		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h3 class="subheading">Gallerie</h3>
            <h2 class="mb-1">Akany Tafita/Sahasoa  Gallerie</h2>
          </div>
        </div>
    		<div class="row">
					<div class="col-md-3 ftco-animate">
						<a href="images/gallery_1.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/gallery-1.jpg);">
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
    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2 logo"><span>Akany</span> Tafita/Sahasoa</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                <li class="ftco-animate"><a href="Admin/index.php"><span class="icon-gears"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">About</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Staff</a></li>
                <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Beliefs</a></li>
                <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>History</a></li>
                <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Mission</a></li>
                <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Wedding &amp; Funerals</a></li>
                <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Jobs &amp; Internship</a></li>
                <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Fellowships</a></li>

              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Connect</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Home Groups</a></li>
                <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Recovery Groups</a></li>
                <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Memberships</a></li>
                <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Children &amp; Students</a></li>
                <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Volunteer</a></li>
                <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Counseling</a></li>
                <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Assistance</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Service Hours</h2>
              <div class="opening-hours">
              	<p>Saturday Prayer Meeting: <span class="mb-3">10:00 am to 11:30 am</span></p>
              	<p>Sunday Service: <span class="mb-3">8:30 am to 11:30 am</span></p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This website is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Gilbert</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

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