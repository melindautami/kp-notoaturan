<section class="title">
    <div class="container">
        <div class="row-fluid">
            <div class="span6">
                <h1>Lawyer</h1>
            </div>
            <div class="span6">
                <ul class="breadcrumb pull-right">
                    <li><a href="<?= base_url('Controller') ?>">Home</a> <span class="divider">/</span></li>
                    <li class="active">Lawyer</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section id="about-us" class="container main">
    <div class="row">

        <div class="span6">
            <a href="#"><h2>Daftar Lawyer</h2></a>
            <div class="row-fluid">
                <?php foreach ($lawyer as $in){ ?>
                <div class="span4">
                    <div class="box" align="center">
                        <p><img src="<?=base_url('assets/lawyer/'.$in->foto_lawyer)?>" style="width: 130px"></p>
                        <h5><a href="<?=base_url('Controller/detail_lawyer/'.$in->id_lawyer)?>"><?= $in->nama_lawyer ?></a></h5>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
        <aside class="span6" style="margin-top: 60px">
            <?php foreach ($dtl_lawyer as $in){ ?>
            <div align="center box">
                <div class="box">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   
                                <img src="<?=base_url('assets/lawyer/'.$in->foto_lawyer)?>" style="width: 180px"></td>
                        </tr>
                        <tr>
                            <td><h5>Nama Lawyer : <?= $in->nama_lawyer ?></h5></td>
                        </tr>
                        <tr>
                            <td><h5>Email : <i><?= $in->email_lawyer ?></i></h5></td>
                        </tr>
                        <tr>
                            <td><h5>Kontak : <?= $in->no_hp_lawyer ?></h5></td>
                        </tr>
                        <tr>
                            <td><h5>Spesialisasi : <?= $in->spesialisasi ?></h5></td>
                        </tr>
                        <tr>
                            <td><h5>Tarif Harga : <?= "Rp ".number_format($in->tarif) ?></h5></td>
                        </tr>
                        <tr>
                            <td></td>
                        </tr>
                        <tr>
                            <td><h5><?= $in->deskripsi ?></h5></td>
                        </tr>
                    </table>
                    <form action="<?= base_url('Controller/pesan_lawyer') ?>" method="POST">
                    <input type="hidden" name="id_client" value="<?= $this->session->userdata('id') ?>">
                    <input type="hidden" name="id_lawyer" value="<?= $in->id_lawyer ?>">
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
                    <button type="submit" class="btn btn-block btn-primary btn-large" onclick="return confirm('Pesan lawyer dan lanjutkan ke pembayaran ?')"><b>Reservasi</b></button>
                    </form>
                </div>
                <?php } ?>
            </div>

           
        </aside>
    </div>
</section>