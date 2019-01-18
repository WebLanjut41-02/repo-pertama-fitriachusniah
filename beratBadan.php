<b>KALKULATOR BERAT BADAN</b><br>
<form action="" method="post">
  Berat Badan <input type="text" name="bb" placeholder="Masukkan Berat Badan"> <br>
  Tinggi Badan <input type="text" name="tb" placeholder="Masukkan Tinggi Badan"> <br>
  Jenis Kelamin <input type="radio" name="jk" value="Laki-laki">Laki-laki
  <input type="radio" name="jk" value="Wanita">Wanita <br>
  <input type="submit" name="submit" value="Sumbit">

</form>
<?php
    class BBIdeal{
        public $berat_badan=0,$tinggi_badan=0,$hasil=0,$kategori="",$jk="";

      function __construct(){
        $this->berat_badan = $_POST['bb'];
        $this->tinggi_badan = $_POST['tb']/100;
        $this->jk = $_POST['jk'];
      }


      public function tampil_hasill()
      {
        echo "Body Mass Index (BMI) Anda Adalah = <mark>".$this->hasil."</mark><br>";
        echo "Kategori BMI Anda adalah = <mark>".$this->kategori."</mark>";
      }

      public function hitungBMI()
      {
        // code...

        $this->hasil = $this->berat_badan / ($this->tinggi_badan*$this->tinggi_badan);

        if($this->jk=="Wanita"){
          switch ($this->hasil) {
            case $this->hasil < 18 :
              $this->kategori = "Underweight/kurus";
              break;

              case $this->hasil > 18 && $this->hasil < 25 :
                $this->kategori = "Normal";
                break;

                case $this->hasil > 25 && $this->hasil < 27 :
                  $this->kategori = "Kegemukan";
                  break;

                  case $this->hasil > 27 :
                    $this->kategori = "Obesitas";
                    break;
          }
        }else {
          switch ($this->hasil) {
            case $this->hasil < 17 :
              $this->kategori = "Under Weight/kurus";
              break;

              case $this->hasil > 17 && $this->hasil < 23 :
                $this->kategori = "Normal Weight/normal";
                break;

                case $this->hasil > 23 && $this->hasil < 27 :
                  $this->kategori = "Over Weight/kegemukan";
                  break;

                  case $this->hasil > 27 :
                    $this->kategori = "Obesitas";
                    break;
        }

      }
    }

  }
  if (isset($_POST['submit'])) {
    // code...
    $panggil = new BBIdeal();
    $panggil->hitungBMI();
    $panggil->tampil_hasill();
  }

 ?>
