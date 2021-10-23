<section id="content">
    <div class="container">
        <?= $judul ?>
        <div class="row">
            <div class="about-author span5">
                <table class="table table-hover">
                    <tr>
                        <td><strong> Tanggal Order</strong></td>
                        <td>:</td>
                        <td><?= date('d / m / Y', strtotime($order['tgl_pembelian']))  ?></td>
                    </tr>
                    <tr>
                        <td><strong>Metode Bayar</strong></td>
                        <td>:</td>
                        <td><?= $order['metode_bayar'] ?></td>
                    </tr>
                    <tr>
                        <td><strong>ID Akun</strong></td>
                        <td>:</td>
                        <td><?= $order['id_akun'] ?></td>
                    </tr>
                    <tr>
                        <td><strong>Nama Game</strong></td>
                        <td>:</td>
                        <td><?= $order['nm_game'] ?></td>
                    </tr>
                    <tr>
                        <td><strong>Harga</strong></td>
                        <td>:</td>
                        <td>Rp. <?= number_format($order['harga'], 0, ',', '.')  ?></td>
                    </tr>
                    <tr>
                        <td><strong>Jumlah</strong></td>
                        <td>:</td>
                        <td><?= $order['jumlah'] ?></td>
                    </tr>
                    <tr>
                        <td><strong>Status Pembayaran</strong></td>
                        <td>:</td>
                        <td><?php if ($order['status_bayar'] == 0) {
                                echo "Belum Bayar";
                            } else {
                                echo "Lunas";
                            }  ?>
                        </td>

                    </tr>
                    <tr>
                        <td><strong>Pengriman Diamond</strong></td>
                        <td>:</td>
                        <td><?php if ($order['status_diamond'] == 0) {
                                echo "Belum Dikirim";
                            } else {
                                echo "Telah Dikirim";
                            }  ?>
                        </td>

                    </tr>
                </table>
            </div>
            <div class="span4">
                <label for="barcode"><?= $order['keterangan'] ?></label>
                <img src="<?= base_url('assets/metode_bayar/' . $order['gambar_metode']) ?>" style="width: 50%;" alt="">
            </div>
        </div>
        <hr>
        Upload Bukti Pembayaran
        <div class="row">
            <div class="span">
                <form action="<?= base_url('diamond/bukti_pembayaran') ?>" method="post" enctype="multipart/form-data">
                    <div class="">
                        <input type="file" name="bukti_pembayaran">
                        <input type="hidden" name="id_faktur" value="<?= $order['id_faktur'] ?>">
                        <input type="hidden" name="redirect" value="<?= str_replace('index.php/', '', current_url()); ?>">
                    </div>
                    <button type="submit" class="btn btn-sm btn-primary">Upload</button>
                </form>
            </div>
        </div>
    </div>
</section>