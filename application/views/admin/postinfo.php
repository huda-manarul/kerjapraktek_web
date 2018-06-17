<!DOCTYPE html>
<html>
<head>
	<title>Post Berita</title>
</head>
<body>
	<div class="container">
		<div class="col-md-8 col-md-offset-2">
			<h2>Tambah Informasi</h2><hr/>
			<form action="<?php echo base_url().'dashboard/prosestamabahinformasi' ?>" method="post" >
				<input type="text" name="judul" class="form-control" placeholder="Judul berita" required/><br/>
				<textarea id="ckeditor" name="berita" class="form-control" required></textarea><br/>
				<button class="btn btn-primary btn-lg" type="submit">Update informasi</button>
			</form>
		</div>
	</div>
</script>
</body>
</html>