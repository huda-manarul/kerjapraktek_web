<div class="container">
	<h3><?php echo $judul ?></h3><br>
	<table class="table table-striped table-sm">
		<tr>
			<th>judul berita</th>
			<th>isi berita</th>
			<th><center>Aksi</center></th>
		</tr>
		<?php 
		foreach($user as $u){ 
			?>
			<tr>
				<td><?php echo $u->judul_berita ?></td>
				<td><?php 
				$ringkas = $u->isi_berita;
				$sub_ringkas= substr($ringkas,0,70);
				echo $sub_ringkas." . . ."; 
				?></td>
				<td><center>tulis || edit || hapus</center></td>
			</tr>
			<?php } ?>
		</table>
	</div>
	<div class="row">
		<div class="col">
			<!--Tampilkan pagination-->
			<?php echo $this->pagination->create_links(); ?>
		</div>
	</div>
