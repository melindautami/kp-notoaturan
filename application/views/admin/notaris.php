<div class="container-fluid">
	<div class="row">
    	<div class="col-md-12">
	    	<!-- DataTales -->
	        <div class="card shadow mb-4">
	            <div class="card-header py-3">
	              <h6 class="m-0 font-weight-bold text-primary">Daftar Notaris</h6>
	            </div>
	            <div class="card-body">
            	<div>
            		<a href="#mdladd" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah Notaris</a>
            	</div>
	              <div class="table-responsive">
	                <table class="table table-bordered table-striped" id="dataTable"  width="100%" cellspacing="0">
	                  <thead>
	                    <tr>
	                      <th>No.</th>
	                      <th>Nama Notaris</th>
	                      <th>Email</th>
	                      <th>No. Telephone</th>
	                      <th>Foto</th>
	                      <th>Password</th>
	                      <th>Aksi</th>
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
	                      <td><?= $in->nama_notaris ?></td>
	                      <td style="color: blue"><?= $in->email_notaris ?></td>
	                      <td><?= $in->no_hp_notaris ?></td>
	                      <td><img src="<?= base_url('assets/notaris/'.$in->foto_notaris) ?>" style="width: 60px" alt="default"></td>
	                      <td><i><u><?= $in->pass ?></u></i></td>
	                      <td>
	                      	<a href="#mdledit_<?=$in->id_notaris?>" data-toggle="modal"><i class="fas fa-edit"></i></a> |
	                      	<a href="<?=base_url("AdminController/del_notaris/".$in->id_notaris) ?>" class="item_hapus" onclick="javascript:return confirm('Anda yakin ingin menghapus?')"><i class="fas fa-trash" style="color:red"></i></a>
			              </td>
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

<!-- MODAL ADD -->
<div class="modal fade" id="mdladd" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header btn-primary">
                <h4 class="modal-title" id="myModalLabel">Form tambah</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <?= form_open_multipart('AdminController/add_notaris'); ?>
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" name="nama_notaris" placeholder="Nama notaris">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="email_notaris" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="no_hp_notaris" placeholder="No. Telephone">
                    </div>
                    <div class="form-group">
                        <input type="file" class="form-control dropify-lawyer" name="file">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="pass" placeholder="Password">
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
                    <button class="btn btn-primary" type="submit">Simpan</button>
                </div>
            <?= form_close(); ?>
        </div>
    </div>
</div>

<!-- MODAL EDIT -->
<?php foreach ($data as $e){ ?>
<div class="modal fade" id="mdledit_<?=$e->id_notaris?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header btn-primary">
                <h4 class="modal-title" id="myModalLabel">Form edit</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <?= form_open_multipart('AdminController/edit_notaris'); ?>
            <input type="hidden" name="id_notaris" value="<?=$e->id_notaris?>">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" name="nama_notaris" value="<?=$e->nama_notaris?>">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="email_notaris" value="<?=$e->email_notaris?>">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="no_hp_notaris" value="<?=$e->no_hp_notaris?>">
                    </div>
                    <div class="form-group">
                    	<label>(*)Jangan diisi jika tdk ingin ganti</label>
                        <input type="file" class="form-control dropify-lawyer" name="file">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="pass" value="<?=$e->pass?>">
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
                    <button class="btn btn-primary" type="submit">Simpan</button>
                </div>
            <?= form_close(); ?>
        </div>
    </div>
</div>
<?php } ?>