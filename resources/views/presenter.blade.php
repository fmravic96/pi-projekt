<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Presentator</title>

    <!-- Bootstrap core CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="{{URL::asset('css/freelancer.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/simple-sidebar.css')}}" rel="stylesheet">

  </head>
  <body id="wrapper">
    
    @include('layouts.presentorMenu')
    <!-- Header -->
    <header class="masthead bg-primary text-white text-center">
      <div class="container">
        <img class="img-fluid mb-5 d-block mx-auto" src="img/profile.png" alt="">
        <!--
        <h1 class="text-uppercase mb-0">Start Bootstrap</h1>
        <hr class="star-light">-->
        <h2 class="font-weight-bold text-uppercase mb-0">Flyer</h2>
      </div>
    </header>

    <!-- Katalozi Grid Section -->
    <section class="catalog" id="catalog">
      <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0">catalog</h2>
        <hr class="star-dark mb-5">
        <div class="row">
          <div class="col-md-6 col-lg-4">
            <a class="catalog-item d-block mx-auto" href="#catalog-modal-1">
              <div class="catalog-item-caption d-flex position-absolute h-100 w-100">
                <div class="catalog-item-caption-content my-auto w-100 text-center text-white">
                  <i class="fas fa-search-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/catalog/cabin.png" alt="">
            </a>
          </div>
          <div class="col-md-6 col-lg-4">
            <a class="catalog-item d-block mx-auto" href="#catalog-modal-2">
              <div class="catalog-item-caption d-flex position-absolute h-100 w-100">
                <div class="catalog-item-caption-content my-auto w-100 text-center text-white">
                  <i class="fas fa-search-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/catalog/cake.png" alt="">
            </a>
          </div>
          <div class="col-md-6 col-lg-4">
            <a class="catalog-item d-block mx-auto" href="#catalog-modal-3">
              <div class="catalog-item-caption d-flex position-absolute h-100 w-100">
                <div class="catalog-item-caption-content my-auto w-100 text-center text-white">
                  <i class="fas fa-search-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/catalog/circus.png" alt="">
            </a>
          </div>
          <div class="col-md-6 col-lg-4">
            <a class="catalog-item d-block mx-auto" href="#catalog-modal-4">
              <div class="catalog-item-caption d-flex position-absolute h-100 w-100">
                <div class="catalog-item-caption-content my-auto w-100 text-center text-white">
                  <i class="fas fa-search-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/catalog/game.png" alt="">
            </a>
          </div>
          <div class="col-md-6 col-lg-4">
            <a class="catalog-item d-block mx-auto" href="#catalog-modal-5">
              <div class="catalog-item-caption d-flex position-absolute h-100 w-100">
                <div class="catalog-item-caption-content my-auto w-100 text-center text-white">
                  <i class="fas fa-search-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/catalog/safe.png" alt="">
            </a>
          </div>
          <div class="col-md-6 col-lg-4">
            <a class="catalog-item d-block mx-auto" href="#catalog-modal-6">
              <div class="catalog-item-caption d-flex position-absolute h-100 w-100">
                <div class="catalog-item-caption-content my-auto w-100 text-center text-white">
                  <i class="fas fa-search-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/catalog/submarine.png" alt="">
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- Contact Section -->
    <!--
    <section id="contact">
      <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0">Contact Me</h2>
        <hr class="star-dark mb-5">
        <div class="row">
          <div class="col-lg-8 mx-auto">
          -->
            <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
            <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
            <!--
            <form name="sentMessage" id="contactForm" novalidate="novalidate">
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Name</label>
                  <input class="form-control" id="name" type="text" placeholder="Name" required="required" data-validation-required-message="Please enter your name.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Email Address</label>
                  <input class="form-control" id="email" type="email" placeholder="Email Address" required="required" data-validation-required-message="Please enter your email address.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Phone Number</label>
                  <input class="form-control" id="phone" type="tel" placeholder="Phone Number" required="required" data-validation-required-message="Please enter your phone number.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Message</label>
                  <textarea class="form-control" id="message" rows="5" placeholder="Message" required="required" data-validation-required-message="Please enter a message."></textarea>
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <br>
              <div id="success"></div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary btn-xl" id="sendMessageButton">Send</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>-->

    <!-- Footer -->
    <footer class="footer text-center d-flex">
      <div class="container justify-content-center w-30" >
        <div class="row">
          <div class="col-md-4 mb-5 mb-lg-0">
            <!--nije rjesenje lol ali je-->
          </div>
          <div class="col-md-4 mb-5 mb-lg-0">
              <h4 class="text-uppercase mb-4">Location</h4>
              <p class="lead mb-0">Rijeka 51000, Hrvatska
                <br>Sveučilište u Rijeci
                <br>Odjel za informatiku</p>
          </div>
          <!--
          <div class="col-md-4 mb-5 mb-lg-0">
            <h4 class="text-uppercase mb-4">Around the Web</h4>
            <ul class="list-inline mb-0">
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fab fa-fw fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fab fa-fw fa-google-plus-g"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fab fa-fw fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fab fa-fw fa-linkedin-in"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fab fa-fw fa-dribbble"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-md-4">
            <h4 class="text-uppercase mb-4">About Freelancer</h4>
            <p class="lead mb-0">Freelance is a free to use, open source Bootstrap theme created by
              <a href="http://startbootstrap.com">Start Bootstrap</a>.</p>
          </div>
        </div>
      </div>
      -->
    </footer>

    <div class="copyright py-4 text-center text-white">
      <div class="container">
        <small>Copyright &copy; Application 2019</small>
      </div>
    </div>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-to-top d-lg-none position-fixed ">
      <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
        <i class="fa fa-chevron-up"></i>
      </a>
    </div>

    <!-- catalog Modals -->

    <!-- catalog Modal 1 -->
    <div class="catalog-modal mfp-hide" id="catalog-modal-1">
      <div class="catalog-modal-dialog bg-white">
        <a class="close-button d-none d-md-block catalog-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <img class="img-fluid mb-5" src="img/catalog/cabin.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- catalog Modal 2 -->
    <div class="catalog-modal mfp-hide" id="catalog-modal-2">
      <div class="catalog-modal-dialog bg-white">
        <a class="close-button d-none d-md-block catalog-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <img class="img-fluid mb-5" src="img/catalog/cake.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- catalog Modal 3 -->
    <div class="catalog-modal mfp-hide" id="catalog-modal-3">
      <div class="catalog-modal-dialog bg-white">
        <a class="close-button d-none d-md-block catalog-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <img class="img-fluid mb-5" src="img/catalog/circus.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- catalog Modal 4 -->
    <div class="catalog-modal mfp-hide" id="catalog-modal-4">
      <div class="catalog-modal-dialog bg-white">
        <a class="close-button d-none d-md-block catalog-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <img class="img-fluid mb-5" src="img/catalog/game.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- catalog Modal 5 -->
    <div class="catalog-modal mfp-hide" id="catalog-modal-5">
      <div class="catalog-modal-dialog bg-white">
        <a class="close-button d-none d-md-block catalog-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <img class="img-fluid mb-5" src="img/catalog/safe.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- catalog Modal 6 -->
    <div class="catalog-modal mfp-hide" id="catalog-modal-6">
      <div class="catalog-modal-dialog bg-white">
        <a class="close-button d-none d-md-block catalog-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <img class="img-fluid mb-5" src="img/catalog/submarine.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="{{URL::asset('js/freelancer.js')}}"></script>

    <script>
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
        </script>
    

  </div>

  </body>

</html>
