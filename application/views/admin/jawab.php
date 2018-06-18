<form method="post" action="<?php echo base_url()."dashboard/jawab"; ?>">
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