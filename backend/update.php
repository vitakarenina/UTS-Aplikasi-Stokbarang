<?php
require_once '../koneksi.php';

$rawData = file_get_contents('php://input');
$data = json_decode($rawData);
$sql = "update stokbarang set " .
       "  kategori_barang='" . $data->kategori_barang . "'," .
       "  nama_barang='" . $data->nama_barang . "', " .
       "  jumlah_stok='" . $data->jumlah_stok . "' " .
       " where id='" . $data->id . "'";
$result = pg_query($sql);
$row = pg_affected_rows($result);
$obj = new stdClass();
if($row > 0) {
    $obj->result = "success";
} else {
    $obj->result = "failed";
}
echo json_encode($obj);
?>