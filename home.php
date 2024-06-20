<?php
include'layout.php';

?>



<!DOCTYPE html>
<html>
<style>

 #clockdiv{
    font-family: sans-serif;
    color: #fff;
    display: inline-block;
    font-weight: 100;
    text-align: center;
    font-size: 30px;
}
#clockdiv > div{
    padding: 10px;
    border-radius: 3px;
    background: #23232e ;
    display: inline-block;
}
#clockdiv div > span{
    padding: 15px;
    border-radius: 3px;
    background: #535366;
    display: inline-block;
}
smalltext{
    padding-top: 5px;
    font-size: 16px;
}
</style>

<body >
		<center>

			<br><br>
	    	<h1 class="title is-2 has-text-black">Suporte Informática  1°CGEO</h1><br><br><br><br>

	    	<div class="informa">
	    		
	    			<h2>
	    			Este site tem a função de auxiliar o suporte da informática deste aquartelamento, onde contem comandos, arquivos e alguns bizus.
	    		    <br><br>
	    		    Foi desenvolvido pelo <strong class="trasel"><i>SD Trasel</i></strong> apenas por questão de aprendizado e prática.<br>
	    		    </h2> <br>




	    		   
	    	</div><br><br><br>
	    	<h1>Dias que a lenda se foi:</h1><br><br>
<div id="clockdiv">
  <div>
    <span class="days" id="day"></span>
    <div class="smalltext">Dias</div>
  </div>
  <div>
    <span class="hours" id="hour"></span>
    <div class="smalltext">Horas</div>
  </div>
  <div>
    <span class="minutes" id="minute"></span>
    <div class="smalltext">Minutos</div>
  </div>
  <div>
    <span class="seconds" id="second"></span>
    <div class="smalltext">Segundos</div>
  </div>
</div>
  
<p id="demo"></p>
  
<script>

//Coloca aqui a data que deseja fazer a contagem regressiva
var deadline = new Date("jan 26, 2023 00:00:00").getTime();
  
var x = setInterval(function() {
  
var now = new Date().getTime();
var t = now - deadline;
var days = Math.floor(t / (1000 * 60 * 60 * 24));
var hours = Math.floor((t%(1000 * 60 * 60 * 24))/(1000 * 60 * 60));
var minutes = Math.floor((t % (1000 * 60 * 60)) / (1000 * 60));
var seconds = Math.floor((t % (1000 * 60)) / 1000);
document.getElementById("day").innerHTML =days  ;
document.getElementById("hour").innerHTML =hours ;
document.getElementById("minute").innerHTML = minutes ; 
document.getElementById("second").innerHTML =seconds ; 


if (deadline > now) {
        
        document.getElementById("day").innerHTML ='0' ;
        document.getElementById("hour").innerHTML ='0' ;
        document.getElementById("minute").innerHTML ='0' ; 
        document.getElementById("second").innerHTML = '0' ; 
    		}



}, 1000);
</script>
	    
	    </center>       		
	        

	    
         	

</body>
<footer>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	<div class="direitos">
        <center>Suporte - Dev. SD Trasel</center>

    </div>
</footer>
</html>