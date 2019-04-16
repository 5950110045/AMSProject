$(document).ready(function(){
			

		$(".txterror").hide();
		$("#addunit").click(function (e) {
			var unitTh = $("#unit_thai").val();
			var unitEn = $("#unit_eng").val();
			
			if(unitTh.length < 1){
				$("#errorUnit_th").show();
				e.preventDefault();
			}else{	$("#errorUnit_th").hide(); }

			if(unitEn.length < 1){
				$("#errorUnit_en").show();
				e.preventDefault();
			}else{ $("#errorUnit_en").hide(); }
			
			

			
		});
		
		
	});