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
                        <h1 class="page-header">Data Administtrasi</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <?php 
                  if(isset($status) && !$status){
                    echo "Daftarkan terlebih dahulu NIK pada menu user";
                  }
                ?>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <i class="glyphicon glyphicon-folder-open"></i> <strong>Akte</strong>
                            </div>
                            <!-- /.panel-heading -->
                          <div class="panel-body table-responsive">
                              <table id="example" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th rowspan="2">No</th>
                                            <th rowspan="2">tanggal</th>
                                            <th colspan="2">Nama Orang Tua</th>
                                            <th rowspan="2">Alamat</th>
                                            <th rowspan="2">Nama Anak</th>
                                            <th rowspan="2">Tempa, Tanggal Lahir</th>
                                            <th rowspan="2">Pekerjaan Orang Tua</th>
                                            <th rowspan="2">Anak Ke-</th>
                                            <th rowspan="2">Aksi</th>
                                        </tr>
                                        <tr>
                                            <th scope="col">Ayah</th>
                                            <th scope="col">Ibu</th>                                        
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                        
                                        if (count($temp) < 1) {
                                            ?>
                                            <tr><td colspan="9" align="center">Data Tidak ditemukan</td></tr>
                                            <?php
                                        } else {
                                            $no=0;
                                            foreach ($temp as $tem) {
                                                $no = $no+1;
                                                ?>
                                                <tr>

                                                    <td scope="col"><?php echo $no; ?></td>
                                                    <td scope="col"><?php echo $tem->tgl; ?></td>
                                                    <td scope="col"><?php echo $tem->nama_ayah; ?></td>
                                                    <td scope="col"><?php echo $tem->nama_ibu; ?></td>
                                                    <td scope="col"><?php echo $tem->alamat; ?></td>
                                                    <td scope="col"><?php echo $tem->nama_anak; ?></td>
                                                    <td scope="col"><?php echo $tem->tempat_lahir.','.$tem->tgl_lahir; ?></td>
                                                    <td scope="col"><?php echo $tem->pekerjaan_ortu; ?></td>
                                                    <td scope="col"><?php echo $tem->anak_ke; ?></td>
                                            <input type="hidden" name="nomor" value="<?php echo $tem->no; ?>">             
                                            <td scope="col"><a href="<?php echo base_url().'index.php/admin/C_admin/akte_edit/'.$tem->no;?>"><i class="glyphicon glyphicon-pencil"></i></a>
                                        <a href="<?php echo base_url().'index.php/admin/C_admin/akte_hapus/'.$tem->no;?>"onclick="return confirm('Anda yakin akan menghapus data ini... ?')"><i class="glyphicon glyphicon-trash"></i></a>
                                           </td>
                                            </tr>                               
                                            <?php
                                        }
                                    }
                                    ?>

                                    

                                    

                                    </tbody>
                                </table>
                                <?php echo form_open (base_url().'index.php/admin/C_admin/akte', ['class'=>'']); ?>
                                <tr><td colspan="9"><button name="kskadd" class="btn btn-primary" value="tambah">Tambah</button></td></tr>
                                </form>
                        </div>
                            <!-- /.panel-body -->
                        </div>
                        <!-- /.panel -->
                    

                    <div class="row">
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
                        </div>
                        <div class="col-lg-4">
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
                        </div>
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
      <b>Version 2017</b> 
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
<script type="text/javascript">
  $(document).ready(function() {
    $('#example').DataTable();
  } );
</script>
</html>