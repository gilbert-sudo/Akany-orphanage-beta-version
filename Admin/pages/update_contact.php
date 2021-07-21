<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Mise à jour des contacts</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- bootstrap wysihtml5 - text editor -->
    <link href="../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
    <!-- iCheck for checkboxes and radio inputs -->
    <link href="../plugins/iCheck/minimal/blue.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="../dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href="../dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/font-awesome.css" rel="stylesheet" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="skin-blue">
     <?php include '../php/profil.php'; ?>
    <div class="wrapper">
      
<header class="main-header">
        <a href="#" class="logo"><b><?= $showprofil['username_admin']; ?></b></a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              <li class="dropdown messages-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-envelope-o"></i>
                  <span class="label label-success">4</span>
                </a>
               
              </li>
           
              <li class="dropdown notifications-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-bell-o"></i>
                  <span class="label label-warning">10</span>
                </a>
              
              </li>
              <li class="dropdown tasks-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-flag-o"></i>
                  <span class="label label-danger">9</span>
                </a>
                
              </li>
            
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="../images/admin/<?= $showprofil['image_admin']; ?>" class="user-image" alt="User Image"/>
                  <span class="hidden-xs"><?= $showprofil['username_admin']; ?></span>
                </a>
             
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
           <div class="user-panel">
            <div class="pull-left image">
              <img src="../images/admin/<?= $showprofil['image_admin']; ?>" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
              <p><?= $showprofil['username_admin']; ?></p>

              <a href="#"><i class="fa fa-circle text-success"></i> En ligne</a>
            </div>
          </div>

        <ul class="sidebar-menu">
          

            <li class="treeview">
              <a href="accueil.php">
                <i class="fa fa-home"></i> <span>Accueil</span>
              </a>
              
            </li>

             <li class="treeview">
              <a href="#">
                <i class="glyphicon glyphicon-folder-close"></i>
                <span>Gestion des responsables</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="ad_responsable.php"><i class="fa fa-user"></i>Ajouter une responsable</a></li>
                <li><a href="gerer_resp.php"><i class= "fa fa-group"></i>Gérer les responsables</a></li>
              </ul>
            </li>

            <li class="treeview">
              <a href="#">
                <i class="glyphicon glyphicon-folder-close"></i>
                <span>Gestion des événements</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="ad_event.php"><i class="fa fa-globe"></i>Ajouter un évènement</a></li>
                <li><a href="gerer_event.php"><i class= "fa fa-star"></i>Gérer les évenénements</a></li>
              </ul>
            </li>
             
              <li class="treeview">
              <a href="#">
                <i class="glyphicon glyphicon-folder-close"></i>
                <span>Gestion des dons</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="demande_dons.php"><i class="fa fa-bullhorn"></i> Demmande des dons</a></li>
                <li><a href="gerer_dons.php"><i class= "fa fa-cogs"></i>Gérer les dons</a></li>
              </ul>
            </li>

            <li class="treeview">
              <a href="#">
                <i class="fa fa-users"></i>
                <span>Gestion des temoignages</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="ad_witness.php"><i class="glyphicon glyphicon-user"></i> Ajouter des témoignages</a></li>
                <li><a href="gerer_temoignage.php"><i class= "glyphicon glyphicon-folder-close"></i>Gérer les témoignages</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-file"></i>
                <span>Gestion des blogs</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="ad_blog.php"><i class="fa fa-file-text-o"></i>Ajouter un blog</a></li>
                <li><a href="gerer_blog.php"><i class= "fa fa-file-text"></i>Gérer les blogs</a></li>
              </ul>
            </li>
          
           <li class="treeview">
              <a href="mailbox/mailbox.php">
                <i class="fa fa-envelope"></i> <span>Boîte E-mail</span>
                <small class="label pull-right bg-yellow">12</small>
              </a>
            </li>
            <li class="active treeview">
              <a href="update_contact.php">
                <i class="fa fa-pencil-square-o"></i> <span>Mise à jour des contacts</span>
              </a>
              
            </li>
            <li class="treeview">
              <a href="#">
                <i class="glyphicon glyphicon-folder-close"></i>
                <span>Gestion des services</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="ad_service.php"><i class="fa fa-globe"></i>Ajouter service</a></li>
                <li><a href="gerer_service.php"><i class= "fa fa-star"></i>Gérer les services</a></li>
              </ul>
            </li>
           <li class="treeview">
              <a href="#">
                <i class="fa fa-gear"></i>
                <span>Paramètres</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="p_general.php"><i class="glyphicon glyphicon-wrench"></i> General</a></li>
                <li><a href="../php/logout.php"><i class="glyphicon glyphicon-log-out"></i> Deconnexion</a></li>
              </ul>
            </li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

    </div><!-- ./wrapper -->
     <div class="content-wrapper" >

        <section class="content">
    <h3 class="box-title"><b>Paramètres</b></h3>
                
                <div class="row">
                <div class="col-md-6">
              <!-- Default box -->
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Ajouter des contacts</h3>
               </div>
                <div class="box-body">
                  <form method="POST" enctype="multipart/form-data" action="#">
                  <label>Adresse:</label><br><input type="text" class="form-control" name="ad" placeholder="Adresse"><br>
                  <label>N° téléphone:</label><br><input type="text" class="form-control" name="phone" placeholder="n° téléphone"><br>
                  <label>Adresse Email:</label><br><input type="text" class="form-control" name="email" placeholder="Email"><br>
                   <label>Pages facebook:</label><br><input type="text" class="form-control" name="fb" placeholder="Page facebook"><br>
                   <div style="margin-top: 60px; margin-left:3px;">
                    <button type="submit" class="btn btn-primary" name="valider">Ajouter</button>
                  </div>
                  <?php include '../php/ad_contact.php';
                  include '../php/error.php'; ?>

                  
                </form>
              </div>
            </div>
          </div>
           <div class="col-md-6">
              <!-- Default box -->
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Modifier les contacts</h3>
               </div>
                <div class="box-body">
                  <form method="POST" enctype="multipart/form-data" action="#">
                  <label>Nouveau nom d'utilisateur</label><br><input type="text" class="form-control" name="newnom" placeholder="Nom d'utilisateur"><br>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>

   
    <!-- jQuery 2.1.3 -->
    <script src="../plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="../bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- Slimscroll -->
    <script src="../plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='../plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="../dist/js/app.min.js" type="text/javascript"></script>    
    <!-- Bootstrap WYSIHTML5 -->
    <script src="../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
    <!-- iCheck -->
    <script src="../plugins/iCheck/icheck.min.js" type="text/javascript"></script>
    <!-- Page script -->
    <script type="text/javascript">
      $(function () {

        "use strict";

        //iCheck for checkbox and radio inputs
        $('input[type="checkbox"]').iCheck({
          checkboxClass: 'icheckbox_minimal-blue',
          radioClass: 'iradio_minimal-blue'
        });

        //When unchecking the checkbox
        $("#check-all").on('ifUnchecked', function (event) {
          //Uncheck all checkboxes
          $("input[type='checkbox']", ".table-mailbox").iCheck("uncheck");
        });
        //When checking the checkbox
        $("#check-all").on('ifChecked', function (event) {
          //Check all checkboxes
          $("input[type='checkbox']", ".table-mailbox").iCheck("check");
        });
        //Handle starring for glyphicon and font awesome
        $(".fa-star, .fa-star-o, .glyphicon-star, .glyphicon-star-empty").click(function (e) {
          e.preventDefault();
          //detect type
          var glyph = $(this).hasClass("glyphicon");
          var fa = $(this).hasClass("fa");

          //Switch states
          if (glyph) {
            $(this).toggleClass("glyphicon-star");
            $(this).toggleClass("glyphicon-star-empty");
          }

          if (fa) {
            $(this).toggleClass("fa-star");
            $(this).toggleClass("fa-star-o");
          }
        });

        //Initialize WYSIHTML5 - text editor
        $("#email_message").wysihtml5();
      });
    </script>
    <!-- AdminLTE for demo purposes -->
    <script src="../dist/js/demo.js" type="text/javascript"></script>
  </body>
</html>
