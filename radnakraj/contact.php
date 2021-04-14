<!DOCTYPE html>
<html lang="en">

<head>
  <!--================ Basic page needs ================-->
  <title>Pollockhotel / Contact</title>
  <meta charset="UTF-8">
  <meta name="author" content="">
  <meta name="keywords" content="">
  <meta name="description" content="">
  <!--================ Mobile specific metas ================-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--================ Favicon ================-->
  <link rel="shortcut icon" href="images/favicon.ico">
  <!--================ Google web fonts ================-->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Old+Standard+TT:400,400i,700|Open+Sans:200,300,400,400i,600,600i,700,700i,800,800i|Playfair+Display:400,400i,700,700i,900,900i|Frank+Ruhl+Libre:500">
  <!--================ Vendor CSS ================-->
  <link rel="stylesheet" href="css/animate.min.css">
  <link rel="stylesheet" href="css/fontawesome-all.min.css">
  <link rel="stylesheet" href="css/linearicons.css">
  <link rel="stylesheet" href="css/milenia-icon-font.css">
  <link rel="stylesheet" href="vendors/fancybox/jquery.fancybox.min.css">
  <link rel="stylesheet" href="vendors/arcticmodal/jquery.arcticmodal-0.3.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!--================ Theme CSS ================-->
  <link rel="stylesheet" href="css/style.css">
  <!--================ Vendor JS ================-->
</head>

<body class="milenia-body--scheme-blue milenia-body--border-layout">
  <div class="milenia-preloader"></div>
  <?php include "php_vendors/elements/navbar.php" ?>
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
              <h3 class="linear-gradient-t">Contact</h3>
            </div>

            <!--================ Google Map ================-->
            <!--<div id="gmap-1" data-height="340px" data-locations="[{&quot;lat&quot;: 40.7707307, &quot;lon&quot;: -74.0210859, &quot;icon&quot;: &quot;images/marker-blue.png&quot;, &quot;title&quot;: &quot;Main office&quot;}]" class="milenia-gmap"></div>-->
            <!--================ End of Google Map ================-->
            <ul class="milenia-details-list milenia-list--unstyled">
              <li><span class="milenia-tc--dark">Address:&nbsp;</span>Ribarska banja, Serbia</li>
              <li><span class="milenia-tc--dark">Phone:&nbsp;</span>037/ 865-125</li>
              <li><span class="milenia-tc--dark">Email:&nbsp;</span><a href="mailto:#">info@hotelpollock.com</a></li>
              <li><span class="milenia-tc--dark">Stay Connected:</span>
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
              <h3 class="linear-gradient-t">We would like to hear from you!</h3>
            </div>

            <p>Feel free to contact us. We will be glad to answer you.</p>
            <form id="form" method="post" enctype="multipart/form-data" class="contact-form">
              <div class="col-12">
                <label for="name">Your name</label>
                <input type="text" id="name" name="name" class="form-control" placeholder="Name" onblur="$(this).valid()">
              </div>
              <div class="col-12">
                <label for="email">Your email</label>
                <input type="email" class="email form-control" id="email" name="email" placeholder="Email" onblur="$(this).valid()">
              </div>
              <div class="col-12">
                <label for="phone">Your phone</label>
                <input type="text" id="phone" name="phone" class="phone_number form-control" placeholder="Phone:" onblur="$(this).valid()">
              </div>
              <div class="col-12">
                <label for="message">Your Message</label>
                <textarea id="message" name="message" rows="7" placeholder="Message:" class="form-control" onblur="$(this).valid()"></textarea>
                <!--<input type="hidden" name="recaptcha_response" id="recaptchaResponse">-->
              </div>
              <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                <button type="submit" class="milenia-btn">Send</button>
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
  <?php include "php_vendors/elements/footer.php" ?>
  <!--================ End of Footer ================-->
  </div>
  <script src="vendors/modernizr.js"></script>
  <script src="vendors/jquery-3.3.1.min.js"></script>
  <script src="vendors/nicescroll/jquery.nicescroll.min.js"></script>
  <script src="vendors/jquery.easing.1.3.min.js"></script>
  <script src="vendors/monkeysan.jquery.nav.1.0.min.js"></script>
  <!--<script src="http://maps.google.com/maps/api/js?key=AIzaSyDe0Jbcnve8wjMa7p4ZzFpKSxCU8pNUjaw&amp;amp;libraries=geometry&amp;amp;v=3.20"></script>
    <script src="vendors/maplace-0.1.3.min.js"></script>-->
  <script src="vendors/arcticmodal/jquery.arcticmodal-0.3.min.js"></script>
  <script src="vendors/fancybox/jquery.fancybox.min.js"></script>
  <script src="vendors/monkeysan.validator.min.js"></script>
  <script src="vendors/handlebars-v4.0.5.min.js"></script>
  <script src="vendors/mad.customselect.js"></script>
  <script src="vendors/retina.min.js"></script>
  <script src="js/modules/milenia.newsletter-form.min.js"></script>
  <script src="js/modules/milenia.contact-form.js"></script>
  <script src="js/modules/milenia.sidebar-hidden.min.js"></script>
  <script src="js/modules/milenia.alert-box.min.js"></script>
  <script src="js/modules/milenia.sticky-header-section.min.js"></script>
  <script src="js/milenia.app.js"></script>
  <script src="js/mail.js"></script>
  <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.3.4/jquery.inputmask.bundle.min.js"></script>
  <script src="js/phonevalidate.js"></script>
</body>

</html>