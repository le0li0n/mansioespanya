function flashcard()
{

	

if (typeof startside == 'undefined') {
	 startside = "1";
}
	
if (typeof flipside == 'undefined') {
	 flipside = "all";
}

	
	switch(startside)
	{
		case "1":
			$('.side2').hide();	
			$('.side3').hide();	
			$('.side4').hide();	
			$('.side5').hide();	
			break;
		case "2":
			$('.side1').hide();	
			$('.side3').hide();	
			$('.side4').hide();	
			$('.side5').hide();	
			break;
		case "3":
			$('.side1').hide();	
			$('.side2').hide();	
			$('.side4').hide();	
			$('.side5').hide();	
			break;
		case "4":
			$('.side1').hide();	
			$('.side2').hide();	
			$('.side3').hide();	
			$('.side5').hide();	
			break;
		case "5":
			$('.side1').hide();	
			$('.side2').hide();	
			$('.side3').hide();	
			$('.side4').hide();	
			break;
		default:
			break;
	}
	
	$('.show_all').click(function(){
		
		switch(flipside)
		{
			case "all":
				$('.side1').show();
				$('.side2').show();
				$('.side3').show();
				$('.side4').show();
				$('.side5').show();
				break;
			case "1":
				$('.side1').show();
				break;
			case "2":
				$('.side2').show();
				break;
			case "3":
				$('.side3').show();
				break;
			case "4":
				$('.side4').show();
				break;
			case "5":
				$('.side5').show();
				break;
		}

		
		$('.show_all').hide();
	});	
	
}

$(document).ready(flashcard);

$( document ).ready(function() {
	
	var learntype_val = $('#learntype_selector').val();
	//alert(learntype_val);
	 switch(learntype_val)
	  {
	  	case 'new':
		  	$('#notseeninxdays_section').hide();
		  	break;
	  	case 'practice':
		  	$('#notseeninxdays_section').hide();
		  	break;
	  	case 'review':
		  	$('#notseeninxdays_section').show();
		  	break;
		 default:
			break;
	  }
	 
	$('#learntype_selector').on('change', function() {
    	
    	learntype_val = this.value; // or $(this).val()

	  switch(learntype_val)
	  {
	  	case 'new':
		  	$('#notseeninxdays_section').hide();
		  	break;
	  	case 'practice':
		  	$('#notseeninxdays_section').hide();
		  	break;
	  	case 'review':
		  	$('#notseeninxdays_section').show();
		  	break;
		 default:
			break;
	  }
	});
});
