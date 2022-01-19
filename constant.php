<?php 

define('NAMA', 'Si Mantep Bangeutz');
echo NAMA;
echo "<hr>";

const UMUR = 22;
echo UMUR . " tahun";
echo "<hr>";



class Coba {
	const NAMA = "hohoho"; 
}

echo Coba::NAMA;
echo "<hr>";


echo __LINE__;
echo "<hr>";
echo __FILE__;
echo "<hr>";
echo __DIR__;


?>