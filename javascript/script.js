
$(document).ready(function(){

	$("#cityList").load("php/get_city.php");
	$("#cityList").change(function() {
		var id = $("#cityList").find(":selected").val();
		
		$("#cinema_container").load("php/get_cinema.php", {keyId: id});
	});
});

var getCinemaId  = function(id) {
	$("#program_container").load("php/get_program.php", {keyId: id});
}
