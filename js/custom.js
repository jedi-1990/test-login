function login(){
	var _email = $("#email").val();
	var _pass = $("#password").val();
	$(".btn_loading").addClass("active");
	$.ajax({
		type     : "GET",
		cache    : false,
		url	  : "request.php?request=login&email="+_email+"&password="+_pass,
		success  : function(html) {
			if(html=="error"){
				$(".error").slideDown(300);
			}
			if(html=="login"){
				location.reload(); 
			}
		}
	});
	return false;
}
$(document).on("click","input", function(event){
	$(".error").slideUp(300);
});
$(document).on("click",".btn_logout", function(event){
	$.ajax({
		type     : "GET",
		cache    : false,
		url	  : "request.php?request=logout",
		success  : function(html) {
			location.reload(); 
		}
	});
});