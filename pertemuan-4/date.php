<?php 

// Date
// untuk menampilkan tanggal dengan format tertentu
// echo date("l, d-M-Y");
// echo date('l jS \of F Y h:i:s A');

// Time
// UNIX Timestamp / EPOCH time
// detik yang sudah berlalu sejak 1 Januari 1970
// echo date("l, d-M-Y", time()-60*60*24*100);

// mktime 
// membuat detik sendiri
// mktime(0,0,0,0,0,0)
// jam, menit, detik, bulan, tanggal, tahun
// echo date("l", mktime(0, 0, 0, 3, 15, 2009));

// strtotime
// echo date("l", strtotime("15 march 2009"));

?>