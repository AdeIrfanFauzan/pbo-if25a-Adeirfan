<?php

require('./PropertyConstant.php');

use Pbo\Marketplace\Produk;


$produk = new Produk("P001", "Laptop", 10000000, 5);


echo "Produk: " . $produk-> nama . "<br>";
echo "Harga: " . $produk->harga . "<br>";
echo "Stok: " . $produk-> stok . "<br>";
echo "Pajak: " . $produk->pajak() . "%" . "<br>  ";
echo "<br>";
echo "Total harga setelah pajak: Rp." . $produk->total();

?>