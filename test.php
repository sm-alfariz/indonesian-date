<?php
	require_once 'IndonesiaDate.php';

$tgl = new IndonesiaDate;
echo $tgl->indonesiaDate('2012-08-21')."<br />=================<br />\n";
//echo $tgl->hitung_mundur('2016-09-10 03:02:55');
echo $tgl->blogDate('2016-09-10');