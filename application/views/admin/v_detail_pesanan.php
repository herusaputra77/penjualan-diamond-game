<div class="container">
    <div class="row">
        <div class="span">
            <div class="table-container">

                <table border="0" cellpadding="7px" width="500px">
                    <thead>

                    </thead>
                    <tbody>


                        <tr>
                            <td width="200px" style="font-weight: bold;">Tanggal Order</td>
                            <td>:</td>
                            <td><?= date("d/m/Y", strtotime($pesanan['tgl_pembelian'])); ?> </td>
                        </tr>
                        <tr>
                            <td width="200px" style="font-weight: bold;">Metode Bayar</td>
                            <td>:</td>
                            <td><?= $pesanan['metode_bayar'] ?> </td>
                        </tr>
                        <tr>
                            <td width="200px" style="font-weight: bold;">Game</td>
                            <td>:</td>
                            <td><?= $pesanan['nm_game'] ?></td>
                        </tr>
                        <tr>
                            <td width="200px" style="font-weight: bold;">Status Pembayaran</td>
                            <td>:</td>
                            <td><?php if ($pesanan['status_bayar'] == 1) {
                                    echo 'Lunas';
                                } else {
                                    echo 'Belum Bayar';
                                } ?> </td>
                        </tr>
                        <tr>
                            <td width="200px" style="font-weight: bold;">Jumlah Diamond</td>
                            <td>:</td>
                            <td><?= $pesanan['jumlah'] ?> </td>
                        </tr>
                        <tr>
                            <td width="200px" style="font-weight: bold;">ID Akun</td>
                            <td>:</td>
                            <td><?= $pesanan['id_akun'] ?> </td>
                        </tr>
                        <tr>
                            <td width="200px" style="font-weight: bold;">Harga</td>
                            <td>:</td>
                            <td>Rp. <?= number_format($pesanan['harga'], 0, ',', '.') ?> </td>
                        </tr>
                        <tr>
                            <td width="200px" style="font-weight: bold;">Status Diamond</td>
                            <td>:</td>
                            <td><?php if ($pesanan['status_diamond'] == 1) {
                                    echo 'Telah Dikirim';
                                } else {
                                    echo 'Belum Dikirim';
                                } ?> </td>
                        </tr>
                    </tbody>

                </table><br>
            </div>
        </div>

        <div class="span4">
            <?php if ($pesanan['status_bayar'] == 1) { ?>
                <?php if ($pesanan['status_diamond'] == 0) { ?>

                    <a href="#myModal" role="button" class="btn btn-sm btn-primary" data-toggle="modal">Konfirmasi Diamond</a>
                <?php } else {
                } ?>
            <?php } else { ?>
                <!-- <a href="#myModal1" role="button" class="btn btn-sm btn-primary" data-toggle="modal">Konfirmasi Diamond</a> -->
            <?php } ?>
            <p>Bukti Pembayaran Diamond</p>
            <img src="<?= base_url("assets/bukti_pembayaran/") . $pesanan['bukti_pembayaran'] ?>">
        </div>
    </div>
    <a href="<?= base_url('admin/pesanan') ?>" class="btn btn-sm btn-success"><i class="icon icon-arrow-left"></i> Kembali</a><br>
</div>
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Konfirmasi Pengiriman</h3>
    </div>
    <div class="modal-body">
        <p>Apakah anda yakin telah mengirim diamond ke ID Game <b><?= $pesanan['id_akun'] ?></b>?</p>
        <form action="<?= base_url('admin/pesanan/pengiriman') ?>" method="post">
            <input type="hidden" value="<?= $pesanan['id_akun'] ?>" name="id_akun">
            <input type="hidden" name="redirect_page" value="<?= str_replace('index.php/', '', current_url()); ?>">
    </div>
    <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">Batal</button>
        <button class="btn btn-primary" type="submit">Yakin</button>
        </form>
    </div>
</div>