<div class="container horizontal-centered">
  <div class="col-lg-7"> 
    <h3><?php echo $judul ?></h3><hr>
    <form action="<?php echo base_url().'pendaftaran/prosesdaftarkp' ?>" method="post" >
      <div class="form-group">
        <label for="jenis">Pilih Pendaftaran:</label>
        <select class="form-control " name="jenis">
          <option value="KP">Pendaftaran KP</option>
          <option value="Pra-KP">Pendaftaran Pra-KP</option>
        </select>
      </div>	
      <div class="form-group">
        <label for="nim">NIM:</label>
        <input type="text" class="form-control" name="nim">
      </div>
      <div class="form-group">
        <label for="nama">Nama:</label>
        <input type="text" class="form-control" name="nama">
      </div>
      <div class="form-group">
        <label for="tempat">Tempat KP:</label>
        <input type="text" class="form-control" name="tempat">
      </div>
      <div class="form-group">
        <label for="alamat">Alamat Tempat KP:</label>
        <input type="text" class="form-control" name="alamat">
      </div>
      <div class="form-group">
        <label for="penyelia">Penyelia:</label>
        <input type="text" class="form-control" name="penyelia">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form> 
  </div>
</div>