<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>coms</title>
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="../css/showcoms.css">
  <style type="text/css">
    body {
   
}

.date {
    font-size: 11px
}

.comment-text {
    font-size: 16px
}

.fs-12 {
    font-size: 16px;
    background: #eee;
    border-radius: 35px;
}

.shadow-none {
    box-shadow: none
}

.name {
    color: #a02836
}

.cursor:hover {
    color: blue
}

.cursor {
    cursor: pointer
}

.textarea {
    resize: none
}

.fa-facebook {
    color: #3b5999
}

.fa-twitter {
    color: #55acee
}

.fa-linkedin {
    color: #0077B5
}

.fa-instagram {
    color: #e4405f
}

.fa-dribbble {
    color: #ea4c89
}

.fa-pinterest {
    color: #bd081c
}

.fa {
    cursor: pointer
}
  </style>
</head>
<body>
   <div class="pt-2 mt-1">
              <div class="comment-form-wrap pt-5">
                <h3 class="mb-5">All comments</h3>

                 <?php include 'connexion.php';
              $reqcoms = $bdd->prepare("SELECT * FROM commentaires WHERE id_blog = ?");
              $reqcoms->execute(array($get_id_blog));
              $comsexist = $reqcoms->rowCount ();
              if ($comsexist != 0) {
                $l = 0;
                while ($recentcoms = $reqcoms->fetch()) {
                  $l = $l+1;
                 
                 
                  ?>
              <!-- one coms -->
              
              <div class="container mt-2">
                        <div class="d-flex justify-content-center row">
                            <div class="col-md-8" style="border: 1px solid #a02836; border-radius: 7px; width: 100%;">
                                <div class="d-flex flex-column comment-section" id="myGroup">
                                    <div class="bg-white p-2">
                                        <div class="d-flex flex-row user-info"><img class="rounded-circle" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcThGxkc0p3zegXYWPFNvXV8IJtlqAm5nIB2yY2JtKxeFcF_wH8P9zf7DsP01Wc-xIqJ51I&usqp=CAU" width="50" style="border:3px solid #a02836;">
                                            <div class="d-flex flex-column justify-content-start ml-2"><span class="d-block font-weight-bold name"><?= $recentcoms['nom_commentateur'] ?></span><span class="date text-black-50">Shared publicly - Jan 2020</span></div>
                                        </div>
                                        <div class="mt-2">
                                            <p class="comment-text"><?= $recentcoms['commentaire'] ?></p>
                                        </div>
                                    </div>
                                    <div class="bg-white p-2">
                                        <div class="d-flex flex-row fs-12">
                                            <div class="like p-2 cursor"><i class="fa fa-thumbs-o-up"></i><span class="ml-1">Like</span></div>
                                            <div class="like p-2 cursor action-collapse" data-toggle="collapse" aria-expanded="true" aria-controls="collapse-1" href="#collapse-1<?=$l?>"><i class="fa fa-reply"></i><span class="ml-1">Reply</span></div>
                                            <div class="like p-2 cursor action-collapse" data-toggle="collapse" aria-expanded="true" aria-controls="collapse-2" href="#collapse-2<?=$l?>"><i class="fa fa-share"></i><span class="ml-1">Share</span></div>
                                        </div>
                                    </div>
                                    <div id="collapse-1<?=$l?>" class="bg-light p-2 collapse" data-parent="#myGroup">
                                        <!-- one reply -->
                                            <div class="container mt-2">
                                                    <div class="d-flex justify-content-center row">
                                                        <div class="col-md-8" style="border: 1px solid #a02836; border-radius: 7px; width: 100%;">
                                                            <div class="d-flex flex-column comment-section" id="myGroup">
                                                                <div class="bg-white p-2">
                                                                    <div class="d-flex flex-row user-info"><img class="rounded-circle" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcThGxkc0p3zegXYWPFNvXV8IJtlqAm5nIB2yY2JtKxeFcF_wH8P9zf7DsP01Wc-xIqJ51I&usqp=CAU" width="50" style="border:3px solid #a02836;">
                                                                        <div class="d-flex flex-column justify-content-start ml-2"><span class="d-block font-weight-bold name"><?= $recentcoms['nom_commentateur'] ?></span><span class="date text-black-50">Shared publicly - Jan 2020</span></div>
                                                                    </div>
                                                                    <div class="mt-2">
                                                                        <p class="comment-text"><?= $recentcoms['commentaire'] ?></p>
                                                                    </div>
                                                                </div>
                                                                <div class="bg-white p-2">
                                                                    <div class="d-flex flex-row fs-12">
                                                                        <div class="like p-2 cursor"><i class="fa fa-thumbs-o-up"></i><span class="ml-1">Like</span></div>
                                                                        <div class="like p-2 cursor action-collapse" data-toggle="collapse" aria-expanded="true" aria-controls="collapse-1" href="#collapse-1<?=$l?>"><i class="fa fa-reply"></i><span class="ml-1">Reply</span></div>
                                                                        <div class="like p-2 cursor action-collapse" data-toggle="collapse" aria-expanded="true" aria-controls="collapse-2" href="#collapse-2<?=$l?>"><i class="fa fa-share"></i><span class="ml-1">Share</span></div>
                                                                    </div>
                                                                </div>
                                                                <div id="collapse-1<?=$l?>" class="bg-light p-2 collapse" data-parent="#myGroup">
                                                                    <div class="d-flex flex-row align-items-start" ><img class="rounded-circle" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcThGxkc0p3zegXYWPFNvXV8IJtlqAm5nIB2yY2JtKxeFcF_wH8P9zf7DsP01Wc-xIqJ51I&usqp=CAU" width="40" style="border:3px solid #a02836;"><textarea class="form-control ml-1 shadow-none textarea"></textarea></div>
                                                                    <div class="mt-2 text-right"><button class="btn btn-primary btn-sm shadow-none" type="button">Post comment</button><button class="btn btn-outline-primary btn-sm ml-1 shadow-none" type="button">Cancel</button></div>
                                                                </div>
                                                                <div id="collapse-2<?=$l?>" class="bg-light p-2 collapse" data-parent="#myGroup">
                                                                    <div class="d-flex flex-row align-items-start"><i class="fa fa-facebook border p-3 rounded mr-1"></i><i class="fa fa-twitter border p-3 rounded mr-1"></i><i class="fa fa-linkedin border p-3 rounded mr-1"></i><i class="fa fa-instagram border p-3 rounded mr-1"></i><i class="fa fa-dribbble border p-3 rounded mr-1"></i> <i class="fa fa-pinterest-p border p-3 rounded mr-1"></i> </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        <!-- end one reply -->
                                        <div class="d-flex flex-row align-items-start" ><img class="rounded-circle" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcThGxkc0p3zegXYWPFNvXV8IJtlqAm5nIB2yY2JtKxeFcF_wH8P9zf7DsP01Wc-xIqJ51I&usqp=CAU" width="40" style="border:3px solid #a02836;"><textarea class="form-control ml-1 shadow-none textarea"></textarea></div>
                                        <div class="mt-2 text-right"><button class="btn btn-primary btn-sm shadow-none" type="button">Post comment</button><button class="btn btn-outline-primary btn-sm ml-1 shadow-none" type="button">Cancel</button></div>
                                    </div>
                                    <div id="collapse-2<?=$l?>" class="bg-light p-2 collapse" data-parent="#myGroup">
                                        <div class="d-flex flex-row align-items-start"><i class="fa fa-facebook border p-3 rounded mr-1"></i><i class="fa fa-twitter border p-3 rounded mr-1"></i><i class="fa fa-linkedin border p-3 rounded mr-1"></i><i class="fa fa-instagram border p-3 rounded mr-1"></i><i class="fa fa-dribbble border p-3 rounded mr-1"></i> <i class="fa fa-pinterest-p border p-3 rounded mr-1"></i> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <!-- end one coms -->
                  <?php } 
            }?>
               
              </div>
            </div>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>