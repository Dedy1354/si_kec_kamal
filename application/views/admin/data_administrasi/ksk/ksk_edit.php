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
                                <i class="glyphicon glyphicon-folder-open"></i> Data Administrasi
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <?php
                                foreach ($temp as $tem) {
                                    ?>
                                    <form action="<?php echo base_url().'index.php/admin/C_admin/kskedits/'.$tem->no;?>" method="POST">
                                        <div class="form-group">
                                            <label for="formGroupExampleInput">Pemohon</label>
                                            <input type="text" class="form-control" name="pemohon" value="<?php echo $tem->pemohon; ?>">
                                        </div>
                                        
                                         <div class="form-group">
                                            <label for="formGroupExampleInput2">Alamat</label>
                                            <!-- <input type="text" class="form-control" name="desa" placeholder="Isi alamat Desa"> -->
                                            <select name="alamat" class="form-control">
                                                <option value="">- Pilih Desa -</option>
                                                <?php 
                                                    foreach ($desa as $desaku) {
                                                ?>
                                                <option value="<?php echo $desaku->no; ?>" <?php if ($desaku->no == $tem->alamat_desa) { echo "selected"; } ?>><?php echo $desaku->desa; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="formGroupExampleInput">Nama KSK</label>
                                            <input type="text" class="form-control" name="nama" value="<?php echo $tem->nama_ksk; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="formGroupExampleInput2">Alamat Lengkap</label>
                                            <input type="text" class="form-control" name="alaml" value="<?php echo $tem->alamat_lengkap; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="formGroupExampleInput2">Tanggal</label>
                                            <input type="text" class="form-control" name="tgl" value="<?php echo $tem->tgl; ?>">
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" class="btn btn-primary" name="kskedit" value="Batal">
                                            <input type="submit" class="btn btn-primary" name="kskedit" value="Simpan">
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