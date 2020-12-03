<!--Slider-->
<section id="slide-show">
    <div id="slider" class="sl-slider-wrapper">

        <!--Slider Items-->    
        <div class="sl-slider">
            <!--Slider Item1-->
            <div class="sl-slide item1" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
                <div class="sl-slide-inner">
                    <img class="pull-right" src="<?= base_url('assets/images/sample/slider/slide 1.png') ?>" />
                </div>
            </div>
            <!--/Slider Item1-->

            <!--Slider Item2-->
            <div class="sl-slide item2" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
                <div class="sl-slide-inner">
                    <img class="pull-right" src="<?= base_url('assets/') ?>images/sample/slider/slide 2.png" alt="" />
                </div>
            </div>
            <!--Slider Item2-->

        </div>
        <!--/Slider Items-->

        <!--Slider Next Prev button-->
        <nav id="nav-arrows" class="nav-arrows">
            <span class="nav-arrow-prev"><i class="icon-angle-left"></i></span>
            <span class="nav-arrow-next"><i class="icon-angle-right"></i></span> 
        </nav>
        <!--/Slider Next Prev button-->

    </div>
<!-- /slider-wrapper -->           
</section>
<!--/Slider-->

<section id="about-us" class="container main">
    <!-- Meet the team -->
    <h1 class="center">Layanan Kami</h1>
    <hr>
    <div class="row">
        <?php foreach ($layanan as $in){ ?>
        <div class="span2">
            <div class="box" align="center">
                <p><a href="<?=base_url('Controller/dtl_layanan/'.$in->id_layanan)?>"><img src="<?=base_url('assets/images/'.$in->icon)?>"></a></p>
                <h5><a href="<?=base_url('Controller/dtl_layanan/'.$in->id_layanan)?>"><?= $in->nama_layanan ?></a></h5>
                <h6>Harga Rp <?= number_format($in->harga) ?></h6>
            </div>
            <br />
        </div>
        <?php } ?>
    </div>
    <br><br>
    <div class="row-fluid">
        <div class="span12">
            <table>
                <tr>
                    <td width="400">
                        <img width="300" src="<?=base_url('assets/')?>images/logo.png">
                    </td>
                    <td>
                        <h5>Notoaturan adalah platform cerdas pertama yang melayani jasa legal untuk UMKM dan perusahaan besar sejak 2016 di Indonesia. Kami bangga menjadi yang pertama dan satu-satunya platform yang melayani legalitas tanpa ada batasan, berkualitas, dan terjangkau. Kontrak Hukum juga merupakan startup di bidang hukum pertama yang mendapatkan pendanaan di Indonesia.</h5>
                        <h5>Notoaturan hadir untuk melayani segala kebutuhan hukum Anda secara cepat, mudah, dan terjangkau. Dengan sistem yang terintegrasi secara digital, Notoaturan dapat menyelesaikan permasalahan hukum Anda dalam hitungan jam secara optimal.</h5>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</section>