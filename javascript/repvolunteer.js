var spaces_id = '';
//var content = '';
var users_id = '';
var input_value = '';

function activateRepVolunteer()
{


	$("input[type='checkbox']").filter('.volunteer').change(function(){
	    // Do something interesting here
		var element_id = '';
		element_id = $(this).attr('name');
		var split_result = element_id.split("~");
		
		content = split_result[0];
		spaces_id = split_result[1];
		sets_id = split_result[2];
		users_id = split_result[3];
		input_value = $(this).attr('checked'); //checked or unchecked
		
		if(input_value == "checked" )
			{
			input_value = "checked";
			} else
				{
				input_value = "unchecked";
				}
		
		saveVolunteerInput();
		
	});	
}

$(document).ready(activateRepVolunteer);

function saveVolunteerInput()
{
	
	$.ajax({
		type: "GET",
		url: "ajax_saveRepVolunteer.php?content=" + content + "&spaces_id=" + spaces_id + "&sets_id=" + sets_id + "&users_id=" + users_id + "&input_value=" + input_value,
		dataType: "html",
		success: volunteerInputSaved
	});
	
	

}

function volunteerInputSaved()
{
	//showTally();
}
