<?= form_error('nm_game', '<div class="alert alert-danger" role="alert">', '
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
<?= form_error('upselling', '<div class="alert alert-danger" role="alert">', '
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>') ?>
<br>
<a href="#myModal" role="button" class="btn btn-rounded btn-primary" data-toggle="modal"><i class="icon icon-plus-sign-alt"></i> Tambah Diamond</a>
<hr>
<div class="table-container">
    <table class="table table-striped table-bordered" id="tabel-data">
        <thead>
            <th>#</th>
            <th>Nama Game</th>
            <th>Jumlah</th>
            <th>Harga</th>
            <th>Harga Upselling</th>
            <th>Upselling</th>
            <th>Aksi</th>
        </thead>
        <tbody>
            <?php $no = 1;
            foreach ($diamond as $key => $value) { ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $value['nm_game'] ?></td>
                    <td><?= $value['jumlah'] ?></td>
                    <td>Rp. <?= number_format($value['harga'], 0, ',', '.') ?></td>
                    <td>Rp. <?= number_format($value['harga_upselling'], 0, ',', '.') ?></td>
                    <td><?= $value['up_selling'] ?></td>
                    <td>
                        <a href="#hapus<?= $value['id_diamond'] ?>" role="button" class="btn btn-sm btn-danger" data-toggle="modal"><i class="icon icon-trash"></i></a>
                        <a href="#edit<?= $value['id_diamond'] ?>" role="button" class="btn btn-sm btn-success" data-toggle="modal"><i class="icon icon-edit"></i></a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<div class="span6">
    <?php foreach ($diamond as $gm) { ?>
        <div id="hapus<?= $gm['id_diamond'] ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 id="myModalLabel">Apakah anda yakin? </h3>
            </div>
            <form action="<?= base_url('admin/diamond/hapus') ?>" method="post">
                <div class="modal-body">
                    <p>Apakah anda yakin menghapus diamond dari <b><?= $gm['nm_game'] ?></b>?</p>
                    <input type="hidden" name="id_diamond" value="<?= $gm['id_diamond'] ?>">
                </div>
                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    <button type="submit" class="btn btn-primary">Yakin</button>
            </form>
        </div>
</div>
<?php } ?>
</div>


<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Tambah Diamond</h3>
    </div>
    <form action="<?= base_url('admin/diamond/tambah') ?>" method="post">
        <div class="modal-body">
            <div class="row controls">
                <div class="span5 control-group">
                    <label>Nama Game</label>
                    <select name="nm_game" id="" class="span5">
                        <option value="">
                            <-Pilih Game->
                        </option>
                        <?php foreach ($game as $gm) { ?>
                            <option value="<?= $gm['id_game'] ?>"><?= $gm['nm_game'] ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="span5 control-group">
                    <label>Jumlah Diamond</label>
                    <input type="text" value="" name="jumlah" maxlength="100" class="span5">
                </div>
                <div class="span5 control-group">
                    <label>Harga Diamond</label>
                    <input type="text" value="" id="rupiah" name="harga" maxlength="100" class="span5">
                </div>
                <div class="span5 control-group">
                    <label>Harga upselling</label>
                    <input type="text" value="" id="rupiah2" name="harga_upselling" maxlength="100" class="span5">
                </div>
                <div class="span5 control-group">
                    <label>Upselling</label>
                    <input type="text" value="" name="upselling" maxlength="100" class="span5">
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
foreach ($diamond as $dm) {
    $no++; ?>
    <div id="edit<?= $dm['id_diamond'] ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h3 id="myModalLabel">Edit Diamond</h3>
        </div>
        <form action="<?= base_url('admin/diamond/edit') ?>" method="post">
            <div class="modal-body">
                <div class="row controls">
                    <div class="span5 control-group">
                        <label>Nama Game</label>
                        <input type="text" value="<?= $dm['nm_game'] ?>" name="nm_game" maxlength="100" class="span5" readonly>
                        <input type="hidden" value="<?= $dm['id_game'] ?>" name="id_game" maxlength="100" class="span5">
                    </div>
                    <div class="span5 control-group">
                        <label>Jumlah Diamond</label>
                        <input type="hidden" name="id_diamond" value="<?= $dm['id_diamond'] ?>">
                        <input type="text" value="<?= $dm['jumlah'] ?>" name="jumlah" maxlength="100" class="span5">
                    </div>
                    <div class="span5 control-group">
                        <label>Harga Diamond</label>
                        <input type="text" value="<?= $dm['harga'] ?>" id="rupiah" name="harga" maxlength="100" class="span5">
                    </div>
                    <div class="span5 control-group">
                        <label>Harga Upselling</label>
                        <input type="text" value="<?= $dm['harga_upselling'] ?>" id="rupiah2" name="harga_upselling" maxlength="100" class="span5">
                    </div>
                    <div class="span5 control-group">
                        <label>Upseling</label>
                        <input type="text" value="<?= $dm['up_selling'] ?>" name="upselling" maxlength="100" class="span5">
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