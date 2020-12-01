
<section class="title">
    <div class="container">
        <div class="row-fluid">
            <div class="span6">
                <h1>Pilih Pembayaran</h1>
            </div>
            <div class="span6">
                <ul class="breadcrumb pull-right">
                    <li><a href="<?= base_url('Controller') ?>">Home</a> <span class="divider">/</span></li>
                    <li class="active">Pilih Pembayaran</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<?php foreach ($dtl_pesanlayanan as $in){ ?>
<section id="about-us" class="container main">
    <div class="row-fluid">
        <div class="span7">
            <table class="table table-bordered">
                <tr style="background-color: #55bf6a; color: white">
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
                    <th><h5>Layanan :</h5></th>
                    <th><h5>Biaya :</h5></th>
                </tr>
                <tr>
                    <td><h6><?=$in->nama_layanan?></h6></td>
                    <td><h6>Rp <?=number_format($in->harga)?></h6></td>
                </tr>
                <tr style="color: #55bf6a">
                    <th><h5>Deskripsi Masalah :</h5></th>
                    <th style="width: 170px"><h5>Metode Pembayaran :</h5></th>
                </tr>
            <form action="<?=base_url('Controller/proses_pembayaran_layanan')?>" method="POST">
                <input type="hidden" name="id_pesan_layanan" value="<?=$in->id_pesan_layanan?>">
                <tr>
                    <td><h6><?=$in->ket_masalah?></h6></td>
                    <td>
                        <h6><input type="radio" name="metode_bayar" value="BCA"> BCA</h6>
                        <h6><input type="radio" name="metode_bayar" value="BNI"> BNI</h6>
                        <h6><input type="radio" name="metode_bayar" value="Mandiri"> Mandiri</h6>
                        <h6><input type="radio" name="metode_bayar" value="Lain-lain"> Lain-lain</h6>
                    </td>
                </tr>
            </table>
            <button type="submit" class="btn btn-block btn-primary">Checkout</button>
            </form>
        </div>
    </div>
</section>
<?php } ?>