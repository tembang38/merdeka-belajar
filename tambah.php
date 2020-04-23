<?php
include '../aset/header1.php';
?>
<div class="container">
    <div class="row mt-4">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    <h2>Tambah Buku</h2>
                </div>
                <div class="card-body">
                    <form method="post" action="proses-tambah.php">
                        <div class="form-group">
                            <label for="judul">Judul</label>
                            <input type="text" class="form-control" name="judul" id="judul" placeholder="Masukkan Judul buku">
                        </div>
                        <div class="form-group">
                            <label for="penerbit">Penerbit</label>
                            <input type="text" class="form-control" name="penerbit" id="penerbit" placeholder="Masukkan Nama penerbit">
                        </div>
                        <div class="form-group">
                            <label for="pengarang">Pengarang</label>
                            <input type="text" class="form-control" name="pengarang" id="pengarang" placeholder="Masukkan Nama pengarang">
                        </div>
                        <div class="form-group">
                            <label for="ringkasan">Ringkasan</label>
                            <textarea class="form-control" name="ringkasan" id="ringkasan" placeholder="Masukkan Ringkasan Cerita"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="cover">Cover</label>
                            <input type="text" class="form-control" name="cover" id="cover" placeholder="Masukkan Cover">
                        </div>
                        <div class="form-group">
                            <label for="stok">Stok</label>
                            <input type="number" class="form-control" name="stok" id="stok" placeholder="Masukkan jumlah stok">
                        </div>
                        <div class="form-group">
                            <label for="id_Kategori">Id Kategori</label><br>
                            <select name="id_kategori" id="sel">
                                <option value="">Pilih Kategori</option>
                                <option value="Fiksi">Fiksi</option>
                                <option value="Non">Non Fiksi</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include '../aset/footer1.php';
?>