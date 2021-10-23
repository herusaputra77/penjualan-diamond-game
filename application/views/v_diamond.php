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
        <div class="row">
            <div class="span12">
                <div class="row">
                    <?php foreach ($diamond as $key => $value) { ?>
                        <div class="span6">
                            <form action="<?= base_url('diamond/metode_bayar') ?>" method="post">
                                <input type="hidden" name="id_game" value="<?= $value['id_game'] ?>">
                                <input type="hidden" name="jumlah" value="<?= $value['jumlah'] ?>">
                                <input type="hidden" name="id_diamond" value="<?= $value['id_diamond'] ?>">
                                <input type="hidden" name="harga" value="<?= $value['harga'] ?>">
                                <button class="btn btn-primary btn-rounded" style="width: 100%; text-align:center;"><?= $value['jumlah'] ?> Diamond | Rp. <?php if ($value['harga_upselling'] == 0) {
                                                                                                                                                                echo number_format($value['harga'], 0, ',', '.');
                                                                                                                                                            } else {
                                                                                                                                                                echo '<s>' . number_format($value['harga'], 0, ',', '.') . '</s>';
                                                                                                                                                            }  ?><?php if ($value['harga_upselling'] == 0) {
                                                                                                                                                                    } else {
                                                                                                                                                                        echo ' | ' . 'Rp. ' . number_format($value['harga_upselling'], 0, ',', '.');
                                                                                                                                                                    } ?><br><?= $value['up_selling'] ?></button>
                            </form>

                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <!-- divider -->
        <div class="row">

        </div>
        <!-- end divider -->

    </div>
</section>