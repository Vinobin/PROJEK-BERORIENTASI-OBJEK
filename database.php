<?php
class DATABASE {
    public $db="db toko";
    private $host="localhost";
    private $user="root";
    private $password="";
    public function insertData(){
      return "insertData";
    }
    public static function selectData(){
     return "selectData";
    }
    public function deleteData(){
    return "deleteData";
    }
    public function updateData(){
    return "updateData";
    }
    public function ambil(){
        return $this->host;
    }
}
    $usedb=new DATABASE;
    echo $usedb->insertData();
    echo "<br>";
    echo $usedb->db;
    echo "<br>";
    echo $usedb->ambil();
    echo "<br>";
    echo $usedb->selectData();
    echo DATABASE :: selectData();
    echo "<br>";
    $usepenjualan= new penjualan;
    echo $usepenjualan->barang();
    echo "<br>";
    echo $usepenjualan->pelanggan();

    class penjualan{
        public function barang(){
            return "barang";
        }
        public static function pelanggan (){
            return "pelanggan";
        }
    }
?>