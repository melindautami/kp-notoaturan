<body>
    <!--Header-->
    <header class="navbar navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <a id="logo" class="pull-left" href="<?= base_url('Controller') ?>"></a>
                <div class="nav-collapse collapse pull-right">
                    <ul class="nav">
                        <li><a href="<?= base_url('Controller') ?>">Beranda</a></li>
                        <li><a href="<?= base_url('Controller/lawyer') ?>">Cari Pengacara</a></li>
                        <li><a href="<?= base_url('Controller/bantuan') ?>">Bantuan</a></li>
                        <li><a href="<?= base_url('Controller/pengaduan') ?>">Pengaduan</a></li> 
                        <?php if($this->session->userdata('akses')){ ?>
                        <li class="dropdown active login">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?= $this->session->userdata('nama') ?> <i class="icon-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?= base_url('Controller/profil') ?>">Profil</a></li>
                                <li><a href="<?= base_url('Controller/history') ?>">History</a></li>
                                <li><a href="<?= base_url('Controller/logout') ?>">Logout</a></li>
                            </ul>
                        </li>
                        <?php }else{ ?>
                        <li class="login">
                            <a data-toggle="modal" href="#loginForm">LOGIN</a>
                        </li>
                        <?php } ?>
                    </ul>        
                </div><!--/.nav-collapse -->
            </div>
        </div>
    </header>
    <!-- /header -->