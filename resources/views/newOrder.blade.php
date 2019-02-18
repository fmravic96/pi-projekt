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

    <!-- Custom styles for this template -->
    <link href="{{URL::asset('css/freelancer.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/simple-sidebar.css')}}" rel="stylesheet">

    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="bootstrap.min.css" />

  </head>
  <body id="wrapper">

      @include('layouts.presentorMenu')

    <!-- Header -->
    <header class="masthead bg-primary text-white text-center">
      <div class="container">
        <!--
        <h1 class="text-uppercase mb-0">Start Bootstrap</h1>
        <hr class="star-light">-->
        <h2 class="font-weight-bold text-uppercase mb-0">New order</h2>
      </div>
    </header>

        <!-- Contact Section -->
    <section id="contact">
      <div class="container">
        
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
            <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->

            <form name="newOrder" id="newOrder" novalidate="novalidate" action="/newOrder" method="post">
            {{csrf_field()}}
            <div class="control-group">
              <div class="form-group row">
                <label for="presentationlist" class="col-md-4 col-form-label text-md-right">Select a presentation</label>
                <div class="col-md-6">
                  <select onchange="change()" name="presentationlist" id="presentationlist" class="form-control selectpicker" data-live-search="true" data-size="5"> 
                      @foreach($presentations as $presentation)
                        <option value="{{$presentation['id']}}">{{$presentation['id'] .'-'. $presentation['host']}}</option>
                      @endforeach
                  </select> 
                </div>
              </div>
            </div>
            
            
            
              <div class="form-group row">
                <label for="customerlist" class="col-md-4 col-form-label text-md-right">Select a customer</label>
                <div class="col-md-6">
                  <select name="customerlist" id="customerlist" class="form-control selectpicker" data-live-search="true" data-size="5"> 
                  </select> 
                </div>
              </div>
              
              <div class="container">
   <br />
   
   <h4 align="center">Products</a></h4><br />
   <br />
   <br />
   <div align="right" style="margin-bottom:5px;">
    <button type="button" name="add" id="add" class="btn btn-success btn-xs">Add</button>
   </div>
   <br />
    <div class="table-responsive">
     <table class="table table-striped table-bordered" id="user_data">
      <tr>
       <th>Product</th>
       <th>Quantity</th>
       <th>Price</th>
       <th>Remove</th>
      </tr>
     </table>
    </div>

   <br />
  </div>
  <div id="user_dialog" title="Add Data">
   <div class="form-group">
    <label>Select product</label>
    <select name="product" id="product" class="form-control selectpicker" data-live-search="true" > 
                      @foreach($products as $product)
                        <option value="{{$product['name']}}">{{$product['name']}}</option>
                      @endforeach
                  </select> 
    <span id="error_product" class="text-danger"></span>
   </div>
   <div class="form-group">
    <label>Quantity</label>
    <input type="number" name="quantity" id="quantity" class="form-control" />
    <span id="error_quantity" class="text-danger"></span>
   </div>
   <div>

   </div>
   <div class="form-group" align="center">
    <input type="hidden" name="row_id" id="hidden_row_id" />
    <button type="button" name="save" id="save" class="btn btn-info">Add</button>
   </div>
  </div>
              
              <div class="control-group">
                  <br>
                    <p class="h4 text-muted">Total</p>
                    <div class="form-group floating-label-form-group controls mb-0 pb-2">
                      <label>Total</label>
                      <input class="form-control" id="total2" name="total2" type="hidden" onchange="check()" placeholder="Total" required="required">                      
                      <output class="form-control" id="total" name="total" type="number" placeholder="Total" required="required">
                      <p class="help-block text-danger"></p>
                    </div>
                  </div>


              <div class="form-group">
                <br>
                <button style="visibility:hidden;" type="submit" class="btn btn-primary btn-xl" id="sendMessageButton">Save</button>
              </div>
          </div>
        </div>
      </div>
    </section>
    </form>

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
    
    
    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>


    <!-- Bootstrap core JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.bundle.min.js"></script>


    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        
 
    <!-- Custom scripts for this template -->
    <script src="{{URL::asset('js/freelancer.js')}}"></script>

  
    <script>
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
        </script>
 <script>  
$(document).ready(function(){ 

  var total = 0;
 var count = 0;
$('#total').val(total);
$('#total2').val(total);


 $('#user_dialog').dialog({
  autoOpen:false,
  width:400
 });

 var customers = JSON.parse('{!! json_encode($customers) !!}');

 var guests = JSON.parse('{!! json_encode($guests) !!}');

var customerSelect = document.getElementById("customerlist");
 var presList = $('#presentationlist').val();

 var host = document.createElement("option");
var presentations2 = {!! json_encode($presentations2) !!};
host.text = presentations2[presList-1].host;

host.value = presentations2[presList-1].hostId;
customerSelect.add(host);

 for(let i=0;i<guests.length;i++){
  var option = document.createElement("option");
     if(guests[i].idPrez==presList){
       option.text = guests[i].name;
       option.value = guests[i].guestId;
      customerSelect.add(option);
     }
   }
 var products = JSON.parse('{!! json_encode($products) !!}');

 $('#add').click(function(){
  $('#user_dialog').dialog('option', 'title', 'Add Data');
  $('#product').val('');
  $('#price').val('');
  $('#quantity').val('');
  $('#error_product').text('');
  $('#error_price').text('');
  $('#error_quantity').text('');
  $('#product').css('border-color', '');
  $('#price').css('border-color', '');
  $('#quantity').css('border-color', '');
  $('#save').text('Save');
  $('#user_dialog').dialog('open');
 });

 $('#save').click(function(){
  var error_product = '';
  var error_quantity = '';
  var error_price = '';
  var product = '';
  var quantity = '';
  var price = '';
  if($('#product').val() == '')
  {
   error_product = 'Product is required';
   $('#error_product').text(error_product);
   $('#product').css('border-color', '#cc0000');
   product = '';
  }
  else
  {
   error_product = '';
   $('#error_product').text(error_product);
   $('#product').css('border-color', '');
   product = $('#product').val();
   
  } 
  var elem=document.getElementById('product').selectedIndex + 1;

  if($('#quantity').val() == '')
  {
   error_quantity = 'Quantity is required';
   $('#error_quantity').text(error_quantity);
   $('#quantity').css('border-color', '#cc0000');
   quantity = '';
  }
  else if($('#quantity').val() > products[elem].quantity) {
    error_quantity = 'Not enough quantity';
    $('#error_quantity').text(error_quantity);
    $('#quantity').css('border-color', '#cc0000');
    quantity = '';
  }
  else
  {
   error_quantity = '';
   $('#error_quantity').text(error_quantity);
   $('#quantity').css('border-color', '');
   quantity = $('#quantity').val();
  }
  for(let i=0;i<products.length;i++){
     if(products[i].name==product){
       price=quantity*products[i].price;
       price=Math.round(price*100)/100;
     }
   }

   total+=price;
   total = Math.round(total*100)/100;
   $('#total').val(total);
   $('#total2').val(total);
   document.getElementById('sendMessageButton').style.visibility='visible';


  if(error_product != '' || error_quantity != '' || error_price != '')
  {
   return false;
  }
  else
  {
   if($('#save').text() == 'Save')
   {
    count = count + 1;
    output = '<tr id="row_'+count+'">';
    output += '<td>'+product+' <input type="hidden" name="hidden_product[]" id="product'+count+'" class="product" value="'+product+'" /></td>';
    output += '<td>'+quantity+' <input type="hidden" name="hidden_quantity[]" id="quantity'+count+'" value="'+quantity+'" /></td>';
    output += '<td>'+price+' <input type="hidden" name="hidden_price[]" id="price'+count+'" class="price" value="'+price+'" /></td>';
    output += '<td><button type="button" name="remove_details" class="btn btn-danger btn-xs remove_details" id="'+count+'">Remove</button></td>';
    output += '</tr>';
    $('#user_data').append(output);
   }
   else
   {
    var row_id = $('#hidden_row_id').val();
    output += '<td>'+product+' <input type="hidden" name="hidden_product[]" id="product'+row_id+'" class="product" value="'+product+'" /></td>';
    output += '<td>'+quantity+' <input type="hidden" name="hidden_quantity[]" id="quantity'+row_id+'" value="'+quantity+'" /></td>';
    output += '<td>'+price+' <input type="hidden" name="hidden_price[]" id="price'+row_id+'" class="price" value="'+price+'" /></td>';    
    output += '<td><button type="button" name="remove_details" class="btn btn-danger btn-xs remove_details" id="'+row_id+'">Remove</button></td>';
    $('#row_'+row_id+'').html(output);
   }

   $('#user_dialog').dialog('close');
  }
 });

 $(document).on('click', '.remove_details', function(){
  var row_id = $(this).attr("id");
  if(confirm("Are you sure you want to remove this row data?"))
  {
   var removedPrice = $('#price'+row_id).val();
   $('#row_'+row_id+'').remove();
   total -= removedPrice;
   total = Math.round(total*100)/100;
    if(total <= 0)
      total = 0;
    $('#total').val(total);
   $('#total2').val(total);
  }
  else
  {
   return false;
  }
 });

});  
</script>  

<script>
    function change(){
     $("#customerlist").empty();
     
 var customers = JSON.parse('{!! json_encode($customers) !!}');

 var guests = JSON.parse('{!! json_encode($guests) !!}');
 var customerSelect = document.getElementById("customerlist");
 var presList = $('#presentationlist').val();

var host = document.createElement("option");
var presentations2 = {!! json_encode($presentations2) !!};
host.text = presentations2[presList-1].host;

host.value = presentations2[presList-1].hostId;
customerSelect.add(host);

 for(let i=0;i<guests.length;i++){
  var option = document.createElement("option");
     if(guests[i].idPrez==presList){
       option.text = guests[i].name;
       option.value = guests[i].guestId;
      customerSelect.add(option);
     }
   }

   }
  </script>

  </div>

  </body>

</html>
