$(document).ready(function(){
	$("#enter").keyup(function(){
		$.get("fi.php", {cars: $(this).val()}, function(data){
			$("#carss").empty();
			$("#carss").html(data);
		});
	}
});
