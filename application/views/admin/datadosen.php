	<div class="container">
		<h3><?php echo $judul ?></h3><br><table class="table table-hover">
		<thead>
			<tr>
				<th>nip</th>
				<th>nama</th>
				<th>sisa kuota</th>
			</tr>
		</thead>
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
		<div class="row">
		<div class="col">
			<!--Tampilkan pagination-->
			<?php echo $this->pagination->create_links(); ?>
		</div>
	</div>