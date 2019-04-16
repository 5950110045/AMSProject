$(document).ready(function(){
			

		$(".txterror").hide();
		$("#addtype").click(function (e) {
			var typeTh = $("#type_thai").val();
			var typeEn = $("#type_eng").val();
			
			if(typeTh.length < 1){
				$("#errorType_th").show();
				e.preventDefault();
			}else{	$("#errorType_th").hide(); }

			if(typeEn.length < 1){
				$("#errorType_en").show();
				e.preventDefault();
			}else{ $("#errorType_en").hide(); }
			
			

			
		});
		
		
	});