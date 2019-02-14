<head>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
	<link href="{{URL::asset('css/print.css')}}" rel="stylesheet">
</head>

<body>
  <div id="invoice-POS">
    
    <center id="top">
      <div class="info"> 
        <h2>Receipt</h2>
      </div>
    </center>
    
    <div id="mid">
      <div class="info">
        <h2>Contact Info</h2>
        <p> 
            Address : {{$customer[0]['homeAdress'] . ' , ' . $customer[0]['city']}}</br>
            Email   : {{$customer[0]['email']}}</br>
            Phone   : {{$customer[0]['phone']}}</br>
        </p>
      </div>
    </div><!--End Invoice Mid-->
    
    <div id="bot">

					<div id="table">
						<table>
							<tr class="tabletitle">
								<td class="item"><h2>Item</h2></td>
								<td class="Hours"><h2>Qty</h2></td>
								<td class="Rate"><h2>Base price</h2></td>
								<td class="Rate"><h2>Flyer discount</h2></td>
								<td class="Rate"><h2>Sub Total</h2></td>
							</tr>
							@foreach($product_in_orders as $p)
							<tr class="service">
								<td class="tableitem"><p class="itemtext">{{$p['productName']}}</p></td>
								<td class="tableitem"><p class="itemtext">{{$p['quantity']}}</p></td>
								<td class="tableitem"><p class="itemtext">{{$p['price']}}</p></td>
								@if($p['id']==$id)
									<td class="tableitem"><p class="itemtext">{{$monthDiscount*100}}%</p></td>
									<td class="tableitem"><p class="itemtext">{{round($p['price']-($p['price']*$monthDiscount), 2)}}</p></td>
								@else
									<td></td>
									<td class="tableitem"><p class="itemtext">{{$p['price']}}</p></td>
								@endif
							</tr>
							@endforeach

							<tr class="tabletitle">
								<td></td>
								<td></td>
								<td></td>
								<td class="Rate"><h2>Discount</h2></td>
								@if($disc == 10)
									<td class="payment"><h2>10%</h2></td>
								@elseif($disc == 20)
									<td class="payment"><h2>20%</h2></td>
								@else
									<td class="payment"><h2>0%</h2></td>
								@endif
							</tr>

							<tr class="tabletitle">
								<td></td>
								<td></td>
								<td></td>
								<td class="Rate"><h2>Total</h2></td>
								<td class="payment"><h2>{{ $total }}</h2></td>
							</tr>

						</table>
					</div><!--End Table-->

					<div id="legalcopy">
						<p class="legal"><strong>Thank you for your business!</strong>  Payment is expected within 31 days; please process this invoice within that time. 
						</p>
					</div>

				</div>
	</div>

	<div id="editor"></div>
	
	<div class="mt-5 text-center">
		<button class="btn btn-primary btn-xl no-print" id="cmd">Print</button>
	</div>

	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.bundle.min.js"></script>

    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	
	
<script>
	$('#cmd').click(function () {
    window.print();
	});

</script>

<body>