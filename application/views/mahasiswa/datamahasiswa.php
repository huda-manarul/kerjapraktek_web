
<div class="container">
	<div class="alert alert-info alert-dismissible">
		<button type="button" class="close" data-dismiss="alert">×</button>
		<strong>Success!</strong> This alert box could indicate a successful or positive action.
	</div>
	<h3><?php echo $judul ?></h3><br>
	<?php 
	foreach($user as $u){ 
		?>
		<table class="table table-sm">
			<tr>
				<td>Nim</td>
				<td>:</td>
				<td><?php echo $u->nim ?></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><?php echo $u->nama ?></td>
			</tr>
			<tr>
				<td>Jenis Kegiatan</td>		
				<td>:</td>
				<td><?php echo $u->jenis_kegiatan ?></td>
			</tr>
			<tr>
				<td>Status Kegiatan</td>		
				<td>:</td>
				<td><?php echo $u->jenis_kegiatan ?></td>
			</tr>
			<tr>
				<td>Tempat KP</td>
				<td>:</td>
				<td><?php echo $u->tempat_kp ?></td>
			</tr>
			<tr>
				<td>Alamat Tempat KP</td>
				<td>:</td>
				<td><?php echo $u->alamat_tempat_kp ?></td>
			</tr>
			<tr>
				<td>Penyelia</td>
				<td>:</td>
				<td><?php echo $u->penyelia ?></td>
			</tr>
			<tr>
				<td>Judul KP</td>
				<td>:</td>
				<td><?php echo $u->judul_kp ?></td>
			</tr>
			<tr>
				<td>Dosen Pembimbing</td>
				<td>:</td>
				<td><?php echo $u->nama_dosen ?></td>
			</tr>
		</table>
		<?php
	} 
	?>
</div>
<script type="text/javascript">
	$('.alert').alert()
</script>