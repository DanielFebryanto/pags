$(function(){
//	/* Supplier Block */
//	$("#supplierSubmit").click(function(){
////		return false;
//	});
       $(".Departement").change(function(){
			var clickID = $(".Departement").val();
			$.ajax({
                url: "http://localhost/ajax/requestPosition/"+ clickID,
	            type: "GET",
                dataType: "HTML",
	            success: function (data) {
                	console.log("isi Value :"+data);
	            	$(".posisi").html("");
						
 	 	                $(".posisi").html(data);
	            }
        });
    	});

     });