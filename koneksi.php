<?php
$conn_str = "host=john.db.elephantsql.com " .
    "port=5432 " .
    "user=eclhnvoy " .
    "dbname=eclhnvoy " .
    "password=MYbuLsWzRx_UxIHtxgWw-QbAFipURvWH";
$conn = pg_connect($conn_str);

// if($conn) {
//     echo "<h3>Koneksi Berhasil</h3>";
// } else {
//     echo "<h3>Koneksi GAGAL TERSAMBUNG</h3>";
// }
?>