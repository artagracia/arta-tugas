<?php
	class motor {

		var $jenisMotor = "Honda";
		var $roda = "2";
		var $warna = "Putih";
		var $harga;

		public function getCetak(){
			return "$this->jenisMotor, $this->roda, $this->warna, $this->harga";
		} 
	}
	$motor = new motor();
	$motor->harga = 25000000;
	echo "Spesifikasi motor : " . $motor->getCetak();
?>