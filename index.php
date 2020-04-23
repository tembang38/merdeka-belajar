<?php
include '../koneksi.php';

$sql = "SELECT * FROM buku1 ORDER BY judul";
$res = mysqli_query($koneksi, $sql);

$buku = array();

while ($data = mysqli_fetch_assoc($res)) {
    $pinjam[] = $data;
}
include '../aset/header1.php';

?>

<div class="container">
    
    <div class="row-mt-2">
        <div class="col-md">
            <div class="card mt-4">
                <div class="card-header">
                    <h2><i class="fas fa-book mr-2"></i>Data Buku</h2>
                </div>
                <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Judul</th>
                            <th scope="col">Pengarang</th>
                            <th scope="col">Stok</th>                        
                            <th scope="col">Aksi</th>                        
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($pinjam as $p ) { ?>
                        <tr>
                            <th scope="row"><?= $no ?></th>
                            <td><?= $p['judul'] ?></td>
                            <td><?= $p['pengarang'] ?></td>
                            <td><?= $p['stok'] ?></td>
                            <td>
                            <td>
        <a href="detail.php?id_pinjam=<?= $p['id_pinjam'] ?>&nama=<?= $p['nama'] ?>" class="badge badge-success">Detail</a>
        <a href="form-edit.php?id_pinjam=<?= $p['id_pinjam']?>" class="badge badge-warning">Edit</a>
        <a href="hapus.php?id_pinjam=<?= $p['id_pinjam'] ?>" class="badge badge-danger">Hapus</a> 
                                <a href="tambah.php" class="badge badge-primary">Tambah</a>
                            </td>
                        </tr>    
                        <?php 
                        $no++;
                        }
                        ?>
                    </tbody>
                    
                    </table>
                    
                </div>
            </div>
        </div>
    </div>

</div>

<?php
include '../aset/footer1.php';
?>