<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Presenter - Receipt</title>

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
        <!--
        <h1 class="text-uppercase mb-0">Start Bootstrap</h1>
        <hr class="star-light">-->
        <h2 class="font-weight-bold text-uppercase mb-0">Receipt</h2>
      </div>
    </header>

        <!-- Contact Section -->
    <section id="contact">
      <div class="container">

      <h3>Monthly cash treshold</h3><br>

      <form name="threshold" novalidate="novalidate" action="/receipt" method="post">
        {{csrf_field()}}
        <div class="control-group row">
          <div class="form-group floating-label-form-group controls mb-0 pb-2 col-md-3 floating-label-form-group-with-value">
            <label>January</label>
            <input class="form-control" name="m1" id="m1" type="number" required="required" data-validation-required-message="Please enter date.">
            <p class="help-block text-danger"></p>
          </div>
          <div class="form-group floating-label-form-group controls mb-0 pb-2 col-md-3 floating-label-form-group-with-value">
            <label>February</label>
            <input class="form-control" name="m2" id="m2" type="number" required="required" data-validation-required-message="Please enter date.">
            <p class="help-block text-danger"></p>
          </div>
          <div class="form-group floating-label-form-group controls mb-0 pb-2 col-md-3 floating-label-form-group-with-value">
            <label>March</label>
            <input class="form-control" name="m3" id="m3" type="number" required="required" data-validation-required-message="Please enter date.">
            <p class="help-block text-danger"></p>
          </div>
          <div class="form-group floating-label-form-group controls mb-0 pb-2 col-md-3 floating-label-form-group-with-value">
            <label>April</label>
            <input class="form-control" name="m4" id="m4" type="number" required="required" data-validation-required-message="Please enter date.">
            <p class="help-block text-danger"></p>
          </div>
        </div>
        <div class="control-group row">
          <div class="form-group floating-label-form-group controls mb-0 pb-2 col-md-3 floating-label-form-group-with-value">
            <label>May</label>
            <input class="form-control" name="m5" id="m5" type="number" required="required" data-validation-required-message="Please enter date.">
            <p class="help-block text-danger"></p>
          </div>
          <div class="form-group floating-label-form-group controls mb-0 pb-2 col-md-3 floating-label-form-group-with-value">
            <label>June</label>
            <input class="form-control" name="m6" id="m6" type="number" required="required" data-validation-required-message="Please enter date.">
            <p class="help-block text-danger"></p>
          </div>
          <div class="form-group floating-label-form-group controls mb-0 pb-2 col-md-3 floating-label-form-group-with-value">
            <label>July</label>
            <input class="form-control" name="m7" id="m7" type="number" required="required" data-validation-required-message="Please enter date.">
            <p class="help-block text-danger"></p>
          </div>
          <div class="form-group floating-label-form-group controls mb-0 pb-2 col-md-3 floating-label-form-group-with-value">
            <label>August</label>
            <input class="form-control" name="m8" id="m8" type="number" required="required" data-validation-required-message="Please enter date.">
            <p class="help-block text-danger"></p>
          </div>
        </div>
        <div class="control-group row">
          <div class="form-group floating-label-form-group controls mb-0 pb-2 col-md-3 floating-label-form-group-with-value">
            <label>September</label>
            <input class="form-control" name="m9" id="m9" type="number" required="required" data-validation-required-message="Please enter date.">
            <p class="help-block text-danger"></p>
          </div>
          <div class="form-group floating-label-form-group controls mb-0 pb-2 col-md-3 floating-label-form-group-with-value">
            <label>October</label>
            <input class="form-control" name="m10" id="m10" type="number" required="required" data-validation-required-message="Please enter date.">
            <p class="help-block text-danger"></p>
          </div>
          <div class="form-group floating-label-form-group controls mb-0 pb-2 col-md-3 floating-label-form-group-with-value">
            <label>November</label>
            <input class="form-control" name="m11" id="m11" type="number" required="required" data-validation-required-message="Please enter date.">
            <p class="help-block text-danger"></p>
          </div>
          <div class="form-group floating-label-form-group controls mb-0 pb-2 col-md-3 floating-label-form-group-with-value">
            <label>December</label>
            <input class="form-control" name="m12" id="m12" type="number" required="required" data-validation-required-message="Please enter date.">
            <p class="help-block text-danger"></p>
          </div>
        </div>

        <div class="form-group">
         <br>
          <button type="submit" class="btn btn-primary btn-xl" id="thresholdButton">Save</button>
        </div>

      </form>
        <br>

        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h3>Receipt list</h3><br>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-8 mx-auto">
          <table class="table">
          <thead>
          <tr>
              <th>Receipt ID</th>
              <th>Presentation ID</th>
              <th>Customer name</th>
              <th>Date</th>
              <th>Base price</th>
              <th>Shipping address</th>
              <th>City and postal code</th>
              <th></th>
            </tr> 
          </thead>
          <tbody>
        @foreach($orders as $order)
            <tr>
              <td>{{$order['id']}}</td>
              <td>{{$order['presentationId']}}</td>
              <td>{{$customers[$order['customerId']-1]['name']}}</td>
              <td>{{$order['created_at']}}</td>
              <td>{{$order['total']}}</td>
              <td>{{$customers[$order['customerId']-1]['homeAdress']}}</td>
              <td>{{$customers[$order['customerId']-1]['city']}}</td>
              <td><a href="{{url('receipt/print'.$order['id'])}}">Receipt</a></td>
              <!-- button onclick="" type="button" name="receiptBtn" class="btn btn-primary btn-xs" id="receipt">Receipt</button>-->
            </tr>
          @endforeach
          </tbody>
          </table></div>
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

    <script>
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });

        function newReceipt(orderId){
          
        }
        </script>

        <script>
          $(document).ready(function(){ 
           var thresholds = JSON.parse('{!! json_encode($thresholds) !!}');
            console.log(thresholds);
            for(let i=1;i<=thresholds.length;i++){
                $('#m'+i).val(thresholds[i-1].moneyThreshold);
            }
          });
        </script>


  </div>

  </body>

</html>
