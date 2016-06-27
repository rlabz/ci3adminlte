$(document).ready(function(){
	tinymce.init({
	  selector: 'textarea',
	  height: 300,
	  plugins: [
	    'advlist autolink lists link image charmap print preview anchor',
	    'searchreplace visualblocks code fullscreen',
	    'insertdatetime media table contextmenu paste code'
	  ],
	  toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
	  content_css: [
	    '//fast.fonts.net/cssapi/e6dc9b99-64fe-4292-ad98-6974f93cd2a2.css',
	    baseurl+'assets/js/tinymce/skins/lightgray/skin.min.css'
	  ]
	});
	
	//TEMPEL ELEMENT KE TinyMCE
	$(document).on("click",".j-pick-img", function(){
		var imageUrl = $(this).attr("data-url");
		var imgText = '<img src="' + imageUrl + '" width="400" height="auto" />';
		tinymce.activeEditor.execCommand("mceInsertContent",false,imgText);
	});

	// TABS
	$('#imgTabs a').click(function (e) {
	  e.preventDefault();
	  $(this).tab('show');
	});

});

//UPLOAD
function simpanfoto(){
    var userfile=$('#myfile').val();
    $('#uploadfoto').ajaxForm({
		url:baseurl+'index.php/welcome/upload_img',
		type: 'post',
		data:{"userfile":userfile},
		dataType:'html',
		beforeSend: function() {
			var percentVal = 'Mengupload 0%';
			$('.msg').html(percentVal);
		},
		uploadProgress: function(event, position, total, percentComplete) {
			var percentVal = 'Mengupload ' + percentComplete + '%';
			$('.msg').html(percentVal);
		},
		beforeSubmit: function() {
			$('.hasil').html('Silahkan Tunggu ... ');
		},
		complete: function(xhr) {
			$('.msg').html('Mengupload file selesai!');
		}, 
		success: function(resp) {
			$('.hasil').html(resp);
		},
    });     
};