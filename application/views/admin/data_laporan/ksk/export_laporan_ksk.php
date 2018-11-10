<?php 
	header("Content-type: application/octet-stream");
	header("Content-Disposition: attachment; filename=laporan_ksk.xls");
	header("Pragma: no-cache");
	header("Expires: 0");
?>

	<style type="text/css">
    .tengah {
		text-align: center;
	}
	.th {
		font: bold;
	}
	td{
		mso-number-format:"\@";
	}
	</style>

	                     <center><h2>REKAP LAPORAN PEMBUATAN KSK</h2></center>

                            <table class="table table-bordered">
                              <thead>
                                <tr>
                                  <th scope="col">No</th>
                                  <th scope="col">Tanggal</th>
                                  <th scope="col">Total</th>
                                </tr>
                              </thead>
                              <tbody>
                              
                              <?php
                                echo form_open ('admin/ksk', ['class'=>'']);
                              if(count($temp) < 1){
                                ?>
                                <tr><td colspan="3" align="center">Data Tidak ditemukan</td></tr>
                                <?php
                              }else{
                                    $no=0;
                            foreach ($temp as $tem) {
                                         $no = $no+1;   ?>
                            <tr>
                            
                                <td scope="col"><?php echo $no;?></td>
                                <td scope="col"><?php echo $tem->tgl;?></td>   
                                <td scope="col"><?php echo $tem->total;;?></td>   
                                                                      
                              <?php
                                }
                              }
                              ?>
                              
                              
                              </form>
                                
                              </tbody>
                            </table>