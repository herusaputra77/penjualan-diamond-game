<div class="row">

  <div class="span12">
    <!-- <h4 class="title">What we do</h4>

    Ei mel semper vocent persequeris, nominavi patrioque vituperata id vim, cu eam gloriatur philosophia deterruisset. Meliore perfecto repudiare ea nam, ne mea duis temporibus. Id quo accusam consequuntur, eum ea debitis urbanitas. Nibh reformidans vim ne.
    </p> -->


  </div>

</div>


<div class="row">

  <?php echo $this->session->flashdata('pesan') ?>
  <a href="<?= base_url('admin/user') ?>">
    <div class="span3">
      <div class="service-box aligncenter flyLeft">
        <div class="icon">
          <i class="icon-circled icon-bgprimary icon-user icon-4x"></i>
        </div>
        <h5> <span class="colored">USER</span></h5>
      </div>
    </div>
  </a>
  <a href="<?= base_url('admin/game') ?>">
    <div class="span3">
      <div class="service-box aligncenter flyIn">
        <div class="icon">
          <i class="icon-circled icon-bgsuccess icon-gamepad icon-4x"></i>
        </div>
        <h5> <span class="colored">GAMES</span></h5>
      </div>
    </div>
  </a>
  <a href="<?= base_url('admin/diamond') ?>">
    <div class="span3">
      <div class="service-box aligncenter flyIn">
        <div class="icon">
          <i class="icon-circled icon-bgdanger icon-mobile-phone icon-4x"></i>
        </div>
        <h5>Diamond <span class="colored">Games</span></h5>
      </div>
    </div>
  </a>
  <a href="<?= base_url('admin/pesanan') ?>">

    <div class="span3">
      <div class="service-box aligncenter flyRight">
        <div class="icon">
          <i class="icon-circled icon-bgwarning icon-envelope-alt icon-4x"></i>

          <?php if ($notif['notif'] == 0) {
          } else { ?>
            <button class="btn btn-sm btn-danger" style="font-size:12px; color:yellow;"><?= $notif['notif'] ?></button>
          <?php } ?>
        </div>
        <h5>Diamond <span class="colored">Marketing</span></h5>
      </div>
    </div>
  </a>
</div>

<div class="row">
  <div class="span12">
    <div class="cta-box">
      <div class="row">
        <div class="span8">
          <div class="cta-text">
            <h2>Tambah Metode Pembayaran</h2>
          </div>
        </div>
        <div class="span4">
          <div class="cta-btn">
            <a href="<?= base_url('admin/metode_bayar') ?>" class="btn btn-theme">Klik Disini<i class="icon-angle-right"></i></a>
          </div>
        </div>

      </div>


    </div>
  </div>
</div>