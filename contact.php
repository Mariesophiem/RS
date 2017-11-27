<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';
/**
 * This example shows how to handle a simple contact form.
 */
$msg = '';
//Don't run this unless we're handling a form submission
if (array_key_exists('email', $_POST)) {
    date_default_timezone_set('Etc/UTC');
    require 'PHPMailer-master/PHPMailerAutoload.php';
    //Create a new PHPMailer instance
    $mail = new PHPMailer;
    //Tell PHPMailer to use SMTP - requires a local mail server
    //Faster and safer than using mail()
    $mail->isSMTP();
    $mail->Host = 'aspmx.l.google.com';
    $mail->Port = 25;
    //Use a fixed address in your own domain as the from address
    //**DO NOT** use the submitter's address here as it will be forgery
    //and will cause your messages to fail SPF checks
    $mail->setFrom($_POST['email'], $_POST['name']);
    //Send the message to yourself, or whoever should receive contact for submissions
    $mail->addAddress('mayormaries@gmail.com', 'Marie-Sophie Mayor');
    //Put the submitter's address in a reply-to header
    //This will fail if the address provided is invalid,
    //in which case we should ignore the whole request
    if ($mail->addReplyTo($_POST['email'], $_POST['name'])) {
        $mail->Subject = 'REAL SPIRIT - Demande de contact de '.$_POST['name'].'';
        //Keep it simple - don't use HTML
        $mail->isHTML(false);
        //Build a simple message body
        $mail->Body = <<<EOT
            Nom : {$_POST['name']}
            E-mail : {$_POST['email']}
            Téléphone : {$_POST['telephone']}
            Entreprise : {$_POST['company']}
            Message : {$_POST['message']}
EOT;
        //Send the message, check for errors
        if (!$mail->send()) {
            //The reason for failing to send will be in $mail->ErrorInfo
            //but you shouldn't display errors to users - process the error, log it on your server.
            $msg = 'Une erreur est survenue, merci de réessayer ultérieurement.';

        } else {
            $msg = 'Votre message a bien été envoyé. Nous vous recontacterons dans les meilleurs délais.';
        }
    } else {
        $msg = 'Merci d\'entrer une adresse e-mail valide.';
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Data -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Prenez contact avec nous via cette page">
    <meta name="author" content="">
    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.ico">
    <title>Real Spirit : Page de contact</title>
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
                <img src="images/realspirit.png" alt="Logo de Real Spirit">
            </a>
                <!-- end logo in navigation -->
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav pull-right">
                    <!-- begin navigation items -->
                    <li><a href="index_dark.html">Accueil</a></li>
                    <li><a href="distribution.html">Distribution</a></li>
                    <li><a href="cocktails.html">Bar à cocktails</a></li>
                    <li><a href="team-building.html">Team building</a></li>
                    <li><a href="degustation.html">Dégustation</a></li>
                    <li class="current"><a href="contact.php">Contact</a></li>
                    <!-- end navigation items -->
                </ul>
            </div>
        </div>
    </nav>
    <!-- end nav -->
    <!-- begin intro section -->
    <section class="intro-contact" id="intro">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="intro-section">
                        <!-- begin logo intro section -->
                        <!-- end logo intro section -->
                        <!-- <h1>Distribution - Evennementiel - Formation - Location</h1> -->
                        <h1 class="h1-slide-distrib">Contact</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end intro section -->



<section class="contact" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="heading">Besoin d’un devis ou juste envie de nous dire bonjour ?</h2>
                    <br>
<div class="contact-form">
                    <?php if (!empty($msg)) {
                        echo "<p>$msg</p>";
                    } ?>

                    <form method="POST">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" id="name"  placeholder="Nom*" required>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" id="email"  placeholder="Email*" required>
                        </div>
                        <div class="form-group">
                            <input type="tel" name="telephone" class="form-control" id="telephone"  placeholder="Téléphone*" required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="company" class="form-control" id="company"  placeholder="Entreprise">
                        </div>
                        <div class="form-group">
                            <textarea name="message" class="form-control" rows="6" id="message"  placeholder="Message*" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-theme-bg">Envoyer</button>
                    </form>
                    <!--form-->
                </div>
            </div>
        </div>
    </div>
</section>



    



    <!-- begin footer section -->
    <footer class="footer" id="footer">
        <div class="container">
            <div class="row wow fadeIn animated" data-wow-offset="10" data-wow-duration="1.5s">
                <div class="col-md-3 col-sm-3">
                    <!-- begin logo footer -->
                    <img src="images/footer_logodark.png" alt="Logo de Real Spirit">
                    <!-- end logo footer -->
                    <p><small>&copy; Copyright - 2017 - Real Spirit - All Rights Reserved - <a href="mentions-legales.html" class="link-mentions-legales">Mentions Légales</a></small></p>
                </div>
                <div class="col-md-2 col-md-offset-1 col-sm-3">
                    <h4>Plan du site</h4>
                    <div class="underline-small"></div>
                    <ul>
                        <li>
                            <a href="index.html">Accueil</a>
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
                            <a href="https://www.facebook.com/REALSpiritLuxembourg/"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/alexandred_altoe_spirit/"><i class="fa fa-instagram"></i></a>
                        </li>
                    </ul>
                </div>
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
    <!-- Custom Javascript -->
    <script src="js/main.js"></script>
</body>

</html>