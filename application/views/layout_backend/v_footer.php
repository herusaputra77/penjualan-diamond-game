</div>
</section>
<footer>
  <!-- <div class="container">
    <div class="row">
      <div class="span4">
        <div class="widget">
          <h5 class="widgetheading">Browse pages</h5>
          <ul class="link-list">
            <li><a href="#">Our company</a></li>
            <li><a href="#">Terms and conditions</a></li>
            <li><a href="#">Privacy policy</a></li>
            <li><a href="#">Press release</a></li>
            <li><a href="#">What we have done</a></li>
            <li><a href="#">Our support forum</a></li>
          </ul>

        </div>
      </div>
      <div class="span4">
        <div class="widget">
          <h5 class="widgetheading">Get in touch</h5>
          <address>
            <strong>Eterna company Inc.</strong><br>
            Somestreet 200 VW, Suite Village A.001<br>
            Jakarta 13426 Indonesia
          </address>
          <p>
            <i class="icon-phone"></i> (123) 456-7890 - (123) 555-7891 <br>
            <i class="icon-envelope-alt"></i> email@domainname.com
          </p>
        </div>
      </div>
      <div class="span4">
        <div class="widget">
          <h5 class="widgetheading">Subscribe newsletter</h5>
          <p>
            Keep updated for new releases and freebies. Enter your e-mail and subscribe to our newsletter.
          </p>
          <form class="subscribe">
            <div class="input-append">
              <input class="span2" id="appendedInputButton" type="text">
              <button class="btn btn-theme" type="submit">Subscribe</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div> -->
  <div id="sub-footer" style="background: url('<?= base_url() ?>assets/bg/bg6.png'); background-repeat:no-repeat; background-position: center; background-size:1500px 1500px">
    <div class="container">
      <div class="row">
        <div class="span6">
          <div class="copyright">

          </div>

        </div>

        <div class="span6">
          <div class="credits">
            <!--
                  All the links in the footer should remain intact.
                  You can delete the links only if you purchased the pro version.
                  Licensing information: https://bootstrapmade.com/license/
                  Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Eterna
                -->
            <p style="font-family: 'Times New Roman', Times, serif; font-size: 15px"><i class="icon-home "></i> Alamat : Jl. Rimbo Tarok No. 02 Kec. Kuranji Kota Padang</p>
            <p style="font-family: 'Times New Roman', Times, serif; font-size: 15px"><i class="icon-phone"></i> No Hp : +62-822-111-14449</p>
            <p style="font-family: 'Times New Roman', Times, serif; font-size: 15px"><i class="icon-envelope-alt"></i> dwiputra207@gmail.com</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
</div>
<a href="#" class="scrollup"><i class="icon-angle-up icon-square icon-bglight icon-2x active"></i></a>

<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="<?= base_url() ?>assets/template_frontend/js/jquery.js"></script>
<script src="<?= base_url() ?>assets/template_frontend/js/jquery.easing.1.3.js"></script>
<script src="<?= base_url() ?>assets/template_frontend/js/bootstrap.js"></script>

<script src="<?= base_url() ?>assets/template_frontend/js/modernizr.custom.js"></script>
<script src="<?= base_url() ?>assets/template_frontend/js/toucheffects.js"></script>
<script src="<?= base_url() ?>assets/template_frontend/js/google-code-prettify/prettify.js"></script>
<script src="<?= base_url() ?>assets/template_frontend/js/jquery.bxslider.min.js"></script>
<script src="<?= base_url() ?>assets/template_frontend/js/camera/camera.js"></script>
<script src="<?= base_url() ?>assets/template_frontend/js/camera/setting.js"></script>

<script src="<?= base_url() ?>assets/template_frontend/js/jquery.prettyPhoto.js"></script>
<script src="<?= base_url() ?>assets/template_frontend/js/portfolio/jquery.quicksand.js"></script>
<script src="<?= base_url() ?>assets/template_frontend/js/portfolio/setting.js"></script>

<script src="<?= base_url() ?>assets/template_frontend/js/jquery.flexslider.js"></script>
<script src="<?= base_url() ?>assets/template_frontend/js/animate.js"></script>
<script src="<?= base_url() ?>assets/template_frontend/js/inview.js"></script>

<!-- Template Custom JavaScript File -->
<script src="<?= base_url() ?>assets/template_frontend/js/custom.js"></script>
<script></script>

<!-- <script src="<?= base_url() ?>assets/datatable/js/jquery.dataTables.js"></script> -->
<script src="<?= base_url() ?>assets/datatable/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>
<script type="text/javascript">
  var rupiah = document.getElementById('rupiah');
  rupiah.addEventListener('keyup', function(e) {
    rupiah.value = formatRupiah(this.value, 'Rp. ')
  });

  function formatRupiah(angka, prefix) {
    var number_string = angka.replace(/[^,\d]/g, '').toString(),
      split = number_string.split(","),
      sisa = split[0].length % 3,
      rupiah = split[0].substr(0, sisa),
      ribuan = split[0].substr(sisa).match(/\d{3}/gi);
    if (ribuan) {
      separator = sisa ? "." : "";
      rupiah += separator + ribuan.join(".");

    }
    rupiah = split[1] != undefined ? rupiah + "," + split[1] : rupiah;
    return prefix == undefined ? rupiah : rupiah ? "Rp. " + rupiah : "";
  }
</script>
<script type="text/javascript">
  var rupiah2 = document.getElementById('rupiah2');
  rupiah2.addEventListener('keyup', function(e) {
    rupiah2.value = formatRupiah(this.value, 'Rp. ')
  });

  function formatRupiah(angka, prefix) {
    var number_string = angka.replace(/[^,\d]/g, '').toString(),
      split = number_string.split(","),
      sisa = split[0].length % 3,
      rupiah2 = split[0].substr(0, sisa),
      ribuan = split[0].substr(sisa).match(/\d{3}/gi);
    if (ribuan) {
      separator = sisa ? "." : "";
      rupiah2 += separator + ribuan.join(".");

    }
    rupiah2 = split[1] != undefined ? rupiah2 + "," + split[1] : rupiah2;
    return prefix == undefined ? rupiah2 : rupiah2 ? "Rp. " + rupiah2 : "";
  }
</script>


<script>
  $(document).ready(function() {
    $('#tabel-data').DataTable();
  });
</script>
<script src="<?php echo base_url('assets/jquery-ui/jquery-ui.min.js'); ?>"></script> <!-- Load file plugin js jquery-ui -->
<script>
  $(document).ready(function() { // Ketika halaman selesai di load
    $('.input-tanggal').datepicker({
      dateFormat: 'yy-mm-dd' // Set format tanggalnya jadi yyyy-mm-dd
    });

    $('#form-tanggal, #form-bulan, #form-tahun').hide(); // Sebagai default kita sembunyikan form filter tanggal, bulan & tahunnya

    $('#filter').change(function() { // Ketika user memilih filter
      if ($(this).val() == '1') { // Jika filter nya 1 (per tanggal)
        $('#form-bulan, #form-tahun').hide(); // Sembunyikan form bulan dan tahun
        $('#form-tanggal').show(); // Tampilkan form tanggal
      } else if ($(this).val() == '2') { // Jika filter nya 2 (per bulan)
        $('#form-tanggal').hide(); // Sembunyikan form tanggal
        $('#form-bulan, #form-tahun').show(); // Tampilkan form bulan dan tahun
      } else { // Jika filternya 3 (per tahun)
        $('#form-tanggal, #form-bulan').hide(); // Sembunyikan form tanggal dan bulan
        $('#form-tahun').show(); // Tampilkan form tahun
      }

      $('#form-tanggal input, #form-bulan select, #form-tahun select').val(''); // Clear data pada textbox tanggal, combobox bulan & tahun
    })
  })
</script>

</body>

</html>