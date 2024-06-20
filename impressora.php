<?php
include'layout.php';

?>



<!DOCTYPE html>
<html>

<body >
		<center>

			<br><br>
	    	<h1 class="title is-2 has-text-black">Impressoras</h1><br><br><br><br>
	    
	           		
	        <h2 class="title is-4 has-text-black">DCP-L2540DW Windows</h2><br>

	        <div class="center">
                    <a href="programas/DCP-L2540DW-WIN10.EXE" download="DCP-L2540DW-WIN10.EXE"><button class="button is-primary">Download para Windows 10</button></a>
            </div ><br>
            <div class="center">
                    <a href="programas/DCP-L2540DW-WIN7.EXE" download="DCP-L2540DW-WIN7.EXE"><button class="button is-primary">Download para Windows 7</button></a>
            </div ><br>


        	 <button class="button is-primary">Comandos :</button><br><br>
        	 <div class="comandos"><center>Faça download e instale o driver. </center></div>
        	 <div class="comandos"><center>Adicione e configure a impressora.  </center></div><br>

        	<div class="separar"></div><br><br><br>


        	<h2 class="title is-4 has-text-black">DCP-L2540DW Ubuntu</h2><br>

	        <div class="center">
                    <a href="programas/dcpl2540dwlpr-3.2.0-1.i386.deb" download="dcpl2540dwlpr-3.2.0-1.i386.deb"><button class="button is-primary">Download para Ubuntu</button></a>
            </div ><br>


        	 <button class="button is-primary">Comandos :</button><br><br>
        	 <div class="comandos"><center>su administrador  </center></div>
        	 <div class="comandos"><center>sudo su   </center></div>
             <div class="comandos"><center>cd Downloads  </center></div>
        	 <div class="comandos"><center>dpkg -i --force-all dcpl2540dwlpr-3.2.0-1.i386.deb  </center></div>
        	 <div class="comandos"><center>dpkg -l | grep Brother    </center></div><br><br><br>

        	 <div class="separar"></div><br><br><br>

        	<h2 class="title is-4 has-text-black">EPSON L575 Windows</h2><br>

	       <div class="center">
                    <a href="programas/L575_Escan_4020_FD-WIN10.exe" download="L575_Escan_4020_FD-WIN10.exe"><button class="button is-primary">Download para Windows 10</button></a>
            </div ><br>
            <div class="center">
                    <a href="programas/L575_Escan_4020_FD-WIN7.exe" download="L575_Escan_4020_FD-WIN7.exe"><button class="button is-primary">Download para Windows 7</button></a>
            </div ><br>
        	 <button class="button is-primary">Comandos :</button><br><br>
        	 <div class="comandos"><center>Faça download e instale o driver.   </center></div>
        	 <div class="comandos"><center>Adicione e configure a impressora.    </center></div><br>

        

        	 <div class="separar"></div><br><br><br>
             <h2 class="title is-4 has-text-black">EPSON L575 Ubuntu</h2><br>

              <div class="center">
                    <a href="programas/L575_Escan_4020_FD-WIN7.exe" download="L575_Escan_4020_FD-WIN7.exe"><button class="button is-primary">Download para Ubuntu</button></a>
            </div ><br>
             <button class="button is-primary">Comandos :</button><br><br>
             <div class="comandos"><center>su administrador    </center></div>
             <div class="comandos"><center>sudo su     </center></div>
             <div class="comandos"><center>cd Downloads   </center></div>
             <div class="comandos"><center>Exporte o Proxy    </center></div>
             <div class="comandos"><center>sudo apt-get install lsb    </center></div>
             <div class="comandos"><center>dpkg -i epson-printer-utility_1.1.1-1lsb3.2_amd64.deb     </center></div>



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