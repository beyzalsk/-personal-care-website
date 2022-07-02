<?php 
include ("baglanti.php");

$kullanicierr  = $sifrerr =   "";



if (isset($_POST["giris"])) {
  //Kullanıcı Adı Bölümü

  if (empty($_POST["kullaniciad"])) {
    $kullanicierr="Boş Geçilemez.";
  }else{
  $kullanicii = $_POST["kullaniciad"];
}
  

 //Şifre Doğrulama

if (empty($_POST["sifre"])) {
  $sifrerr = "Parola boş geçilemez";
}else{

  $sifrer = $_POST["sifre"];
}





if (isset($kullanicii) &&  isset($sifrer)) {
  $secili = "SELECT * FROM üyelik WHERE kullaniciadi= '$kullanicii'";
  $scalis = mysqli_query($baglanti,$secili);
  $ksayi = mysqli_num_rows($scalis);

  if ($ksayi>0) {

    $kayitlikayit = mysqli_fetch_assoc($scalis);
    $sifrey = $kayitlikayit["parola"]; //veritabanı adı
    if(password_verify($sifrer, $sifrey)){
      session_start();
      $_SESSION["kullaniciadi"] = $kayitlikayit["kullaniciadi"];
      $_SESSION["email"] = $kayitlikayit["email"];
      header("location: anasayfa.php");

    
    }
    else{

      echo '<div class="alert alert-danger" role="alert"> ParolaYanlış
</div>';
    }

}

 else{

  echo '<div class="alert alert-danger" role="alert">
  Kullanıcı Adı yanlış 
</div>';
 }



mysqli_close($baglanti);


}
}

 ?>
 <!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="sa.css">
</head>
<body>

    <section class="girisy">
      <div class="container w-25 mx-auto">
        <button style="font-size:25px; margin-left: 850px; margin-top: 20px; font-weight: bold;">
      <a href="anasayfa.php">ÇIKIŞ</a>
    </button>
        <form class="gy1" action="g1.php" method="POST">
          <div class="w-100 mb-4 text-center bg-success p-2 text-white">

            <span>ARAMIZA HOŞGELDİNİZ</span>
          </div>

          
          <DİV class="W-100 mb-4">
            <label class="form-label" style="font-weight:bold; font-size: 18px;">Kullanıcı Adı</label>
            <input type="text" class="form-control

              <?php   

              if(!empty($kullanicierr)){

                echo "is-invalid";
              }

               ?>




             border-info mb-3" name="kullaniciad" placeholder="Kullanıcı Adınızı Giriniz" required="">
            <div id="validationServer03Feedback"  class="invalid-feedback">
      <?php 
      echo $kullanicierr;


       ?>
    </div>
          </DİV>
    
          <div class="w-100 mb-4">
            <label class="form-label" style="font-weight:bold; font-size: 18px;">Şifre</label>
            <input type="password" placeholder="Şifrenizi Oluşturun" class="form-control 
            <?php 
            if(!empty($sifrerr)){
            echo "is-invalid";}


             ?>



              border border-info mb-3 " name="sifre" >
            <div id="validationServer03Feedback" class="invalid-feedback">
      <?php 
      echo $sifrerr;

       ?>
    </div>
          </div>
          
          <div class="w-25 mx-auto girisyap">
            <button type = "submit" class="btn btn-success w-100" name="giris" >
              GİRİŞ YAP
            </button>
            
          </div>
          
          
        </form>
        
      </div>

 


    </section>


    












<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/uxl/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxlS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

<script type="text/javascript">
  $('.carousel').carousel({
    interval: 1500
  })
</script>
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>

</body>
</html>