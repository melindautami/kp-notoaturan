<!--  Login form -->
<div class="modal hide fade in" id="loginForm" aria-hidden="false">
    <div class="modal-header">
        <i class="icon-remove" data-dismiss="modal" aria-hidden="true"></i>
        <h4>Login Form</h4>
    </div>
    <!--Modal Body-->
    <div class="modal-body">
        <form class="form-inline" action="<?= base_url('Controller/proses_login') ?>" method="post">
            <input type="text" name="email" class="input-small" placeholder="Email">
            <input type="password" name="pass" class="input-small" placeholder="Password">
            <label class="checkbox">
                <input type="checkbox"> Remember me
            </label>
            <button type="submit" name="login" class="btn btn-primary">Login</button>
        </form>
        Belum punya akun ? <a href="<?=base_url('Controller/daftar')?>">Join</a>
    </div>
    <!--/Modal Body-->
</div>
<!--  /Login form -->

<script src="<?= base_url('assets/js/vendor/jquery-1.9.1.min.js') ?>"></script>
<script src="<?= base_url('assets/js/vendor/bootstrap.min.js') ?>"></script>
<script src="<?= base_url('assets/js/main.js') ?>"></script>
<!-- Required javascript files for Slider -->
<script src="<?= base_url('assets/js/jquery.ba-cond.min.js') ?>"></script>
<script src="<?= base_url('assets/js/jquery.slitslider.js') ?>"></script>
<!-- /Required javascript files for Slider -->

<!-- Dropify -->
<script src="<?php echo base_url('assets/dropify/dist/js/dropify.js'); ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/dropify/dist/js/dropify.min.js'); ?>" type="text/javascript"></script>

<!-- SL Slider -->
<script type="text/javascript"> 
$(function() {
    var Page = (function() {

        var $navArrows = $( '#nav-arrows' ),
        slitslider = $( '#slider' ).slitslider( {
            autoplay : true
        } ),

        init = function() {
            initEvents();
        },
        initEvents = function() {
            $navArrows.children( ':last' ).on( 'click', function() {
                slitslider.next();
                return false;
            });

            $navArrows.children( ':first' ).on( 'click', function() {
                slitslider.previous();
                return false;
            });
        };

        return { init : init };

    })();

    Page.init();
});

$('.foto').dropify({
    messages: {
        default: 'Drag atau drop untuk memilih berkas',
        replace: 'Ganti',
        remove:  'Hapus',
        error:   'error',
    }
});

</script>
<!-- /SL Slider -->
</body>
</html>