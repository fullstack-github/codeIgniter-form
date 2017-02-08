$(function() {
	$('#upload_file').submit(function(e) {
		$('#files').html('<p>Reloading files...</p>');
		e.preventDefault();
		 $.ajax({
			url: "index.php/welcome/uploadFile/",
			type: "POST",
			data: new FormData($('#upload_file')[0]), 
			success : function(data){
				if(data=='success')
				{
					$('#files').html('<p>Image upload successfully.</p>');
					$('#title').val('');
					$('#userfile').val('');
					$('#crop_x').val('');
					$('#crop_y').val('');
					$('#output_x').val('');
					$('#output_y').val('');
					$("#files").show().delay(3000).fadeOut();
				}
				else
				{
					$('#files').html('<p>Something went wrong when saving the file, please try again.</p>');
				}
			},
			enctype: 'multipart/form-data',
			processData: false,
			contentType: false,
			cache: false
		});
		return false;
	});
});