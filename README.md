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

Comandi principali chiamata al server bidcoin .

Dominio : https://youbid.click/bidapi/CALL/

Lista comand : 

###############################################################################################################################

getAddressTransaction   
Parametri : 

wallet    -------------------    "1Ko2SW124a7irn2NQJbAS12cjXTMtNNhiKgtX7"
txid	  -------------------    "6b948687ab03d0a13848dc6028a941897158985eba8674b4294a2905a9de1dea"

Risposta :

{"timereceived":1548409807,"time":1548409807,"valid":true,"txid":"6b948687ab03d0a13848dc6028a941897158985eba8674b4294a2905a9de1dea","blocktime":1548409809,"blockindex":2,"blockhash":"0000cefb32cee23bb3983f8baad59e06bd3e2b4f88256e46a34f79f07c4291bb","confirmations":11,"data":[],"items":[],"permissions":[],"addresses":["1RARiv5MB43NaW2GmW9zzJK4webMLbA63FyT2N"],"myaddresses":["1Ko2SW124a7irn2NQJbAS12cjXTMtNNhiKgtX7"],"balance":{"amount":0,"assets":[{"name":"bidcoin","assetref":"8-265-36941","qty":-0.01}]}}

###############################################################################################################################


listAddressTransactions   

Parametri : 

wallet    -------------------   "1Ko2SW124a7irn2NQJbAS12cjXTMtNNhiKgtX7"
count	  -------------------   "10"     ///// DEFAULT VALUE 5 

Risposta :

[{"balance":{"amount":0,"assets":[{"name":"bidcoin","assetref":"8-265-36941","qty":-0.01}]},"myaddresses":["1Ko2SW124a7irn2NQJbAS12cjXTMtNNhiKgtX7"],"addresses":["1RARiv5MB43NaW2GmW9zzJK4webMLbA63FyT2N"],"permissions":[],"items":[],"data":[],"confirmations":11,"blockhash":"0000cefb32cee23bb3983f8baad59e06bd3e2b4f88256e46a34f79f07c4291bb","blockindex":2,"blocktime":1548409809,"txid":"6b948687ab03d0a13848dc6028a941897158985eba8674b4294a2905a9de1dea","valid":true,"time":1548409807,"timereceived":1548409807,"vin":[{"txid":"b9778ccac0054d623def95976f801f13386791e868d0eb76d8b98577d9d15fde","vout":1,"addresses":["1Ko2SW124a7irn2NQJbAS12cjXTMtNNhiKgtX7"],"type":"pubkeyhash","ismine":true,"iswatchonly":false,"amount":0,"assets":[{"name":"bidcoin","assetref":"8-265-36941","qty":0.12}]}],"vout":[{"n":0,"addresses":["1RARiv5MB43NaW2GmW9zzJK4webMLbA63FyT2N"],"type":"pubkeyhash","ismine":true,"iswatchonly":false,"amount":0,"assets":[{"name":"bidcoin","assetref":"8-265-36941","qty":0.01,"type":"transfer"}],"permissions":[],"items":[]},{"n":1,"addresses":["1Ko2SW124a7irn2NQJbAS12cjXTMtNNhiKgtX7"],"type":"pubkeyhash","ismine":true,"iswatchonly":false,"amount":0,"assets":[{"name":"bidcoin","assetref":"8-265-36941","qty":0.11,"type":"transfer"}],"permissions":[],"items":[]}],"hex":"0100000001de5fd1d97785b9d876ebd068e8916738131f806f9795ef3d624d05c0ca8c77b9010000006b48304502210081d4eb0969541e2c4c685af5fa2cb052af9c594ad8eda102dc4f5fc847e61e5602202b26c09d58f1631df44ab548cd30ad09311c9c26860119e6dc41626cc28cd865012103478a728a6ab9338c3316407cc33ab8fe8be6a4645936f53ead18984f61390f3bffffffff0200000000000000003776a914b2c6d60dfb809e41021061975f44a94996e2e90c88ac1c73706b7188cbb00b01ae4435c06a78fac0f8904d01000000000000007500000000000000003776a9148b0d4c3073682e1cd6a7bf0f9ce56f05eb0d0cfd88ac1c73706b7188cbb00b01ae4435c06a78fac0f8904d0b000000000000007500000000"},{"balance":{"amount":0,"assets":[{"name":"bidcoin","assetref":"8-265-36941","qty":-0.01}]},"myaddresses":["1Ko2SW124a7irn2NQJbAS12cjXTMtNNhiKgtX7"],"addresses":["1RARiv5MB43NaW2GmW9zzJK4webMLbA63FyT2N"],"permissions":[],"items":[],"data":[],"confirmations":22,"blockhash":"00008a9da3567d3c7be948382ab1e538ba98f882175728af9c89aad8bb67d303","blockindex":2,"blocktime":1548409488,"txid":"b9778ccac0054d623def95976f801f13386791e868d0eb76d8b98577d9d15fde","valid":true,"time":1548409487,"timereceived":1548409487,"vin":[{"txid":"fe5b0bdbb3768427b71d5bf37e6905880e6dfd17c3154b9d5b1541a2a599e3d4","vout":1,"addresses":["1Ko2SW124a7irn2NQJbAS12cjXTMtNNhiKgtX7"],"type":"pubkeyhash","ismine":true,"iswatchonly":false,"amount":0,"assets":[{"name":"bidcoin","assetref":"8-265-36941","qty":0.13}]}],"vout":[{"n":0,"addresses":["1RARiv5MB43NaW2GmW9zzJK4webMLbA63FyT2N"],"type":"pubkeyhash","ismine":true,"iswatchonly":false,"amount":0,"assets":[{"name":"bidcoin","assetref":"8-265-36941","qty":0.01,"type":"transfer"}],"permissions":[],"items":[]},{"n":1,"addresses":["1Ko2SW124a7irn2NQJbAS12cjXTMtNNhiKgtX7"],"type":"pubkeyhash","ismine":true,"iswatchonly":false,"amount":0,"assets":[{"name":"bidcoin","assetref":"8-265-36941","qty":0.12,"type":"transfer"}],"permissions":[],"items":[]}],"hex":"0100000001d4e399a5a241155b9d4b15c317fd6d0e8805697ef35b1db7278476b3db0b5bfe010000006a473044022018c33784165a2bcef0ac83977c4dccaa33156e2ff627b9bbb7aabd61bec5e92502205914c7e6c1d01a4d60c6d87764dda5649b59b62ce3dd1578d1045b8141d59366012103478a728a6ab9338c3316407cc33ab8fe8be6a4645936f53ead18984f61390f3bffffffff0200000000000000003776a914b2c6d60dfb809e41021061975f44a94996e2e90c88ac1c73706b7188cbb00b01ae4435c06a78fac0f8904d01000000000000007500000000000000003776a9148b0d4c3073682e1cd6a7bf0f9ce56f05eb0d0cfd88ac1c73706b7188cbb00b01ae4435c06a78fac0f8904d0c000000000000007500000000"},{"balance":{"amount":0,"assets":[{"name":"bidcoin","assetref":"8-265-36941","qty":-0.01}]},"myaddresses":["1Ko2SW124a7irn2NQJbAS12cjXTMtNNhiKgtX7"],"addresses":["1RARiv5MB43NaW2GmW9zzJK4webMLbA63FyT2N"],"permissions":[],"items":[],"data":[],"confirmations":33,"blockhash":"00003de0bd7deae0076c46b5f8488797b9ff336c5a4a80e403ae56bbd71a41f6","blockindex":2,"blocktime":1548380423,"txid":"fe5b0bdbb3768427b71d5bf37e6905880e6dfd17c3154b9d5b1541a2a599e3d4","valid":true,"time":1548380422,"timereceived":1548380422,"vin":[{"txid":"d6acf3268c2ad4f4c80cf37132dfbf4dadd46bb0d81aa645238281252defb18c","vout":1,"addresses":["1Ko2SW124a7irn2NQJbAS12cjXTMtNNhiKgtX7"],"type":"pubkeyhash","ismine":true,"iswatchonly":false,"amount":0,"assets":[{"name":"bidcoin","assetref":"8-265-36941","qty":0.14}]}],"vout":[{"n":0,"addresses":["1RARiv5MB43NaW2GmW9zzJK4webMLbA63FyT2N"],"type":"pubkeyhash","ismine":true,"iswatchonly":false,"amount":0,"assets":[{"name":"bidcoin","assetref":"8-265-36941","qty":0.01,"type":"transfer"}],"permissions":[],"items":[]},{"n":1,"addresses":["1Ko2SW124a7irn2NQJbAS12cjXTMtNNhiKgtX7"],"type":"pubkeyhash","ismine":true,"iswatchonly":false,"amount":0,"assets":[{"name":"bidcoin","assetref":"8-265-36941","qty":0.13,"type":"transfer"}],"permissions":[],"items":[]}],"hex":"01000000018cb1ef2d2581822345a61ad8b06bd4ad4dbfdf3271f30cc8f4d42a8c26f3acd6010000006a47304402200bf4a542a892a60c343b481e80b3e286f8e4e1e2f93bc1cf628b17709d1d5323022008a2e79634e1d33563d4e4fc8d675af5db7dc927a31f0cce3cba99e91db0ccf6012103478a728a6ab9338c3316407cc33ab8fe8be6a4645936f53ead18984f61390f3bffffffff0200000000000000003776a914b2c6d60dfb809e41021061975f44a94996e2e90c88ac1c73706b7188cbb00b01ae4435c06a78fac0f8904d01000000000000007500000000000000003776a9148b0d4c3073682e1cd6a7bf0f9ce56f05eb0d0cfd88ac1c73706b7188cbb00b01ae4435c06a78fac0f8904d0d000000000000007500000000"},{"balance":{"amount":0,"assets":[{"name":"bidcoin","assetref":"8-265-36941","qty":-0.01}]},"myaddresses":["1Ko2SW124a7irn2NQJbAS12cjXTMtNNhiKgtX7"],"addresses":["1RARiv5MB43NaW2GmW9zzJK4webMLbA63FyT2N"],"permissions":[],"items":[],"data":[],"confirmations":44,"blockhash":"00002f885be3bde4739baececf07e166a1a6c61b04a8b12d04005a7b6f462af8","blockindex":2,"blocktime":1548380377,"txid":"d6acf3268c2ad4f4c80cf37132dfbf4dadd46bb0d81aa645238281252defb18c","valid":true,"time":1548380375,"timereceived":1548380375,"vin":[{"txid":"b98fdc98ebc9cfde1932302755f89226978b1c09f84e11c236dfc6d58f5a089f","vout":1,"addresses":["1Ko2SW124a7irn2NQJbAS12cjXTMtNNhiKgtX7"],"type":"pubkeyhash","ismine":true,"iswatchonly":false,"amount":0,"assets":[{"name":"bidcoin","assetref":"8-265-36941","qty":0.15}]}],"vout":[{"n":0,"addresses":["1RARiv5MB43NaW2GmW9zzJK4webMLbA63FyT2N"],"type":"pubkeyhash","ismine":true,"iswatchonly":false,"amount":0,"assets":[{"name":"bidcoin","assetref":"8-265-36941","qty":0.01,"type":"transfer"}],"permissions":[],"items":[]},{"n":1,"addresses":["1Ko2SW124a7irn2NQJbAS12cjXTMtNNhiKgtX7"],"type":"pubkeyhash","ismine":true,"iswatchonly":false,"amount":0,"assets":[{"name":"bidcoin","assetref":"8-265-36941","qty":0.14,"type":"transfer"}],"permissions":[],"items":[]}],"hex":"01000000019f085a8fd5c6df36c2114ef8091c8b972692f85527303219decfc9eb98dc8fb9010000006a4730440220731ba390267b354d4e60e31af97103a8c10405787dbd5c02cb1c8eb90a20cdc80220135c56961d2ed7c631826c01dbec8496e7675675d77f83073aa4c407d55ebb3a012103478a728a6ab9338c3316407cc33ab8fe8be6a4645936f53ead18984f61390f3bffffffff0200000000000000003776a914b2c6d60dfb809e41021061975f44a94996e2e90c88ac1c73706b7188cbb00b01ae4435c06a78fac0f8904d01000000000000007500000000000000003776a9148b0d4c3073682e1cd6a7bf0f9ce56f05eb0d0cfd88ac1c73706b7188cbb00b01ae4435c06a78fac0f8904d0e000000000000007500000000"},{"balance":{"amount":0,"assets":[{"name":"bidcoin","assetref":"8-265-36941","qty":-0.01}]},"myaddresses":["1Ko2SW124a7irn2NQJbAS12cjXTMtNNhiKgtX7"],"addresses":["1RARiv5MB43NaW2GmW9zzJK4webMLbA63FyT2N"],"permissions":[],"items":[],"data":[],"confirmations":55,"blockhash":"00006cd262ddc9f30ccfd4ada0f69067d620a9df3f12891c0322aeadeafaa590","blockindex":2,"blocktime":1548380238,"txid":"b98fdc98ebc9cfde1932302755f89226978b1c09f84e11c236dfc6d58f5a089f","valid":true,"time":1548380237,"timereceived":1548380237,"vin":[{"txid":"8577208f36bdd324082b2543728e5838d93d3b890efbb1571ae6e3a87589f53c","vout":1,"addresses":["1Ko2SW124a7irn2NQJbAS12cjXTMtNNhiKgtX7"],"type":"pubkeyhash","ismine":true,"iswatchonly":false,"amount":0,"assets":[{"name":"bidcoin","assetref":"8-265-36941","qty":0.16}]}],"vout":[{"n":0,"addresses":["1RARiv5MB43NaW2GmW9zzJK4webMLbA63FyT2N"],"type":"pubkeyhash","ismine":true,"iswatchonly":false,"amount":0,"assets":[{"name":"bidcoin","assetref":"8-265-36941","qty":0.01,"type":"transfer"}],"permissions":[],"items":[]},{"n":1,"addresses":["1Ko2SW124a7irn2NQJbAS12cjXTMtNNhiKgtX7"],"type":"pubkeyhash","ismine":true,"iswatchonly":false,"amount":0,"assets":[{"name":"bidcoin","assetref":"8-265-36941","qty":0.15,"type":"transfer"}],"permissions":[],"items":[]}],"hex":"01000000013cf58975a8e3e61a57b1fb0e893b3dd938588e7243252b0824d3bd368f207785010000006a473044022071baf7152e8a19a0d2d658eb4a56afa849f00b3df760f706ae6847433e39882202206b87e417699b0c846443d1388c73a9bebefdcf339873a9322c6d143008ecb7e1012103478a728a6ab9338c3316407cc33ab8fe8be6a4645936f53ead18984f61390f3bffffffff0200000000000000003776a914b2c6d60dfb809e41021061975f44a94996e2e90c88ac1c73706b7188cbb00b01ae4435c06a78fac0f8904d01000000000000007500000000000000003776a9148b0d4c3073682e1cd6a7bf0f9ce56f05eb0d0cfd88ac1c73706b7188cbb00b01ae4435c06a78fac0f8904d0f000000000000007500000000"}]


###############################################################################################################################


signMessage   

Parametri : 

signerAddress    -------------------   "1Ko2SW124a7irn2NQJbAS12cjXTMtNNhiKgtX7" <br> 
fileHash	 -------------------                   


###############################################################################################################################


getBlockDetails   

Parametri : 

hash       -------------------        "0000cefb32cee23bb3983f8baad59e06bd3e2b4f88256e46a34f79f07c4291bb"
	                     


###############################################################################################################################










