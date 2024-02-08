<html>
<head>
<title>La Cadira d l'Atzar</title>
<?php include_once('includes_head.php');?>
<meta http-equiv="Content-Type" content="text/html;charset=ISO-8859-1">
<script language="JavaScript" type="text/javascript">

$(document).ready(function(){
    if (jQuery) {  
        
    	$('[lang="es"]').hide();
    	$('[lang="en"]').hide();
    	

    	
    	
    	$("input[type='radio']").on('change',function(){    	   
       		var lang = 0;
       		lang = $(this).attr('value');
       		lang = Number(lang);
       		
    		switch(lang) {
    			case 0:       			
    				$('[lang="ca"]').show();
    				$('[lang="es"]').hide();
    				$('[lang="en"]').hide();
    				break;
    			case 1:   				
    				$('[lang="ca"]').hide();
    				$('[lang="es"]').show();
    				$('[lang="en"]').hide();
    				break;
    			case 2:    				
    				$('[lang="ca"]').hide();
    				$('[lang="es"]').hide();
    				$('[lang="en"]').show();
    				break;
    			default:
    				$('[lang="ca"]').show();
					$('[lang="es"]').hide();
					$('[lang="en"]').hide();
					break;
    		}
    	});	
    	
      // jQuery is loaded  
      //alert("Yeah!");
    } else {
      // jQuery is not loaded
      //alert("Doesn't Work");
    }
 });
</script>


</head>


<body style="margin: 25px 50px 75px 100px;">
<div class="container-fluid lang-selector" style="text-align:right">  
  <div data-role="fieldcontain">
    <fieldset data-role="controlgroup">
    	<legend></legend>
         	<input type="radio" name="lang-radio" id="radio-choice-1" value=0 style="visibility:hidden" checked="checked"  />
         	<label for="radio-choice-1">
         	<img src="images/lang-catala-circle.png" style="max-width:20px">
         	</label>

         	
         	<input type="radio" name="lang-radio" id="radio-choice-2" value=1 style="visibility:hidden" />
         	<label for="radio-choice-2">
         	<img src="images/lang-castellano-circle.png" style="max-width:20px">
         	</label>

         	<input type="radio" name="lang-radio" id="radio-choice-3" value=2  style="visibility:hidden"/>
         	<label for="radio-choice-3">
         	<img src="images/lang-english-circle.png" style="max-width:20px">
         	</label>
    </fieldset>
</div>
  </div>
</div>



<section id="home">

<div class="container-fluid">
  <h1 lang="en">The Seat of Coincidence</h1>
  <h1 lang="es">El Asiento Del Azar</h1>
  <h1 lang="ca">La Cadira de l'Atzar</h1>
  <div class="row">
    
    
    <div class="col-sm-3 left">
    	<h5>
    	<p lang="ca">L'allotjament</p>
    	<p lang="es">El Alojamiento</p>
    	<p lang="en">The Accommodation</p>
    	</h5>
    	<img class="tilt execs" src="images/facade-001.jpg">
    	<br/>
    	<img class="tilt execs" src="images/salon-red.png">
    	<br/>
    	<img class="tilt execs" src="images/africa.jpg">
    	<br/>
    	<img class="tilt execs" src="images/rose.jpg">
    	<br/>
    	<img class="tilt execs" src="images/black.jpg">
    	<br/>
    	<img class="tilt execs" src="images/skycam.jpg">

    </div>
    
    
    <div class="col-sm-6 main">
    	<h5>
    	<p lang="ca">Una Casa Rural espectactular!</p>
    	<p lang="es">&iexcl;Una Casa Rural espectactular!</p>
    	<p lang="en">A spectacular rural house!</p>
    	</h5>
    	
    	<p lang="en">Accommodation Registered in Tourism: Registration Number PT-0000348
		<br/>
		<br/><strong>Capacity: 15 People</strong>
		</p>
		<p lang="es">Alojamiento Registrado en Turismo: Num. de Registro PT-0000348
		<br/>
		<br/><strong>Capacidad: 15 Plazas</strong>
		</p>
		<p lang="ca">Allotjament Registrat en Turisme seg&uuml;ents:. De Registre PT-0000348
		<br/>
		<br/><strong>Capacitat: 15 Places</strong>
		</p>

		<section lang="en">
		The house can accommodate 15 people and is distributed in:
		<ul>
		<li>-7 double room (and a single bed)</li>
		<li>-5 Bathrooms</li>
		<li>-Living Room</li>
		<li>-Dining Room</li>
		<li>-Kitchen</li>
		<li>-Garden</li>
		</ul>
		<br/>It includes basic breakfast.
		</section>
		
		<section lang="es">
		La casa tiene capacidad para 15 personas y se distribuye en:
		<ul>
		<li>-7 Habitaci&oacute;n de matrimonio (y una cama individual)</li>
		<li>-5 Ba&ntilde;o</li>
		<li>-Sal&oacute;n</li>
		<li>-Comedor</li>
		<li>-Cocina</li>
		<li>-Jard&iacute;n</li>
		</ul>
		<br/>Incluye desayano b&aacute;sico.
		</section>
		
		<section lang="ca">
		La casa t&eacute; capacitat per a 15 persones i es distribueix en:
		<ul>
		<li>-7 Habitaci&oacute; de matrimoni (i una cama individual)</li>
		<li>-5 Baix</li>
		<li>-Sal&oacute;</li>
		<li>-Comedor</li>
		<li>-Cocina</li>
		<li>-Jard&iacute;n</li>
		</ul>
		<br/>Incluye desayano b&aacute;sico.
		</section>
		
		
		<section lang="en">
		<br/>Address: Carrer de Pou Com&uacute; 3, Barri de Saifores
		<br/>City: Banyeres del Pened&eacute;s - Tarragona - Catalu&ntilde;a
		<br/>Area: Pened&eacute;s - Baix Pened&eacute;s
		<br><br>
		<strong>Rural Accommodation Amenities:</strong> Internet Access, Patio, Barbecue, Microwave, Baby Cot, Heating, Washing Machine, Board Games, Parking, Television, Garden, Credit Card Payment
		<br/>
		<br/><strong>Activities and Environment:</strong> Beaches, Wineries, Community Pools, Hiking trails, Bicycle routes, Karting, Mini Golf, Amusement Parks, Water Parks, Playgrounds, Excursions, Museums, Archeological Sites, Bird Watching, Star Gazing
		<br/>
		<br/><strong>Accessibility: Pets are not allowed.</strong> The house has stairs. Children of all ages are allowed. The house is 6.5 km from a train station.
		<br/>
		<br/><strong>Accommodation Type - Shared village house:</strong> This is a historical dwelling within small villages where the tourists share the house with the owner who provides house maintenance and at a minimum, breakfast. 
		</section>
		
		<section lang="es">
		<br/>Ubicacion: Carrer de Pou Com&uacute; 3, Barri de Saifores
		<br/>Localidad: Banyeres del Pened&eacute;s - Tarragona - Catalu&ntilde;a
		<br/>Zona: Pened&eacute;s - Baix Pened&eacute;s
		<br><br><strong>Equipamiento del Alojamiento Rural:</strong> Acceso a Internet, Patio, Barbacoa, Microondas, Cuna Beb&eacute, Calefacci&iacute, Lavadora, Juegos de mesa, Aparcamiento, Televisi&oacute, Jard&iacute, Pago Tarjeta Cr&eacutedito
		<br/>
		<br/><strong>Accesibilidad:</strong> No se permiten mascotas. La casa tiene escaleras para subir. Se permiten menores de todas las edades. La casa est&aacute a 6.5 km de una estaci&oacuten de tren.
		<br/>
		<br/><strong>Tipo de Alojamiento - Casa de pueblo compartida:</strong> Es una vivienda poco conocido, dentro de n&uacutecleos poblacionales, que comparten la persona titular y las personas usuarias tur&iacutesticas y que presta el servicio de toda la casa en r&eacutegimen de habitaciones, y como m&iacutenimo, de desayuno .
		</section>
		
		<section lang="ca">
		<br/>Ubicaci&oacute: Carrer de Pou Com&uacute; 3, Barri de Saifores
		<br/>Localitat: Banyeres del Pened&eacute;s - Tarragona - Catalu&ntilde;a
		<br/>Zona: Pened&eacute;s - Baix Pened&eacute;s
		<br><br>
		<strong>Equipamiento del Alojamiento Rural:</strong> Acceso a Internet, Patio, Barbacoa, Microondas, Cuna Beb&eacute;, Calefacci&iacute;,
		Lavadora, Juegos de mesa, Aparcamiento, Televisi&oacute;, Jard&iacute;, Pago Tarjeta Cr&eacute;dito 
		<br/>
		<br/><strong>Actividades y Entorno:</strong> Rutas de senderismo, Rutas en Bicicleta, Zona de Play, 
		Excursiones, Visitas culturales, Avistamiento de Aves, Observaci&oacute;n Astron&oacute;nomica
		<br/>
		<br/><strong>Accesibilidad:</strong> No se permiten mascotas. La casa tiene escaleras para subir. Se permiten menores de todas las edades. 
		La casa est&aacute; a 6.5 km de una estaci&oacute;n de tren.<br/>
		<br/><strong>Tipus d'Allotjament - Casa de poble compartida:</strong> &Eacute;s un habitatge poc conegut, dins de nuclis poblacionals, 
		que comparteixen la persona titular i les persones usu&agrave; ries tur&iacute;stiques i que presta 
		el servei de tota la casa en r&egrave;gim d'habitacions, i com a m&iacute;nim, d'esmorzar.
		</section>
		
		<br/>
		
		<section lang="en">
		<h4>contact: <a href="mailto:reserva@mansioespanya.com">reserva@mansioespanya.com</a></h4>
		</section>
		
		<section lang="es">
		<h4>contact: <a href="mailto:reserva@mansioespanya.com">reserva@mansioespanya.com</a></h4>
		</section>
		
		<section lang="ca">
		<h4>contactar amb <a href="mailto:reserva@mansioespanya.com">reserva@mansioespanya.com</a></h4>
		</section>
		
		
		
	</div>
   		 <div class="col-sm-3 right">
	   		<h5>
	    	<p lang="ca">Activitats properes</p>
	    	<p lang="es">Actividades cercanas</p>
	    	<p lang="en">Nearby Activities</p>
	    	</h5>
   		 	<img class="tilt execs" src="images/beaches-secret.jpg">
	    	<br/>
	    	<img class="tilt execs" src="images/fireworks.jpg">
	    	<br/>
	    	<img class="tilt execs" src="images/campnou.jpg">
	    	<br/>
	    	<img class="tilt execs" src="images/waterpark.jpg">
	    	<br/>
	    	<img class="tilt execs" src="images/mastinell_tasting.jpeg">
	    	<br/>
	    	<img class="tilt execs" src="images/castellers2.jpg">
   		 </div>
  </div>
</div>

</section>


</body>

</html>