<?php
class robot{
	public $suara;
	public $berat;
	public $tinggi;

	public function set_suara($suara)
	{
		$this-> suara = $suara;
	}

	public function get_suara()
	{
		return $this-> suara;
	}
	public function set_berat($berat)
	{
		$this-> berat = $berat;
	}

	public function get_berat()
	{
		return $this-> berat;
	}
	public function set_tinggi($tinggi)
	{
		$this-> tinggi = $tinggi;
	}

	public function get_tinggi()
	{
		return $this-> tinggi;
	}
}
	$robot2 = new robot;
	$robot2-> set_suara("ngik ngik nguk");
	echo "Suara Robot = ".$robot2-> get_suara().'<br>';

	$berat2 = new robot;
	$berat2-> set_berat("20");
	echo "Berat Robot = ".$berat2-> get_berat().' kg','<br>';

	$tinggi2 = new robot;
	$tinggi2-> set_tinggi("100");
	echo "Tinggi Robot = ".$tinggi2-> get_tinggi().' cm','<br>';
?>