<section id="content" style="background: url('<?= base_url() ?>assets/bg/bg6.png'); background-repeat:no-repeat; background-position: center; background-size:1500px 1500px">
    <div class="container">
        <?php foreach ($order as $key => $value) { ?>
            <div class="row">
                <div class="col-md-3">
                    <img src="<?= base_url('assets/gambar_game/') . $value['gambar'] ?>" class="span3" />
                </div>
                <div class="col-md-6">
                    <div class="about-author span5">
                        <h5><strong><a href="#">Tanggal Order : <?= date('d-m-Y', strtotime($value['tgl_pembelian'])) ?></a></strong></h5>
                        <h5><strong><a href="#">Jumlah : <?= $value['jumlah'] ?></a></strong></h5>
                        <h5><strong><a href="#">Harga : Rp. <?= number_format($value['harga'], 0, ',', '.') ?></a></strong></h5>
                        <h5><strong><a href="#">Metode Pembayaran : <?= $value['metode_bayar'] ?></a></strong></h5>
                        <p>
                    </div>
                </div>
                <center>
                    <div class="col-md-3">
                        <a href="<?= base_url('diamond/bayar/') . $value['id_faktur'] ?>" class="btn btn-sm btn-primary"><i class="icon icon-ok-circle"></i> Pembayaran</a>
                        <a href="#hapus<?= $value['id_faktur'] ?>" role="button" class="btn btn-sm btn-danger" data-toggle="modal"><i class="icon icon-trash"></i> Hapus</a>
                    </div>
                </center>
            </div>
            
        <?php } ?>
    </div>
</section><br>

<div class="span6">
    <?php foreach ($order as $gm) { ?>
        <div id="hapus<?= $gm['id_faktur'] ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 id="myModalLabel">Hapus Pesanan</h3>
            </div>
            <form action="<?= base_url('diamond/hapus_order') ?>" method="post">
                <div class="modal-body">
                    <p>Apakah anda yakin menghapus Pesanan ini?</p>
                    <input type="hidden" name="id_faktur" value="<?= $gm['id_faktur'] ?>">
                </div>
                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    <button type="submit" class="btn btn-primary">Yakin</button>
            </form>
        </div>
</div>
<?php } ?>
</div>