<?php
include '../koneksi.php';
$sql = "SELECT * FROM anggota ORDER BY nama";
$res = mysqli_query($koneksi, $sql);
while ($data = mysqli_fetch_assoc($res)) {
    $pinjam[] = $data;
}
?>
<?php
include '../aset/header1.php';
?>
<div class="container">
    <div class="row mt-4">
        <div class="col-md"></div>
    </div>

<div class="card">
<div class="card-header">
        <h2 class="card-title"><i class="fas fa-user"></i> Data Anggota</h2>
    </div>
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="row">#</th>
                    <th scope="row">Nama</th>
                    <th scope="row">Kelas</th>
                    <th scope="row">Aksi</th>
                </tr>
            </thead>
        <?php
        $no = 1;
        foreach ($pinjam as $p) { ?>
        <tr>
            <th scope="row"><?= $no?></th>
            <td><?= $p['nama'] ?></th>
            <td><?= $p['kelas'] ?></th>
            <td>
            <a href="tambah.php" class="badge badge-primary">Tambah Data</a>
                <a href="#" class="badge badge-success">Detail</a>
                <a href="#" class="badge badge-warning">Edit</a>
                <a href="#" class="badge badge-danger">Hapus</a>
                            </td>
        </tr>
        <?php
            $no++;
        }
        ?>
        
        </table>
    </div>
</div>
</div>
<?php
include '../aset/footer1.php';
?>