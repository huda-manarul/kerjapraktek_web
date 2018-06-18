<html>
<head>
 <title>Sistem informasi kerja praktek</title>

 <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/bootstrap.css">
 <script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.js"></script>
 <script type="text/javascript" src="<?php echo base_url()?>assets/js/bootstrap.js"></script>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/dashboard.css">
  <script src="<?php echo base_url().'assets/jquery/jquery-2.2.3.min.js'?>"></script>
  <script src="<?php echo base_url().'assets/ckeditor/ckeditor.js'?>"></script>
  <script type="text/javascript">
    $(function () {
      CKEDITOR.replace('ckeditor');
    });</script>
</head>
<body>
  <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
    <h5 class="my-0 mr-md-auto font-weight-normal"><a class="p-2 text-dark" href="<?php echo base_url() ?>">Universitas D2D</a></h5>
    <nav class="my-2 my-md-0 mr-md-3">
      <a class="p-2 text-dark"><?php echo "" ?></a>
    </nav>
    <a class="btn btn-outline-primary" href="<?php echo base_url('dashboard/logout'); ?>">logout</a>
  </div>
  <div class="nav-scroller bg-white box-shadow">
    <nav class="nav nav-underline">
      <a class="nav-link active" href="<?php echo base_url().'dashboard/' ?>">Data Mahasiswa KP</a>
      <a class="nav-link" href="<?php echo base_url().'dashboard/datadosen' ?>">Data Dosen Pembimbing</a>
      <a class="nav-link" href="<?php echo base_url().'dashboard/datasidang' ?>">Data Sidang KP</a>
      <a class="nav-link" href="<?php echo base_url().'dashboard/databerita' ?>">Informasi KP</a>
      <a class="nav-link" href="<?php echo base_url().'dashboard/tambahberita' ?>">Pertanyaan Mahasiswa</a>
    </nav>
  </div>
  <br><br>