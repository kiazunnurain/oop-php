<?php
//builtin function

//function date
// l -> day name 
// d -> date
// m -> month = menunjukan angka > 11 
// M -> Month = menunjukan huruf > Nov
// Y -> Year 

echo date("m");
echo "<br>";
echo date("l, d M Y");
?> 

<?php
echo time(); //unixtimstamp 
echo "<br>";
echo date("l", time()-60*60*24*2);
// 60 = detik
// 60 = jam
// 24 = jam dalam sehari
// 2 = hari yang mau ditebak 

echo date("d M Y", time()-60*60*24*100);
// MKTIME 
// jam, menit, detik, bulan, tanggal, tahun
//echo mktime(0,0,0,0,0);
echo "<br>";
echo date("l", mktime(0,0,0,8,23,2006));
echo "<br>";

//strotime
echo strtotime("23 Aug 2006");
echo "<br>";
echo date("l", strtotime("23 Aug 2006"));
?>