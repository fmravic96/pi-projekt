<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Presenter - Edit flyers</title>

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
        <h2 class="font-weight-bold text-uppercase mb-0">Edit flyer and catalog</h2>
      </div>
    </header>

        <!-- Contact Section -->
    <section>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <div class="form-group">
            <label>Upload flyer</label>
            <form action="{{route('upload.file')}}" method="post" class="form-horizontal" enctype="multipart/form-data">
              {{csrf_field()}}
              <div class="input-group">
                <span class="input-group-btn">
                <span class="btn btn-default btn-file">
                    Browse… <input type="file" id="imgInp" name="file" >
                </span> 
                </span>
                <input type="text" class="form-control" readonly>
              </div>
                <img id='img-upload' style = "width : 100%" />
              </div>
          <div class="form-group">
                <br>
                <button type="submit" class="btn btn-info" id="saveFlyerButton">Save</button>
          </div>
          </form>
          <br>
          <div class="form-group">
          <label>Upload Catalog</label>
            <form action="{{route('upload.file2')}}" method="post" class="form-horizontal" enctype="multipart/form-data">
              {{csrf_field()}}
              <div class="input-group">
                <span class="input-group-btn">
                <span class="btn btn-default btn-file">
                    Browse… <input type="file" id="imgInp" name="file2[]" multiple >
                </span> 
                </span>
                <input type="text" class="form-control" readonly>
              </div>
                <img id='img-upload' style = "width : 100%" />
              </div>
          <div class="form-group">
                <br>
                <button type="submit" class="btn btn-info" id="saveCatalogButton">Save</button>
          </div>
          </form>
        </div>
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

    <script>
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });

        $(document).ready( function() {
    	$(document).on('change', '.btn-file :file', function() {
		var input = $(this),
			label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
		input.trigger('fileselect', [label]);
		});

		$('.btn-file :file').on('fileselect', function(event, label) {
		    
		    var input = $(this).parents('.input-group').find(':text'),
		        log = label;
		    
		    if( input.length ) {
		        input.val(log);
		    } else {
		        if( log ) alert(log);
		    }
	    
		});
		function readURL(input) {
		    if (input.files && input.files[0]) {
		        var reader = new FileReader();
		        
		        reader.onload = function (e) {
		            $('#img-upload').attr('src', e.target.result);
		        }
		        
		        reader.readAsDataURL(input.files[0]);
		    }
		}

		$("#imgInp").change(function(){
		    readURL(this);
		}); 	
	});
        </script>
    

  </div>

  </body>

</html>
