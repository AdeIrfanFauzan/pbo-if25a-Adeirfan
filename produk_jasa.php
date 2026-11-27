<?php

require('./jasa.php');

use Pbo\Marketplace\jasa;


$produk = new jasa();

$produk->setkode('p0001')
       ->setNama('laptop')
       ->setHarga(1000000)
       ->setStok(5);

echo "Produk: " . $produk->getNama() . "<br>";
echo "Harga: " . $produk->getHarga() . "<br>";
echo "Stok: " . $produk-> getStok() . "<br>";
echo "Pajak: " . $produk->pajak() . "%" . "<br>  ";
echo "<br>";
echo "Total harga setelah pajak: Rp." . $produk->total();
echo "<br>";
echo "Metode pembayaran: ". $produk->payment('qris');

?>