<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Distributer - Product list</title>

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
        <h2 class="font-weight-bold text-uppercase mb-0">Product list</h2>
      </div>
    </header>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
    <form name="newProduct" id="newProduct" novalidate="novalidate" action="/productList" method="post">
            {{csrf_field()}}
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Product Name</label>
                  <input class="form-control " id="productName" name="productName" onkeyup="stoppedTyping()" type="text" placeholder="Product Name" required="required" data-validation-required-message="Please enter product name.">
                  <p class="help-block text-danger">
                  </p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Price</label>
                  <input class="form-control" id="price" name="price" type="number" onkeyup="stoppedTyping()" placeholder="Price" required="required" data-validation-required-message="Please enter price.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>

              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Quantity</label>
                  <input class="form-control" id="quantity" name="quantity" type="number" onkeyup="stoppedTyping()" placeholder="Quantity" required="required" data-validation-required-message="Please enter quantity.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <br>
              
              <div class="form-group">
                <button style="visibility:hidden;" type="submit" class="btn btn-primary btn-xl mb-5" id="sendMessageButton">Save</button>
              </div>
            </form>

    <table class="table">
          <thead>
          <tr>
              <th>Name</th>
              <th>Price (HRK)</th>
              <th>Quantity (in kg)</th>
            </tr> 
          </thead>
          <tbody>
        @foreach($products as $product)
            <tr>
              <th>{{$product['name']}}</th>
              <th>{{$product['price']-$product['price']*0.2}}</th>
              <th>{{$product['quantity']}}</th>
            </tr>
          @endforeach
          </tbody>
          </table>
          </div>
      </div>
    </div>
        
    
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


    <!-- Bootstrap core JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="{{URL::asset('js/freelancer.js')}}"></script>
    <script src="{{URL::asset('js/contact_me.js')}}"></script>
    <script src="{{URL::asset('js/jqBootstrapValidation.js')}}"></script>



    <script>

    
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });


        function stoppedTyping(){
        if($("#productName").val()!=="" && $("#price").val()!=="" && $("#quantity").val()!=="") {
          document.getElementById('sendMessageButton').style.visibility='visible';
        }
        else {
          document.getElementById('sendMessageButton').style.visibility='hidden';
        }
      } 
        </script>
    

  </div>

  </body>

</html>
