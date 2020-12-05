<?php foreach ($dtl_layanan as $in){ ?>
<section class="title">
    <div class="container">
        <div class="row-fluid">
            <div class="span6">
                <h1><?=$in->nama_layanan?></h1>
            </div>
            <div class="span6">
                <ul class="breadcrumb pull-right">
                    <li><a href="<?= base_url('Controller') ?>">Home</a> <span class="divider">/</span></li>
                    <li class="active">Layanan</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section id="layanan" class="container main">
    <div class="row-fluid">
        <div class="span6">
            <img src="<?=base_url('assets/images/'.$in->icon)?>"><br><br>
            <div class="progress"><div class="bar" style="width: 80%; text-align:left; padding-left:10px;">Nama layanan : <?=$in->nama_layanan?></div></div>
            <div class="progress progress-warning"><div class="bar" style="width: 70%; text-align:left; padding-left:10px;">Harga : <?='Rp '.number_format($in->harga)?></div></div><br>
            <h2>Deskripsi Layanan :</h2>
            <p><?=$in->deskripsi?></p><br>
            <a href="<?= base_url('Controller/pesan_layanan/'.$in->id_layanan) ?>" class="btn btn-block btn-primary">Pesan Layanan</a>
        </div>
    </div>
</section>
<?php } ?>