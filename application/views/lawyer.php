<section class="title">
    <div class="container">
        <div class="row-fluid">
            <div class="span6">
                <h2>Daftar Lawyer</h2>
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
        <div class="span12">
            <div class="row-fluid">
                <?php foreach ($lawyer as $in){ ?>
                <div class="span2">
                    <div class="box" align="center">
                        <p><img src="<?=base_url('assets/lawyer/'.$in->foto_lawyer)?>" style="width: 130px"></p>
                        <h5>
                            <?php if($this->session->userdata('akses')){ ?>
                            <a href="<?=base_url('Controller/detail_lawyer/'.$in->id_lawyer)?>"><?= $in->nama_lawyer ?></a>
                            <?php }else{ ?>
                            <?= $in->nama_lawyer ?>
                            <?php } ?>
                        </h5>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>