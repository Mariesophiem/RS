<?php
// $album_id = isset($_GET['album_id']) ? $_GET['album_id'] : die('Album ID not specified.');
$album_id = "271243346571253";
// $album_name = isset($_GET['album_name']) ? $_GET['album_name'] : die('Album name not specified.');
 $album_name = "Photos du journal";


// $page_title = "{$album_name} Photos";

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- Meta Data -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Bienvenue sur le site de Real Spirit">
    <meta name="author" content="">
    <!-- Favicon -->
    <link rel="shortcut icon" href="images/icon.png">
    <title>Real Spirit bienvenue sur notre site</title>
    <!-- Stylesheets -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/nivo-theme.css">
    <link rel="stylesheet" href="css/nivo-lightbox.css">
    <link rel="stylesheet" href="css/animate.css">
    <!-- Main Stylsheets -->
    <link rel="stylesheet" href="css/style_dark.css">
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Color Sheme CSS -->
    <link rel="stylesheet" href="css/color.css">
    <!-- Google Font -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
        <!-- blue imp gallery -->


    <link rel="stylesheet" href="http://blueimp.github.io/Gallery/css/blueimp-gallery.min.css">
    <link rel="stylesheet" href="css/bootstrap-image-gallery.min.css">
    <!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- begin preloader -->
    <div class="preloader">
        <div class="preloader-content-wrapper">
            <div class="preloader-content">
                <i class="fa fa-cog fa-3x fa-spin"></i>
            </div>
        </div>
    </div>
    <!-- end preloader -->
    <!-- begin nav -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span>Menu</span>
                </button>
                <!-- begin logo in navigation -->
                <a class="navbar-brand" href="#intro">
				<img src="images/realspirit.png" alt="Logo Real Spirit">
			</a>
                <!-- end logo in navigation -->
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav pull-right">
                    <!-- begin navigation items -->
                    <li class="current"><a href="#intro">Accueil</a></li>
					<li><a href="distribution.html">Distribution</a></li>
					<li><a href="cocktails.html">Bar à cocktails</a></li>
					<li><a href="team-building.html">Team building</a></li>
					<li><a href="degustation.html">Dégustation</a></li>
					<li><a href="contact.php">Contact</a></li>
                    <!-- end navigation items -->
                </ul>
            </div>
        </div>
    </nav>
    <!-- end nav -->
    <!-- begin intro section -->
    <section class="intro" id="intro">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="intro-section">
                        <!-- begin logo intro section -->
                        <!-- end logo intro section -->
                        <!-- <h1>Distribution - Evennementiel - Formation - Location</h1> -->
                        <br>
                        <h1 class="h1-home">REAL SPIRIT</h1>
                        <hr class="hr-titre">
                        
                     
                            <img src="images/fleur-titre.png" alt="Fleur" class="bienvenue">
                            <h2 class="bienvenue">BIENVENUE</h2>
                            <img src="images/fleur-titre.png" alt="Fleur" class="bienvenue">
                      
                        <hr class="hr-titre">
                        <hr class="hr-titre-2">
                        <br>
                        <a href="#" class="mouse">
						<i class="fa fa-angle-down Drop animated"></i>
					</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end intro section -->

    <!-- debut section présentation -->
    <section class="presentation" id="presentation">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <img class="logo_transparent" src="images/logo-transparent.png" alt="Logo de Real Spirit">
                    <h2 class="h2-home">Notre expertise à votre service</h2>
                    <hr class="hr-home">
                    <p class="p-home">Real Spirit est une société créée en 2010 spécialisée dans la distribution de vins, champagnes et spiritueux ainsi que dans l’animation d’événements autour de la culture du bar. A travers nos produits et services vous pourrez remercier, récompenser ou motiver vos convives.
                        <br> Real Spirit propose un choix de Vins, Champagnes et Spiritueux traditionnels et originaux. L’expertise de la maison réside dans la parfaite connaissance de ses produits ainsi que dans la passion qui l’anime à vous faire découvrir de nouveaux produits. C’est ces deux qualités majeures que nous garantissons la plus-value de nos produits.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- fin section présentation -->

    <!-- debut section menu-page-home -->

<div class="menu-accueil">

<div class="row">
    
<a href="distribution.html">
    <div class="col-xs-12 col-md-5 menu-distrib">
        <h3 class="h3-distrib-home"> <b>Distribution</b></h3>
    </div>
</a>
    <div class="col-xs-12 col-md-5" ">
        <div class="row">
            <a href="degustation.html">
            <div class="col-xs-12 col-md-12 menu-degustation">
                <h3 class="h3-degustation-home">Dégustation</h3>
            </div>
        </a>
        </div>
        <div class="row">
            <a href="cocktails.html">
            <div class="col-xs-12 col-md-6 menu-cocktails">
                <h3 class="h3-cocktails-home">Bar à Cocktails</h3>
            </div>
        </a>
        <a href="contact.html" >
            <div class="col-xs-12 col-md-6 menu-contact"> 
                <h3 class="h3-contact-home"><b><i>Contact</i></b></h3>
            </div>
        </a>
        </div>
    </div>
    <a href="team-building.html">
    <div class="col-xs-12 col-md-2 menu-team">
        <h3 class="h3-team-home"><i>Team Building</i></h3>
    </div>
</a>
</div>

</div>


    <!-- fin menu-page-home -->

	<!-- debut fil facebook -->
	<section class="fil-facebook" id="fil-facebook">	
		<div class="container">	
			<div class="row">
				<div class="col-md-12">	
					<h2>Retrouvez nous sur </h2> 
					<br><br><h2><button class="btn btn-fb"><a href="https://www.facebook.com/REALSpiritLuxembourg/">FACEBOOK</a></button></h2>
				</div>
			</div>
		</div>
	</section>

<!-- SnapWidget -->
<!-- <div class="snapwidget">	
<script src="https://snapwidget.com/js/snapwidget.js"></script>
<iframe src="https://snapwidget.com/embed/469452" class="snapwidget-widget" allowTransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden; width:100%; "></iframe> -->




<div class="container container-fb">
    <div class="row row-fb col-md-8">

<?php
echo "<h1 class='page-header'>";
    echo "Nos dernières photos";
echo "</h1>";
 
$access_token="2014451118775295|1B9-TVb3U7D-Ic3f1MidYl-XCH4";
$json_link = "https://graph.facebook.com/v2.3/{$album_id}/photos?fields=source,images,name&access_token={$access_token}";
$json = file_get_contents($json_link);
 
$obj = json_decode($json, true, 512, JSON_BIGINT_AS_STRING);
 
$photo_count = count($obj['data']);

for($x=0; $x<=11; $x++){
 
    // $source = isset($obj['data'][$x]['source']) ? $obj['data'][$x]['source'] : "";
    $source = isset($obj['data'][$x]['images'][0]['source']) ? $obj['data'][$x]['images'][0]['source'] : ""; //hd image
    $name = isset($obj['data'][$x]['name']) ? $obj['data'][$x]['name'] : "";
 
    echo "<a href='{$source}' data-gallery>";
        echo "<div class='photo-thumb' style='background: url({$source}) 0% 50% / cover no-repeat;'>";
 
        echo "</div>";
    echo "</a>";
 
}
?>


</div>
</div>
 

<!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
<div id="blueimp-gallery" class="blueimp-gallery">
    <!-- The container for the modal slides -->
    <div class="slides"></div>
    <!-- Controls for the borderless lightbox -->
    <h3 class="title"></h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <a class="play-pause"></a>
    <ol class="indicator"></ol>
    <!-- The modal dialog, which will be used to wrap the lightbox content -->
    <div class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" aria-hidden="true">&times;</button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body next"></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left prev">
                        <i class="glyphicon glyphicon-chevron-left"></i>
                        Previous
                    </button>
                    <button type="button" class="btn btn-primary next">
                        Next
                        <i class="glyphicon glyphicon-chevron-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>






















<!-- begin features section -->
<div class="black">
<div class="features soc-icons" id="features">
    <div class="features wow fadeInLeft animated" data-wow-offset="10" data-wow-duration="1.5s">
        
        <!-- begin single feature item -->
        <div class="feature">
            <div class="icon-container">
                <div class="icon">
                	<a href="https://www.facebook.com/REALSpiritLuxembourg/" class="social-icons">
                    	<i class="fa fa-facebook"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="feature">
            <div class="icon-container">
                <div class="icon">
                	<a href="https://www.instagram.com/alexandred_altoe_spirit/" class="social-icons">
                    	<i class="fa fa-instagram"></i>
                    </a>
                </div>
            </div>
        </div>		
        <!-- end single feature item -->
    </div>
</div>
</div>



	<!-- fin fil facebook -->

                
    <!-- end features section -->
  
    <!-- begin footer section -->
    <footer class="footer" id="footer">
        <div class="container">
            <div class="row wow fadeIn animated" data-wow-offset="10" data-wow-duration="1.5s">
                <div class="col-md-3 col-sm-3">
                    <!-- begin logo footer -->
                    <img src="images/footer_logodark.png" alt="Logo de Real Spirit">
                    <!-- end logo footer -->
                </div>
                <div class="col-md-2 col-md-offset-1 col-sm-3">
                    <h4>Plan du site</h4>
                    <div class="underline-small"></div>
                    <ul>
                        <li>
                            <a href="index.php">Accueil</a>
                        </li>
                        <li>
                            <a href="distribution.html">La distribution</a>
                        </li>
                        <li>
                            <a href="cocktails.html">Les Cocktails</a>
                        </li>
                        <li>
                            <a href="teambuilding.html">Team Building</a>
                        </li>
                        <li>
                            <a href="degustation.html">Dégustation</a>
                        </li>
                        <li>
                            <a href="contact.php">Contact</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-2 col-md-offset-1 col-sm-3">
                    <h4>Nous contacter</h4>
                    <div class="underline-small"></div>
                    <ul>
                        <li>Real Spirit</li>
                        <li><a href="tel:+33633344060">+33 6 33 34 40 60</a></li>
                        <li>
                            <a href="mailto:contact@realspirit-france.com">contact@realspirit-france.com</a>
                        </li>
                        <li>
                            <a href="contact.php">Contact<span class="jobs">Venez vite!</span>
                        </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-2 col-md-offset-1 col-sm-3">
                    <h4>Suivez-nous!</h4>
                    <div class="underline-small"></div>
                    <ul class="list-inline">
                        <li>
                            <a href="https://www.facebook.com/REALSpiritLuxembourg/?ref=bookmarks"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/alexandred_altoe_spirit/"><i class="fa fa-instagram"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
                   <div class="footer-copy">
                    <p><small>&copy; Copyright - 2017 - Real Spirit - All Rights Reserved - <a href="mentions-legales.html" class="link-mentions-legales">Mentions Légales</a> - L'abus d'alcool est dangereux pour la santé. A consommer avec modération.</small></p>
        </div>
        </div>
    </footer>
    <!-- end footer section -->
    <!-- Javascripts -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.fitvids.js"></script>
    <script src="js/smoothScroll.js"></script>
    <script src="js/nivo-lightbox.min.js"></script>
    <script src="js/jquery.scrollTo.js"></script>
    <script src="js/jquery.nav.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/jquery.jigowatt.js"></script>

    <script src="http://blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
<script src="js/bootstrap-image-gallery.min.js"></script>


    <!-- Custom Javascript -->
    <script src="js/main.js"></script>

    <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
 
<!-- to make photos full view -->
<script>
$('#blueimp-gallery').data('useBootstrapModal', false);
$('#blueimp-gallery').toggleClass('blueimp-gallery-controls', true);
</script>


</body>

</html>