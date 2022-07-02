<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="author" content="Beyza Alışık">
    <meta name="viewport" content="width = device-width, initial-scale = 1.0">
    <meta http-equiv="refresh" content="200">
    <title> KİŞİSEL BAKIM </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="sa.css">
    
</head>
<body>
    
<nav class="navbar navbar-expand-lg navbar-light" >
      <a href="#" class="navbar-brand" id="b"> KİŞİSEL BAKIM </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ac"> <span class="navbar-toggler-icon"></span></button>


      <div class="collapse navbar-collapse" id="ac">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
            <a class="nav-link" href="anasayfa.php">ANASAYFA</a>
          </li>
          <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">CİLT BAKIM </a>
                        <div class="dropdown-menu">
                            <a href="maskeler.php" class="dropdown-item">MASKELER</a>
                            <a href="günlükbakım.php" class="dropdown-item">GÜNLÜK BAKIM </a>
                        </div>
                    </li>
          

          <li class="nav-item">
            <a class="nav-link" href="sacbakım.php">SAÇ BAKIM</a>
          </li>

          <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">EL-AYAK BAKIM</a>
                        <div class="dropdown-menu">
                            <a href="el_bakım.php" class="dropdown-item">EL BAKIM</a>
                            <a href="ayak_bakım.php" class="dropdown-item">AYAK BAKIM</a>
                           
                            
                        </div>
                    </li>
                    <li class="nav-item">
            <a class="nav-link" href="yorum.php">SAÇ BAKIM</a>
          </li>

          
        </ul>
         <ul class="navbar-nav">
            <li class="nav-item ms-1">
                <div class="btn-group">
                    <a href="g1.php" class="btn btn-outline-dark btn-sm"> GİRİŞ YAP </a>
                    <a href="kayit.php" class="btn btn-outline-dark btn-sm"> KAYIT OL</a>
                    
                </div>
                
                
            </li>
            
        </ul>
        
        
      </div>

      
    </nav>
    <div class="container">
     
        <hr>

        <h4 align="center" style="margin-top: 65px;">KENDİ YORUMLARINIZI EKLEYEBİLİRSİNİZ </h4> <br> <br> <br>


        <p style="align:center; font-size:15px; color: black; font-weight:bold;">
           Eğer ki sizde kendi yorumunuzu eklemek istiyorsanız <a href="g1.php">giriş yapınız</a> eğer üye değilseniz <a href="kayit.php">üye</a>  olabilirsiz
            


        </p>

        <form action="yorum.php" method="POST">
            
            <div class="form-group">
                <input type="text" class="form-control" name="kullanici" placeholder="Kullanıcı Adınızı Girin" style="margin-top: 50px;">
            </div>
            

           

            <div class="form-group">
                <textarea class="form-control" rows="10" name="yorum"></textarea>

                 <button type="submit" class="btn btn-success" style="margin-top:50px" name="gönder">Yorum Gönder</button>

            </div>


                                                </form>
                                                <br> <br>
<table   style="margin-left:60px; background-color: transparent; color: black; font-size: 20px; font-weight: bold; border-style: solid; width: 100%; align: center;  ">
      
        <?php 


include("baglanti.php");
if (isset($_POST["kullanici"], $_POST["yorum"]))

 {
    $kullaniciy = $_POST["kullanici"];
    $yrm = $_POST["yorum"];


    $ekle = "INSERT INTO yorumlar (kullaniciadi, yorumu) VALUES ('".$kullaniciy."','".$yrm."')";
    if ($baglanti->query($ekle)== TRUE) {
        echo '<div class="alert alert-success" role="alert">
 Yorumunuz Onaylanmıştır.
</div>';
    }



}


$sec ="Select * From yorumlar ";
$sonuc = $baglanti -> query($sec);

if ($sonuc->num_rows>0) {

    while ($cek= $sonuc->fetch_assoc()) {
        echo "

        <tr >
            <td>".$cek['kullaniciadi']."</td>


            
        </tr>
        <tr> 

        <tr>
        

            <td>".$cek['yorumu']."</td> </tr>
            <tr> 
        <td> ___________________________________________________________________________________________________________________________________ </tr>




        </tr>
        
        "; 
       
    }

}else

{

echo "veritabınında veri yok";
}


         ?>

        
    </table>



                                               





                                         






<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/uxl/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxlS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

<script type="text/javascript">
    $('.carousel').carousel({
        interval: 1500
    })
</script>
</script>
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>

</body>
</html>

