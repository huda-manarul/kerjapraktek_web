
<div class="container">
	<h3><?php echo $judul ?></h3><br>
	<div style="overflow-x:auto;">
		<table class="table table-hover">
			<thead>
				<th>nim</th>
				<th>Nama</th>
				<th>jenis kegiatan</th>
				<th>tempat kp</th>
				<th>alamat</th>
				<th>penyelia</th>
			</tr>
		</thead>
		<?php 
		foreach($user as $u){ 
			?>
			<tr>
				<td><?php echo $u->nim ?></td>
				<td><?php echo $u->nama ?></td>
				<td><?php echo $u->jenis_kegiatan ?></td>
				<td><?php echo $u->tempat_kp ?></td>
				<td><?php echo $u->alamat_tempat_kp ?></td>
				<td><?php echo $u->penyelia ?></td>
			</tr>
			<?php } ?>
		</table>
	</div>
</div>
</div>
<div class="row">
	<div class="col">
		<!--Tampilkan pagination-->
		<?php echo $this->pagination->create_links(); ?>
	</div>
</div>