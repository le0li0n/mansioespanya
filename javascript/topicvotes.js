
var topics_id = '';
var input_value = '';

function activateTopicVote()
{

	
	$("input[type='radio']").filter('.livevote').change(function(){
	    // Do something interesting here
		var element_id = '';
		element_id = $(this).attr('name');
		var split_result = element_id.split("~");
		topics_id = split_result[1];
		spaces_id = split_result[2];
		
		input_value = $(this).attr('value');
		saveInput();
		
	});	
}

$(document).ready(activateTopicVote);

function saveInput()
{
	$.ajax({
		type: "GET",
		url: "ajax_saveTopicInput.php?topics_id=" + topics_id + "&input_value=" + input_value + "&spaces_id=" + spaces_id,
		dataType: "html",
		success: inputSaved
	});
	
	

}

function inputSaved()
{
	showTally();
}

function showTally()
{
	
	$.ajax({
		type: "GET",
		url: "ajax_fetchTally.php?topics_id=" + topics_id,
		dataType: "json",
		success: updateTally,
		error: updateTallyError
	  	});
}







function updateTally(data, statusText)
{
	//alert('success');

	//console.log(data);
	
	if(!data)
		{
		return;
		}
	
	
	var choice1 = '';
	var choice2 = '';
	var choice3 = '';
	var choice4 = '';
	var choice5 = '';
	
	var c = 0;
	var tallytotal = 0;
	var countofvotes = 0;
	
	jQuery.each(data,function()
	{
		if(c == 1) {choice1 = this; }
		if(c == 2) {choice2 = this; }
		if(c == 3) {choice3 = this; }
		if(c == 4) {choice4 = this; }
		if(c == 5) {choice5 = this; }
			
	c = c +1;
	
	$('#tally-' + topics_id + '-' + c).html(this);
	
	tallytotal = tallytotal + (c * parseInt(this)); countofvotes = countofvotes + parseInt(this); 
	
	})
	
	tallyavg = (tallytotal / countofvotes).toFixed(2);
	if(tallyavg > 0)
		{
		$('#tallysummary-' + topics_id).html('Avg: ' + tallyavg);
		}
	
	$('#rep-' + topics_id + '-' + spaces_id).html("");
			
			
	
	
}

function updateTallyError(data, statusText)
{
	alert('error');
	
	console.log(data);
	
	if(!data)
	{
		return;
	}

	var test = '';
	jQuery.each(data, function() 
			{
		test += this.topics_id;
			})
	$('#test').html(test);
	

	return;
}


$(document).on("click","#show_all_votes",function(){
	
	$(".tallysummary").each(function() {
	  
		var topics_id = $(this).data('topics-id');
		var contenttype = $(this).data('contenttype');
		
		$.ajax({
			type: "GET",
			url: "ajax_fetchTally.php?topics_id=" + topics_id,
			dataType: "json",
			success: updateTally,
			error: updateTallyError
		  	});	
	});
	
	
});