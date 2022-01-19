<?php 

class ContohStatic {

	public static $angka = 1;

	public static function getString() {
		return "oy gobs.. " . self::$angka++ . " kali";
	}
}


echo ContohStatic::$angka;
echo "<br>";
echo ContohStatic::getString();
echo "<hr>";

echo ContohStatic::$angka;
echo "<br>";
echo ContohStatic::getString();
echo "<hr>";



class Contoh {
	public static $angka = 1;

	public function getHallo() {
		return "hallo " . self::$angka++ . " kali <br>";
	}
}


$obj01 = new Contoh;
echo $obj01->getHallo();
echo $obj01->getHallo();
echo $obj01->getHallo();
echo "<hr>";

$obj02 = new Contoh;
echo $obj02->getHallo();
echo $obj02->getHallo();
echo $obj02->getHallo();
echo "<hr>";


?>