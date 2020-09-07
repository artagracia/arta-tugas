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
		public function getLabel(){
			return "$this->jenisMotor, $this->roda";
		}
	}
	class cetakInfoproduk{
		public function cetak($motor){
			$str="{$motor->jenisMotor} {$motor->getLabel()} (Rp.{$motor->harga})";
			return $str;
		}
	}

	$motor1 = new motor("Honda","2","Hitam","12500000");
	$motor2 = new motor("Kawasaki","2","Merah","25000000");
	$infoProduk = new cetakInfoproduk();

	echo "Jenis Motor : " . $motor1->getCetak();  
	echo "<br>";
	echo "Jenis Motor lainnya :" . $motor2->getCetak();
	echo "<br>";
	echo $infoProduk->cetak($motor2);
?> 