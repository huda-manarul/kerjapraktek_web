<div class="container">
	<h3><?php echo $judul ?></h3><br>
	<table class="table table-hover">
		<thead>
			<tr>
				<th>judul berita</th>
				<th>isi berita</th>
				<th><center>Aksi</center></th>
			</tr>
		</thead>
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
				<td><center><a href="<?php echo base_url().'dashboard/tambahberita' ?>">tulis</a> || <a href="<?php echo base_url()."dashboard/editberita/".$u->id_berita; ?>">edit</a> || <a href="<?php echo base_url()."dashboard/hapusberita/".$u->id_berita; ?>">hapus</a></center></td>
			</tr>
			<?php } ?>
		</table>
		<div class="row">
			<div class="col">
				<!--Tampilkan pagination-->
				<?php echo $this->pagination->create_links(); ?>
			</div>
		</div>
	</div>
	
