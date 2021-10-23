<!-- section featured -->
<section id="featured" style="background: url('<?= base_url() ?>assets/bg/bg1.jpg'); opacity:;">

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

<section id="content" style="background: url('<?= base_url() ?>assets/bg/bg6.png'); background-repeat: no-repeat; background-size: 1500px 500px; opacity:;">
  <div class="container">


    <div class="row">
      <div class="span12">
        <div class="row">
          <?php foreach ($game as $key => $value) { ?>
            <div class="span4">
              <div class="row">

                <div class="box flyRight">
                  <a href="<?= base_url('diamond/index/' . $value['id_game']) ?>">

                    <div class="icon">
                      <img class="ico icon-circled icon-bgdark active icon-3x" src="<?= base_url('assets/gambar_game/') . $value['gambar'] ?>">
                    </div>
                    <div class="text">
                      <h4><?= $value['nm_game'] ?></strong></h4>
                      <!-- <p>
                        Lorem ipsum dolor sit amet, has ei ipsum scaevola deseruisse am sea facilisis.
                      </p> -->
                    </div>
                  </a>
                </div>
              </div>
            </div>
          <?php } ?>

        </div>
      </div>
    </div>

    <!-- <div class="row">
      <div class="span12 aligncenter">
        <h3 class="title">What people <strong>saying</strong> about us</h3>
        <div class="blankline30"></div>

        <ul class="bxslider">
          <li>
            <blockquote>
              Aliquam a orci quis nisi sagittis sagittis. Etiam adipiscing, justo quis feugiat.Suspendisse eu erat quam. Vivamus porttitor eros quis nisi lacinia sed interdum lorem vulputate. Aliquam a orci quis nisi sagittis sagittis. Etiam adipiscing, justo quis
              feugiat
            </blockquote>
            <div class="testimonial-autor">
              <img src="<?= base_url() ?>assets/template_frontend/img/dummies/testimonial/1.png" alt="" />
              <h4>Hillary Doe</h4>
              <a href="#">www.companyname.com</a>
            </div>
          </li>
          <li>
            <blockquote>
              Aliquam a orci quis nisi sagittis sagittis. Etiam adipiscing, justo quis feugiat.Suspendisse eu erat quam. Vivamus porttitor eros quis nisi lacinia sed interdum lorem vulputate. Aliquam a orci quis nisi sagittis sagittis. Etiam adipiscing, justo quis
              feugiat
            </blockquote>
            <div class="testimonial-autor">
              <img src="<?= base_url() ?>assets/template_frontend/img/dummies/testimonial/2.png" alt="" />
              <h4>Michael Doe</h4>
              <a href="#">www.companyname.com</a>
            </div>
          </li>
          <li>
            <blockquote>
              Aliquam a orci quis nisi sagittis sagittis. Etiam adipiscing, justo quis feugiat.Suspendisse eu erat quam. Vivamus porttitor eros quis nisi lacinia sed interdum lorem vulputate. Aliquam a orci quis nisi sagittis sagittis. Etiam adipiscing, justo quis
              feugiat
            </blockquote>
            <div class="testimonial-autor">
              <img src="<?= base_url() ?>assets/template_frontend/img/dummies/testimonial/3.png" alt="" />
              <h4>Mark Donovan</h4>
              <a href="#">www.companyname.com</a>
            </div>
          </li>
          <li>
            <blockquote>
              Aliquam a orci quis nisi sagittis sagittis. Etiam adipiscing, justo quis feugiat.Suspendisse eu erat quam. Vivamus porttitor eros quis nisi lacinia sed interdum lorem vulputate. Aliquam a orci quis nisi sagittis sagittis. Etiam adipiscing, justo quis
              feugiat
            </blockquote>
            <div class="testimonial-autor">
              <img src="<?= base_url() ?>assets/template_frontend/img/dummies/testimonial/4.png" alt="" />
              <h4>Marry Doe Elliot</h4>
              <a href="#">www.companyname.com</a>
            </div>
          </li>
        </ul>

      </div> -->
  </div>

  </div>
</section>
<!-- 

<section id="works">
  <div class="container">
    <div class="row">
      <div class="span12">
        <h4 class="title">Recent <strong>Works</strong></h4>
        <div class="row">

          <div class="grid cs-style-4">
            <div class="span3">
              <div class="item">
                <figure>
                  <div><img src="<?= base_url() ?>assets/template_frontend/img/dummies/works/1.jpg" alt="" /></div>
                  <figcaption>
                    <div>
                      <span>
                        <a href="<?= base_url() ?>assets/template_frontend/img/dummies/works/big.png" data-pretty="prettyPhoto[gallery1]" title="Portfolio caption here"><i class="icon-plus icon-circled icon-bglight icon-2x"></i></a>
                      </span>
                      <span>
                        <a href="#"><i class="icon-gamepad icon-circled icon-bglight icon-2x"></i></a>
                      </span>
                    </div>
                  </figcaption>
                </figure>
              </div>
            </div>
            <div class="span3">
              <div class="item">
                <figure>
                  <div><img src="<?= base_url() ?>assets/template_frontend/img/dummies/works/2.jpg" alt="" /></div>
                  <figcaption>
                    <div>
                      <span>
                        <a href="<?= base_url() ?>assets/template_frontend/img/dummies/works/big.png" data-pretty="prettyPhoto[gallery1]" title="Portfolio caption here"><i class="icon-plus icon-circled icon-bglight icon-2x"></i></a>
                      </span>
                      <span>
                        <a href="#"><i class="icon-gamepad icon-circled icon-bglight icon-2x"></i></a>
                      </span>
                    </div>
                  </figcaption>
                </figure>
              </div>
            </div>
            <div class="span3">
              <div class="item">
                <figure>
                  <div><img src="<?= base_url() ?>assets/template_frontend/img/dummies/works/3.jpg" alt="" /></div>
                  <figcaption>
                    <div>
                      <span>
                        <a href="<?= base_url() ?>assets/template_frontend/img/dummies/works/big.png" data-pretty="prettyPhoto[gallery1]" title="Portfolio caption here"><i class="icon-plus icon-circled icon-bglight icon-2x"></i></a>
                      </span>
                      <span>
                        <a href="#"><i class="icon-gamepad icon-circled icon-bglight icon-2x"></i></a>
                      </span>
                    </div>
                  </figcaption>
                </figure>
              </div>
            </div>
            <div class="span3">
              <div class="item">
                <figure>
                  <div><img src="<?= base_url() ?>assets/template_frontend/img/dummies/works/4.jpg" alt="" /></div>
                  <figcaption>
                    <div>
                      <span>
                        <a href="<?= base_url() ?>assets/template_frontend/img/dummies/works/big.png" data-pretty="prettyPhoto[gallery1]" title="Portfolio caption here"><i class="icon-plus icon-circled icon-bglight icon-2x"></i></a>
                      </span>
                      <span>
                        <a href="#"><i class="icon-gamepad icon-circled icon-bglight icon-2x"></i></a>
                      </span>
                    </div>
                  </figcaption>
                </figure>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</section> -->