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
                        <h1 class="page-header">Data Pencatatan Sipil</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-8">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <i class="glyphicon glyphicon-folder-open"></i> Tambah Data Pencatatan SIpil
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">

                                <?php
                               
                                         foreach ($temp as $tem) {
                                            
                                            ?>
                                <form action="<?php echo base_url(); ?>index.php/admin/C_admin/tambah_dps" method="POST">
                                    <div class="form-group">
                                        <label for="formGroupExampleInput">Desa</label>
                                        <input type="text" class="form-control" name="da" value="<?php echo $tem->desa ?>" disabled="">
                                        <input type="hidden" class="form-control" name="no" value="<?php echo $tem->no ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="formGroupExampleInput2">Bulan</label>
                                        <select class="form-control" name="bulan" id="bulan">
                                            <option>Choose...</option>
                                            <option  <?php if($tem->bulan == 'Januari') echo 'selected';?>>Januari</option>
                                            <option <?php if($tem->bulan == 'February') echo 'selected';?>>February</option>
                                            <option <?php if($tem->bulan == 'Maret') echo 'selected';?>>Maret</option>
                                            <option <?php if($tem->bulan == 'April') echo 'selected';?>>April</option>
                                            <option <?php if($tem->bulan == 'Mei') echo 'selected';?>>Mei</option>
                                            <option <?php if($tem->bulan == 'Juni') echo 'selected';?>>Juni</option>
                                            <option <?php if($tem->bulan == 'Juli') echo 'selected';?>>Juli</option>
                                            <option <?php if($tem->bulan == 'Agustus') echo 'selected';?>>Agustus</option>
                                            <option <?php if($tem->bulan == 'September') echo 'selected';?>>September</option>
                                            <option <?php if($tem->bulan == 'Oktober') echo 'selected';?>>Oktober</option>
                                            <option <?php if($tem->bulan == 'November') echo 'selected';?>>November</option>
                                            <option <?php if($tem->bulan == 'Desember') echo 'selected';?>>Desember</option>
                                        </select>
                                    </div>
                                    <div>
                                        <div class="form-group">  
                                            <label for="formGroupExampleInput2">Jumlah Penduduk Awal</label>
                                            <div class="form-group">
                                                <div class="form-group col-lg-6">
                                                    <label for="formGroupExampleInput2">Laki-laki</label>
                                                    <input type="text" class="form-control" name="awall" value="<?php echo $tem->awal_l;?>">
                                                </div>
                                                <div class="form-group col-lg-6">
                                                    <label for="formGroupExampleInput">Perempuan</label>
                                                    <input type="text" class="form-control" name="awalp" value="<?php echo $tem->awal_p;?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">  
                                            <label for="formGroupExampleInput2">Jumlah Kelahiran</label>
                                            <div class="form-group">
                                                <div class="form-group col-lg-6">
                                                    <label for="formGroupExampleInput2">Laki-laki</label>
                                                    <input type="text" class="form-control" name="lahirl" value="<?php echo $tem->lahir_l;?>">
                                                </div>
                                                <div class="form-group col-lg-6">
                                                    <label for="formGroupExampleInput">Perempuan</label>
                                                    <input type="text" class="form-control" name="lahirp" value="<?php echo $tem->lahir_p;?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">  
                                            <label for="formGroupExampleInput2">Jumlah Penduduk Meninggal</label>
                                            <div class="form-group">
                                                <div class="form-group col-lg-6">
                                                    <label for="formGroupExampleInput2">Laki-laki</label>
                                                    <input type="text" class="form-control" name="matil" value="<?php echo $tem->mati_l;?>">
                                                </div>
                                                <div class="form-group col-lg-6">
                                                    <label for="formGroupExampleInput">Perempuan</label>
                                                    <input type="text" class="form-control" name="matip" value="<?php echo $tem->mati_p;?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">  
                                            <label for="formGroupExampleInput2">Jumlah Pendatang</label>
                                            <div class="form-group">
                                                <div class="form-group col-lg-6">
                                                    <label for="formGroupExampleInput2">Laki-laki</label>
                                                    <input type="text" class="form-control" name="datangl" value="<?php echo $tem->datang_l;?>">
                                                </div>
                                                <div class="form-group col-lg-6">
                                                    <label for="formGroupExampleInput">Perempuan</label>
                                                    <input type="text" class="form-control" name="datangp" value="<?php echo $tem->datang_p;?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">  
                                            <label for="formGroupExampleInput2">Jumlah Penduduk Pergi</label>
                                            <div class="form-group">
                                                <div class="form-group col-lg-6">
                                                    <label for="formGroupExampleInput2">Laki-laki</label>
                                                    <input type="text" class="form-control" name="pergil" value="<?php echo $tem->pergi_l;?>">
                                                </div>
                                                <div class="form-group col-lg-6">
                                                    <label for="formGroupExampleInput">Perempuan</label>
                                                    <input type="text" class="form-control" name="pergip" value="<?php echo $tem->pergi_p;?>">
                                                </div>
                                            </div>
                                        </div>
                                        

                                        <div class="form-group">
                                            <input type="submit" class="btn btn-primary" name="submit" value="Batal">
                                            <input type="submit" class="btn btn-primary" name="simpan" value="simpan">
                                        </div>
                                </form>
                                         <?php } ?>
                            </div>

                            <!-- /.panel-body -->
                        </div>

                        <!-- /.panel -->
                    </div>
                    
                    <!-- /.row -->
                </div>
                <!-- /#page-wrapper -->

            
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