<head>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
	<link href="{{URL::asset('css/print.css')}}" rel="stylesheet">
</head>

<body>
  <div id="invoice-POS">
    
    <center id="top">
      <div class="info"> 
        <h2>Issue Slip</h2>
      </div>
    </center>
    
    <div id="mid">
      <div class="info">
        <h2>Info</h2>
        <p> 
            Distributer Name : {{$distributerName}}</br>
        </p>
      </div>
    </div><!--End Invoice Mid-->
    
    <div id="bot">

					<div id="table">
						<table>
							<tr class="tabletitle">
								<td class="item"><h2>Item</h2></td>
								<td class="Hours"><h2>Qty</h2></td>
								<td class="Rate"><h2>Price</h2></td>
							</tr>
							@foreach($productList as $p)
							<tr class="service">
								<td class="tableitem"><p class="itemtext">{{$p['productName']}}</p></td>
								<td class="tableitem"><p class="itemtext">{{$p['quantity']}}</p></td>
								<td class="tableitem"><p class="itemtext">{{round($p['price']-$p['price']*0.2,2)}}</p></td>
							</tr>
							@endforeach

							<tr class="tabletitle">
								<td></td>
								<td class="Rate"><h2>Total</h2></td>
								<td class="payment"><h2>{{ round($total,2) }}</h2></td>
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