<?php
function printQRCode($url, $size = 250) {
    return '<img id = "qr_code" src="http://chart.apis.google.com/chart?chs=' . $size . 'x' . $size . '&cht=qr&chl=' . urlencode($url) . '" />';
}
?> 


<!DOCTYPE html>
<html>
<head>
<meta name="author" content="">
<meta name="description" content="">
<meta http-equiv="Content-Type"content="text/html;charset=UTF-8"/>
<meta name="viewport"content="width=device-width,height=device-height,initial-scale=1.0">
<link id="myStyleSheet" rel="stylesheet" type="text/css" href="css/portrait.css" >

<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
  


</head>
<body>

<div id = "qr" >  
<?php echo printQRCode("bidcoin_receiver://".$_GET['address_in']."///". $_GET['qty']); ?>    //// print qr for payment request 
</div>

<div id = "button_qr" > 
Paga con Bidcoin
</div>

<div id = "message_qr" >
Waiting for payment <br>
<img src = "loading.gif" height = "60px"  > 
</div>

</body>
</html>



<script type="text/javascript">

	var answer;
	var qty = "<?php echo $_GET['qty']; ?>";                        ////// price required 
	var address_in = "<?php echo $_GET['address_in']; ?>";        ///////// wallet receive bidcoin 

	var count = 10;           
	
	var interval;
	var checkInterval = 0;
		
	window.addEventListener('orientationchange', callback, true);		
		

	function callback(){
			var orientation = window.orientation;
			if(orientation == 0 ){
				
				////////////////
				
			} else {
				
				//////////////
			}
	}

		

	$('#qr').hide() ; 
	$('#message_qr').hide() ; 
	
	
	$('#button_qr').click(function() {
		
		$('#qr').show() ; 
		$('#button_qr').hide() ; 
		$('#message_qr').show() ; 
		
		readTransaction();
		interval = setInterval(readTransaction,5000);
		
		
		
	
	});

	
	function readTransaction(){
		checkInterval++;
		if (checkInterval == 10){                         ///////// check for 10 times blockchain transaction for wallet 
			clearInterval(interval);
			$('#qr').hide() ; 
			$('#message_qr').html("Transaction not recived!");          
		}
		$.ajax({
			type: 'POST',
			url: 'https://youbid.click/bidapi/CALL/app.php',              //////// api call link 
			data: '{"comand": "listAddressTransactions", "address": "'+ address_in +'", "count": '+ count +' }',     ///// parameter comand listAddressTransactions check last 10 transaction of wallet 
			success: function(data) { 

				console.log(data) ; 
				
				for (var i = 0; i < count; i++){
										
					var is_valid = data[i].valid;
					var in_out = data[i].vin[0].vout;
					
					// var vout = data[i].
					if ((is_valid == true)&&(in_out == 0)){
						var value_out = data[i].vin[0].assets[0].qty;
						console.log(value_out);
						if (value_out == qty){
							answer = data[i].txid;
							
							$('#message_qr').html("Trasnaction accepted! </br> txID: "+answer);      ///////////////// response with txId of transaction if found 
							$('#qr').hide() ;  
							clearInterval(interval);
						
						}
					}
					
				}
				
			},
			contentType: "application/json",
			dataType: 'json'
		});
		

	}
	
</script>



