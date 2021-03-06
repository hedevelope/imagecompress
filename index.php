<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Counselor - Free Bootstrap 4 Template by Colorlib</title>
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


    <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
    <script type="text/javascript"></script>
<![CDATA[
$(function() { $("#upload_file").on("change", function() { var files = !!this.files ? this.files : []; if (!files.length || !window.FileReader) return; // no file selected, or no FileReader support if (/^image/.test( files[0].type)){ // only image file var reader = new FileReader(); // instance of the FileReader reader.readAsDataURL(files[0]); // read the local file reader.onloadend = function(){ // set image data as background of div $("#previewimg").css("background-image", "url("+this.result+")"); } } }); });
// ]]></script>

  
 


  </head>
  <body>



  	<div class="wrap">
			<div class="container">
				<div class="row">
					<div class="col-md-6 d-flex align-items-center">
						<p class="mb-0 phone pl-md-2">
							<a href="#"><span class="fa fa-paper-plane mr-1"></span> flex.compress@gmail.com</a>
						</p>
					</div>
					
				</div>
			</div>
		</div>
    

    
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.php">FLEX</a>

	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="index.html" class="nav-link">Ana Sayfa</a></li>
	          <li class="nav-item"><a href="hakk??m??zda.html" class="nav-link">Hakk??m??zda</a></li>
	          <li class="nav-item"><a href="ileti??im.html" class="nav-link">??leti??im</a></li>
	        
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
 
    <?php
if(isset($_POST['upload'])){
 
  // Dosya ad??n?? alal??m
  $filename = $_FILES['imagefile']['name'];
 
  // Gelen dosya bir g??rsel mi?
  $valid_ext = array('png','jpeg','jpg');
 
  // Nereye kaydedelim?
  $location = "uploads/".$filename;
 
  // dosya uzant??s?? i??lemleri
  $file_extension = pathinfo($location, PATHINFO_EXTENSION);
  $file_extension = strtolower($file_extension);
 
  // uzant?? kontrol??
  if(in_array($file_extension,$valid_ext)){
 
    // Resmi s??k????t??ral??m. Kalitesi 60 olsun. 
    compressImage($_FILES['imagefile']['tmp_name'],$location,50);
 
  }else{
    echo "Bilinmeyen dosya uzant??s??.";
  }
}
 
// g??rsel s??k????t??rma fonksiyonumuz
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







    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_5.jpg');" data-stellar-background-ratio="0.5">
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
            <p><font face="tahoma" size="6" style="font-weight:bold">
            <h2>Foto??raf??n?? Saniyeler ????inde S??k????t??r</h2>
                        <p><font face="tahoma" size="4" >
                        <h3>G??r??nt??n?? A??a????daki Dosya T??rlerine G??re Se??</h3>
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
  <button class="btn btn-primary" type="submit" name="upload" value="Y??kle">Submit</button>
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
  <button class="btn btn-primary" type="submit" name="upload" value="Y??kle">Submit</button>
</form>
	            </div>
	          </div>
	        </div>
	        <div class="col-md-4 ftco-animate d-flex">
	          <div class="block-7 w-100">
	            <div class="text-center">
		            <img src="images/gif.PNG" style="width:200px; height: 290px;">
		            <ul class="pricing-text mb-5">
		              
		            </ul>

                <form method='post' action='' enctype='multipart/form-data'>
  <input type='file' name='imagefile' >
  <button class="btn btn-primary" type="submit" name="upload" value="Y??kle">Submit</button>
</form>
     </div>
	          </div>
	        </div>
	      </div>
    	</div>
    </section>


		<section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center pb-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2>Kullan??m A??amalar??</h2>
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
    					<h2>Dosyan?? Se??</h2>
    					<p>S??k????t??rmak istedi??in PNG, JPEG veya G??F format??ndaki g??r??nt??y?? bilgisayar??nda bul ve Flex'e y??kle.</p>
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
    					<h2>Format??n?? Se??</h2>
  						<p>Dosyan??n hangi formatta ????kmas??n?? istedi??ine karar ver ve se??ti??in formata uygun se??ene??i i??aretle.</p>
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
    					<h2>S??k????t??r ve ??ndir</h2>
  						<p>D??n????t??rme otomatik olarak ger??ekle??tirilecektir. Dosyan?? yeni format??nda indirip kullanabilirsin.</p>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>
	


  <section class="ftco-section">
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
              <p>JPEG standard??nda g??r??nt?? saklayan dosya bi??imi de ??o??unluk taraf??ndan JPEG olarak adland??r??l??r. Bu dosyalar genellikle .jpg, .jpe ya da .jfif uzant??l??d??r, ancak ??o??unlukla .jpg uzant??s?? kullan??l??r.</p>
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
              <p>PNG, "Ta????nabilir A?? Grafi??i" anlam??ndaki (Portable Network Graphics) 'in k??saltmas??d??r ve kay??ps??z s??k????t??rarak g??r??nt?? saklamak i??in kullan??lan bir saklama bi??imidir.</p>
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
              <p>GIF, ??ngilizce Grafik De??i??tirme Bi??imi anlam??na gelen Graphics Interchange Formatin k??saltmas??d??r ve bir say??sal resim saklama bi??imidir. Kay??ps??z s??k????t??rma kullan??r.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
  



    <section class="ftco-counter ftco-section ftco-no-pt ftco-no-pb img bg-light" id="section-counter">
    	<div class="container">
    		<div class="row">
          <div class="col-md-8 col-lg-3 justify-content-center counter-wrap ftco-animate">
            <div class="block-18 py-4 mb-4">
              <div class="text align-items-center">
                <strong class="number" data-number="3">0</strong>
                <span>Tamamlanm???? Projeler</span>
              </div>
            </div>
          </div>
          <div class="col-md-7 col-lg-3 justify-content-center counter-wrap ftco-animate">
            <div class="block-18 py-4 mb-4">
              <div class="text align-items-center">
                <strong class="number" data-number="200">0</strong>
                <span>Memnun M????teriler</span>
              </div>
            </div>
          </div>
          <div class="col-md-7 col-lg-3 justify-content-center counter-wrap ftco-animate">
            <div class="block-18 py-4 mb-4">
              <div class="text align-items-center">
                <strong class="number" data-number="350">0</strong>
                <span>Be??eniler &amp; Yorumlar</span>
              </div>
            </div>
          </div>
        </div>
    	</div>
    </section>

    <footer class="ftco-footer">
      <div class="container">
        <div class="row mb-5">
          <div class="col-sm-12 col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2 logo"><a href="#">FLEX</a></h2>
              <p>Size en iyi hizmet verme pe??indeyiz.</p>

              <ul class="ftco-footer-social list-unstyled mt-2">
              </ul>
            </div>
          </div>
          <div class="col-sm-12 col-md">
            <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Ba??lant??lar</h2>
              <ul class="list-unstyled">
                <li><a href="https://github.com/hedevelope/imagecompress"><span class="fa fa-chevron-right mr-2"></span>Github</a></li>
                <li><a href="https://www.youtube.com/channel/UCSPTSVhMGw6M9P5MYY7uoZg/playlists"><span class="fa fa-chevron-right mr-2"></span>YouTube</a></li>
              </ul>
            </div>
          </div>
          
          
          <div class="col-sm-12 col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Soru Sormak ????in:</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><a href="#"><span class="icon fa fa-paper-plane pr-4"></span><span class="text"><p>flex.compress@gmail.com</p></span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid px-0 py-5 bg-black">
      	<div class="container">
      		<div class="row">
	          <div class="col-md-12">
		
	            <p class="mb-0" style="color: rgba(255,255,255,.5);">
	  Telif Hakk?? &copy;<script>document.write(new Date().getFullYear());</script> T??m haklar?? gizlidir.
	  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
	          </div>
	        </div>
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