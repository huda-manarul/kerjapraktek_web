<div class="container">
  <div class="my-3 p-3 bg-white rounded box-shadow">
    <h4 class="border-bottom border-gray pb-2 mb-0">Informasi</h4>
    <?php 
    $no = $this->uri->segment('3') + 1;
    foreach($user as $u){ 
      ?>
      <div class="media text-muted pt-3">
        <img data-src="holder.js/32x32?theme=thumb&amp;bg=e83e8c&amp;fg=e83e8c&amp;size=1" alt="32x32" class="mr-2 rounded" style="width: 32px; height: 32px;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2232%22%20height%3D%2232%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2032%2032%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_1640e7b2d9b%20text%20%7B%20fill%3A%23e83e8c%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A2pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_1640e7b2d9b%22%3E%3Crect%20width%3D%2232%22%20height%3D%2232%22%20fill%3D%22%23e83e8c%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2212.166666746139526%22%20y%3D%2216.999999976158144%22%3E32x32%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
        <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
          <strong class="d-block text-gray-dark"><?php echo $u->judul_berita?></strong>
          <?php echo $u->isi_berita ?>
        </div>
      </div>

      <?php 
    }

    ?>
    <div class="row">
      <div class="col">
        <!--Tampilkan pagination-->
        <?php echo $this->pagination->create_links(); ?>
      </div>
    </div>
    <div class="input-group mb-3">
      <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
      <div class="input-group-append">
        <button class="btn btn-outline-primary" type="button">Button</button>
      </div>
    </div>
  </div>
  <div class="my-3 p-3 bg-white rounded box-shadow">
    
    
  </div>
</div>
