<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Tell the browser to be responsive to screen width -->
  <title>DAFTAR</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="C_login"><b>HALAMAN DAFTAR</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <?php if(!$this->session->flashdata('msg')){ ?>
    <p class="login-box-msg"><b>Ubah Password</b></p>
    
    <form name="daftar" action="" method="post">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" onkeypress="return isChar(event,this)" placeholder="Nama" name="nama" value="kepala" readonly>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password Lama" name="passwordlama">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password Baru" name="passwordbaru">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      
      <div class="row">
        <div class="col-xs-8">
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Simpan</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
    <?php 
      } else {
        if($this->session->flashdata('msg') == 'true'){
    ?>
    <p><b>Anda Berhasil Mengubah Sandi <a href="<?php echo base_url('index.php/kepala/C_kepala'); ?>">kembali.</a></b></p>
    <?php
        }else{
    ?>
    <p><b>Password lama salah, <a href="<?php echo base_url('index.php/kepala/C_kepala'); ?>">kembali.</a></b></p>
    <?php

        }

      }
    ?>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url();?>assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?php echo base_url();?>assets/plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
    
  });

  function isNumberKey(evt, obj) {

        var charCode = (evt.which) ? evt.which : event.keyCode
        var value = obj.value;
        var dotcontains = value.indexOf(".") != -1;
        if (dotcontains)
            if (charCode == 46) return false;
        if (charCode == 46) return true;
        if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;
        return true;
  }

  function isChar(evt, obj) {

        var charCode = (evt.which) ? evt.which : event.keyCode
        var value = obj.value;
        if ((charCode > 64 && charCode < 91) ||  (charCode > 96 && charCode < 123) || charCode == 46 || charCode == 44 || charCode == 8 || charCode == 32)
            return true;
        return false;
  }


  function validateNIK(){
    var a = document.daftar.nik.value.length;
    if(a != 16){
      return false;
    }else{
      return true;
    }
  }

  function validatePasswordConf(){
    var a = document.daftar.password.value;
    var b = document.daftar.passwordconf.value;
    if(a == b){
      return true;
    }else{
      return false;
    }
  }

  function validatePassword(){
    var panjang = document.daftar.password.value.length;
    if(panjang < 6 || panjang > 20){
      return false;
    }else{
      return true;
    }
  }

  function validateForm(){
    if(!validatePassword()){
      alert("Password must be contain minimum 6 character and maximum 20 character");
      return false;
    }else if(!validatePasswordConf()){
      alert("Password field and Password Confirm doesn't match");
      return false;
    }else if(!validateNIK()){
      alert("NIK tidak sesuai");
      return false;
    }else{
      return true;
    }
  }

</script>
</body>
</html>