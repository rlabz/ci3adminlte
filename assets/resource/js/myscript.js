jQuery(document).ready(function () {
	$(document).on('click','.j-save-setting', function(){
		var url = $(this).attr("data-url");
		var title = $("#inputTitle").val();
		var alamat = $("#inputAlamat").val();
		var contact = $("#inputContact").val();
		var email = $("#inputEmail").val();

		$.ajax({
			url : url,
			type : 'POST',
			data : {title: title, alamat:alamat, contact:contact, email:email},
			dataType : 'JSON',
			success : function(data){
				console.log(data.status);
				if(data.status === true){					
					alert(data.msg);
					// window.location.href = homeurl;
				}else{
					alert(data.msg);
				}
			}
		});
	});
	
	//MENU SELCTED 
	$(".nav li a").on("click", function(){
	  $(".nav").find(".active").removeClass("current");
	  $(this).addClass("current");
	});

	$("#datamenu").click(function(){
		var url = $(this).attr("data-url");
		$.ajax({			
			url : url,
			dataType : "html",
			success : function(data){
				$("#admin-content").html(data);
			}
		});
	});
	$("#databerita").click(function(){
		var url = $(this).attr("data-url");
		$.ajax({			
			url : url,
			dataType : "html",
			success : function(data){
				$("#admin-content").html(data);
			}
		});
	});	
	
	$(".j-btn-komen").click(function(){
		alert("maaf, posting comment tidak untuk versi demo.");
	});

});