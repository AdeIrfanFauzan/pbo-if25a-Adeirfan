<?php

class Produk {
    public string $kode;
    public string $nama;
    public int $harga;
    public int $stok;
    public const PAJAK = 0.11;

    public function __construct($kode, $nama, $harga, $stok) {
        
        $this->kode = $kode;
        $this->nama = $nama;
        $this->harga = $harga;
        $this->stok = $stok;

    }

    public function pajak() {
        return self::PAJAK * 100;
    }

    public function total() {
        return $this->harga + ($this->harga * self::PAJAK);
    }

}

$produk = new Produk("P001", "Laptop", 10000000, 5);



echo "Produk: " . $produk-> nama . "<br>";
echo "Harga: " . $produk->harga . "<br>";
echo "Stok: " . $produk-> stok . "<br>";
echo "Pajak: " . $produk->pajak() . "%" . "<br>  ";
echo "<br>";
echo "Total harga setelah pajak: Rp." . $produk->total();
?>