<?php
class Produk {
    public $kode;
    public $nama;
    public $harga;
    public $stok;

    const PAJAK = 0.11;
}

$produk = new Produk();

$produk->kode = "P001";
$produk->nama = "Laptop";
$produk->harga = 10000000;
$produk->stok = 5;

$pajak = $produk->harga * Produk::PAJAK;
$total = $produk->harga + $pajak;

echo "Produk: " . $produk->nama . "<br>";
echo "Harga: Rp10.000.000<br>";
echo "Stok: " . $produk->stok . "<br>";
echo "Pajak: 11%<br><br>";

echo "Total harga setelah pajak: Rp" . number_format($total, 0, ',', '.');
?>