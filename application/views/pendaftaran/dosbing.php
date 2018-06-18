<div class="container horizontal-centered">
    <?php 
    if ($info!=NULL) {?>
    <div class="alert alert-warning alert-dismissible">
      <button type="button" class="close" data-dismiss="alert">×</button>
      <strong>Perhatian !</strong> Anda sudah melakukan input dosen pembimbing.
    </div>
    <?php 
  }
  ?>   
  <div class="col-lg-7">
  <h3><?php echo $judul ?></h3><hr>
  <form action="<?php echo base_url().'mahasiswa/prosesinputdosbing' ?>" method="post">
    <div class="form-group">
      <label for="nim">NIM:</label>
      <input type="text" class="form-control" name="nim" value="<?php echo $this->session->userdata("user_name"); ?>" readonly>
    </div>
    <div class="form-group">
      <label for="jenis">Pilih Dosbing:</label>
      <select class="form-control " name="nip">
        <?php foreach($user as $u){ ?>
        <option value="<?php echo $u->nip; ?>"><?php echo $u->nama_dosen; ?></option>";
        <?php } ?>
      </select>
    </div>  
    <div class="form-group">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form> 
</div>
</div>
