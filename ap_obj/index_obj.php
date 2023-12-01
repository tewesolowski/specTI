<!DOCTYPE html>
<html>
<head></head>
<body>  <!-- Tomasz Wesołowski -->

<h2>PHP ap obj</h2>

<?php 

class Kwadrat {
	public $bok;
	public $pole;

	function liczO() {
		return $this->bok * 4;
	}
	
	function liczP() {
		$this->pole = $this->bok ** 2;
	}
}


$kw1 = new Kwadrat();

//echo $kw1;	// błąd
//var_dump($kw1);

$kw1->bok = 7;

echo "P = ". $kw1->pole ."<br>";

$kw1->liczP();

echo "bok = ". $kw1->bok . "<br>";
echo "O = ". $kw1->liczO() ."<br>";
echo "P = ". $kw1->pole ."<br>";

$kw1->bok = -3;
echo "bok = ". $kw1->bok . "<br>";
echo "O = ". $kw1->liczO() ."<br>";
$kw1->liczP();
echo "P = ". $kw1->pole ."<br>";

class KwadratH {	//hermetyzacja na polu $bok
	private $bok;
	public $pole;

	function setBok( $nowyBok ) {	//setter dla $bok
		if($nowyBok > 0) $this->bok = $nowyBok;
		else $this->bok = 0;
		
		$this->liczP();	//automatyczna aktualizacja pola po zmianie boku
	}
	function getBok() {		//getter dla $bok
		return $this->bok;
	}
	function liczO() {
		return $this->bok * 4;
	}
	function liczP() {
		$this->pole = $this->bok ** 2;
	}
}

$kwh = new KwadratH();

//$kwh->bok = 5;
echo "O = ". $kwh->liczO() ."<br>";
$kwh->setBok(5);
echo "O = ". $kwh->liczO() ."<br>";
//$kwh->liczP();	//nie potrzebne - automatyczne wywołanie po zmianie boku
echo "P = ". $kwh->pole ."<br>";

$kwh->setBok(15);
echo "bok = ". $kwh->getBok() . "<br>";
echo "O = ". $kwh->liczO() ."<br>";
echo "P = ". $kwh->pole ."<br>";

?>

</body>
</html>