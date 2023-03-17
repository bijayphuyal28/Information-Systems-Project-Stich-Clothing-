<?php
	$orderid=$_REQUEST['orderid'];
	#echo "<input type=hidden name=orderid id=orderid value =".$orderid."/>";
?>
<!DOCTYPE html>
<html>
<head>
<title>Your Order</title>
<meta charset="utf-8" />
<link rel="stylesheet" href="style.css" media="screen" type="text/css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script type="text/javascript" src="jquery.store.js"></script>
<script type="text/javascript">
				 $(document).ready(function(){
				$('#btnpayment').removeAttr('disabled');
				 $('#payment-form-div').css('visibility','hidden');
				/* $("#btnpay").click(function () {
				 
				   var orderid = $( "#orderno" ).text();
				   var dbno = $( "#dbno" ).text();
				   var ifsc = $( "#ifsc" ).text();
				   var cvv = $( "#cvv" ).text();
				   var edt = $( "#edt" ).text();
				   alert(ifsc +' ' + edt +' ' + cvv + ' ' + dbno);
				    $.ajax({
							type: "POST",
							url: "processpayment.php",
							data: "orderid=" + orderid+ "&dbno=" + dbno+ "&cvv=" + cvv+ "&ifsc=" + ifsc+ "&edt=" + edt,
							success: function(data) {
							   alert("Payment Done sucessfully");
							}
						});
				 
				});*/
				  
				   //alert(orderid + "  " + totalAmt + "  " + array[6]);
				   $("#btnconfirm").click(function () {
				      // $("#btnconfirm").attr("disabled", true);
					   var orderid = $( "#orderno" ).text();
					   var shippingCharge = $( "#sshipping" ).text();
					   var totalAmt = $( "#stotal" ).text();
					   totalAmt = totalAmt.substring(1, totalAmt.length);
					   shippingCharge = shippingCharge.substring(1,shippingCharge.length);
					   
					   // alert(orderid + "  " + totalAmt + "  " + array[6]);
					  
						  $.ajax({
							type: "POST",
							url: "insertOrder.php",
							data: "orderid=" + orderid+ "&shippingCharge=" + shippingCharge+ "&totalAmt=" + totalAmt,
							success: function(data) {
							   alert("New Order created sucessfully");
							}
						});
						
						 $("table > tbody > tr").each(function () {
						  var currentRow = $(this); //Do not search the whole HTML tree twice, use a subtree instead
						  var pname = currentRow.find(".pname").text();
						  var pqty = currentRow.find(".pqty").text();
						   var pprice = currentRow.find(".pprice").text()
						   pprice = pprice.substring(1,pprice.length);
						 // alert(currentRow.find(".pname").text() + " " + currentRow.find(".pqty").text());
						  $.ajax({
							type: "POST",
							url: "insertOrderDetails.php",
							data: "orderid=" + orderid+ "&pname=" + pname+ "&pqty=" + pqty+ "&pprice=" + pprice,
							success: function(data) {
							   alert("New Order Details being crcreated sucessfully");
							}
						});
						});
						let array = $('ul>li').toArray().map(item => $(item).html());
						var bname = array[0];
						var bemail = array[1];
						var bcity = array[2];
						var badd = array[3];
						var bzip = array[4];
						var bcountry = array[5];
						$.ajax({
							type: "POST",
							url: "insertBillingDetails.php",
data: "orderid= " + orderid+ "&bname=" + bname+ "&bemail=" + bemail+ "&bcity=" + bcity+ "&badd=" + badd+ "&bzip=" + bzip +"&bcountry=" + bcountry,
							success: function(data) {
							   alert("User Billing Details created  sucessfully");
							}
						});
//let array = $('ul>li').toArray().map(item => $(item).html());
						var sname = array[6];
						var semail = array[7];
						var scity = array[8];
						var sadd = array[9];
						var szip = array[10];
						var scountry = array[11];
						//alert(sname + " " + scountry);
						$.ajax({
							type: "POST",
							url: "insertShippingDetails.php",
							data: "orderid=" + orderid+ "&sname=" + sname+ "&semail=" + semail+ "&scity=" + scity+ "&sadd=" + sadd+ "&szip=" + szip +                                         "&scountry=" + scountry,
							success: function(data) {
							   alert("User Shipping Details created  sucessfully");
							   $('#btnconfirm').attr('disabled','disabled');
							   $('#payment-form-div').css('visibility','visible');
							   $('#btnpayment').attr('disabled','disabled');
							  
							}
						});
						//return false;
						});
				 }
				 );
		   </script>
</head>

<body id="checkout-page">

<div id="site">
	<header id="masthead">
		<h1></h1>
	</header>
	<div id="content">
		<h1>Your Order</h1>
		<div id="Order">
					
					<p id="OrderId">
						<strong>Order Id</strong>: <span id="orderno"> <?php echo substr($orderid, 0, strlen($orderid)-1);?></span>
					</p>
				</div>
			<table id="checkout-cart" class="shopping-cart">
			  <thead>
				<tr>
					<th scope="col">Item</th>
					<th scope="col">Qty</th>
					<th scope="col">Price</th>
				</tr>
			  </thead>
			  <tbody>
			  
			  </tbody>
			</table>
		 <div id="pricing">
			
			<p id="shipping">
				<strong>Shipping</strong>: <span id="sshipping"></span>
			</p>
			
			<p id="sub-total">
				<strong>Total</strong>: <span id="stotal"></span>
			</p>
		 </div>
		 
		 <div id="user-details">
		 	<h2>Your Data</h2>
		 	<div id="user-details-content"></div>
			 
		
			
		 </div>
		 <div id="payment-form-div" style="visibility="hidden";>
		 
		 <form  action ="processpayment" method="post">
				<div class="form-group">
				<input type="text" class="form-control" placeholder="IFSCCode" name="ifsc" id ="ifsc">
				</div>
				<div class="form-group">
				<input type="text" class="form-control" placeholder="Debit Card No." name="dbno" id="dbno">
				</div>
				<div class="form-group">
				<input type="date" class="form-control" placeholder="Expiry Date" name="edt" id="edt">
				</div>
				<div class="form-group">
				<input type="text" class="form-control" placeholder="CVV No." name="cvv" id="cvv">
				</div>
				<?php
				echo "<input type=hidden name=orderid id=orderid value =".$orderid."/>";
				?>
				<button type="submit" class="btn btn-primary" id="btnpay">Make Payment</button>
				</form>
		 </div>
		 <ul id="shopping">
				<li>
					<input type="button" id="btnconfirm" class="btn" value="Confirm Order"/> 
				</li>
								
			</ul>
		
		   
		 
		 
<form id="paypal-form" action="" method="post">
	<input type="hidden" name="cmd" value="_cart" />
	<input type="hidden" name="upload" value="1" />
	<input type="hidden" name="business" value="" />
        
	<input type="hidden" name="currency_code" value="" />
	<input type="submit" id="paypal-btn" class="btn" value="Pay with PayPal" />
</form>
		 
		 
	</div>
	
	

</div>

<footer id="site-info">
		Copyright &copy; 
	</footer>

</body>
</html>	

   