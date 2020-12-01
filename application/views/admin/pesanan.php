<div class="container-fluid">
	<div class="row">
    	<div class="col-md-12">
	    	<!-- DataTales -->
	        <div class="card shadow mb-4">
	            <div class="card-header py-3">
	              <h6 class="m-0 font-weight-bold text-primary">Pesanan Client</h6>
	            </div>
	            <div class="card-body">
	              <div class="table-responsive">
	                <table class="table table-bordered table-striped" id="dataTable"  width="100%" cellspacing="0">
	                  <thead>
	                    <tr>
	                      <th>No.</th>
	                      <th>Nama Client</th>
	                      <th>Email</th>
	                      <th>No. Telephone</th>
	                      <th>Detail Pesanan</th>
	                    </tr>
	                  </thead>
	                  <tbody>
	                  	<?php
	                  	$no=0;
	                  	foreach ($data as $in) {
	                  	$no++;
	                  	?>
	                    <tr>
	                      	<td><?= $no ?></td>
	                      	<td><?= $in->nama_client ?></td>
	                      	<td style="color: blue"><?= $in->email ?></td>
	                      	<td><?= $in->no_hp ?></td>
	                      	<td><a href="<?= base_url('AdminController/detail_pesanan/'.$in->id_client) ?>"><i class="fa fa-list"></i> Detail</a></td>
	                    </tr>
	                	<?php } ?>
	                  </tbody>
	                </table>
	              </div>
	            </div>
	        </div>
        </div>
	</div>
</div>