$(document).ready(function()){
	$("email").keyup(function()){
		if(valideEmail()){

			$("#email").css("border", "2px solid green");
		} else{
			$("#email").css("border", "2px solid red");
		}


	};
};

function valideEmail() {

	var eamil=$("#email").val();

	var reg = /^\w+([-+.']\w+)*\.\w+([-.]\w+)*$/
	if(reg.test){
		return true;
	} else {
		return false;
	}
}

function buttonState(){
	if(valideEmail()){
		$("#btn").show();
	}else{
		$("#btn").hidden();
	}
}