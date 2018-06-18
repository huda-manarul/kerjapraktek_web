	<div class="container">
		<h3><?php echo $judul ?></h3><br>
		<table class="table table-striped table-sm">
			<tr>
				<th>nip</th>
				<th>nama</th>
				<th>sisa kuota</th>
			</tr>
			<?php 
			foreach($user as $u){ 
				?>
				<tr>
					<td><?php echo $u->nip ?></td>
					<td><?php echo $u->nama_dosen ?></td>
					<td><?php echo $u->sisa_kuota ?></td>
				</tr>
				<?php } ?>
			</table>
		</div>