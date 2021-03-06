<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>kepala</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <?php $this->load->view('plugins_atas_k') ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php $this->load->view('header_k') ?>
  <?php $this->load->view('sidebar_k') ?>
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
                    <h1 class="page-header">Laporan Data</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
           
            <div class="row">
                <div class="col-lg-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="glyphicon glyphicon-folder-open"></i> Laporan data
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="col-lg-6 col-md-6">
                                    <div class="panel panel-primary">
                                        <div class="panel-heading">
                                            <div class="row">
                                               
                                                <a href="<?php echo base_url(); ?>index.php/kepala/C_kepala/laporan_ksk"> 
                                                    <div class="col-xs-3">
                                                    <i class="glyphicon glyphicon-duplicate"></i>
                                                </div>
                                                    <div class="panel-footer">
                                                        <span class="pull-left"><strong>KSK</strong></span>
                                                        <span class="pull-right"><i class="glyphicon glyphicon-eye-open"></i></span>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="panel panel-primary">
                                        <div class="panel-heading">
                                            <div class="row">
                                               
                                                <a href="<?php echo base_url(); ?>index.php/kepala/C_kepala/laporan_sp"> 
                                                    <div class="col-xs-3">
                                                    <i class="glyphicon glyphicon-duplicate"></i>
                                                </div>
                                                    <div class="panel-footer">
                                                        <span class="pull-left"><strong>Surat Pindah</strong></span>
                                                        <span class="pull-right"><i class="glyphicon glyphicon-eye-open"></i></span>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="panel panel-primary">
                                        <div class="panel-heading">
                                            <div class="row">
                                               
                                                <a href="<?php echo base_url(); ?>index.php/kepala/C_kepala/laporan_akte"> 
                                                    <div class="col-xs-3">
                                                    <i class="glyphicon glyphicon-duplicate"></i>
                                                </div>
                                                    <div class="panel-footer">
                                                        <span class="pull-left"><strong>Akte</strong></span>
                                                        <span class="pull-right"><i class="glyphicon glyphicon-eye-open"></i></span>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="panel panel-primary">
                                        <div class="panel-heading">
                                            <div class="row">
                                               
                                                <a href="<?php echo base_url(); ?>index.php/kepala/C_kepala/laporan_ktp"> 
                                                    <div class="col-xs-3">
                                                    <i class="glyphicon glyphicon-duplicate"></i>
                                                </div>
                                                    <div class="panel-footer">
                                                        <span class="pull-left"><strong>KTP</strong></span>
                                                        <span class="pull-right"><i class="glyphicon glyphicon-eye-open"></i></span>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                    <!-- /.col-lg-8 -->
                    <div class="col-lg-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <i class="glyphicon glyphicon-info-sign"></i> <strong>Jam Digital</strong>
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="list-group">
                                    <?php $this->load->view('jam') ?>
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