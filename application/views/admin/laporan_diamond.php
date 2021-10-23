<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #table {
            font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #table td,
        #table th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #table tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #table tr:hover {
            background-color: #ddd;
        }

        #table th {
            padding-top: 10px;
            padding-bottom: 10px;
            text-align: left;
            background-color: #4CAF50;
            color: white;
        }
    </style>
</head>

<body>
    <h3 align="center">Laporan Penjualan Diamond</h3>
    <table id="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Tanggal Pesanan</th>
                <th>Metode Bayar</th>
                <th>Game</th>
                <th>Id Akun</th>
                <th>Jumlah Diamond</th>
                <th>Harga Diamond</th>
                <th>Status Bayar</th>
                <th>Pengiriman Diamond</th>

            </tr>
        </thead>
        <tbody>
            <?php $no = 1;
            foreach ($pesanan as $key => $value) { ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $value['tgl_pembelian'] ?></td>
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
                        } ?>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

</body>

</html>