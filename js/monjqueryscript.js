
$(document).ready(function($) {

	$("table").delegate("#edit","click", function() {
	//Cacher la ligne de l'EDIT
	// $(this).parents("tr").children('td').not('td:first,td:last').hide();


	 // récupérer l'ID du ROW
	 var id =  $(this).closest('tr').children('td:first').text();
	 var name =  $(this).closest('tr').children('td:nth-child(2)').text();
	 var password =  $(this).closest('tr').children('td:nth-child(3)').text();
	 var email =  $(this).closest('tr').children('td:nth-child(4)').text();

	  $("#name_mod").val(name);
	  $("#password_mod").val(password);
	  $("#email_mod").val(email);

	  $("#edit_submit_ok").click(function() {
	  	var new_name = $("#name_mod").val();
	  	var new_password = $("#password_mod").val();
	  	var new_email = $("#email_mod").val();
		 
	  	
	  	 $.post('update.php', {id: id, name:new_name , password:new_password, email: new_email});
	  });



	});


});