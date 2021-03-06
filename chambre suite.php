<!DOCTYPE html>
<html>

<head>
    <title>Hôtel Hypnos</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link href="css/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">
</head>

<body style="margin-top:50px;">
<?php
      include('barre de menu.php')
  ?>
    <br><br><br>
    <div class="container-fluid" style="margin-top:2%;">
        <div class="continer">
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-7">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                            <li data-target="#myCarousel" data-slide-to="3"></li>
                            <li data-target="#myCarousel" data-slide-to="4"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="image/Suit Room/img1.jpg" class="thumbnail" alt="img1">
                            </div>

                            <div class="item">
                                <img src="image/Suit Room/img2.jpg" class="thumbnail" alt="im2">
                            </div>

                            <div class="item">
                                <img src="image/Suit Room/img3.jpg" class="thumbnail" alt="im3">
                            </div>

                            <div class="item">
                                <img src="image/Suit Room/img4.jpg" class="thumbnail" alt="img4">
                            </div>

                            <div class="item">
                                <img src="image/Suit Room/img5.jpg" class="thumbnail" alt="img5">
                            </div>
                        </div>

                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                            <span class="sr-only">Précédent</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                            <span class="sr-only">Prochain</span>
                        </a>
                    </div>
                    <h2 class="Ac_Room_Text">Chambre suite</h2>
                    <p class="text-justify">Profitez d'une meilleure vue depuis le coin salon attenant. Version améliorée de la chambre de luxe, ces chambres offrent un design élégant avec un grand espace.</p>
                    <div class="row">
                        <h2>Moyens de confort</h2>
                        <img src="image/icon/wifi.png">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4 align="center">Type de chambre</h4>
                        </div><br>
                        <div class="panel-body-right text-center">
                            <a href="chambre de luxe.php">Chambre de luxe</a>
                            <hr>
                            <a href="chambre standard.php">Chambre standard</a>
                            <hr>
                            <a href="suite de luxe.php">Suite de luxe</a>
                            <hr>
                            <a href="chambre twin deluxe.php">Chambre twin de luxe</a>
                            <hr>
                            <a href="chambre suite.php">Chambre suite</a>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
  include('bas de page.php')
?>
</body>

</html>