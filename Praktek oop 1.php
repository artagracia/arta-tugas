<?php
  class Orang{

    var $nama;
    var $umur;

    function tampilkan_nama(){
      return "Nama Saya Artagracia Claudia <br/> ";
    }
    function tampilkan_umur(){
      return "Umur saya 16 Tahun <br/> ";
    }
  }
    $Orang = new orang();
    echo $Orang->tampilkan_nama();
    echo $Orang->tampilkan_umur();
?>