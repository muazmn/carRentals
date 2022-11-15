<!-- di dalam index, aplikasi mvc akan dipanggil -->

<?php

// kalau xada session, maka jalankan session
if (!session_id()) session_start();

// init.php akan memanggil semua file yang diperlukan oleh kita
// ini adalah teknik bootstrapping dimana kita akan memanggil satu file dan file itu akan memanggil semua aplikasi yang diperlukan oleh kita
// init ini akan memanggil semua file yang kita perlukan
// ini disebut teknik bootstrapping dimana kita memanggil satu file, dan file ini akan memanggil seluruh aplikasi mvc
require_once '../app/init.php';

// instantiasi kelas
$app = new App;
