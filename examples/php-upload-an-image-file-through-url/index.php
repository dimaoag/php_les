<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>PHP upload an image file through url</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
		<style>
		.box
		{
			width:600px;
			margin:0 auto;
		}
		</style>
	</head>
	<body>
	<br />
		<div class="container box">
			<br />
			<br />
			<br />
			<h2 align="center">PHP upload an image file through url</h2><br />
			<div class="form-group">
				<label>Enter Image Url</label>
				<input type="text" name="image_url" id="image_url" class="form-control" />
			</div>
			<div class="form-group">
				<input type="button" name="upload" id="upload" value="Upload" class="btn btn-info" />
			</div>
			<br />
			<div id="result"><img src="upload/upload-image-from-url-using-php-with-ajax.png" class="img-thumbnail img-responsive" /></div>
		</div>
		<div style="clear:both"></div>
		<br />
		
		<br />
		<br />
		<br />
	</body>
</html>


<script>
$(document).ready(function(){
	$('#upload').click(function(){
		var image_url = $('#image_url').val();
		if(image_url == '')
		{
			alert("Please enter image url");
			return false;
		}
		else
		{
			$('#upload').attr("disabled", "disabled");
			$.ajax({
				url:"upload.php",
				method:"POST",
				data:{image_url:image_url},
				dataType:"JSON",
				beforeSend:function(){
					$('#upload').val("Processing...");
				},
				success:function(data)
				{
					$('#image_url').val('');
					$('#upload').val('Upload');
					$('#upload').attr("disabled", false);
					$('#result').html(data.image);
					alert(data.message);
				}
			})
		}
	});
});
</script>




