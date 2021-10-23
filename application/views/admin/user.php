<div class="table-container">

    <table class="table table-striped" width="100%" id="tabel-data">
        <thead>
            <tr>
                <th>
                    #
                </th>
                <th>
                    Nama
                </th>
                <th>
                    Email
                </th>
                <th>
                    No Hp
                </th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1;
            foreach ($customer as $cs) { ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $cs['nama'] ?></td>
                    <td><?= $cs['email'] ?></td>
                    <td><?= $cs['no_hp'] ?></td>
                    <th>
                        <a href="#myModal<?= $cs['id_user'] ?>" role="button" class="btn btn-sm btn-danger" data-toggle="modal"><i class="icon icon-trash"></i></a>
                    </th>

                </tr>


            <?php } ?>
        </tbody>
    </table>
</div>
<!-- divider -->

<div class="span6">
    <?php foreach ($customer as $cs) { ?>
        <div id="myModal<?= $cs['id_user'] ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 id="myModalLabel">Apakah anda yakin? </h3>
            </div>
            <form action="<?= base_url('admin/user/hapus') ?>" method="post">
                <div class="modal-body">
                    <p>Apakah anda yakin menghapus <b><?= $cs['nama'] ?></b></p>
                    <input type="hidden" name="id_user" value="<?= $cs['id_user'] ?>">
                </div>
                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    <button type="submit" class="btn btn-primary">Yakin</button>
            </form>
        </div>
</div>
<?php } ?>
</div>