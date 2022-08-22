<?php
// $newDate = '2021/02/04';
// $datasub = substr("2021/02/04/000484",11);
// $noregs = $datasub+1;
// $noreg = sprintf("%03s", $noregs);
// $noraw = sprintf("%06s", $noreg);
// $norawat = $newDate."/".$noraw;

// echo 'datasub = '.$datasub;
// echo 'noregs = '.$noregs;
// echo 'noreg = '.$noreg;
// echo 'noraw = '.$noraw;
// echo 'norawat = '.$norawat;
echo '<html>';
$a_date = "2021-07-01";
echo 'Tgl akhir bulan : '.date("Y-m-t", strtotime($a_date));
echo '<br>';
echo Date('Y-m-d');
echo '<br>';
echo gmdate('t');
// echo gmdate('d');
echo '<br>';

$id = [-1,0,1,2,3,4,5,6,7,8,9,10,11,12];
// echo 'Nilai ID : ';
foreach($id as $number){
  echo '<br>Nilai ID : ';
  echo ($number>0 && $number<10)?str_pad($number, 2, "0", STR_PAD_LEFT):$number;
}

// $time = strtotime('10/16/2003');
$tgl16 = strtotime('2021-08-16');
$sTgl16 = date('Y-m-d',$tgl16);

$tgl20 = strtotime('2021-08-20');
$sTgl20 = date('Y-m-d',$tgl20);

$today = date('Y-m-d');

$lebihBaru = ($sTgl16 > $today)?'benar':'salah';
$lebihLama = ($sTgl16 < $today)?'benar':'salah';
$samaDengan = ($sTgl16 == $today)?'benar':'salah';

echo "<p>Tanggal {$sTgl16} lebih baru dari tanggal {$today} adalah {$lebihBaru}</p>";
echo "<p>Tanggal {$sTgl16} lebih lama dari tanggal {$today} adalah {$lebihLama}</p>";
echo "<p>Tanggal {$sTgl16} sama dengan tanggal {$today} adalah {$samaDengan}</p>";

$lebihBaru = ($sTgl20 > $today)?'benar':'salah';
$lebihLama = ($sTgl20 < $today)?'benar':'salah';
$samaDengan = ($sTgl20 == $today)?'benar':'salah';

echo "<p>Tanggal {$sTgl20} lebih baru dari tanggal {$today} adalah {$lebihBaru}</p>";
echo "<p>Tanggal {$sTgl20} lebih lama dari tanggal {$today} adalah {$lebihLama}</p>";
echo "<p>Tanggal {$sTgl20} sama dengan tanggal {$today} adalah {$samaDengan}</p>";

$tgl05 = strtotime('2021-02-05');
$sTgl05 = date('Y-m-d',$tgl05);

$tgl02 = strtotime('2021-05-02');
// $sTgl02 = date('Y-d-m',$tgl02);
$sTgl02 = '02/05/2021';



$lebihBaru = ($sTgl05 > $sTgl02)?'benar':'salah';
$lebihLama = ($sTgl05 < $sTgl02)?'benar':'salah';
$samaDengan = ($sTgl05 == $sTgl02)?'benar':'salah';

echo "<p>Tanggal {$sTgl05} lebih baru dari tanggal {$sTgl02} adalah {$lebihBaru}</p>";
echo "<p>Tanggal {$sTgl05} lebih lama dari tanggal {$sTgl02} adalah {$lebihLama}</p>";
echo "<p>Tanggal {$sTgl05} sama dengan tanggal {$sTgl02} adalah {$samaDengan}</p>";

// $kodeUN = date('Y-m-d')>'2021-08-18'?'UN27.46':'UN27.49';
$kodeUN = $sTgl20>'2021-08-18'?'UN27.46':'UN27.49';

echo "<p>{$kodeUN}</p>";


echo '</html>';

?>