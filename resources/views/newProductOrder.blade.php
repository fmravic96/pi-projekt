<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Distributer - New product order</title>

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
        <h2 class="font-weight-bold text-uppercase mb-0">New product order</h2>
      </div>
    </header>

        <!-- Contact Section -->
    <section id="contact">
      <div class="container">
        
        <div class="row">
          <div class="col-lg-8 mx-auto">
          <h3>Weekly quantity of sold products</h2><br>
          <table class="table">
          <thead>
          <tr>
              <th>Order ID</th>
              <th>Product name</th>
              <th>Quantity</th>
              <th>Date</th>
            </tr> 
          </thead>
          <tbody>
        @foreach($productOrder as $po)
            <tr>
              <th>{{$po['orderId']}}</th>
              <th>{{$po['productName']}}</th>
              <th>{{$po['quantity']}}</th>
              <th>{{$po['created_at']}}</th>
            </tr>
          @endforeach
          </tbody>
          </table><br>

          <div class="row">
          <div class="col-lg-8 mx-auto">
          <h3>Total quantity of sold products</h2><br>
          <form name="orderQuantity" id="orderQuantity" novalidate="novalidate" action="/newProductOrder" method="post">
          {{csrf_field()}}
          <table class="table">
          <thead>
          <tr>
              <th>Product name</th>
              <th>Quantity</th>
            </tr> 
          </thead>
          <tbody>
          
        @foreach($product as $p)
        
        <?php $totalQuantity=0;?>
          @foreach($productOrder as $po)
            @if($p['name'] == $po['productName'])
              <?php $totalQuantity+=$po['quantity'];?>
              <input type="hidden" name="orderId[]" value="{{$po['orderId']}}">
            @endif
          @endforeach
          @if($totalQuantity!=0)
          <tr>
              <th>{{$p['name']}}</th>
              <th>{{$totalQuantity}}</th>
            </tr>
            <input type="hidden" name="productId[]" value="{{$p['id']}}">
            <input type="hidden" name="quantity[]" value="{{$totalQuantity}}">
            @endif
          @endforeach
          </tbody>
          </table>   
              <br>
              @if($lastOrderDate==null)
                <button type="submit" class="btn btn-primary btn-xl" id="saveMessageButton">Order</button>
              @else
                <h6 class="text-danger">* Order has already been placed for this week!</h6>
              @endif
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

    <script>
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
        </script>
    

  </div>

  </body>

</html>
