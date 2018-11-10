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
                        <h1 class="page-header">Data Pencatatan Sipil</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-8">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <i class="glyphicon glyphicon-folder-open"></i> Data Pencatatan Sipil
                            </div>
                            <!-- /.panel-heading -->
                          <div class="panel-body">
                            <table class="table table-bordered">
                              <thead>
                                <tr>
                                    <th rowspan="2">No</th>
                                    <th rowspan="2">Bulan</th>
                                    <th rowspan="2">Desa</th>
                                    <th colspan="2">Jumlah Awal</th>
                                    <th colspan="2">Lahir</th>
                                    <th colspan="2">Meninggal</th>
                                    <th colspan="2">Datang</th>
                                    <th colspan="2">Pergi</th>
                                    <th colspan="3">Jumlah Total</th>
                                    <th rowspan="2"></th>
                                </tr>
                                <tr>
                                    <th scope="col">L</th>
                                    <th scope="col">P</th>
                                    <th scope="col">L</th>
                                    <th scope="col">P</th>
                                    <th scope="col">L</th>
                                    <th scope="col">P</th>
                                    <th scope="col">L</th>
                                    <th scope="col">P</th>
                                    <th scope="col">L</th>
                                    <th scope="col">P</th>
                                    <th scope="col">L</th>
                                    <th scope="col">P</th>
                                    <th scope="col">Total</th>
                                </tr>
                              </thead>
                              <tbody>
                                <form action="<?php echo base_url();?>index.php/admin/C_admin/dps_tambah" method="POST">
                                <input type="hidden" name="desa" value="<?php echo $desa?>">
                              <?php
                                if(count($temp) < 1){
                                ?>
                                 
                                <tr><td colspan="17" align="center">Data Tidak ditemukan</td></tr>
                                <?php
                              }else{
                              foreach ($temp as $tem) {            
                               ?>                   
                            <tr>
                                <td scope="col"><?php $aa = $tem->no; echo $tem->no;?></td>
                                  <td scope="col"><?php echo $tem->bulan;?></td>
                                  <td scope="col"><?php echo $tem->desa;?></td>
                                  <td scope="col"><?php echo $tem->awal_l;?></td>
                                  <td scope="col"><?php echo $tem->awal_p;?></td>
                                  <td scope="col"><?php echo $tem->lahir_l;?></td>
                                  <td scope="col"><?php echo $tem->lahir_p;?></td>
                                  <td scope="col"><?php echo $tem->mati_l;?></td>
                                  <td scope="col"><?php echo $tem->mati_p;?></td>
                                  <td scope="col"><?php echo $tem->datang_l;?></td>
                                  <td scope="col"><?php echo $tem->datang_p;?></td>
                                  <td scope="col"><?php echo $tem->pergi_l;?></td>
                                  <td scope="col"><?php echo $tem->pergi_p;?></td>
                                  <td scope="col"><?php echo $tem->jumlah_l;?></td>
                                  <td scope="col"><?php echo $tem->jumlah_p;?></td>
                                  <td scope="col"><?php echo $tem->total;?></td>
                                              
                                        <td scope="col"><a href="<?php echo base_url().'index.php/admin/C_admin/dps_edit/'.$tem->no;?>"><i class="glyphicon glyphicon-pencil"></i></a>
                                        <a href="<?php echo base_url().'index.php/admin/C_admin/dps_hapus/'.$tem->no;?>"  onclick="return confirm('Anda yakin akan menghapus data ini... ?')"><i class="glyphicon glyphicon-trash"></i></a>
                                           </td> 
                                    </tr>                               
                              <?php
                                }
                              }
                              ?>                             
                              <tr><td colspan="17"><button name="kskadd" class="btn btn-primary" value="tambah">Tambah</button></td></tr>
                                
                              </form>
                                
                              </tbody>
                            </table>
                        </div>
                            <!-- /.panel-body -->
                        </div>
                        <!-- /.panel -->
                    </div>
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
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
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