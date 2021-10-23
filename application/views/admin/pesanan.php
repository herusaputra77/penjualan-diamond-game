<form method="post" action="<?= base_url('admin/pesanan/filter_tgl/') ?>">
    <div class="row">
        <div class="span4">
            <div class="form-group">
                <label>Filter Berdasarkan</label><br>
                <select name="filter" id="filter" class="form-control">
                    <option value="">Pilih</option>
                    <option value="1">Per Tanggal</option>
                    <option value="2">Per Bulan</option>
                    <option value="3">Per Tahun</option>
                </select>
            </div>
        </div>
        <div class="span4">
            <div id="form-tanggal" class="form-group">
                <label>Tanggal</label><br>
                <input type="text" name="tanggal" class="input-tanggal form-control" />
            </div>
            <div id="form-bulan" class="form-group">
                <label>Bulan</label><br>
                <select name="bulan" class="form-control">
                    <option value="">Pilih</option>
                    <option value="1">Januari</option>
                    <option value="2">Februari</option>
                    <option value="3">Maret</option>
                    <option value="4">April</option>
                    <option value="5">Mei</option>
                    <option value="6">Juni</option>
                    <option value="7">Juli</option>
                    <option value="8">Agustus</option>
                    <option value="9">September</option>
                    <option value="10">Oktober</option>
                    <option value="11">November</option>
                    <option value="12">Desember</option>
                </select>
            </div>
        </div>
        <div class="span4">
            <div id="form-tahun" class="form-group">
                <label>Tahun</label><br>
                <select name="tahun" id="tahun" class="form-control">
                    <option value="">Pilih</option>
                    <option value="2020">2020</option>
                    <option value="2021">2021</option>
                    <option value="2022">2022</option>
                </select>

            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-sm btn-primary">Tampilkan</button>
    <a href="<?php echo base_url('admin/pesanan/index'); ?>" class="btn btn-sm btn-secondary">Reset Filter</a>
</form><br>
<!-- <b><?= $ket ?></b> -->


<div>
    <a href="pesanan/pdf" class="btn btn-sm btn-primary"><i class="icon icon-print"></i></a>
</div>
<hr>
<div class="table-container">
    <table class="table table-striped table-bordered" id="tabel-data">
        <thead>
            <th>#</th>
            <th>Tanggal Pesanan</th>
            <th>Metode Bayar</th>
            <th>Game</th>
            <th>Id Akun</th>
            <th>Jumlah Diamond</th>
            <th>Harga Diamond</th>
            <th>Status Bayar</th>
            <th>Pengiriman Diamond</th>
            <th>Aksi</th>
        </thead>
        <tbody>
            <?php $no = 1;
            foreach ($pesanan2 as $key => $value) { ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= date('d/m/Y', strtotime($value['tgl_pembelian'])) ?></td>
                    <td><?= $value['metode_bayar'] ?></td>
                    <td><?= $value['nm_game'] ?></td>
                    <td><?= $value['id_akun'] ?></td>
                    <td><?= $value['jumlah'] ?></td>
                    <td><?= $value['harga'] ?></td>
                    <td><?php if ($value['status_bayar'] == 1) {
                            echo 'Lunas';
                        } else {
                            echo 'Belum Bayar';
                        } ?></td>
                    <td><?php if ($value['status_diamond'] == 1) {
                            echo 'Telah Dikirim';
                        } else {
                            echo 'Belum Dikirim';
                        } ?></td>
                    <td><a href="<?= base_url('admin/pesanan/detail/') . $value['id_faktur'] ?>" class="btn btn-sm btn-warning"><i class="icon icon-eye-open"></i></a></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>