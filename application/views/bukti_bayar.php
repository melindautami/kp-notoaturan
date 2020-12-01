
<section class="title">
    <div class="container">
        <div class="row-fluid">
            <div class="span6">
                <h1>Upload Pembayaran</h1>
            </div>
            <div class="span6">
                <ul class="breadcrumb pull-right">
                    <li><a href="<?= base_url('Controller') ?>">Home</a> <span class="divider">/</span></li>
                    <li class="active">Pembayaran</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<?php foreach ($dtl_pesanlawyer as $in){ ?>
<section id="about-us" class="container main">
    <div class="row-fluid">
        <div class="span7">
            <table class="table table-bordered">
                <tr style="background-color: #55bf6a; color: white;">
                    <th colspan="3"><h5>Client :</h5></th>
                </tr>
                <tr>
                    <td><h6><?=$in->nama_client?></h6></td>
                    <td><h6><?=$in->email?></h6></td>
                    <td><h6><?=$in->no_hp?></h6></td>
                </tr>
            </table><br>
            <table class="table table-bordered table-striped">
                <tr style="color: #55bf6a">
                    <th><h5>Advokat :</h5></th>
                    <th><h5>Biaya :</h5></th>
                </tr>
                <tr>
                    <td><h6><?=$in->nama_lawyer?></h6></td>
                    <td><h6>Rp <?=number_format($in->tarif)?></h6></td>
                </tr>
                <tr style="color: #55bf6a">
                    <th><h5>Deskripsi Masalah :</h5></th>
                    <th style="width: 170px"><h5>Waktu Konsultasi :</h5></th>
                </tr>
            
                <tr>
                    <td><h6><?=$in->ket_masalah?></h6></td>
                    <td>
                        <h6>Tanggal : <?=$in->tgl?></h6>
                        <h6>Waktu : <?=$in->jam_mulai?> - <?=$in->jam_selesai?></h6>
                        <h6>
                            <?php
                            $awal  = strtotime($in->jam_mulai);
                            $akhir = strtotime($in->jam_selesai);
                            $diff  = $akhir - $awal;

                            $jam   = floor($diff / (60 * 60));
                            $menit = $diff - $jam * (60 * 60);
                            echo 'Durasi : ' . $jam .  ' jam, ' . floor( $menit / 60 ) . ' menit';
                            ?>
                        </h6>
                    </td>
                </tr>
            </table>
            <?= form_open_multipart('Controller/proses_bukti'); ?>
                <input type="hidden" name="id_pesan_lawyer" value="<?=$in->id_pesan_lawyer?>">
                <h5>Upload bukti pembayaran : <input type="file" name="file"></h5><br>
                <button type="submit" class="btn btn-block btn-primary">Upload</button>
            <?= form_close(); ?>
        </div>
    </div>
</section>
<?php } ?>