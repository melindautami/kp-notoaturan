<section class="title">
    <div class="container">
        <div class="row-fluid">
            <div class="span6">
                <h1>Join</h1>
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
<!-- / .title -->       


<section class="services">
    <div class="container">
        <br><br><br>
        <div class="row-fluid">
            <div class="span4">
                <div class="center">
                    <i style="font-size: 48px" class="icon-user icon-large"></i>
                    <p> </p>
                    <h4>Advokat / Lawyer</h4>
                    <p><a class="btn btn-primary btn-large" data-toggle="modal" href="#mdlAdvokat">Join Advokat</a></p>
                </div>
            </div>

            <div class="span4">
                <div class="center">
                    <i style="font-size: 48px" class="icon-user icon-large"></i>
                    <p> </p>
                    <h4>Notaris</h4>
                    <p><a class="btn btn-primary btn-large" data-toggle="modal" href="#mdlAdvokat">Join Notaris</a></p>
                </div>
            </div>

            <div class="span4">
                <div class="center">
                    <i style="font-size: 48px" class="icon-user icon-large"></i>
                    <p> </p>
                    <h4>Client</h4>
                    <p><a class="btn btn-primary btn-large" data-toggle="modal" href="#mdlClient">Join Client</a></p>
                </div>
            </div>

        </div>
        <br><br><br>

    </div>
</section>

<!--  Advokat/Notaris -->
<div class="modal hide fade in" id="mdlAdvokat" aria-hidden="false">
    <div class="modal-header">
        <i class="icon-remove" data-dismiss="modal" aria-hidden="true"></i>
        <h4>Join</h4>
    </div>
    <!--Modal Body-->
    <div class="modal-body">
       <div align="center"><h3>NOTO ATURAN</h3></div>
       <div>
           <h5>Anda seorang advokat/notaris ?</h5><br><br>
       </div>
       <div align="center"><a class="btn btn-primary btn-large" href="https://mail.google.com/"> Email kami </a></div>
    </div>
    <!--/Modal Body-->
</div>

<!--  Client -->
<div class="modal hide fade in" id="mdlClient" aria-hidden="false">
    <div class="modal-header">
        <i class="icon-remove" data-dismiss="modal" aria-hidden="true"></i>
        <h4>Form pendaftaran client</h4>
    </div>
    <!--Modal Body-->
    <div class="modal-body" align="center">
        <?= form_open_multipart('Controller/register'); ?>
            <div >
              <div class="controls">
                <input type="text" name="nama_client" placeholder="Nama" style="width: 400px" required>
              </div>
            </div>
            <div class="control-group">
              <div class="controls">
                <input type="text" name="email" placeholder="E-mail" style="width: 400px" required>
              </div>
            </div>
            <div class="control-group">
              <div class="controls">
                <input type="text" name="no_hp" placeholder="085 xxx xxx xxx" style="width: 400px" required>
              </div>
            </div>
            <div class="control-group">
              <div class="controls">
                <input type="file" name="file">
              </div>
            </div>
            <div class="control-group">
              <div class="controls">
                <input type="password" name="pass" placeholder="Password" style="width: 400px" required>
              </div>
            </div>
            <div class="control-group">
              <!-- Button -->
              <div class="controls">
                <button type="submit" class="btn btn-success btn-large" style="width: 425px; margin-right: 20px">Register</button>
              </div>
            </div>
        <?= form_close(); ?>
    </div>
    <!--/Modal Body-->
</div>