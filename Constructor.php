<?php
	class motor {

		public $jenisMotor,
		 $roda,
		 $warna,
		 $harga;

		public function getCetak(){
			return "$this->jenisMotor, $this->roda, $this->warna, $this->harga";
		}
		public function __construct($jenisMotor="jenis motor", $roda="roda", $warna="warna", $harga=0){
		$this->jenisMotor = $jenisMotor;
		$this->roda = $roda;
		$this->warna = $warna;
		$this->harga =$harga;
		}
	}
	$motor1 = new motor("Honda","2","Hitam","12500000");
	$motor2 = new motor("Kawasaki","2","Merah","25000000");

	echo "Jenis Motor : " . $motor1->getCetak();  
	echo "<br>";
	echo "Jenis Motor lainnya :" . $motor2->getCetak();
?> 