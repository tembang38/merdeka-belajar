<?php

function ambilBuku($koneksi)
{
    $sql = "SELECT id_buku, judul  FROM buku1";
    $res = mysqli_query($koneksi, $sql);
    
    $data_buku = array();

    while ($data = mysqli_fetch_assoc($res)) {
        $data_buku[] = $data;
    }

    return $data_buku;
}

function ambilAnggota($koneksi)
{
    $sql = "SELECT id_anggota, nama  FROM anggota";
    $res = mysqli_query($koneksi, $sql);
    
    $data_anggota = array();

    while ($data = mysqli_fetch_assoc($res)) {
        $data_anggota[] = $data;
    }

    return $data_anggota;   
}

function ambilStok($koneksi, $id_buku)
{
    $sql = "SELECT stok FROM buku1 WHERE id_buku = $id_buku";
    $res = mysqli_query($koneksi, $sql);

    $data = mysqli_fetch_assoc($res);

    return $data['stok'];
}

function cekPinjam($koneksi, $id_anggota)
{
    $sql = "SELECT * FROM peminjaman WHERE id_anggota = $id_anggota AND status = 'Dipinjam'";
    $res = mysqli_query($koneksi, $sql);

    $pinjam = mysqli_affected_rows($koneksi);

    if($pinjam == 0)
        return true;
    else
        return false;
}

function ambilPeminjaman($koneksi, $id_pinjam)
{
    $sql = "SELECT * FROM peminjaman INNER JOIN anggota ON peminjaman.id_anggota = anggota.id_anggota
                                     INNER JOIN buku1 ON peminjaman.id_buku = buku1.id_buku
                                     WHERE id_pinjam = $id_pinjam";
    $res = mysqli_query($koneksi, $sql);
    $data = mysqli_fetch_assoc($res);

    
    return $data;
}

function updateStok($koneksi, $id_buku, $stok_update)
{
    $sql = "UPDATE buku1 SET stok = $stok_update WHERE id_buku = $id_buku";
    $res = mysqli_query($koneksi, $sql);
}

function hitungDenda($koneksi, $id_pinjam, $tgl_kembali)
{
    $denda = 0;

    $sql = "SELECT tgl_jatuh_tempo FROM peminjaman WHERE id_pinjam = $id_pinjam";
    $res = mysqli_query($koneksi, $sql);
    $data = mysqli_fetch_assoc($res);
    $tgl_jatuh_tempo = $data['tgl_jatuh_tempo'];

    $hari_denda = (strtotime($tgl_kembali) - strtotime($tgl_jatuh_tempo))/60/60/24;

    if($hari_denda >= 0)
    {
        $denda = $hari_denda * 1000;
    }

    return $denda;
}

?>