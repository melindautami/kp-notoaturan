
<section class="title">
    <div class="container">
        <div class="row-fluid">
            <div class="span6">
                <h1>Detail History</h1>
            </div>
            <div class="span6">
                <ul class="breadcrumb pull-right">
                    <li><a href="<?= base_url('Controller') ?>">Home</a> <span class="divider">/</span></li>
                    <li class="active"><a href="<?= base_url('Controller/history') ?>">History</a> <span class="divider">/</span></li>
                    <li class="active">Detail history</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section id="about-us" class="container main">
    <div class="row-fluid">
        <div class="span6">
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
                        <h5>Nama advokat : <?=$in->nama_lawyer?></h5>
                        <h6>Spesialisasi : <?=$in->spesialisasi?></h6>
                        <h6>Email : <?=$in->email_lawyer?></h6>
                        <h6>No. Telp : <?=$in->no_hp_lawyer?></h6>
                        <h6>Harga : Rp <?=number_format($in->tarif)?></h6><hr>
                        <h5>Masalah : </h5>
                        <p><h5><?=$in->ket_masalah?></h5></p><hr>
                        <h5>Tanggal : <?=$in->tgl?></h5>
                        <h5>Waktu : <?=$in->jam_mulai?> - <?=$in->jam_selesai?></h5>
                        <h5>
                            <?php
                            $awal  = strtotime($in->jam_mulai);
                            $akhir = strtotime($in->jam_selesai);
                            $diff  = $akhir - $awal;

                            $jam   = floor($diff / (60 * 60));
                            $menit = $diff - $jam * (60 * 60);
                            echo 'Durasi : ' . $jam .  ' jam, ' . floor( $menit / 60 ) . ' menit';
                            ?>
                        </h5>
                        <h5>Metode Bayar : <?=$in->metode_bayar?></h5><hr>
                        <a href="<?=base_url('Controller/history') ?>" class="btn btn-primary btn-sm">Kembali</a>
                    </td>
                </tr>
            </table>
            <?php } ?>
        </div>
    </div>
</section>