	<div class="container">
		<h3><?php echo $judul ?></h3><br><table class="table table-hover">
			<thead>
				<tr>
					<th>nip</th>
					<th>nama</th>
					<th><center>sisa kuota</center></th>
					<th><center>aksi</center></th>
				</tr>
			</thead>
			<?php 
			foreach($user as $u){ 
				?>
				<tr>
					<td><?php echo $u->nip ?></td>
					<td><?php echo $u->nama_dosen ?></td>
					<td><center><?php echo $u->sisa_kuota ?></center></td>
					<td><center><a href="<?php echo base_url()."dashboard/tambahdosen/"?>">tambah</a> || <a href="<?php echo base_url()."dashboard/hapusdosen/".$u->nip; ?>">hapus</a></center></td>
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