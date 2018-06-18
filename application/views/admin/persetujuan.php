<div class="container horizontal-centered">
  <div class="col-lg-7">   
    <h3>Persetujuan Sidang</h3><hr>
    <form action="<?php echo base_url().'dashboard/prosespersetujuan' ?>" method="post">
      <?php 
      foreach($user as $u){ 
        ?>
      <div class="form-group">
        <label for="nim">NIM:</label>
        <input type="text" class="form-control" name="nim" value="<?php echo $u->nim ?>" readonly>
      </div>
      <div class="form-group">
        <label for="jenis">Status:</label>
        <select class="form-control " name="status">
          <option value="diterima">diterima</option>";
          <option value="ditolak">ditolak</option>";
        </select>
      </div>  
      <div class="form-group">
        <label for="nim">Keterangan:</label>
        <input type="text" class="form-control" name="ket" value="<?php echo $u->keterangan ?>">
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
      <?php 
      }
        ?>
    </form> 
  </div>
</div>
