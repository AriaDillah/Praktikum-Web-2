<?php
    class HewanMamalia{

        public $warna;
        public $namaHewan;
        public $habitat;


        function makan(){
            return "Mamalia makan";
        }

        function Minum(){
            return "Mamalia minum";
        }

        function Menyusui(){
            return "Mamalia menyusui";
        }
    }

    $mamalia = new HewanMamalia();
    echo $mamalia->namaHewan = "Lumba Lumba";
    echo"<br>";
    echo $mamalia->warna = "Abu-Abu";
    echo"<br>";
    echo $mamalia->habitat = "Laut";
    echo"<br>";
    echo $mamalia->Makan();
    echo"<br>";
    echo $mamalia->Minum();
    echo"<br>";
    echo $mamalia->Menyusui();
   
?>