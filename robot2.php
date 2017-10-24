<?php
class robot{
	public $suara;
	public $berat;


	public function __construct(){

	} 
	public function set_suara($suara)
	{
		$this-> suara = $suara;
	}

	public function get_suara($suara)
	{
		return $this-> suara;
	}
	public function set_berat($berat)
	{
		$this-> berat = $berat;
	}

	public function get_berat($berat)
	{
		return $this-> berat;
	}
}
?>