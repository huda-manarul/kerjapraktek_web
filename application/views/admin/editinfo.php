
<div class="container">
	<div class="col-md-8 col-md-offset-2">
		<h2>Edit Informasi</h2><hr/>
		<form action="<?php echo base_url().'dashboard/proseseditinformasi' ?>" method="post" >
			<?php 
			foreach($user as $u){ 
				?>
				<input type="text" name="id" value="<?php echo $u->id_berita ?>" hidden>
				<input type="text" name="judul" class="form-control" placeholder="Judul berita" required value="<?php echo $u->judul_berita ?>"><br/>
				<textarea id="ckeditor" name="berita" class="form-control" required><?php echo $u->isi_berita ?></textarea><br/>
				<?php 
			}
			?>
			<button class="btn btn-primary btn-lg" type="submit">Update informasi</button>
		</form>
	</div>
</div>
