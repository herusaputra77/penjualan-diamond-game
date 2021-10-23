<?= form_error('id_game', '<div class="alert alert-danger" role="alert">', '
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>') ?>

<?= form_error('jumlah', '<div class="alert alert-danger" role="alert">', '
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>') ?>

<?= form_error('harga', '<div class="alert alert-danger" role="alert">', '
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>') ?>
<br>
<a href="#myModal" role="button" class="btn btn-rounded btn-primary" data-toggle="modal"><i class="icon icon-plus-sign-alt"></i> Tambah Metode Bayar</a>
<hr>
<div class="table-container">
    <table class="table table-striped table-bordered" id="tabel-data">
        <thead>
            <th>#</th>
            <th>Metode Bayar</th>
            <th>Keterangan</th>
            <th>Gambar</th>
            <th>Aksi</th>
        </thead>
        <tbody>
            <?php $no = 1;
            foreach ($metode as $key => $value) { ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $value['metode_bayar'] ?></td>
                    <td><?= $value['keterangan'] ?></td>
                    <td><img src="<?= base_url('assets/metode_bayar/') . $value['gambar_metode'] ?> " style="width: 20%;" alt=""></td>
                    <td>
                        <a href="#hapus<?= $value['id_metode_bayar'] ?>" role="button" class="btn btn-sm btn-danger" data-toggle="modal"><i class="icon icon-trash"></i></a>
                        <a href="#edit<?= $value['id_metode_bayar'] ?>" role="button" class="btn btn-sm btn-success" data-toggle="modal"><i class="icon icon-edit"></i></a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
<?php $no = 1;
foreach ($metode as $key => $value) { ?>
    <div class="span6">
        <div id="hapus<?= $value['id_metode_bayar'] ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 id="myModalLabel">Hapus</h3>
            </div>
            <form action="<?= base_url('admin/metode_bayar/hapus') ?>" method="post">
                <div class="modal-body">
                    <p>Apakah anda yakin menghapus Metode Pembayaran <b><?= $value['metode_bayar'] ?></b>?</p>
                    <input type="hidden" name="id_metode_bayar" value="<?= $value['id_metode_bayar'] ?>">
                </div>
                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    <button type="submit" class="btn btn-primary">Yakin</button>
            </form>
        </div>
    </div>
    </div>
<?php } ?>

<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Tambah Metode Bayar</h3>
    </div>
    <form action="<?= base_url('admin/metode_bayar/tambah') ?>" method="post" enctype="multipart/form-data">
        <div class="modal-body">
            <div class="row controls">
                <div class="span5 control-group">
                    <label>Metode Bayar</label>
                    <input type="text" value="" name="metode_bayar" maxlength="100" class="span5">
                </div>
                <div class="span5 control-group">
                    <label>Keterangan</label>
                    <input type="text" value="" name="keterangan" maxlength="100" class="span5">
                </div>
                <div class="span5 control-group">
                    <label>Gambar</label>
                    <input type="file" value="" name="gambar_metode" maxlength="100" class="span5">
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
            <button class="btn btn-primary">Simpan</button>
        </div>
    </form>
</div>


<?php $no = 0;
foreach ($metode as $dm) {
    $no++; ?>
    <div id="edit<?= $dm['id_metode_bayar'] ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h3 id="myModalLabel">Edit Metode Bayar</h3>
        </div>
        <form action="<?= base_url('admin/metode_bayar/edit') ?>" method="post">
            <div class="modal-body">
                <div class="row controls">
                    <div class="span5 control-group">
                        <label>Metode Bayar</label>
                        <input type="hidden" value="<?= $dm['id_metode_bayar'] ?>" name="id_metode_bayar" maxlength="100" class="span5">
                        <input type="text" value="<?= $dm['metode_bayar'] ?>" name="metode_bayar" maxlength="100" class="span5">
                    </div>
                    <div class="span5 control-group">
                        <label>Keterangan</label>
                        <input type="text" value="<?= $dm['keterangan'] ?>" name="keterangan" maxlength="100" class="span5">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                <button class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
<?php } ?>