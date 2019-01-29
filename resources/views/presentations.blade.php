<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Presenter - New order</title>  
    <!-- Bootstrap core CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css" rel="stylesheet" type="text/css">

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.2/css/bootstrap-select.min.css">
  
    <!-- Custom styles for this template -->
    <link href="{{URL::asset('css/freelancer.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/simple-sidebar.css')}}" rel="stylesheet">

  </head>
  <body id="wrapper">

      @include('layouts.presentorMenu')

    <!-- Header -->
    <header class="masthead bg-primary text-white text-center">
      <div class="container">
        <!--
        <h1 class="text-uppercase mb-0">Start Bootstrap</h1>
        <hr class="star-light">-->
        <h2 class="font-weight-bold text-uppercase mb-0">Presentation</h2>
      </div>
    </header>

        <!-- Contact Section -->
    <section id="contact">
      <div class="container">
        
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
            <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->

            <form name="sentMessage" id="contactForm" novalidate="novalidate">
              <div class="form-group row">
                <label for="host" class="col-md-4 col-form-label text-md-right">Select a host</label>
                <div class="col-md-6">
                  <select name="host" class="form-control selectpicker" data-live-search="true" data-size="5"> 
                      @foreach($customers as $customer)
                        <option value="{{$customer['id']}}">{{$customer['name']}}</option>
                      @endforeach
                  </select> 
                </div>
              </div>
              <div class="form-group row">
                <label for="guest" class="col-md-4 col-form-label text-md-right">Select guests</label>
                <div class="col-md-6">
                  <select name="guest" class="form-control selectpicker" data-live-search="true" multiple data-selected-text-format="count>3" data-size="5">
                    @foreach($customers as $customer)                   
                      <option value="{{$customer['name']}}">{{$customer['name']}}</option>
                    @endforeach
                  </select> 
                </div>
              </div>
              <div class="form-group">
                <br>
                <button type="submit" class="btn btn-primary btn-xl" id="saveMessageButton">Save</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

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

    <!-- Bootstrap core JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="{{URL::asset('js/freelancer.js')}}"></script>

    
    <!-- Latest compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.2/js/bootstrap-select.min.js"></script>

<!-- (Optional) Latest compiled and minified JavaScript translation files -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.2/js/i18n/defaults-*.min.js"></script>


    <script>
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });

        $(document).ready(function() {
        $('.selectpicker').selectpicker();
        });
      
      </script>
    

  </div>

  </body>

</html>
