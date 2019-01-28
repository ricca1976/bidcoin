# bidcoin
First cryptocurrency exchange fixed .
La prima valuta virtuale a cambio fisso . 

Bidcoin e' la prima valuta virtuale che elimina il rischio di cambio e garantisce l'utento di non subire alcuna perdita nella conversione. 
Bitcoin e' basata sulla tecnologia blockchain e ha come obbiettivo di fornire un sistema sicuro e garantto , e una integrazione semplice 
in qualsiasi sistema . 
Attraverso la tecnologia blockchain sara' possibile effettuare e ricevere pagamenti in maniera completamente anonima e sicura , attraverso le nostre API
sara' possibile integrare il sistema nella maggior parte delle applicazioni . 

API 1.0 

Esempi di comunicazione.

Comandi principali chiamata al server bidcoin . <br>

Dominio : https://youbid.click/bidapi/CALL/  <br>

Lista comand : <br>


login <br>
balance <br>
list_transaction <br>
send_bidcoin <br> 
isAddressValid <BR>
userExists <BR>
createUser <BR>  
getUserDetails <BR>
getAddressTransaction <BR>



EXAMPLE CALL LOGIN 
-------------------------------------


function Login(){

		var userName = "XXXXXX" ; 
		var password = "XXXXXXXX" ; 
		var comand = "login" ;
	
			var xhr = new XMLHttpRequest();
			xhr.open("POST", "https://youbid.click/bidapi/CALL/app.php", true);
			xhr.setRequestHeader('Content-Type', 'application/json');
			
			xhr.onreadystatechange = function () {
			if (this.readyState != 4) return;

			if (this.status == 200) {
			var data = JSON.parse(this.responseText);

			 alert (data) ;
			 console.log(data); 
			}
		
			};

			
			xhr.send(JSON.stringify({
			comand : comand, userName : userName , password : password 
			}));	
			

			

	}
  
  
  RESPONSE : 
  
user_session	5c4ed20b69d30
user_name	info4
address	1as9e6TpVi3LUZsz1jJsKdjqXou4wWDpuQ2Fvs
loggedin	true

{"user_session":"5c4ed20b69d30","user_name":"info4","address":"1as9e6TpVi3LUZsz1jJsKdjqXou4wWDpuQ2Fvs","loggedin":true}



  
 
EXAMPLE CALL BALANCE 
-------------------------------------
 


function getAddressBalances(){

			var wallet = "XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX" ;
			var comand = "balance" ; 
	
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
			comand : comand , address : wallet 
			}));	
			

			

	}
	
  
  
  
   RESPONSE : 
   
   balance	974.64
   response	true
   
   {"balance":974.64,"response":true}
   
   
   
   


   
