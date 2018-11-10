<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>ADMIN</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <?php $this->load->view('plugins_atas') ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php $this->load->view('header') ?>
  <?php $this->load->view('sidebar') ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Home
      </h1>
      <ol class="breadcrumb">
        <li class="active">Home</li>
      </ol>
    </section>
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"></h3>
            </div>
            <!-- /.box-header -->
            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Data Pencatatan Sipil</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-8">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <i class="fa fa-table fa-fw"></i> Tambah Data Pencatatan SIpil
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">


                                <form action="<?php echo base_url(); ?>index.php/admin/C_admin/tambah_dps" method="POST">
                                    <div class="form-group">
                                        <label for="formGroupExampleInput">Desa</label>
                                        <input type="text" class="form-control" name="da" value="<?php echo $desa ?>" disabled="">
                                        <input type="hidden" class="form-control" name="desa" value="<?php echo $desa ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="formGroupExampleInput2">Bulan</label>
                                        <select class="form-control" name="bulan" id="bulan">
                                            <option >Choose...</option>
                                            <option >Januari</option>
                                            <option >February</option>
                                            <option >Maret</option>
                                            <option >April</option>
                                            <option >Mei</option>
                                            <option >Juni</option>
                                            <option >Juli</option>
                                            <option >Agustus</option>
                                            <option >September</option>
                                            <option >Oktober</option>
                                            <option >November</option>
                                            <option >Desember</option>
                                        </select>
                                    </div>
                                    <div>
                                        <div class="form-group">  
                                            <label for="formGroupExampleInput2">Jumlah Penduduk Awal</label>
                                            <div class="form-group">
                                                <div class="form-group col-lg-6">
                                                    <label for="formGroupExampleInput2">Laki-laki</label>
                                                    <input type="text" class="form-control" name="awall" placeholder="Isi Jumlah penduduk laki-laki (angka)">
                                                </div>
                                                <div class="form-group col-lg-6">
                                                    <label for="formGroupExampleInput">Perempuan</label>
                                                    <input type="text" class="form-control" name="awalp" placeholder="Isi Jumlah penduduk Perempuan (angka)">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">  
                                            <label for="formGroupExampleInput2">Jumlah Kelahiran</label>
                                            <div class="form-group">
                                                <div class="form-group col-lg-6">
                                                    <label for="formGroupExampleInput2">Laki-laki</label>
                                                    <input type="text" class="form-control" name="lahirl" placeholder="Isi Jumlah penduduk laki-laki (angka)">
                                                </div>
                                                <div class="form-group col-lg-6">
                                                    <label for="formGroupExampleInput">Perempuan</label>
                                                    <input type="text" class="form-control" name="lahirp" placeholder="Isi Jumlah penduduk Perempuan (angka)">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">  
                                            <label for="formGroupExampleInput2">Jumlah Penduduk Meninggal</label>
                                            <div class="form-group">
                                                <div class="form-group col-lg-6">
                                                    <label for="formGroupExampleInput2">Laki-laki</label>
                                                    <input type="text" class="form-control" name="matil" placeholder="Isi Jumlah penduduk laki-laki (angka)">
                                                </div>
                                                <div class="form-group col-lg-6">
                                                    <label for="formGroupExampleInput">Perempuan</label>
                                                    <input type="text" class="form-control" name="matip" placeholder="Isi Jumlah penduduk Perempuan (angka)">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">  
                                            <label for="formGroupExampleInput2">Jumlah Pendatang</label>
                                            <div class="form-group">
                                                <div class="form-group col-lg-6">
                                                    <label for="formGroupExampleInput2">Laki-laki</label>
                                                    <input type="text" class="form-control" name="datangl" placeholder="Isi Jumlah penduduk laki-laki (angka)">
                                                </div>
                                                <div class="form-group col-lg-6">
                                                    <label for="formGroupExampleInput">Perempuan</label>
                                                    <input type="text" class="form-control" name="datangp" placeholder="Isi Jumlah penduduk Perempuan (angka)">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">  
                                            <label for="formGroupExampleInput2">Jumlah Penduduk Pergi</label>
                                            <div class="form-group">
                                                <div class="form-group col-lg-6">
                                                    <label for="formGroupExampleInput2">Laki-laki</label>
                                                    <input type="text" class="form-control" name="pergil" placeholder="Isi Jumlah penduduk laki-laki (angka)">
                                                </div>
                                                <div class="form-group col-lg-6">
                                                    <label for="formGroupExampleInput">Perempuan</label>
                                                    <input type="text" class="form-control" name="pergip" placeholder="Isi Jumlah penduduk Perempuan (angka)">
                                                </div>
                                            </div>
                                        </div>
                                        

                                        <div class="form-group">
                                            <input type="submit" class="btn btn-primary" name="submit" value="Batal">
                                            <input type="submit" class="btn btn-primary" name="tambah" value="simpan">
                                        </div>
                                </form>

                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <!-- /.panel -->
                    </div>
                    
                    <!-- /.row -->
                </div>
                <!-- /#page-wrapper -->

            </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version 2018</b> 
    </div>
    <strong>Copyright &copy; Dina Marianti <a href=""></a>.</strong>
  </footer>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->

          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<?php $this->load->view('plugins') ?>
</body>
</html>