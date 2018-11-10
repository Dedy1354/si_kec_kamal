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
                        <h1 class="page-header">Data User</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-8">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <i class="glyphicon glyphicon-info-sign"></i>Edit Data informasi
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">

                                <?php
                                foreach ($temp as $tem) {
                                    ?>
                                    <form action="<?php echo base_url(); ?>index.php/admin/C_admin/simpan_info" method="POST" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <input type="hidden" class="form-control" name="no" value="<?php  echo $tem->no;?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="formGroupExampleInput2">Judul</label>
                                            <input type="text" class="form-control" name="judul" value="<?php  echo $tem->judul;?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="formGroupExampleInput">Isi</label>
                                            <input type="text" class="form-control" name="isi" value="<?php  echo $tem->isi;?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="formGroupExampleInput2">Gambar</label>
                                            <br>
                                            <img id="preview" src="<?php echo base_url()."assets/uploads/info/".$tem->foto; ?>" width="500px"/>
                                            <input type="file" class="form-control" accept="image/*"  onchange="tampilkanPreview(this,'preview')" name="foto" placeholder="Gambar">
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" class="btn btn-primary" name="submit" value="Batal">
                                            <input type="submit" class="btn btn-primary" name="tambah" value="simpan">
                                        </div>
                                    </form>
                                <?php }?>
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
<script>
function tampilkanPreview(gambar,idpreview){
    var gb = gambar.files;
    for (var i = 0; i < gb.length; i++){
        var gbPreview = gb[i];
        var imageType = /image.*/;
        var preview=document.getElementById(idpreview);            
        var reader = new FileReader();
        
        if (gbPreview.type.match(imageType)) {
            preview.file = gbPreview;
            reader.onload = (function(element) { 
                return function(e) { 
                    element.src = e.target.result; 
                }; 
            })(preview);
            reader.readAsDataURL(gbPreview);
        }else{
            alert("file yang anda upload tidak sesuai. Khusus mengunakan image.");
        }
       
    }    
}
</script>
</html>