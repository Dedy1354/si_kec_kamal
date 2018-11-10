<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Public</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/skins/_all-skins.min.css">
  
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

  <header class="main-header">
    <nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-right" id="navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="<?php echo base_url();?>index.php/C_login"><i class="fa fa-fw fa-caret-right"></i> <b>LOGIN</b></a></li>            
          </ul>
        </div>
        <!-- /.navbar-collapse -->
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            
          </ul>
        </div>
        <!-- /.navbar-custom-menu -->
      </div>
      <!-- /.container-fluid -->
    </nav>
  </header>
  <!-- Full Width Column -->
  <div class="content-wrapper">
    <div class="container">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>

        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
          <li><a href="#"></a></li>
          <li class="active"></li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
          <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-12">
                        <!-- /. ROW  -->
                        
                                <div class="carousel-inner">
                                    <div class="item active">

                                        <p align="center"><img width="1075" height="245"  src="<?php echo base_url('assets/dist/img/kamal.jpg') ?>" alt="" />   

                                    </div>
                                    
                                </div>

                                    
                                <div class="container">
                                <div class="row-fluid">   
                                <div id="__section-left" class="hidden"></div>
                    
                                <h3><font color = #6495ED> Permohonan Pembuatan KTP </font></h3>
                                  <p>
                                    <strong><span style="font-size:20px;"> Di Kecamatan Kamal Kabupaten bangkalan</span></strong></p>
                                  <p>Isi Form Di bawah Ini Dengan Benar ! </p>
                                  
                                           <div class="box-body">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Data Administrasi</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
           
            <div class="row">
                <div class="col-lg-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="glyphicon glyphicon-folder-open"></i> Form Data KTP
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                           
                          
                            <form action="<?php echo base_url();?>index.php/public/C_public/tambah_ktp" method="POST">
                                    <div class="form-group">
                                      <label for="formGroupExampleInput">Tanggal</label>
                                      <input type="date" class="form-control" name="tgl" placeholder="Isi tgl Pemohon">
                                    </div>
                                    <div class="form-group">
                                      <label for="formGroupExampleInput">Pemohon</label>
                                      <input type="text" class="form-control" name="pemohon" placeholder="Isi Nama Pemohon">
                                    </div>
                                    <div class="form-group">
                                      <label for="formGroupExampleInput2">Desa</label>
                                      <!-- <input type="text" class="form-control" name="desa" placeholder="Isi alamat Desa"> -->
                                      <select name="desa" class="form-control">
                                          <option value="">- Pilih Desa -</option>
                                          <?php 
                                              foreach ($desa as $desaku) {
                                          ?>
                                          <option value="<?php echo $desaku->no; ?>"><?php echo $desaku->desa; ?></option>
                                          <?php } ?>
                                      </select>
                                    </div>
                                    <div class="form-group">
                                      <label for="formGroupExampleInput">Nama</label>
                                      <input type="text" class="form-control" name="nama" placeholder="Nama ktp/ksk">
                                    </div>
                                    <div class="form-group">
                                      <label for="formGroupExampleInput2">Nik</label>
                                      <input type="text" class="form-control" name="nik" placeholder="isi no nik">
                                    </div>
                                    <div class="form-group">
                                      <label for="formGroupExampleInput2">Tempat Lahir</label>
                                      <input type="text" class="form-control" name="tempat_lahir" placeholder="tempat lahir">
                                    </div>
                                    <div class="form-group">
                                      <label for="formGroupExampleInput2">Tanggal Lahir</label>
                                      <input type="date" class="form-control" name="tgl_l" placeholder="tanggal lahir">
                                    </div>
                                    <div class="form-group">
                                      <label for="formGroupExampleInput2">Alamat</label>
                                      <input type="text" class="form-control" name="alamat" placeholder="alamat">
                                    </div>
                                    <div class="form-group">
                                      <label for="formGroupExampleInput2">Status</label>
                                      <input type="text" class="form-control" name="status" placeholder="status kawin/belum kawin">
                                    </div>
                                    <div class="form-group">
                                      <label for="formGroupExampleInput2">Keterangan</label>
                                      <input type="text" class="form-control" name="ket" placeholder="keterangan pemohon">
                                    </div>
                                     <div class="form-group">
                                      <input type="submit" class="btn btn-primary" name="submit" value="Batal">
                                      <input type="submit" class="btn btn-primary" name="tambah" value="Tambah">
                                    </div>
                                  </form>
  
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-8 -->
                <div class="col-lg-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="glyphicon glyphicon-time"></i> <strong>Jam Digital</strong>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="list-group">
                                <?php $this->load->view('jam');?>
                                
                            </div>
                            <!-- /.list-group -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="glyphicon glyphicon-info-sign"></i> About
                        </div>
                        <div class="panel-body">
                            <div class="timeline-heading">
                                            <h4 class="timeline-title">Descripsi</h4>
                                            
                                        </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                    
                <!-- /.col-lg-4 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>

                            </div>
                        </div>
                    </div>
                  </div>
      </section>
      <!-- /.content -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="container">
      <div class="pull-right hidden-xs">
        <b>Version</b> 2018
      </div>
      <strong>Copyright &copy; Dina Marianti <a href=""></a>.</strong>
      reserved.
    </div>
    <!-- /.container -->
  </footer>
</div>
<!-- ./wrapper -->
</body>
</html>
