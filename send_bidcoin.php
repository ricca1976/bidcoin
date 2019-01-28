


<script>


function sendBitcoin(){

			var userName = "info4" ; 
			var send_wallet = "xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx" ;
			var receive_wallet = "xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx" ;
			var comand = "send_bidcoin" ; 
			var units = 0.05 ; 
			var metadata = "PAGAMENTO" ; 
			var session = "xxxxxxxxxxx" ; 
	
			var xhr = new XMLHttpRequest();
			xhr.open("POST", "https://youbid.click/bidapi/CALL/app.php", true);
			xhr.setRequestHeader('Content-Type', 'application/json');
			
			xhr.onreadystatechange = function () {
			if (this.readyState != 4) return;

			if (this.status == 200) {
				
				
			var data = JSON.parse(this.responseText) ;

			 alert (data) ;
			 console.log(data); 
			
			}
			
		
			};

			
			xhr.send(JSON.stringify({
			comand : comand , send_wallet : send_wallet , receive_wallet : receive_wallet , units : units , metadata : metadata , session : session , userName : userName
			}));	
			

			

	}	

</script>
