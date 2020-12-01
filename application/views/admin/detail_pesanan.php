<?php
$akses = $this->session->userdata('akses');
?>

<div class="container-fluid">
	<div class="row">
    	<div class="col-md-9">
	        <div class="card shadow mb-4">
	        	<div class="card-body">
	        		<?php foreach($client as $in){ ?>
	        		<h6 class="m-0 font-weight-bold text-primary">Nama Client : <?=$in->nama_client?></h6>
	        		<?php } ?>
	        	</div>
	        </div>
	    </div>

	    <?php if($akses=='lawyer' or $akses=='admin'){ ?>
    	<div class="col-md-6" style="margin-top: -5px">
	        <div class="card shadow mb-4">
	            <div class="card-header py-3">
	              <h6 class="m-0 font-weight-bold text-primary">
	              	Pesan Lawyer
	            </div>
	            <div class="card-body">
	              <div class="table-responsive">
	                <table class="table table-bordered table-striped" width="100%" cellspacing="0">
	                  <tbody>
	                  	<?php  
	                  	$no=0;
	                  	foreach ($lawyer as $in){
	                  	$no++;
	                  	?>
	                  	<tr>
	                  		<td></td>
	                  		<?php if($akses=='admin'){ ?>
	                  		<td>
	                  			<a href="<?=base_url("AdminController/del_pesanan_lawyer/".$in->id_pesan_lawyer.'/'.$this->uri->segment(3)) ?>" onclick="javascript:return confirm('Anda yakin ingin menghapus?')"><i class="fas fa-trash" style="color:red"></i></a>
	                  		</td>
	                  		<?php }else{ ?>
	                  		<td></td>
	                  		<?php } ?>
	                  		<td>
	                  			<a href="<?=base_url("AdminController/setuju_law/".$in->id_pesan_lawyer.'/'.$this->uri->segment(3)) ?>" onclick="javascript:return confirm('Anda yakin ingin menyetujui ?')">Setuju </a>|
	                  			<a href="<?=base_url("AdminController/tolak_law/".$in->id_pesan_lawyer.'/'.$this->uri->segment(3)) ?>" onclick="javascript:return confirm('Anda yakin ingin menolak ?')"> Tolak</a>
	                  		</td>
	                  	</tr>
	                    <tr>
	                    	<td width="20"><?=$no?></td>
	                    	<td width="60"><img src="<?=base_url('assets/lawyer/'.$in->foto_lawyer)?>" style="width:80px"></td>
	                    	<td>
	                    		<h6><b>Nama lawyer</b> : <?=$in->nama_lawyer?></h6>
	                    		<h6><b>Tanggal</b> : <?=$in->tgl?></h6>
	                    		<h6><b>Waktu</b> : <?=$in->jam_mulai?> - <?=$in->jam_selesai?></h6>
	                    		<h6>
	                    			<b>Durasi :</b>
			                            <?php
			                            $awal  = strtotime($in->jam_mulai);
			                            $akhir = strtotime($in->jam_selesai);
			                            $diff  = $akhir - $awal;

			                            $jam   = floor($diff / (60 * 60));
			                            $menit = $diff - $jam * (60 * 60);
			                            echo $jam .  ' jam, ' . floor( $menit / 60 ) . ' menit';
			                            ?>
	                    		</h6>
	                    		<h6><b>Status : </b><i style="color: <?php if($in->status=='4'){echo "blue";}else{echo "red";} ?>"><?php if($in->status=='4'){echo "Disetujui";}else{echo "Ditolak";} ?></i></h6>
	                    		<hr>
	                    		<h6><b>Masalah</b> : </h6>
	                    		<h6><p><?=$in->ket_masalah?></p></h6>
	                    	</td>
	                    </tr>
	                	<?php } ?>
	                  </tbody>
	                </table>
	              </div>
	            </div>
	        </div>
        </div>
    	<?php } ?>

    	<?php if($akses=='notaris' or $akses=='admin'){ ?>
        <div class="col-md-6" style="margin-top: -5px">
	        <div class="card shadow mb-4">
	            <div class="card-header py-3">
	              <h6 class="m-0 font-weight-bold text-primary">
	              	Pesan Layanan
	            </div>
	            <div class="card-body">
	              <div class="table-responsive">
	                <table class="table table-bordered table-striped" width="100%" cellspacing="0">
	                  <tbody>
	                  	<?php  
	                  	$no=0;
	                  	foreach ($layanan as $in){
	                  	$no++;
	                  	$kode_layanan = $in->id_pesan_layanan;
	                  	?>
	                  	<tr>
	                  		<td></td>
	                  		<?php if($akses=='admin'){ ?>
	                  		<td>
	                  			<a href="<?=base_url("AdminController/del_pesanan_layanan/".$in->id_pesan_layanan.'/'.$this->uri->segment(3)) ?>" onclick="javascript:return confirm('Anda yakin ingin menghapus?')"><i class="fas fa-trash" style="color:red"></i></a>
	                  		</td>
	                  		<?php }else{ ?>
	                  		<td></td>
	                  		<?php } ?>
	                  		<td>
	                  			<a href="<?=base_url("AdminController/setuju_lay/".$in->id_pesan_layanan.'/'.$this->uri->segment(3)) ?>" onclick="javascript:return confirm('Anda yakin ingin menyetujui ?')">Setuju </a>|
	                  			<a href="<?=base_url("AdminController/tolak_lay/".$in->id_pesan_layanan.'/'.$this->uri->segment(3)) ?>" onclick="javascript:return confirm('Anda yakin ingin menolak ?')"> Tolak</a>
	                  		</td>
	                  	</tr>
	                    <tr>
	                    	<td width="20" rowspan="2"><?=$no?></td>
	                    	<td width="60" rowspan="2"><img src="<?=base_url('assets/images/'.$in->icon)?>" style="width:80px"></td>
	                    	<td>
	                    		<h6><b>Nama lawyer</b> : <?=$in->nama_layanan?></h6>
	                    		<h6><b>Tanggal</b> : <?=$in->tgl?></h6>
	                    		<h6><b>Waktu</b> : <?=$in->jam_mulai?> - <?=$in->jam_selesai?></h6>
	                    		<h6>
	                    			<b>Durasi :</b>
			                            <?php
			                            $awal  = strtotime($in->jam_mulai);
			                            $akhir = strtotime($in->jam_selesai);
			                            $diff  = $akhir - $awal;

			                            $jam   = floor($diff / (60 * 60));
			                            $menit = $diff - $jam * (60 * 60);
			                            echo $jam .  ' jam, ' . floor( $menit / 60 ) . ' menit';
			                            ?>
	                    		</h6>
	                    		<h6><b>Status : </b><i style="color: <?php if($in->status=='4'){echo "blue";}else{echo "red";} ?>"><?php if($in->status=='4'){echo "Disetujui";}else{echo "Ditolak";} ?></i></h6>
	                    		<hr>
	                    		<h6><b>Masalah</b> : </h6>
	                    		<h6><p><?=$in->ket_masalah?></p></h6>
	                    	</td>
	                    </tr>
	                    <tr>
	                    	<td>
	                    		<h6><b>Nama notaris </b>: <?=$in->nama_notaris?> 
	                    			&nbsp;&nbsp; <a href="#mdlpilih" data-toggle="modal">Pilih notaris</a>
	                    		</h6>
	                    	</td>
	                    </tr>
	                	<?php } ?>
	                  </tbody>
	                </table>
	              </div>
	            </div>
	        </div>
        </div>
    	<?php } ?>

    </div>
</div>

<!-- MODAL ADD -->
<div class="modal fade" id="mdlpilih" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header btn-primary">
                <h4 class="modal-title" id="myModalLabel">Pilih Notaris</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
            	<table class="table table-bordered table-striped">
            		<tr>
            			<th>Nama notaris</th>
            			<th>Foto</th>
            			<th>Aksi</th>
            		</tr>
            		<?php foreach($notaris as $in){ ?>
            		<tr>
            			<td><?=$in->nama_notaris?></td>
            			<td><img src="<?=base_url('assets/notaris/'.$in->foto_notaris)?>" style="width: 50px"></td>
            			<td><a href="<?=base_url('AdminController/pilih_notaris/'.$in->id_notaris.'/'.$kode_layanan.'/'.$this->uri->segment(3))?>">Pilih</a></td>
            		</tr>
            		<?php } ?>
            	</table>        
            </div>
        </div>
    </div>
</div>