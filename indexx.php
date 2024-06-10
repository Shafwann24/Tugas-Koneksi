<!DOCTYPE html>
<html>
<head>
    <title>Menampilkan Data Tabel MySQL</title>
    <style>
        body {font-family: tahoma, arial}
        table {border-collapse: collapse}
        th, td {font-size: 13px; border: 1px solid #DEDEDE; padding: 3px 5px; color: #303030}
        th {background: #CCCCCC; font-size: 12px; border-color: #B0B0B0}
    </style>
</head>
<body>
    <center><h1>Laundry Bersih Selalu.</h1></center>
    <h3>Tabel Detail_Transaksi</h3>
    <table>
        <thead>
            <tr>
                <th>ID Transaksi</th>
                <th>ID Layanan</th>
                <th>Jumlah</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include 'koneksi.php';		
            $sql = 'SELECT * FROM Detail_Transaksi';
            $query = mysqli_query($koneksi, $sql);		
            while ($row = mysqli_fetch_array($query)) {
                ?>
                <tr>
                    <td><?php echo $row['id_transaksi']; ?></td>
                    <td><?php echo $row['id_layanan']; ?></td>
                    <td><?php echo $row['jumlah']; ?></td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
    
    <h3>Tabel Layanan</h3>
    <table>
        <thead>
            <tr>
                <th>ID Layanan</th>
                <th>Nama Layanan</th>
                <th>Harga</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = 'SELECT * FROM layanan';
            $query = mysqli_query($koneksi, $sql);		
            while ($row = mysqli_fetch_array($query)) {
                ?>
                <tr>
                    <td><?php echo $row['id_layanan']; ?></td>
                    <td><?php echo $row['nama_layanan']; ?></td>
                    <td><?php echo $row['harga']; ?></td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
    
    <h3>Tabel Pegawai</h3>
    <table>
        <thead>
            <tr>
                <th>ID Pegawai</th>
                <th>Nama</th>
                <th>Jabatan</th>
                <th>Nomor Telepon</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = 'SELECT * FROM pegawai';
            $query = mysqli_query($koneksi, $sql);		
            while ($row = mysqli_fetch_array($query)) {
                ?>
                <tr>
                    <td><?php echo $row['id_pegawai']; ?></td>
                    <td><?php echo $row['nama']; ?></td>
                    <td><?php echo $row['jabatan']; ?></td>
                    <td><?php echo $row['nomor_telepon']; ?></td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
    
    <h3>Tabel Pelanggan</h3>
    <table>
        <thead>
            <tr>
                <th>ID Pelanggan</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Tanggal Lahir</th>
                <th>Nomor Telepon</th>
                <th>Nama Paket</th>
                <th>Durasi Paket</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = 'SELECT * FROM Pelanggan';
            $query = mysqli_query($koneksi, $sql);		
            while ($row = mysqli_fetch_array($query)) {
                ?>
                <tr>
                    <td><?php echo $row['id_pelanggan']; ?></td>
                    <td><?php echo $row['nama']; ?></td>
                    <td><?php echo $row['alamat']; ?></td>
                    <td><?php echo $row['tanggal_lahir']; ?></td>
                    <td><?php echo $row['nomor_telepon']; ?></td>
                    <td><?php echo $row['nama_paket']; ?></td>
                    <td><?php echo $row['durasi_paket']; ?></td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
    
    <h3>Tabel Transaksi</h3>
    <table>
        <thead>
            <tr>
                <th>ID Transaksi</th>
                <th>ID Pelanggan</th>
                <th>ID Pegawai</th>
                <th>Tanggal Transaksi</th>
                <th>Total Biaya</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = 'SELECT * FROM transaksi';
            $query = mysqli_query($koneksi, $sql);		
            while ($row = mysqli_fetch_array($query)) {
                ?>
                <tr>
                    <td><?php echo $row['id_transaksi']; ?></td>
                    <td><?php echo $row['id_pelanggan']; ?></td>
                    <td><?php echo $row['id_pegawai']; ?></td>
                    <td><?php echo $row['tanggal_transaksi']; ?></td>
                    <td><?php echo $row['total_biaya']; ?></td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
</body>
</html>
