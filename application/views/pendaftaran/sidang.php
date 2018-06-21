<div class="container horizontal-centered">
  <?php 
    if ($info!=NULL) {?>
    <div class="alert alert-warning alert-dismissible">
      <button type="button" class="close" data-dismiss="alert">×</button>
      <strong>Perhatian !</strong> Anda sudah melakukan Pendaftaran Sidang KP, silahkan di cek pada menu Data Mahasiswa.
    </div>
    <?php 
  }
  ?>  
  <div class="col-lg-7">   
    <h3><?php echo $judul ?></h3><hr>
    <form action="<?php echo base_url().'mahasiswa/prosesdaftarsidangKP' ?>" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label for="nim">NIM:</label>
        <input type="text" class="form-control" name="nim" value="<?php echo $this->session->userdata("user_name"); ?>" readonly>
      </div>
      <div class="form-group">
        <label for="nama">Judul KP:</label>
        <input type="text" class="form-control" name="judul">
      </div>
      <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>Perhatian !</strong>
        Penamaan Berkas file: A11.20XX.XXXXX-LP untuk lembar pengesahan, dan A11.20XX.XXXXX-SK untuk surat ket magang
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