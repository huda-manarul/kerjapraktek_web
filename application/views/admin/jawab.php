<!-- <form method="post" action="<?php echo base_url()."dashboard/jawab"; ?>">
	<?php 
	foreach($user as $u){ 
		?>
		<input type="text" value="<?php echo $u->pertanyaan ?>" name="pertanyaan" readonly>
		<?php 
	}
	?>
	<input type="text" name="jawaban">
	<input type="submit" name="jawab" value="jawab">
</form>
 -->
<div class="container horizontal-centered">
	<div class="col-lg-7">   
		<h3>Jawab Pertanyaan</h3><hr>
		<form action="<?php echo base_url().'dashboard/jawab' ?>" method="post">
			<?php 
	foreach($user as $u){ 
		?>
			<div class="form-group">
				<label for="pertanyaan">Pertanyaan:</label>
				<input type="text" class="form-control" name="pertanyaan" value="<?php echo $u->pertanyaan ?>" readonly>
			</div>
			<div class="form-group">
				<label for="jawaban">Jawab:</label>
				<input type="text" class="form-control" name="jawaban" value="<?php echo $u->jawaban ?>" >
			</div>  
			<?php 
	} 
		?>
			<div class="form-group">
				<button type="submit" class="btn btn-primary">Jawab</button>
			</div>
		</form> 
	</div>
</div>
