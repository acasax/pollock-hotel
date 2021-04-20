<!DOCTYPE html>
<html lang="en">

<head>

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-FM396XJE5F"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-FM396XJE5F');
  </script>

  <!--================ Basic page needs ================-->
  <title>Pollockhotel / Kontakt</title>
  <meta charset="UTF-8">
  <meta name="author" content="">
  <meta name="keywords" content="">
  <meta name="description" content="">
  <!--================ Mobile specific metas ================-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--================ Favicon ================-->
  <link rel="shortcut icon" href="../images/favicon.ico">
  <!--================ Google web fonts ================-->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Old+Standard+TT:400,400i,700|Open+Sans:200,300,400,400i,600,600i,700,700i,800,800i|Playfair+Display:400,400i,700,700i,900,900i|Frank+Ruhl+Libre:500">
  <!--================ Vendor CSS ================-->
  <link rel="stylesheet" href="../css/animate.min.css">
  <link rel="stylesheet" href="../ss/fontawesome-all.min.css">
  <link rel="stylesheet" href="../css/linearicons.css">
  <link rel="stylesheet" href="../css/milenia-icon-font.css">
  <link rel="stylesheet" href="../vendors/fancybox/jquery.fancybox.min.css">
  <link rel="stylesheet" href="../vendors/arcticmodal/jquery.arcticmodal-0.3.css">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/sweetalert.css">
  <!--================ Theme CSS ================-->
  <link rel="stylesheet" href="../css/style.css">
  <!--================ Vendor JS ================-->
</head>

<body class="milenia-body--scheme-blue milenia-body--border-layout">
  <div class="milenia-preloader"></div>
  <?php include "../sr/php_vendors/elements/navbar.php" ?>
  <!--================ End of Header ================-->
  <!--================ Breadcrumb ================-->
  <!--================ End of Breadcrumb ================-->
  <div class="milenia-content milenia-content--no-pt ">
    <div class="container">
      <!--================ Section ================-->
      <div class="milenia-section">
        <div class="row">
          <main class="col-lg-4">
            <div class="linear-gradient-b">
              <h3 class="linear-gradient-t">Kontakt</h3>
            </div>
            <ul class="milenia-details-list milenia-list--unstyled">
              <li><span class="milenia-tc--dark">Adresa:&nbsp;</span>Ribarska banja, Srbija</li>
              <li><span class="milenia-tc--dark">Telefon:&nbsp;</span>037/ 865-125</li>
              <li><span class="milenia-tc--dark">Email:&nbsp;</span><a href="mailto:#">info@hotelpollock.com</a></li>
              <li><span class="milenia-tc--dark">Ostanite povezani:</span>
                <ul class="milenia-social-icons">
                  <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                  <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fab fa-tripadvisor"></i></a></li>
                  <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                </ul>
              </li>
            </ul>
          </main>
          <aside class="col log-8">
            <div class="linear-gradient-b">
              <h3 class="linear-gradient-t">Voleli bismo da čujemo od vas!</h3>
            </div>
            <p>Slobodno nam pošaljite sva pitanja koja imate. Rado ćemo odgovoriti.</p>
            <form id="form_sr" method="post" enctype="multipart/form-data" class="contact-form">
              <div class="col-12">
                <label for="name">Vaše ime</label>
                <input type="text" id="name" name="name" class="form-control" onblur="$(this).valid()">
              </div>
              <div class="col-12">
                <label for="email">Vaš email</label>
                <input type="email" class="email form-control" id="email" name="email" onblur="$(this).valid()">
              </div>
              <div class="col-12">
                <label for="phone">Vaš telefon</label>
                <input type="text" id="phone" name="phone" class="phone_number form-control" onblur="$(this).valid()">
              </div>
              <div class="col-12">
                <label for="message">Vaša poruka</label>
                <textarea id="message" name="message" rows="7" class="form-control" onblur="$(this).valid()"></textarea>
                <input type="hidden" name="recaptcha_response" id="recaptchaResponse">
              </div>
              <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                <button type="submit" class="milenia-btn">Pošalji</button>
                <div id="msgSubmit" class="h3 text-center hidden"></div>
                <div class="clearfix"></div>
              </div>
            </form>
          </aside>
        </div>
      </div>
      <!--================ End of Section ================-->

      <!--================ End of Content Section ================-->
    </div>
  </div>
  <!--================ Footer ================-->
  <?php include "../sr/php_vendors/elements/footer.php" ?>
  <!--================ End of Footer ================-->
  </div>
  <script src="../vendors/modernizr.js"></script>
  <script src="../vendors/jquery-3.3.1.min.js"></script>
  <script src="../vendors/nicescroll/jquery.nicescroll.min.js"></script>
  <script src="../vendors/jquery.easing.1.3.min.js"></script>
  <script src="../vendors/monkeysan.jquery.nav.1.0.min.js"></script>
  <script src="../vendors/arcticmodal/jquery.arcticmodal-0.3.min.js"></script>
  <script src="../vendors/fancybox/jquery.fancybox.min.js"></script>
  <script src="../vendors/monkeysan.validator.min.js"></script>
  <script src="../vendors/handlebars-v4.0.5.min.js"></script>
  <script src="../vendors/mad.customselect.js"></script>
  <script src="../vendors/retina.min.js"></script>
  <script src="../js/modules/milenia.newsletter-form.min.js"></script>
  <script src="../js/modules/milenia.contact-form.js"></script>
  <script src="../js/modules/milenia.sidebar-hidden.min.js"></script>
  <script src="../js/modules/milenia.alert-box.min.js"></script>
  <script src="../js/modules/milenia.sticky-header-section.min.js"></script>
  <script src="../js/milenia.app.js"></script>
  <script src="../js/mail.js"></script>
  <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.3.4/jquery.inputmask.bundle.min.js"></script>
  <script src="../js/phonevalidate.js"></script>
  <script src="../js/weatherapi.js"></script>
  <!--reCAPTCHA -->
  <script src="https://www.google.com/recaptcha/api.js?render=6LcA-KoaAAAAAEQM7Goe4_Rb8T3sut1L5Ep2IBpB"></script>
  <script src="../js/recaptcha.js"></script>
  <script src="../js/sweetalert.js"></script>

  <script src="../js/jquery.validate.min.js"></script>
  
  <script src="https://www.google.com/recaptcha/api.js?render=6LcA-KoaAAAAAEQM7Goe4_Rb8T3sut1L5Ep2IBpB"></script>
  <script src="../js/recaptcha.js"></script>
  <script src="../js/sweetalert.js"></script>
</body>

</html>