<div class="container horizontal-centered">
  <div class="col-lg-7">   
    <h3><?php echo $judul ?></h3><hr>
    <!-- <div class="alert alert-primary" role="alert">
      This is a primary alert—check it out!
    </div> -->
    <form action="<?php echo base_url().'mahasiswa/prosesdaftarsidangKP' ?>" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label for="nim">NIM:</label>
        <input type="text" class="form-control" name="nim" value="<?php echo $this->session->userdata("user_name"); ?>" readonly>
      </div>
      <div class="form-group">
        <label for="nama">Judul KP:</label>
        <input type="text" class="form-control" name="judul">
      </div>
      <div class="form-group">
        <label for="nama">Lembar Pengesahan:</label>
        <div class="custom-file">
          <input type="file" class="custom-file-input" name="pengesahan" id="filinput">
          <label class="custom-file-label" for="customFile"></label>
        </div>
      </div>
      <div class="form-group">
        <label for="nama">Surat Keterangan KP:</label>
        <div class="custom-file">
          <input type="file" class="custom-file-input" name="sk" id="filinput1">
          <label class="custom-file-label" for="customFile"></label>
        </div>
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form> 
  </div>
</div>
<script>
  $('#filinput').on('change',function(){
    //get the file name
    var fileName = $(this).val();
    //replace the "Choose a file" label
    $(this).next('.custom-file-label').html(fileName);
  })

  $('#filinput1').on('change',function(){
    //get the file name
    var fileName = $(this).val();
    //replace the "Choose a file" label
    $(this).next('.custom-file-label').html(fileName);
  })
</script>