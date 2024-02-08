<html>
<head>
<script src="javascript/jquery-2.1.3.min.js" type="text/javascript"></script>
<script language="JavaScript" type="text/javascript">

$(document).ready(function(){
    if (jQuery) {  
    	$('[lang="es"]').hide();
    	$('[lang="ca"]').hide();
        
    	$('#switch-lang').click(function() {
    	  $('[lang="es"]').toggle();
    	  $('[lang="en"]').toggle();
    	});
    		
    	$("input[type='radio']").on('change',function(){
    	    // Do something
    	  // alert('hi');
       		var lang = 0;
       		lang = $(this).attr('value');
       		lang = Number(lang)
    		switch(lang) {
    			case 0:       			
    				$('[lang="ca"]').hide();
    				$('[lang="es"]').show();
    				$('[lang="en"]').hide();
    				break;
    			case 1:   				
    				$('[lang="ca"]').show();
    				$('[lang="es"]').hide();
    				$('[lang="en"]').hide();
    				break;
    			case 2:    				
    				$('[lang="ca"]').hide();
    				$('[lang="es"]').hide();
    				$('[lang="en"]').show();
    				break;
    			default:
    				$('[lang="ca"]').hide();
					$('[lang="es"]').hide();
					$('[lang="en"]').show();
    		}
    	});	
    	
      // jQuery is loaded  
      //alert("Yeah!");
    } else {
      // jQuery is not loaded
     // alert("Doesn't Work");
    }
 });
 
</script>
</head>

<body>

<input type="radio" id="ca" name="lang-radio" value=0>
<label for="catalan">Catalan</label><br>
<input type="radio" id="es" name="lang-radio" value=1>
<label for="catellano">Castellano</label><br>
<input type="radio" id="en" name="lang-radio" value=2>
<label for="english">English</label>


<button id="switch-lang">Switch Language</button>

<select id="lang" name="lang" class="drop">
  <option value="es">Castellano</option>
  <option value="ca">Catal‡</option>
  <option value="en">English</option>
</select>

<h1><span lang="en">Hello</span> <span lang="es">Hola</span></h1>

<p lang="ca">Bon Dia.</p>
<p lang="en">I really enjoy coding.</p>
<p lang="es">Me gusta mucho la codificaci—n.</p>


</body>
</html>