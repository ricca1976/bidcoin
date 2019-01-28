  
  
  
 <script>  
 
 	function createUser(){

			var userName = "info5" ;
			var password = "123456789" ;
			var name = "test" ; 
			var comand = "createUser" ; 
			
	
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
			comand : comand , userName : userName , password : password , name : name  
			}));	
			

	}	
 
 </script>
