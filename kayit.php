<?php 
include ("baglanti.php");

$kullanicierr = $mailerr = $sifrerr =  $sifretkerr = "";



if (isset($_POST["kaydet"])) {
  //Kullanıcı Adı Bölümü

  if (empty($_POST["kullaniciadi"])) {
    $kullanicierr="Boş Geçilemez.";
    
  }elseif  (strlen($_POST["kullaniciadi"])<6) {
    $kullanicierr ="En az 6 karakterden oluşmalıdır.";
  }else{
  $kullanicii = $_POST["kullaniciadi"];
}
	
// Email doğrulama
if (empty($_POST["email"])) {
 
}else if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
  $mailerr = "Geçersiz email formatı";
}else{

  $emaili = $_POST["email"];

}
 //Şifre Doğrulama

if (empty($_POST["sifre"])) {
  $sifrerr = "Parola boş geçilemez";
}else{

  $sifrer = password_hash($_POST["sifre"], PASSWORD_DEFAULT);
}

if (empty($_POST["sifretk"])) {
 $sifretkerr = "Parola tekrar kısmı boş olmaz";
}else if ($_POST["sifre"]!= $_POST["sifretk"]){

  $sifretkerr = "Parola eşleşmiyor";
}else{

$sifretke = $_POST["sifretk"];
}

//$isim = $_POST["ad"];
//$soyisim = $_POST["soyad"];
//$parol = password_hash($_POST["sifre"], PASSWORD_DEFAULT);
//$mail = $_POST["email"];

if (isset($kullanicii)&& isset($emaili)&& isset($sifrer) && isset($sifretke)) {
 


$ekle = "INSERT INTO üyelik (kullaniciadi, email,parola) VALUES ('$kullanicii','$emaili','$sifrer') ";

$ekleme = mysqli_query($baglanti,$ekle); 
if ($ekleme) {
	echo '<div class="alert alert-success" role="alert">
Kayıt başarılı 
</div>';
	
}else{
	echo '<div class="alert alert-danger" role="alert">
 Kayıtta problem var 
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
    		<form class="gy1" action="kayit.php" method="POST">
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




             border-info mb-3" name="kullaniciadi" placeholder="Kullanıcı Adınızı Giriniz" required="">
            <div id="validationServer03Feedback"  class="invalid-feedback">
      <?php 
      echo $kullanicierr;


       ?>
    </div>
    			</DİV>
    			<DİV class="W-100 mb-4">
    				<label class="form-label" style="font-weight:bold; font-size: 18px;">E-Mail</label>
    				<div class="input-group mb-4">
    				
    					<input type="text" class="form-control 

              <?php 
              if(!empty($mailerr)){
              echo "is-invalid"; }

               ?>


               border border-info " name="email" placeholder="Emailinizi Oluşturun">
              <div id="validationServer03Feedback" class="invalid-feedback">
     <?php  
     echo $mailerr;



      ?>
    </div>
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
    			<div class="w-100 mb-4">
    				<label class="form-label" style="font-weight:bold; font-size: 18px;">Şifrenizi Tekrar Giriniz </label>
    				<input type="password" placeholder="Şifrenizi Tekrar Girin" name="sifretk" class="form-control 
            <?php 
            if(!empty($sifretkerr)){
            echo "is-invalid";}




             ?>


             border border-info mb-4"  >
            <div id="validationServer03Feedback" class="invalid-feedback">
      <?php 
      echo $sifretkerr;

       ?>

    			</div>
    			<div class="w-25 mx-auto girisyap">
    				<button type = "submit" class="btn btn-success w-100" name="kaydet" >
    					KAYIT OL
    				</button>
    				
    			</div>
    			<div class="w-25 mx-auto girisyap">
            <button type = "submit" name="giriss" style="margin-top: 20px" >
              <a href="g1.php" class="btn btn-success w-100">GİRİŞ YAP</a>
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