<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Distributor</title>

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

      @include('layouts.distributerMenu')

    <!-- Header -->
    <header class="masthead bg-primary text-white text-center">
      <div class="container">
      
      <?php $path='storage/upload/'.$flyer->name; ?>
        <img class="img-fluid mb-5 d-block mx-auto" src="{{asset($path)}}" alt="Opis">
        <h2 class="font-weight-bold text-uppercase mb-0">Flyer</h2>
      </div>
    </header>

    <!-- Katalozi Grid Section -->
    <section class="catalog" id="catalog">
      <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0">Catalog</h2>
        <hr class="star-dark mb-5">
        <div class="row">
          <div class="col-md-6 col-lg-4">
            <a class="catalog-item d-block mx-auto" href="#catalog-modal-1">
              <div class="catalog-item-caption d-flex position-absolute h-100 w-100">
                <div class="catalog-item-caption-content my-auto w-100 text-center text-white">
                  <i class="fas fa-search-plus fa-3x"></i>
                </div>
              </div>
              <?php $path='storage/upload/catalogs/'.$catalog[0]['name']; ?>
              <img class="img-fluid mb-5 d-block mx-auto" src="{{asset($path)}}" alt="Opis">
            </a>
          </div>
          <div class="col-md-6 col-lg-4">
            <a class="catalog-item d-block mx-auto" href="#catalog-modal-2">
              <div class="catalog-item-caption d-flex position-absolute h-100 w-100">
                <div class="catalog-item-caption-content my-auto w-100 text-center text-white">
                  <i class="fas fa-search-plus fa-3x"></i>
                </div>
              </div>
              <?php $path='storage/upload/catalogs/'.$catalog[1]['name']; ?>
              <img class="img-fluid mb-5 d-block mx-auto" src="{{asset($path)}}" alt="Opis">
            </a>
          </div>
          <div class="col-md-6 col-lg-4">
            <a class="catalog-item d-block mx-auto" href="#catalog-modal-3">
              <div class="catalog-item-caption d-flex position-absolute h-100 w-100">
                <div class="catalog-item-caption-content my-auto w-100 text-center text-white">
                  <i class="fas fa-search-plus fa-3x"></i>
                </div>
              </div>
              <?php $path='storage/upload/catalogs/'.$catalog[2]['name']; ?>
              <img class="img-fluid mb-5 d-block mx-auto" src="{{asset($path)}}" alt="Opis">
            </a>
          </div>
          <div class="col-md-6 col-lg-4">
            <a class="catalog-item d-block mx-auto" href="#catalog-modal-4">
              <div class="catalog-item-caption d-flex position-absolute h-100 w-100">
                <div class="catalog-item-caption-content my-auto w-100 text-center text-white">
                  <i class="fas fa-search-plus fa-3x"></i>
                </div>
              </div>
              <?php $path='storage/upload/catalogs/'.$catalog[3]['name']; ?>
              <img class="img-fluid mb-5 d-block mx-auto" src="{{asset($path)}}" alt="Opis">            </a>
          </div>
          <div class="col-md-6 col-lg-4">
            <a class="catalog-item d-block mx-auto" href="#catalog-modal-5">
              <div class="catalog-item-caption d-flex position-absolute h-100 w-100">
                <div class="catalog-item-caption-content my-auto w-100 text-center text-white">
                  <i class="fas fa-search-plus fa-3x"></i>
                </div>
              </div>
              <?php $path='storage/upload/catalogs/'.$catalog[4]['name']; ?>
              <img class="img-fluid mb-5 d-block mx-auto" src="{{asset($path)}}" alt="Opis">            </a>
          </div>
          <div class="col-md-6 col-lg-4">
            <a class="catalog-item d-block mx-auto" href="#catalog-modal-6">
              <div class="catalog-item-caption d-flex position-absolute h-100 w-100">
                <div class="catalog-item-caption-content my-auto w-100 text-center text-white">
                  <i class="fas fa-search-plus fa-3x"></i>
                </div>
              </div>
              <?php $path='storage/upload/catalogs/'.$catalog[5]['name']; ?>
              <img class="img-fluid mb-5 d-block mx-auto" src="{{asset($path)}}" alt="Opis">            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer class="footer text-center d-flex">
      <div class="container justify-content-center w-30" >
        <div class="row">
          <div class="col-md-4 mb-5 mb-lg-0">
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

    <!-- catalog Modal 1 -->
  <div class="catalog-modal mfp-hide" id="catalog-modal-1">
    <div class="catalog-modal-dialog bg-white">
      <a class="close-button d-none d-md-block catalog-modal-dismiss" href="#">
        <i class="fa fa-3x fa-times"></i>
      </a>
      <div class="container text-center">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2 class="text-secondary text-uppercase mb-0">Catalog 1</h2>
            <hr class="star-dark mb-5">
            <?php $path='storage/upload/catalogs/'.$catalog[0]['name']; ?>
            <img class="img-fluid mb-5 d-block mx-auto bigImage" src="{{asset($path)}}" alt="Opis">
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
          <h2 class="text-secondary text-uppercase mb-0">Catalog 2</h2>
            <hr class="star-dark mb-5">
            <?php $path='storage/upload/catalogs/'.$catalog[1]['name']; ?>
            <img class="img-fluid mb-5 d-block mx-auto bigImage" src="{{asset($path)}}" alt="Opis">
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
          <h2 class="text-secondary text-uppercase mb-0">Catalog 3</h2>
            <hr class="star-dark mb-5">
            <?php $path='storage/upload/catalogs/'.$catalog[2]['name']; ?>
            <img class="img-fluid mb-5 d-block mx-auto bigImage" src="{{asset($path)}}" alt="Opis">
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
          <h2 class="text-secondary text-uppercase mb-0">Catalog 4</h2>
            <hr class="star-dark mb-5">
            <?php $path='storage/upload/catalogs/'.$catalog[3]['name']; ?>
            <img class="img-fluid mb-5 d-block mx-auto bigImage" src="{{asset($path)}}" alt="Opis">
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
          <h2 class="text-secondary text-uppercase mb-0">Catalog 5</h2>
            <hr class="star-dark mb-5">
            <?php $path='storage/upload/catalogs/'.$catalog[4]['name']; ?>
            <img class="img-fluid mb-5 d-block mx-auto bigImage" src="{{asset($path)}}" alt="Opis">
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
          <h2 class="text-secondary text-uppercase mb-0">Catalog 6</h2>
            <hr class="star-dark mb-5">
            <?php $path='storage/upload/catalogs/'.$catalog[5]['name']; ?>
            <img class="img-fluid mb-5 d-block mx-auto bigImage" src="{{asset($path)}}" alt="Opis">
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
