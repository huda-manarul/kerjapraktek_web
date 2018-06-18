
	<div class="container">
		<h3><?php echo $judul ?></h3><br>
			<table class="table table-striped table-sm">
				<tr>
					<th>Nim</th>
					<th>Nama</th>
					<th>Judul KP</th>
					<th>Dosen Pembimbing</th>
					<th>Lembar Pengesahan</th>
					<th>Surat Keterangan</th>
					<th>Aksi</th>
				</tr>
				<?php 
				foreach($user as $u){ 
					?>
					<tr>
						<td><?php echo $u->nim ?></td>
						<td><?php echo $u->nama ?></td>
						<td><?php echo $u->judul_kp ?></td>
						<td><?php echo $u->nama_dosen ?></td>
						<td><a href="<?php echo base_url().'assets/images/'.$u->surat_magang ?>"><?php echo $u->surat_magang ?></a></td>
						<td><a href="<?php echo base_url().'assets/images/'.$u->lembar_pengesahan ?>"><?php echo $u->lembar_pengesahan ?></a></td>
						<td><a href="">Persetujuan</a></td>
					</tr>
					<?php } ?>
				</table>
			</div>
		</div>