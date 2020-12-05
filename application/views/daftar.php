<!-- TITLE -->
<section class="title">
    <div class="container">
        <div class="row-fluid">
            <div class="span6">
                <h2>Join</h2>
            </div>
            <div class="span6">
                <ul class="breadcrumb pull-right">
                    <li><a href="<?= base_url('Controller') ?>">Home</a> <span class="divider">/</span></li>
                    <li class="active">Join</li>
                </ul>
            </div>
        </div>
    </div>
</section>
 
<!-- LIST BUTTON -->
<div class="container">
    <p><a class="btn btn-join btn-large" data-toggle="modal" href="#mdlAdvokat">Join Advokat</a></p><br />
    <p><a class="btn btn-join btn-large" data-toggle="modal" href="#mdlAdvokat">Join Notaris</a></p><br />
    <p><a class="btn btn-join btn-large" data-toggle="modal" href="#mdlClient">Join Client</a></p><br /><br />
</div>

<!-- JOIN LAWYER/NOTARIS -->
<div class="modal hide fade in" id="mdlAdvokat" aria-hidden="false">
    <div class="modal-body">
       <div align="center"><h3>NOTO ATURAN</h3></div>
       <div>
            <h4>Anda seorang advokat/notaris ?</h4>
            <h5>Mari bergabung dengan noto aturan untuk membantu kami dalam meningkatkan kemudahan akses terhadap bantuan hukum  bagi masyarakat. </h5>
            <br />
            <h4>Keuntungan</h4>
            <h5>1.  Memberikan dampak positif dalam rangka peningkatan kualitas bantuan hukum bagi masyarakat<br />  
                2.  Waktu dan lokasi kerja yang fleksibel <br />
                3.  Insentif yang menarik<br /></h5>
            <br />
            <h4>Cara Mendaftar</h4>
            <h5> 1.  Email ke halo@ultranesia.com berisi Curriculum Vitae, STR (Post Internship) aktif dan SIP aktif. <br />
                 2.  Anda akan segera dihubungi oleh tim Halodoc untuk proses selanjutnya <br /></h5>
       </div>
       <br /><br />
       <div align="center"><a class="btn btn-primary btn-large" href="https://mail.google.com/"> Email kami </a></div>
    </div>
</div>

<!--  JOIN CLIENT -->
<div class="modal hide fade in" id="mdlClient" aria-hidden="false">
    <div class="modal-header">
        <h4 align="center">Form pendaftaran client</h4><br />
    </div>
    <!--Modal Body-->
    <div class="modal-body" align="center">
        <?= form_open_multipart('Controller/register'); ?>
            <div >
              <div class="controls">
                <input type="text" name="nama_client" placeholder="Nama" style="width: 300px" required> 
              </div>
            </div>
            <div class="control-group">
              <div class="controls">
                <input type="text" name="email" placeholder="E-mail" style="width: 300px" required>
              </div>
            </div>
            <div class="control-group">
              <div class="controls">
                <input type="text" name="no_hp" placeholder="No. Telp" style="width: 300px" required>
              </div>
            </div>
            <div class="control-group">
              <div class="controls">
                <input type="password" name="pass" placeholder="Password" style="width: 300px" required>
              </div>
            </div>
            <div class="control-group">
              <!-- Button -->
              <div class="controls">
                <button type="submit" class="btn btn-register btn-large">Register</button>
              </div>
            </div>
            <div class="modal-join">
                Sudah Punya akun?<a href="<?=base_url('Controller')?>"> Log In</a>
            </div>
        <?= form_close(); ?>
    </div>
    <!--/Modal Body-->
</div>