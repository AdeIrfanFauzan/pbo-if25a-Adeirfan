<?php

require('./PropertyConstant.php');

use Pbo\Marketplace\Produk;


$produk = new Produk();

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

?>