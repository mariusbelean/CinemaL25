var body = document.getElementsByTagName("body")[0];

body.onload = function() {
    document.body.style.zoom = "100%";
}

$(document).ready(function(){
	$("#btnLoc").click(function(){
		$("#locuri").load("get_data.php");
	});
})