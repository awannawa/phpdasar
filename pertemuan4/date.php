<?php 
// Date untuk menampilkan dengan format tanggal tertentu
// echo date("l, d-m-y");

// Time
// UNIX timestamp/ EPOCH time
// detik yang sudah berlalu sejak 1 Januari 1970
// echo time (); 
//echo date("l, d-m-y", time()*60*60*24*5);

// mktime
// membuat sendiri detik
// mktime(0,0,0,0,0)
// jam, menit, detik, bulan, tanggal, tahun
// echo date ("l", mktime(0,0,0,4,10,1996));

/// strtotime
echo date("l", strtotime("10 Apr 1996"));
?>