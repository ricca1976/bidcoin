

<script> 


	function listAddressTransactions(){

			var wallet = "1Ko2SW124a7irn2NQJbAS12cjXTMtNNhiKgtX7" ;
			var comand = "list_transaction" ; 
			var count = 10 ; 
	
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
			comand : comand , address : wallet , count : count 
			}));	
			

			

	}	
  

</script>
