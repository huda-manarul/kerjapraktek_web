<div class="container horizontal-centered">
	<div class="col-lg-7"> 
		<h3>Tambah Dosen</h3><hr>
		<form action="<?php echo base_url().'dashboard/prosestambahdosen' ?>" method="post" >
			<div class="form-group">
				<label for="nip">NIP:</label>
				<input type="text" class="form-control" name="nip">
			</div>
			<div class="form-group">
				<label for="nama">Nama:</label>
				<input type="text" class="form-control" name="nama">
			</div>
			<div class="form-group">
				<label for="kuota">Kuota:</label>
				<input type="number" class="form-control" name="kuota">
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
		</form> 
	</div>
</div>