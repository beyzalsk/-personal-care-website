 <?php  

session_start();


?>

 

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="author" content="Beyza Alışık">
	<meta name="viewport" content="width = device-width, initial-scale = 1.0">
 	<meta http-equiv="refresh" content="500">
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
            <a class="nav-link" href="yorum.php">YORUM</a>
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

<div class="container" align="center" style="margin-top: 90px;" >
<div id="kontrol1" class="carousel slide col-md-9" data-ride="carousel">
<ol class="carousel-indicators">
	<li data-target="#kontrol1" data-slide-to="0" ></li>
	<li data-target="#kontrol1" data-slide-to="1" ></li>
	<li data-target="#kontrol1" data-slide-to="2" class="active"></li>
	<li data-target="#kontrol1" data-slide-to="3" ></li>

</ol>
<div class="carousel-inner">
	<div class="carousel-item active">
		<img src="img/a11.jpeg" width="1000" height="450">
		<div class="carousel-caption">
			
		</div>
	</div>

	<div class="carousel-item">
		<img src="img/a4.jpg" width="1000" height="450">
	</div>

	<div class="carousel-item">
		<img src="img/a9.jpg" width="1000" height="450">
	</div>

	<div class="carousel-item">
		<img src="img/a6.jpg" width="1000" height="450">
	</div>
	<div class="carousel-item">
		<img src="img/a5.jpg" width="1000" height="450">
	</div>
	
</div>
<a href="#kontrol1" class="carousel-control-prev" data-slide="prev">
	<span class="carousel-control-prev-icon"></span>
	<span class="sr-only">Previous</span></a>

	<a href="#kontrol1" class="carousel-control-next" data-slide="next">
		<span class="carousel-control-next-icon"></span>
		<span class="sr-only">Next</span></a>
	</div>


<br> <br> 
<h2 id="h222" align="left">KİŞİSEL BAKIM NEDİR ? </h2>
<img src="img/k1.jpg" style="float:right; margin-left:20px;"  width="600" height="370">
<p id="yazı" align="left">
	Kişisel bakım, kişinin bakımlı olması için yapması gerekenleri ifade eden bir kavram. Bu kavrama temel seviyede vücut, ağız ve diş, el ve ayak ile saç bakımı dahil edilebilir. Yani hayatınızı temiz ve bakımlı bir şekilde sürdürebilmeniz için atmanız gereken adımları kişisel bakım konsepti ile açıklayabilmek mümkün.Diğer yandan kişisel bakımın kapsamı, farklı bakım teknikleri ve ürünlerle de genişletilebilir. Vücudun ölü hücrelerden arındırılması, cilt gençleştime, manikür, pedikür, kuru fırçalama, spa masajları ve daha birçok örnekle çeşitlendirilebilir.Bu nedenle temel seviyede kişisel bakım süreçleri herkes için aynı olsa da ihtiyaçlara göre kişisel bakım süreçleri farklılaşabilir ve çok daha fazla uygulama içerebilir. Örneğin gözenekli bir cilt yapısına sahip olanlar, ciltlerinin nefes almasını sağlamak için Hydra Facial uygulamasına başvurabilir ve kişisel bakımları için ciltlerini arındırabilirler.Buna benzer şekilde sakallarının sağlıklı ve gür olmasını isteyen erkeklerin peeling uygulaması yine kişisel bakım yöntemlerinden biridir. Ayak derisinin deforme olmasından rahatsız olan birinin bu rahatsızlığı giderecek ürünlere başvurarması da kişisel bakıma girer.
</p>
<br> <br> 
<h2 id="h222" align="left"> KİŞİSEL BAKIMA NEDEN ÖNEM VERİLMELİ ?</h2> <br>
<img src="img/k2.jpg" style="float: left; margin-right:20px" width="600" height="370">
<p id="yazı" align="right"> Kişinin kendini daha iyi hissedebilmesi için yapılacak her şey kişisel bakım kapsamına girer. Çünkü kişisel bakımına dikkat eden insanlar, çevrelerindeki insanlara çok daha hoş görünür ve toplumda saygın bir yer edinmiş olurlar. Bunun sonucunda da kendilerini iyi hisseder ve mutlu olurlar. <br>

Kişisel bakım malzemeleri, havlu, yağ ve sabun
Kişisel bakım nedir sorusunun yanıtını bilmeyen ya da yeterince önemsemeyen insanların beden sağlığı ideal seviyede olamaz. Bu da doğal olarak çeşitli hastalıklara davetiye çıkarır. Sağlığın olumsuz yönde etkilenmesi ise ruh sağlığını etkileyeceğinden genel mutluluk seviyesi kritik seviyede düşer.Temiz ve bakımlı olmak kendinize olan güveninizi artırıp daha mutlu olmanızı sağlayarak başka insanlara da enerjinizi yansıtmanıza katkıda bulunacaktır. Dolayısıyla kişisel bakımın aslında hayatın hemen her alanını ilgilendiren bir konsept olduğunu savunmak yanlış olmayacaktır.Tüm insanların dikkat etmesi gereken kişisel bakım süreçleri, ne yazık ki toplumda yalnızca kadınlara özel bir konuymuş gibi algılanıyor. Ancak herkesin sağlıklı bir yaşam sürebilmesi, diğer insanlara iyi görünmesi ve kendini mutlu hissedebilmesi için kişisel bakımlarını aksatmaması gerekiyor.</p>


<br> <br> <br>
<hr>
</div>

<footer>

	<table style="float:right; margin-top:15px; margin-right: 10px;">

		<tr>
			<td> <img src="img/t.jpg" width="50px" height="50px"> </td>
				<td> <img src="img/f.png"  width="50px" height="50px"> </td>
					<td> <img src="img/i.jfif"  width="50px" height="50px"></td>
		</tr>
	</table>
<h6 style="color:white; float:right"> PAYLAŞ ! </h6>
	<p style="font-size: 20px; font-weight: bold; margin-top: 175px; color: white;">Bütün Hakları Saklıdır-2022 </p>
</footer>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/uxl/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxlS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

<script type="text/javascript">
	$('.carousel').carousel({
		interval: 1500
	})
</script>
</script>

</body>
</html>


