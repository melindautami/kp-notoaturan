<section class="title">
    <div class="container">
        <div class="row-fluid">
            <div class="span6">
                <h1>Booking Layanan</h1>
            </div>
            <div class="span6">
                <ul class="breadcrumb pull-right">
                    <li><a href="<?= base_url('Controller') ?>">Home</a> <span class="divider">/</span></li>
                    <li class="active">Booking Layanan</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section id="about-us" align="center" class="container main">
    <div class="row" align="center">
        <aside class="span6" style="margin-top: 60px">
            <?php foreach ($dtl_layanan as $in){ ?>
            <div align="center box">
                <div class="box">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   
                                <img src="<?=base_url('assets/images/'.$in->icon)?>" style="width: 120px"></td>
                        </tr>
                        <tr>
                            <td><h5>Nama Layanan : <?= $in->nama_layanan ?></h5></td>
                        </tr>
                        <tr>
                            <td><h5>Harga Layanan : <?= "Rp ".number_format($in->harga) ?></h5></td>
                        </tr>
                        <tr>
                            <td></td>
                        </tr>
                        <tr>
                            <td><h5><?= $in->deskripsi ?></h5></td>
                        </tr>
                    </table>
                    <form action="<?= base_url('Controller/proses_pesan_layanan') ?>" method="POST">
                    <input type="hidden" name="id_layanan" value="<?= $in->id_layanan ?>">
                    <div class="widget search">
                        <textarea name="ket_masalah" required="required" class="input-block-level" rows="8" placeholder="Deskripsi singkat permasalahan anda ...." required></textarea>
                    </div>
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>Waktu konsultasi</th>
                            <th>Durasi Konsultasi</th>
                        </tr>
                        <tr>
                            <td width="250">Tanggal : <input type="date" name="tgl" required></td>
                            <td><br><br><br><h4><i style="color: white">----------</i>30 Menit</h4></td>
                        </tr>
                        <tr>
                            <td>Waktu mulai : <input type="time" name="jam_mulai" required></td>
                        </tr>
                        <tr>
                            <td>Waktu selesai : <input type="time" name="jam_selesai" required></td>
                        </tr>
                    </table>
                    <button type="submit" class="btn btn-block btn-primary btn-large" onclick="return confirm('Pesan layanan dan lanjutkan ke pembayaran ?')"><b>Reservasi</b></button>
                    </form>
                </div>
                <?php } ?>
            </div>

           
        </aside>
    </div>
</section>