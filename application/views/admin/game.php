<a href="#myModal" role="button" class="btn btn-rounded btn-primary" data-toggle="modal"><i class="icon icon-plus-sign-alt"></i> Tambah Game</a>
<hr>
<div class="table-container">
    <table class="table table-striped table-bordered" id="tabel-data">
        <thead>
            <th>#</th>
            <th>Nama Game</th>
            <th>Gambar Game</th>
            <th>Keterangan</th>
            <th>Aksi</th>
        </thead>
        <tbody>
            <?php $no = 1;
            foreach ($game as $key => $value) { ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $value['nm_game'] ?></td>
                    <td> <img src="<?= base_url('assets/gambar_game/' . $value['gambar']) ?>" style="width: 10%;" alt=""></td>
                    <td><?= $value['keterangan'] ?></td>
                    <td>
                        <a href="#hapus<?= $value['id_game'] ?>" role="button" class="btn btn-sm btn-danger" data-toggle="modal"><i class="icon icon-trash"></i></a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<div class="span6">
    <?php foreach ($game as $gm) { ?>
        <div id="hapus<?= $gm['id_game'] ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 id="myModalLabel">Apakah anda yakin? </h3>
            </div>
            <form action="<?= base_url('admin/game/hapus') ?>" method="post">
                <div class="modal-body">
                    <p>Apakah anda yakin menghapus <b><?= $gm['nm_game'] ?></b>?</p>
                    <input type="hidden" name="id_game" value="<?= $gm['id_game'] ?>">
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
        <h3 id="myModalLabel">Tambah Game</h3>
    </div>
    <form action="<?= base_url('admin/game/tambah') ?>" method="post" enctype="multipart/form-data">
        <div class="modal-body">
            <div class="row controls">
                <div class="span5 control-group">
                    <label>Nama Game</label>
                    <input type="text" value="" name="nm_game" maxlength="100" class="span5">
                </div>
                <div class="span5 control-group">
                    <label>Keterangan</label>
                    <input type="text" value="" name="keterangan" maxlength="100" class="span5">
                </div>
                <div class="span5 control-group">
                    <div class="custom-file">
                        <label class="custom-file-label" for="gambar">Pilih File Gambar</label>
                        <input type="file" class="custom-file-input" id="gambar" name="gambar">
                    </div>
                </div>
                <!-- <div class="span5">
                                <img src="<?= base_url('assets/barang/') ?>" class="img-thumbnail">
                            </div> -->

            </div>

        </div>
        <div class="modal-footer">
            <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
            <button class="btn btn-primary">Simpan</button>
        </div>
    </form>
</div>