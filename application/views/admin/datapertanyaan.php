<div class="container">
	<h3><?php echo $judul ?></h3><br>
	<table class="table table-hover">
		<thead>
			<tr>
				<th>Tanggal Ditanyaakan</th>
				<th>Pertanyaan</th>
				<th>Jawaban</th>
				<th><center>Aksi</center></th>
			</tr>
		</thead>
		<?php 
		foreach($user as $u){ 
			?>
			<tr>
				<td><?php echo $u->tanggal ?></td>
				<td><?php echo $u->pertanyaan ?></td>
				<td><?php echo $u->jawaban ?></td>
				<td><center><a href="<?php echo base_url()."dashboard/jawabpertanyaan/".$u->no; ?>"> jawab </a>||<a href="<?php echo base_url()."dashboard/hapuspertanyaan/".$u->no; ?>"> hapus</a></center></td>
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
