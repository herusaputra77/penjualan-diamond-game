<body>

  <div id="wrapper">
    <div>
      <!-- start header -->
      <header style="background: url('<?= base_url() ?>assets/bg/bg6.png'); background-position: ; background-repeat: no-repeat; background-size: 1500px 500px; opacity:;">
        <div class="top">
          <div class="container">
            <div class="row">
              <div class="span6">
                <!-- <p class="topcontact"><i class="icon-phone"></i></p> -->
              </div>
              <div class="span6">

                <ul class="social-network">
                  <li><a href="#" data-placement="bottom" title="Facebook"><i class="icon-facebook icon-white"></i></a></li>
                  <li><a href="#" data-placement="bottom" title="Twitter"><i class="icon-twitter icon-white"></i></a></li>
                  <li><a href="#" data-placement="bottom" title="Linkedin"><i class="icon-linkedin icon-white"></i></a></li>
                  <li><a href="#" data-placement="bottom" title="Pinterest"><i class="icon-pinterest  icon-white"></i></a></li>
                  <li><a href="#" data-placement="bottom" title="Google +"><i class="icon-google-plus icon-white"></i></a></li>
                  <li><a href="#" data-placement="bottom" title="Dribbble"><i class="icon-dribbble icon-white"></i></a></li>
                </ul>

              </div>
            </div>
          </div>
        </div>
        <div class="container">


          <div class="row nomargin">
            <div class="span4">
              <a href="<?= base_url('dashboard') ?>">
                <!-- <h2 style="font-family: 'Times New Roman', Times, serif;">Aqila Cell</h2> -->
                <img style="width: 35%;" src="<?= base_url('assets/bg/logo.png') ?>" alt="">

              </a>
              <!-- <div class="logo">
            <a href="index.html"><img src="<?= base_url() ?>assets/template_frontend/img/logo.png" alt="" /></a>
          </div> -->
            </div>
            <div class="span8">
              <div class="navbar navbar-static-top">
                <div class="navigation">
                  <nav>
                    <div class="row">

                      <ul class="nav topnav">
                        <?php if ($this->session->userdata('nama')) { ?>
                          <li class="navbar active">
                            <a href="<?= base_url('dashboard') ?>"><i class="icon-home"></i> Beranda</a>
                          </li>

                          <li class="dropdown">
                            <a href="#"><i class="icon-user"></i> <?=
                                                                  $this->session->userdata('nama');
                                                                  ?>
                              <i class="icon-angle-down"></i></a>
                            <ul class="dropdown-menu">
                              <li><a href="<?= base_url('profile'); ?>">Profile</a></li>
                              <li><a href="<?= base_url('diamond/order') ?>">Top Up</a></li>
                              <li><a href="<?= base_url('diamond/riwayat_order') ?>">Riwayat Top Up</a></li>
                            </ul>
                          </li>
                          <li class="dropdown">
                            <a href="#">Kontak <i class="icon-angle-down"></i></a>
                            <ul class="dropdown-menu">
                              <li><a href="#"><i class="icon icon-envelope"></i>dwiputra207@gmail.com</a></li>
                              <li><a href="#"><i class="icon icon-phone"></i> +628-0822-1111-4449</a></li>
                            </ul>
                          </li>

                          <li>
                            <?php if ($notif['notif'] == 0) { ?>
                              <a href="<?= base_url('diamond/riwayat_order') ?>">Notif</a><?php } else { ?>
                              <a href="<?= base_url('dashboard/reset_notif') ?>"><i style="border-radius: 50%; color: red; font-size:15px;"><?= $notif['notif'] ?></i> Notif</a>
                            <?php } ?>
                          </li>
                          <li>
                            <a href="<?= base_url('auth/logout') ?>"><i class="icon-signout"></i> Logout</a>
                          </li>
                        <?php } else { ?>
                          <li class="navbar active">
                            <a href="<?= base_url('dashboard') ?>"><i class="icon-home"></i> Beranda</a>
                          </li>
                          <li class="dropdown">
                            <a href="#">Sign In <i class="icon-angle-down"></i></a>
                            <ul class="dropdown-menu">
                              <li><a href="<?= base_url('auth/login') ?>">Login</a></li>
                              <li><a href="<?= base_url('auth/register') ?>">Register</a></li>
                            </ul>
                          </li>
                          <li class="dropdown">
                            <a href="#">Kontak<i class="icon-angle-down"></i></a>
                            <ul class="dropdown-menu">
                              <li><a href="#"><i class="icon icon-envelope"></i>dwiputra207@gmail.com</a></li>
                              <li><a href="#"><i class="icon icon-phone"></i> +628-0822-1111-4449</a></li>
                            </ul>
                          </li>

                        <?php } ?>
                      </ul>
                    </div>
                  </nav>
                </div>
                <!-- end navigation -->
              </div>
            </div>
          </div>
        </div>
      </header>

    </div>

    <?php echo $this->session->flashdata('pesan') ?>
    <!-- end header -->