
<section class="title">
    <div class="container">
        <div class="row-fluid">
            <div class="span6">
                <h1>History</h1>
            </div>
            <div class="span6">
                <ul class="breadcrumb pull-right">
                    <li><a href="<?= base_url('Controller') ?>">Home</a> <span class="divider">/</span></li>
                    <li class="active">History</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section id="about-us" class="container main">
    <div class="row-fluid">
        <div class="span6">
            <h4><a href="#">History Pesan Lawyer</a></h4><br>
            <?php 
            $no=0;
            foreach ($dtl_pesanlawyer as $in){ 
            $no++;
            ?>
            <table class="table table-bordered">
                <tr>
                    <td width="20"><?=$no;?></td>
                    <td width="100"><img src="<?=base_url('assets/lawyer/'.$in->foto_lawyer)?>" style="width: 200px"></td>
                    <td>
                        <h5><?=$in->nama_lawyer?></h5>
                        <h6>Spesialisasi : <?=$in->spesialisasi?></h6>
                        <h6>Tanggal : <?=$in->tgl?></h6>
                        <h6>Waktu : <?=$in->jam_mulai?> - <?=$in->jam_selesai?></h6>
                        <h6>Status : 
                            <a href="#" style="color: <?php if($in->status=='3'){echo "red";}?>"><?php if($in->status=='3'){echo "Pending";}else if($in->status=='4'){echo "Selesai";} ?></a>
                        </h6><hr>
                        <a href="<?=base_url('Controller/detail_history/'.$in->id_pesan_lawyer) ?>" class="btn btn-primary btn-sm">Detail</a>
                    </td>
                </tr>
            </table>
            <?php } ?>
        </div>
        <div class="span6">
            <h4><a href="#">History Pesan Layanan</a></h4><br>
            <?php 
            $no=0;
            foreach ($dtl_pesanlayanan as $in){ 
            $no++;
            ?>
            <table class="table table-bordered">
                <tr>
                    <td width="20"><?=$no;?></td>
                    <td width="100"><img src="<?=base_url('assets/images/'.$in->icon)?>" style="width: 200px"></td>
                    <td>
                        <h5><?=$in->nama_layanan?></h5>
                        <h6>Tanggal : <?=$in->tgl?></h6>
                        <h6>Waktu : <?=$in->jam_mulai?> - <?=$in->jam_selesai?></h6>
                        <h6>Status : 
                            <a href="#" style="color: <?php if($in->status=='3'){echo "red";}?>"><?php if($in->status=='3'){echo "Pending";}else if($in->status=='4'){echo "Selesai";} ?></a>
                        </h6><hr>
                        <a href="<?=base_url('Controller/detail_history_layanan/'.$in->id_pesan_layanan) ?>" class="btn btn-primary btn-sm">Detail</a>
                    </td>
                </tr>
            </table>
            <?php } ?>
        </div>
    </div>
</section>