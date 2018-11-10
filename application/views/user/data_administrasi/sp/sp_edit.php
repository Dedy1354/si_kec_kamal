<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>user</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <?php $this->load->view('plugins_atas_u') ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php $this->load->view('header_u') ?>
  <?php $this->load->view('sidebar_u') ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"></h3>
            </div>
            <!-- /.box-header -->
           

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
                                <i class="glyphicon glyphicon-folder-open"></i> Edit Data Surat Pindah
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <?php
                                foreach ($temp as $tem) {
                                ?>
                                <form action="<?php echo base_url().'index.php/user/C_user/surat_pindah_s/'.$tem->no; ?>" method="POST">
                                    <div class="form-group">
                                        <label for="formGroupExampleInput">Nama</label>
                                        <input type="text" class="form-control" name="nama" value="<?php echo $tem->nama;?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="formGroupExampleInput2">Tempat Lahir</label>
                                        <input type="text" class="form-control" name="tempat" value="<?php echo $tem->tempat_lahir;?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="formGroupExampleInput">Tanggal Lahir</label>
                                        <input type="date" class="form-control" name="tgl" value="<?php echo $tem->tgl_lahir;?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="formGroupExampleInput2">Alamat</label>
                                        <input type="text" class="form-control" name="alamat" value="<?php echo $tem->alamat;?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="formGroupExampleInput2">No. Pengantar</label>
                                        <input type="text" class="form-control" name="np"  value="<?php echo $tem->no_pengantar;?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="formGroupExampleInput2">Jumlah Pengikut</label>
                                        <input type="text" class="form-control" name="jp"  value="<?php echo $tem->jumlah_pengikut;?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="formGroupExampleInput2">Alamat Pindah</label>
                                        <input type="text" class="form-control" name="almp"  value="<?php echo $tem->alamat_pindah;?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="formGroupExampleInput2">Alasan Pindah</label>
                                        <input type="text" class="form-control" name="alasan" value="<?php echo $tem->alasan_pindah;?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="formGroupExampleInput2">Tanggal Pindah</label>
                                        <input type="date" class="form-control" name="tgl_p" value="<?php echo $tem->tgl_pindah;?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="formGroupExampleInput2">Keterangan</label>
                                        <input type="text" class="form-control" name="ket" value="<?php echo $tem->foto;?>">
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-primary" name="submit" value="Batal">
                                        <input type="submit" class="btn btn-primary" name="tambah" value="Simpan">
                                    </div>
                                </form>
                                <?php } ?>
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
        <!-- /#page-wrapper -->

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