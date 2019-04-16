$(document).ready(function(){
			

		$(".txterror").hide();
		$("#additem").click(function (e) {
			var descTh = $("#desc_th").val();
			var descEn = $("#desc_eng").val();
			var quantity = $("#quantity").val();
			var minQuantity = $("#minquantity").val();
			var type = $("#typeid").val();
			var unit = $("#unit").val();

			if(descTh.length < 1){
				$("#errorDesc_th").show();
				e.preventDefault();
			}else{	$("#errorDesc_th").hide(); }

			if(descEn.length < 1){
				$("#errorDesc_eng").show();
				e.preventDefault();
			}else{ $("#errorDesc_eng").hide(); }
			
			if(quantity.length < 1){
				$("#errorQuantity").show();
				e.preventDefault();
			}else{ $("#errorQuantity").hide(); }
		
			if(minQuantity.length < 1){
				$("#errorMin").show();
				e.preventDefault();
			}else{ $("#errorMin").hide();  }

			if(type == "xxx"){
				$("#errorType").show();
				e.preventDefault();
			}else{ $("#errorType").hide();  }

			if(unit == "xxx"){
				$("#errorUnit").show();
				e.preventDefault();
			}else{ $("#errorUnit").hide();  }

			
		});
		
		$("#quantity").keyup(function() {
			var quantity = $("#quantity").val();
			var numericReg = /^([0-9]+)$/;
			if(!numericReg.test(quantity)){
				$("#errorQuantityNum").show();
				
			}else{
				$("#errorQuantityNum").hide();
			}
		});
		$("#minquantity").keyup(function() {
			var minQuantity = $("#minquantity").val();
			var numericReg = /^([0-9]+)$/;
			if(!numericReg.test(minQuantity)){
				$("#errorMinNum").show();
			}else{
				$("#errorMinNum").hide();
			}
		});

		$("#price").keyup(function(e) {
			var price = $("#price").val();
			var numericReg = /^[0-9]+(\.[0-9]{2})?$/;
			if(!numericReg.test(price)){
				$("#errorPrice").show();
				 
			}else{
				$("#errorPrice").hide();
				price = parseFloat(price);
				price = price.toFixed(2);
				$("#price").val(price) ;
			}
		});
	});