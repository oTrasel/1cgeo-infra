<?php
include'layout.php';

?>

<!DOCTYPE html>
<html>

<body >
		<center>

			<br><br>
	    	<h1 class="title is-2 has-text-black">VPN Anyconnect</h1><br><br><br><br>
	    
	           		
	        <h2 class="title is-4 has-text-black">Windows 7 e 10</h2><br>

	        <div class="center">
                    <a href="programas/anyconnect-win-4.10.00093-core-vpn-predeploy-k9.msi" download="anyconnect-win-4.10.00093-core-vpn-predeploy-k9.msi"><button class="button is-primary">Download para Windows</button></a>
            </div ><br>
        	 <button class="button is-primary">Comandos :</button><br><br>
        	 <div class="comandos"><center>Faça o download do arquivo .exe acima </center></div>
        	 <div class="comandos"><center>Execute-o e faça a instalação  </center></div><br>

        	<div class="separar"></div><br><br><br>


        	<h2 class="title is-4 has-text-black">Ubuntu</h2><br>

	        <div class="center">
                    <a href="programas/anyconnect-linux64-4.10.03104-predeploy-k9.tar.gz" download="anyconnect-linux64-4.10.03104-predeploy-k9.tar.gz"><button class="button is-primary">Download para Ubuntu</button></a>
            </div ><br>
        	 <button class="button is-primary">Comandos :</button><br><br>
        	 <div class="comandos"><center>Botar o arquivo “anyconnect-linux64-4.10.03104-predeploy-k9.tar.gz” na pasta Downloads  </center></div>
        	 <div class="comandos"><center>abrir o terminal e executar os seguintes comandos:   </center></div>
        	 <div class="comandos"><center>su administrador  </center></div>
        	 <div class="comandos"><center>sudo su </center></div>
             <div class="comandos"><center>cd Downloads  </center></div>
             <div class="comandos"><center>tar -xvf anyconnect-linux64-4.10.03104-predeploy-k9.tar.gz  </center></div>
             <div class="comandos"><center>cd anyconnect-linux64-4.9.00086/   </center></div>
             <div class="comandos"><center>sudo su </center></div>
             <div class="comandos"><center>cd vpn   </center></div>
             <div class="comandos"><center>./vpn_install.sh  </center></div><br>


        	        	

        	 <div class="separar"></div><br><br><br>
        	 <br><button class="button is-primary">Exportar Proxy:  </button><br><br>
        	 <div class="comandos"><center>export https_proxy=http://info:adm2022@10.25.160.10:2000; export http_proxy=http://info:adm2022@10.25.160.10:2000    </center></div><br>
	         <div class="separar"></div><br><br><br>  			
	       
        </center>
         	

</body>
<footer>
	<div class="direitos">
		<center>Suporte - Dev. SD Trasel</center>

	</div>
</footer>
</html>