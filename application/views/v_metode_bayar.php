<!-- section featured -->
<section id="featured">

  <!-- slideshow start here -->

  <div class="camera_wrap" id="camera-slide">

    <!-- slide 1 here -->
    <div data-src="<?= base_url() ?>assets/template_frontend/img/slides/camera/slide1/img1.jpg">
      <div class="camera_caption fadeFromLeft">
        <div class="container">

          <div class="row">
            <div class="span6">
              <h2 class="animated fadeInDown"><strong>Top Up Diamond <span class="colored">Cepat - Mudah - Terpercaya</span></strong></h2>
              <!-- <p class="animated fadeInUp"> Vim porro dicam reprehendunt te, populo quodsi dissentiet cum ad. Ne natum deseruisse vis. Iisque deseruisse sententiae mel ne, dolores appetere vim ut. Sea no tamquam reprimique.</p> -->
              <!-- <a href="#" class="btn btn-success btn-large animated fadeInUp">
            <i class="icon-link"></i> Read more
          </a>
          <a href="#" class="btn btn-theme btn-large animated fadeInUp">
            <i class="icon-download"></i> Download
          </a> -->
            </div>
            <div class="span6">
              <img src="<?= base_url() ?>assets/template_frontend/img/slides/camera/slide1/k1.jpeg" alt="" class="animated bounceInDown delay1" />
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- slide 2 here -->
    <!-- <div data-src="<?= base_url() ?>assets/template_frontend/img/slides/camera/slide2/img1.jpg">
      <div class="camera_caption fadeFromLeft">
        <div class="container">
          <div class="row">
            <div class="span6">
              <img src="<?= base_url() ?>assets/template_frontend/img/slides/camera/slide2/iMac.png" alt="" />
            </div>
            <div class="span6">
              <h2 class="animated fadeInDown"><strong>Put your <span class="colored">Opt in form</span></strong></h2>
              <p class="animated fadeInUp"> Vim porro dicam reprehendunt te, populo quodsi dissentiet cum ad. Ne natum deseruisse vis. Iisque deseruisse sententiae mel ne, dolores appetere vim ut. Sea no tamquam reprimique.</p>
              <form>
                <div class="input-append">
                  <input class="span3 input-large" type="text">
                  <button class="btn btn-theme btn-large" type="submit">Subscribe</button>
                </div>
              </form>
            </div>

          </div>
        </div>
      </div>
    </div> -->

    <!-- slide 3 here -->
    <div data-src="<?= base_url() ?>assets/template_frontend/img/slides/camera/slide1/k2.jpeg">
      <div class="camera_caption fadeFromLeft">
        <div class="container">
          <div class="row">
            <div class="span10 aligncenter">
              <!-- <h2 class="animated fadeInDown"><strong><span class="colored">Responsive</span> and <span class="colored">cross broswer</span> compatibility</strong></h2>
          <p class="animated fadeInUp">Pellentesque habitant morbi tristique senectus et netus et malesuada</p> -->
              <!-- <img src="<?= base_url() ?>assets/template_frontend/img/slides/camera/slide1/k3.jpeg" alt="" class="animated bounceInDown delay1" /> -->
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- slideshow end here -->

</section>
<!-- /section featured -->

<section id="content" style="background: url('<?= base_url() ?>assets/bg/bg6.png'); background-repeat:no-repeat; background-position: center; background-size:1500px 1500px">
  <div class="container">


    <h3>Pembelian Diamond <strong><?= $pembelian['nm_game'] ?></strong></h3>
    <h4>Jumlah Diamond : <strong><?= $pembelian['jumlah'] ?></strong></h4>

    <h4>Harga Diamond : <strong>Rp. <?php if ($pembelian['harga_upselling'] == 0) {
                                      echo  number_format($pembelian['harga'], 0, ',', '.');
                                    } else {
                                      echo  number_format($pembelian['harga_upselling'], 0, ',', '.');
                                    }
                                    ?></strong></h4>

    <?= form_error('id_akun', '<div class="span11 alert alert-danger" role="alert">', '
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>') ?>
    <?= form_error('metode_bayar', '<div class="span11 alert alert-danger" role="alert">', '
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>') ?>
    <form action="<?= base_url('diamond/pembayaran') ?>" method="post">
      <div class="row controls">
        <div class="span3 control-group">
          <label>Masukan ID Akun</label>
          <input type="text" name="id_akun" value="" class="span6">
          <input type="hidden" name="id_game" value="<?= $pembelian['id_game'] ?>">
          <input type="hidden" name="jumlah" value="<?= $pembelian['jumlah'] ?>">
          <input type="hidden" name="id_diamond" value="<?= $pembelian['id_diamond'] ?>">
          <input type="hidden" name="harga" value="<?= $pembelian['harga'] ?>">
          <input type="hidden" name="harga_upselling" value="<?= $pembelian['harga_upselling'] ?>">


        </div>
      </div>
      <div class="row controls">
        <div class="span3 control-group">
          <select name="metode_bayar" id="" class="span6">
            <option value="">
              <-Pilih Metode Bayar->
            </option>
            <?php foreach ($metode as $mt) : ?>
              <option value="<?= $mt['id_metode_bayar'] ?>"><?= $mt['metode_bayar'] ?></option>
            <?php endforeach; ?>
          </select>
        </div>
      </div>
      <button type="submit" class="btn btn-primary">Bayar</button>
      <button type="reset" class="btn btn-warning">Reset</button>
    </form>
    <!-- divider -->
    <div class="row">
    </div>
    <!-- end divider -->

  </div>
</section>