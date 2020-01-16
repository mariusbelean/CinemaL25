
$(document).ready(function(){

	$("#cityList").load("php/get_city.php");
	$("#cityList").change(function() {
		var id = $("#cityList").find(":selected").val();
		$("#program_container").empty();
		$("#cinema_container").load("php/get_cinema.php", {keyId: id});
	});
});

var getCinemaId  = function(id) {
	$("#program_container").load("php/get_program.php", {keyId: id});
}

var modal = document.getElementById("myModal");
var span = document.getElementsByClassName("close")[0];

var program, sala, film, locuri;

var rezervaLocuriFilm = function(p, s, f, l) {
	modal.style.display = "block";
	program = p;
	sala = s;
	film = f;
	locuri = l;
	$(".modal-content").load("php/get_loc.php", {keyId: sala});
}

var selectareLoc= function(loc) {
	$("#booking_result").load("php/set_booking.php", {fN: $("#fn").val(), lN: $("#ln").val(), eM: $("#em").val(), tel: $("#tel").val(), program: program, loc: loc});
}

span.onclick = function() {
 	modal.style.display = "none";
}

window.onclick = function(event) {
	if (event.target == modal) {
		modal.style.display = "none";
	}
}

function signup() {
	$("#sign-up").load("php/signup.php", {fN: $("#fn").val(), lN: $("#ln").val(), eM: $("#em").val(), tel: $("#tel").val()});
}
