<!--Slider-->
<section id="slide-show">
    <div id="slider" class="sl-slider-wrapper">

        <!--Slider Items-->    
        <div class="sl-slider">
            <!--Slider Item1-->
            <div class="sl-slide item1" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
                <div class="sl-slide-inner">
                    <div class="container">
                        <img class="pull-right" src="<?= base_url('assets/images/sample/slider/img1.png') ?>" />
                        <h2>Noto Aturan</h2>
                        <h3 class="gap">Hukum adalah hati nurani  publik</h3>
                        <h4>-Thomas Hobbes, Leviathan.</h4>
                        <!--<a class="btn btn-large btn-transparent" href="#">Learn More</a>-->
                    </div>
                </div>
            </div>
            <!--/Slider Item1-->

            <!--Slider Item2-->
            <div class="sl-slide item2" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
                <div class="sl-slide-inner">
                    <div class="container">
                        <img class="pull-right" src="<?= base_url('assets/') ?>images/sample/slider/img2.png" alt="" />
                        <h2>Noto Aturan</h2>
                        <h3 class="gap">Perdamaian tanpa keadilan adalah ilusi</h3>
                        <h4>-KH. Abdurrahman Wahid</h4>
                        <!--<a class="btn btn-large btn-transparent" href="#">Pelajari</a>-->
                    </div>
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
        </div>
        <?php } ?>
    </div>
    <br><br>
    <div class="row-fluid">
        <div class="span12">
            <table>
                <tr>
                    <td>
                        <img width="300" src="<?=base_url('assets/')?>images/logo.png">
                    </td>
                </tr>
            </table>
        </div>
    </div>
</section>