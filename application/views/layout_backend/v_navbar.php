<body>

  <div id="wrapper">

    <!-- start header -->
    <header style="background: url('<?= base_url() ?>assets/bg/bg6.png'); background-repeat:no-repeat; background-position: center; background-size:1500px 1500px">
      <div class="top">
        <div class="container">
          <div class="row">
            <div class="span6">
              <!-- <p class="topcontact"><i class="icon-phone"></i> +62 088 999 123</p> -->
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
            <div class="logo">
              <!-- <a href="index.html"><img src="<?= base_url() ?>assets/template_frontend/img/logo.png" alt="" /></a> -->
              <a href="<?= base_url('admin/dashboard') ?>">
                <img style="width: 35%;" src="<?= base_url('assets/bg/logo.png') ?>" alt="">
                <!-- <h3 style="font-family: 'Times New Roman', Times, serif;">Aqila Cell</h3> -->
              </a>
            </div>
          </div>
          <div class="span8">
            <div class="navbar navbar-static-top">
              <div class="navigation">
                <nav>
                  <div class="row">

                    <ul class="nav topnav">
                      <li class="navbar active">
                        <a href="<?= base_url('admin/dashboard') ?>"><i class="icon-home"></i> Beranda</a>
                      </li>
                      <li>

                        <a href="<?= base_url('admin/pesanan') ?>"><i class="icon icon-bell icon-2x"></i><?php if ($notif['notif'] == 0) {
                                                                                                          } else { ?>
                            <sup style="color:blue; font-size:large;"><?= $notif['notif'] ?></sup>
                          <?php } ?></a>
                      </li>
                      <!-- <li>
                      <a href="contact.html">Kontak </a>
                    </li> -->
                      <li class="dropdown">
                        <a href="#">Kontak <i class="icon-angle-down"></i></a>
                        <ul class="dropdown-menu">
                          <li><a href="#"><i class="icon icon-envelope"></i>dwiputra207@gmail.com</a></li>
                          <li><a href="#"><i class="icon icon-phone"></i> +628-0822-1111-4449</a></li>
                        </ul>
                      </li>
                      <li>
                        <a href="<?= base_url('auth/logout') ?>">Logout </a>
                      </li>
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
    <!-- end header -->
    <section id="inner-headline">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="inner-heading">
              <ul class="breadcrumb">
                <li><a href="index.html">Home</a> <i class="icon-angle-right"></i></li>
                <li><a href="#">Pages</a> <i class="icon-angle-right"></i></li>
                <li class="active">Services</li>
              </ul>
              <?php echo $this->session->flashdata('pesan') ?>
              <?= form_error('password', '<span class="text-small text-danger">', '</span>') ?>
              <h2><?= $judul ?></h2>

            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="content">
      <div class=" container">