<?php
class person
{
    //property
    private $nama,
            $usia,
            $alamat,
            $pekerjaan;
    //setter
    public function setNama($a){
        $this->nama=$a;
    }
    //getter
    public function getNama(){
        return $this->nama;
    }
    public function setUsia($a){
        $this->usia=$a;
    }
    public function getUsia(){
        return $this->usia;
    }
    public function setAlamat($a){
        $this->alamat=$a;
    }
    public function getAlamat(){
        return $this->alamat;
    }
    public function setPekerjaan($a){
        $this->pekerjaan=$a;
    }
    public function getPekerjaan(){
        return $this->pekerjaan;
    }
}   
    //membuat object person
    $person = new person;

    $person->setNama("Claudia");
    $person->setUsia("16 Tahun");
    $person->setAlamat("Bogor");
    $person->setPekerjaan("Pelajar");

    echo "Nama saya : ". $person->getNama()."<br/>";
    echo "Usia saya : ". $person->getUsia()."<br/>";
    echo "Alamat : ". $person->getAlamat()."<br/>";
    echo "Pekerjaan : ". $person->getPekerjaan()."<br/>";
?>