<!DOCTYPE html>
<html lang="en">
  <head >
    <title>ImageCompress</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">


 

  

  </head>
  <body> 
  <style>
  .contact_section_3{
	width: 100%;
	float: left;
	background-color: #2c2c2c;
	padding-bottom: 30px;	
	padding-top: 30px;
  margin-top: -80px;
  
}margin-bottom:100px;

  .contact_taital{
	width: 100%;
	float: left;
	padding-left: 100px;
	padding-right: 100px;
	margin-top: 10px;
}
.web{
	background-color: #ffffff;
	border-radius: 30px;
	height: auto;
	padding-top: 20px;	
	padding-bottom: 20px;
}
.londan_text{ 
  padding-left: 20px;
  color: black;
}


  </style>  

    
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.php">FLEX</a>

	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menü
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="index.html" class="nav-link">Ana Sayfa</a></li>
	          <li class="nav-item"><a href="hakkımızda.html" class="nav-link">Hakkımızda</a></li>
	          <li class="nav-item"><a href="iletişim.html" class="nav-link">İletişim</a></li>
	        
	        </ul>
	      </div>
	    </div>
	  </nav>
  
    
 







    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/Custom Size – 1.svg');" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
		  <div class="row no-gutters slider-text align-items-end justify-content-center">
			<div class="col-md-9 ftco-animate mb-5 text-center">
			</div>
		  </div>
		</div>
	  </section>
	  <section class="ftco-section bg-light">
    	<div class="container">
    		<div class="row justify-content-center pb-5 mb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2>Fotoğrafını Saniyeler İçinde Sıkıştır</h2>
                        
                        <h3>Görüntünü Aşağıdaki Dosya Türlerine Göre Seç</h3>
          </div>
        </div>
    		<div class="row">
    			<div class="col-md-4 ftco-animate d-flex">
	          <div class="block-7 w-100">
	            <div class="text-center">
		           <img src="images/jpeg.svg">
		            <ul class="pricing-text mb-5">
		              
		            </ul>
                <form method='post' action='' enctype='multipart/form-data'>
  <input type='file' name='imagefile' >
  <button class="btn btn-primary" type="submit" name="upload" value="Yükle">Submit</button>
</form>
	            </div>
	          </div>
	        </div>

			<div class="col-md-4 ftco-animate d-flex">
	          <div class="block-7 w-100">
	            <div class="text-center">
		            <img src="images/png.svg">
		            <ul class="pricing-text mb-5">
		              
		            </ul>

                <form method='post' action='' enctype='multipart/form-data'>
  <input type='file' name='imagefile' >
  <button class="btn btn-primary" type="submit" name="upload" value="Yükle">Submit</button>
</form>
	            </div>
	          </div>
	        </div>
	        <div class="col-md-4 ftco-animate d-flex">
	          <div class="block-7 w-100">
	            <div class="text-center">
		            <img src="images/gif.PNG" style="width:210px; height: 290px;">
		            <ul class="pricing-text mb-5">
		              
		            </ul>

                <form method='post' action='' enctype='multipart/form-data'>
  <input type='file' name='imagefile' > 
  <button class="btn btn-primary" type="submit" name="upload" value="Yükle">Submit</button>
</form>



      </div>
    </div>
  </div>
</div>
     </div>
	          </div>
	        </div>
	      </div>
    	</div>
    </section>

    <?php
if(isset($_POST['upload'])){
 
  // Dosya adını alalım
  $filename = $_FILES['imagefile']['name'];
 
  // Gelen dosya bir görsel mi?
  $valid_ext = array('png','jpeg','jpg');
 
  // Nereye kaydedelim?
  $location = "uploads/".$filename;
 
  // dosya uzantısı işlemleri
  $file_extension = pathinfo($location, PATHINFO_EXTENSION);
  $file_extension = strtolower($file_extension);
 
  // uzantı kontrolü
  if(in_array($file_extension,$valid_ext)){
 
    // Resmi sıkıştıralım. Kalitesi 60 olsun. 
    compressImage($_FILES['imagefile']['tmp_name'],$location,60);
 
  }else{
    echo "Bilinmeyen dosya uzantısı.";
  }
}
 
// görsel sıkıştırma fonksiyonumuz
function compressImage($source, $destination, $quality) {
 
  $info = getimagesize($source);
 
  if ($info['mime'] == 'image/jpeg') 
    $image = imagecreatefromjpeg($source);
 
  elseif ($info['mime'] == 'image/gif') 
    $image = imagecreatefromgif($source);
 
  elseif ($info['mime'] == 'image/png') 
    $image = imagecreatefrompng($source);
 
  imagejpeg($image, $destination, $quality);
 
}
 
?>

		<section class="ftco-section">
    <img src="images/about-top-bg.png">	
    <div class="container">
    		<div class="row justify-content-center pb-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2>Kullanım Aşamaları</h2>
          </div>
        </div>
    		<div class="row">
    			<div class="col-md-4 d-flex align-items-stretch ftco-animate">
    				<div class="services-2 text-center">
    					<div class="icon-wrap">
    						<div class="number d-flex align-items-center justify-content-center"><span>01</span></div>
	    					<div class="icon d-flex align-items-center justify-content-center">
	    						<img src="images/hiwfolder.PNG">
	    					</div>
    					</div>
    					<h2>Dosyanı Seç</h2>
    					<p>Sıkıştırmak istediğin PNG, JPEG veya GİF formatındaki görüntüyü bilgisayarında bul ve Flex'e yükle.</p>
    				</div>
    			</div>
    			<div class="col-md-4 d-flex align-items-stretch ftco-animate">
    				<div class="services-2 text-center">
    					<div class="icon-wrap">
    						<div class="number d-flex align-items-center justify-content-center"><span>02</span></div>
	    					<div class="icon d-flex align-items-center justify-content-center">
	    						<img src="images/hiwpng.png">
	    					</div>
    					</div>
    					<h2>Formatını Seç</h2>
  						<p>Dosyanın hangi formatta çıkmasını istediğine karar ver ve seçtiğin formata uygun seçeneği işaretle.</p>
    				</div>
    			</div>
    			<div class="col-md-4 d-flex align-items-stretch ftco-animate">
    				<div class="services-2 text-center">
    					<div class="icon-wrap">
    						<div class="number d-flex align-items-center justify-content-center"><span>03</span></div>
	    					<div class="icon d-flex align-items-center justify-content-center">
	    						<img src="images/hiwdown.png">
	    					</div>
    					</div>
    					<h2>Sıkıştır ve İndir</h2>
  						<p>Dönüştürme otomatik olarak gerçekleştirilecektir. Dosyanı yeni formatında indirip kullanabilirsin.</p>
    				</div>
    			</div>
    		</div>
    	</div>
      <img src="images/about-bottom-bg.png">	
    </section>
	


  <section class="ftco-section">
  <img src="images/about-top-bg.png">
      <div class="container">
        <div class="row justify-content-center pb-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2>Bilgilendirme</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 d-flex align-items-stretch ftco-animate">
            <div class="services-2 text-center">
              <div class="icon-wrap">
                <div class="number d-flex align-items-center justify-content-center"><span>01</span></div>
                <div class="icon d-flex align-items-center justify-content-center">
                  <img src="images/hiwfolder.PNG">
                </div>
              </div>
              <h2>JPG Nedir?</h2>
              <p>JPEG standardında görüntü saklayan dosya biçimi de çoğunluk tarafından JPEG olarak adlandırılır. Bu dosyalar genellikle .jpg, .jpe ya da .jfif uzantılıdır, ancak çoğunlukla .jpg uzantısı kullanılır.</p>
            </div>
          </div>
          <div class="col-md-4 d-flex align-items-stretch ftco-animate">
            <div class="services-2 text-center">
              <div class="icon-wrap">
                <div class="number d-flex align-items-center justify-content-center"><span>02</span></div>
                <div class="icon d-flex align-items-center justify-content-center">
                  <img src="images/hiwpng.png">
                </div>
              </div>
              <h2>PNG Nedir?</h2>
              <p>PNG, "Taşınabilir Ağ Grafiği" anlamındaki (Portable Network Graphics) 'in kısaltmasıdır ve kayıpsız sıkıştırarak görüntü saklamak için kullanılan bir saklama biçimidir.</p>
            </div>
          </div>
          <div class="col-md-4 d-flex align-items-stretch ftco-animate">
            <div class="services-2 text-center">
              <div class="icon-wrap">
                <div class="number d-flex align-items-center justify-content-center"><span>03</span></div>
                <div class="icon d-flex align-items-center justify-content-center">
                  <img src="images/hiwdown.png">
                </div>
              </div>
              <h2>GIF Nedir?</h2>
              <p>GIF, İngilizce Grafik Değiştirme Biçimi anlamına gelen Graphics Interchange Formatin kısaltmasıdır ve bir sayısal resim saklama biçimidir. Kayıpsız sıkıştırma kullanır.</p>
            </div>
          </div>
        </div>
      </div>
      <img src="images/about-bottom-bg.png">
    

    <footer class="ftco-footer">
     
    <div class="contact_section_3">
    	<div class="container">
    		<div class="contact_taital">
    			<div class="row web">
    				<div class="col-sm-12 col-md-12 col-lg-4">
    					<div class="map_main">
    						<img src="images/map-icon.png">
    						<span class="londan_text">İstanbul,Avcılar</span>
    					</div>
    				</div>
    				<div class="col-sm-6 col-md-6 col-lg-4">
    					<div class="map_main">
    						<img src="images/phone-icon.png">
    						<span class="londan_text">+212 123 456</span>
    					</div>
    				</div>
    				<div class="col-sm-6 col-md-6 col-lg-4">
    					<div class="map_main">
    						<img src="images/email-icon.png">
    						<span class="londan_text">flex.compress@gmail.com</span>
    					</div>
    				</div>
    			</div>
    		</div>
    
    
    <div class="container " style="margin-top:20px;">
        <div class="row mb-5">
          <div class="col-sm-12 col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2 logo"><a href="#">FLEX</a></h2>
              <p>Size en iyi hizmet verme peşindeyiz.</p>

              <ul class="ftco-footer-social list-unstyled mt-2">
              </ul>
            </div>
          </div>
          <div class="col-sm-12 col-md">
            <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Bağlantılar</h2>
              <ul class="list-unstyled">
                <li><a href="https://github.com/hedevelope/imagecompress"><span class="fa fa-chevron-right mr-2"></span>Github</a></li>
                <li><a href="https://www.youtube.com/channel/UCSPTSVhMGw6M9P5MYY7uoZg/playlists"><span class="fa fa-chevron-right mr-2"></span>YouTube</a></li>
              </ul>
            </div>
          </div>
          
          
          <div class="col-sm-12 col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Soru Sormak İçin:</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><a href="#"><span class="icon fa fa-paper-plane pr-4"></span><span class="text"><p>flex.compress@gmail.com</p></span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
      </div>
      <div class="copyright_main">
    	<div class="container">
    		<p class="copy_text" style="text-align:center;">© 2021 All Rights Reserved. Batuhan Karamemiş & Nesibe Doğan</p>
    	</div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>