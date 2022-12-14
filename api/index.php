
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Generate QR Code</title>
	<!-- googlefonts  -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:100,100italic,200,200italic,300,300italic,regular,italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic" rel="stylesheet" />
	<!-- stylesheet  -->
	<link href="./styles/index.css" rel="stylesheet">
	<!-- bootstrap 5  -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
	<!-- fancybox js  -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.min.css" />
	<!-- swiper js  -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"
    />
</head>
<body style="background-color:#F1F3F4;">


<nav class="navbar navbar-expand-sm" style="background-color:#fefefe; height: 90px;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><span style="color:#FF9900;">LINKNET</span><span style="color:#526298;">•</span><span style="color:#393535;">QR CODE GENERATOR</span></a>
  </div>
</nav>

<ul class="nav nav-pills mb-3" style="justify-content: center; margin-top:70px; gap:20px;" id="pills-tab" role="tablist" >
  <li class="nav-item" role="presentation" style="background-color:white; border-radius:50px;">
    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Generate</button>
  </li>
  <li class="nav-item" role="presentation" style="background-color:white; border-radius:50px;">
    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Library</button>
  </li>
</ul>
<div class="tab-content" id="pills-tabContent" style="margin-top:50px;">
  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" style="padding:15px;">
	<div class="row">
		<div class="col-md-8" style="height:600px;">
		 <div class="col con-kiri" style="height:100%; width:100%; background-color:#FEFEFE;">
		 <form method="post">	
		 <div class="container" style="width:100%; height:100%; padding: 130px 120px;">
 
		 <div class="accordion accordion-flush" id="accordionFlushExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
        <div class="accordion-content" style="display:flex;gap:15px;align-items: center;"><img src="./assets/edit-svgrepo-com.svg" alt="image-edit-logo" style="width:25px;height:25px;"><div>INPUT CONTENT</div></div>
      </button>
    </h2>
    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
		<input type="text" placeholder="Input Qr Code Name" style="width:80%; border:none;" class="form-qr-name" name="qr_code_name" id="qr_code_name" value="<?=isset($_POST['qr_code_name']) ? $_POST['qr_code_name'] : ''?>" minlength="4" required>
		<input type="text" placeholder="Input Content URL" style="width:80%; border:none; margin-top:15px;" class="form-qr-name"  name="qr_code_data" id="qr_code_data" value="<?=isset($_POST['qr_code_data']) ? $_POST['qr_code_data'] : ''?>" minlength="4"  required>
	</div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
	  <div class="accordion-content" style="display:flex;gap:15px;align-items: center;"><img src="./assets/row-content-svgrepo-com.svg" alt="image-edit-logo" style="width:25px;height:25px;"><div>SET LOGO  & SIZE</div></div>
      </button>
    </h2>
    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
		<div class="set-logo">
			<div class="set-section-title" style="padding-bottom:10px;">Qr Code Logo</div> 
			<input type="radio" name="logo" value="LN" checked/> Link Net
			<input type="radio" name="logo" value="FM" style="margin-left:10px !important;"/> First Media
		</div>
	  	<div class="set-size" style="margin-top:15px;">
		    <div class="set-section-title" style="padding-bottom:10px;">Choose Size</div> 
			<input type="radio" name="size" value="nml" checked /> Normal (246px x 246px) 
			<input type="radio" name="size" value="lrg" style="margin-left:10px !important;"/> Big size (984px x 984px)
		</div>
	  </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
	  <div class="accordion-content" style="display:flex;gap:15px;align-items: center;"><img src="./assets/color-fill-svgrepo-com.svg" alt="image-edit-logo" style="width:25px;height:25px;"><div>SET COLORS</div></div>
      </button>
    </h2>
    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">

	  			<div class="color-set" style="display:flex; gap: 15px;">
	  			<div class="swatch">
 	  			<input type="color" id="input-fore-color" onchange="printforeColor(event)" name="color" value="#000000">
				<input type="text" name="fore_color" id="fore_color" value="0,0,0" style="display: none";>
  					<div class="info">
   		 			<h1>Choose Foreground Color</h1>
 					</div>
	  			</div>

	  			<div class="swatch">
 	  			<input type="color" id="input-back-color" onchange="printbackColor(event)" name="color" value="#ffffff">
				<input type="text" name="back_color" id="back_color" value="255,255,255" style="display: none";>
  					<div class="info">
   		 			<h1>Choose Background Color</h1>
 					</div>
	  			</div>
	  			</div>

	 	     </div>
    	   </div>
  	    </div>
	  </div>
    </div>	
  </div>
</div>
<div class="col-md-4" style="height:600px;">
<div class="col con-kanan" style="height:100%; width:100%; background-color:#FEFEFE;">

<!-- php qr code logic script  -->

<?php

if (isset($_POST['generate'])){
	include "./qr_code/qrlib.php"; 
	/*create folder*/
	$tempdir="./qr-file-img/";
	if (!file_exists($tempdir))
	mkdir($tempdir, 0755);
	
	/*get color */
	$forecolor = $_POST['fore_color'];
	$backcolor = $_POST['back_color'];
	
	$logo_input = $_POST['logo'];
	$size_input = $_POST['size'];
	if($logo_input=="LN" && $size_input=="nml"){
		$logo = "./images/Ln-Logo-nml.png";
        $file_name="LN-".$_POST['qr_code_name'].".png";
		$file_path = $tempdir.$file_name;
		QRcode::png($_POST['qr_code_data'], $file_path, "H", 6, 4, 0, $forecolor, $backcolor, $logo);
		/* param (1)qrcontent,(2)filename,(3)errorcorrectionlevel,(4)pixelwidth,(5)margin,(6)saveandprint,(7)forecolor,(8)backcolor */
	}else if($logo_input=="LN" && $size_input=="lrg"){
		$logo = "./images/zyro-image-ln-xl.png";
        $file_name="LN-".$_POST['qr_code_name'].".png";
		$file_path = $tempdir.$file_name;
		QRcode::png($_POST['qr_code_data'], $file_path, "H", 1080, 4, 0, $forecolor, $backcolor, $logo);
		/* param (1)qrcontent,(2)filename,(3)errorcorrectionlevel,(4)pixelwidth,(5)margin,(6)saveandprint,(7)forecolor,(8)backcolor */
	}else if($logo_input=="FM"&& $size_input=="nml"){
		$logo = "./images/First-Media-Logo-nml.png";
        $file_name="FM-".$_POST['qr_code_name'].".png";
		$file_path = $tempdir.$file_name;
		QRcode::png($_POST['qr_code_data'], $file_path, "H", 6, 4, 0, $forecolor, $backcolor, $logo);
		/* param (1)qrcontent,(2)filename,(3)errorcorrectionlevel,(4)pixelwidth,(5)margin,(6)saveandprint,(7)forecolor,(8)backcolor */
	}else if($logo_input=="FM"&& $size_input=="lrg"){
		$logo = "./images/zyro-image-fm-xl.png";
        $file_name="FM-".$_POST['qr_code_name'].".png";
		$file_path = $tempdir.$file_name;
		QRcode::png($_POST['qr_code_data'], $file_path, "H", 1080, 4, 0, $forecolor, $backcolor, $logo);
		/* param (1)qrcontent,(2)filename,(3)errorcorrectionlevel,(4)pixelwidth,(5)margin,(6)saveandprint,(7)forecolor,(8)backcolor */
	}
	
	echo "<div class='qr-load-img'><img src='".$tempdir.$file_name."' alt='qr-load'></div>";
	echo "<div class='action-button'>
    <input type='submit' name='generate' id='btn_submit' value='Generate QR Code' class='button-act act-generate'>
	<a data-fancybox='qr-lightbox' href='".$tempdir.$file_name."' style='text-decoration: none';><div class='button-act act-size'>QR Code Size Preview</div></a>
	<a href='".$tempdir.$file_name."' download='".$tempdir.$file_name."' style='text-decoration: none';><div class='button-act act-download'>Download QR Code</div></a>
 </div>";
}else{
	echo "<div class='qr-load-img'><img src='./assets/qr-code-svgrepo.png' alt='qr-load'></div>";
	echo "<div class='action-button'>
    <input type='submit' name='generate' id='btn_submit' value='Generate QR Code' class='button-act act-generate'>
	<div class='button-act act-size'>QR Code Size Preview</div>
	<div class='button-act act-download'>Download QR Code</div>
 </div>";
}
?>

		</div>
	   </div>
	</div>
  </div>
  </form>
  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" style="padding:15px;">
  <div class="row">
		<div class="col-md-12" style="height:600px;">
		 <div class="col con-library" style="height:100%; width:100%; background-color:#FEFEFE;">
		 <!-- <input type='submit' name='delete' id='btn_submit' value='Delete QR Code' class='button-act act-generate'>
		 -->
	 <div class="swiper mySwiper">
      <div class="swiper-wrapper">

      <?php
     $files = glob("./qr-file-img/*.*");
     for ($i=0; $i<count($files); $i++)
      {
        $image = $files[$i];
        $supported_file = array(
                'gif',
                'jpg',
                'jpeg',
                'png'
         );

         $ext = strtolower(pathinfo($image, PATHINFO_EXTENSION));
         if (in_array($ext, $supported_file)) {
             echo "
			 <div class='swiper-slide action-button'>
			<img src='".$image."' alt='qr-load'>
			<div class='qr-name'>$image</div>
			<a data-fancybox='qr-lightbox-gallery' href='".$image."' style='text-decoration: none';><div class='button-act act-size'>QR Code Size Preview</div></a>
			<a href='".$image."' download='".$image."' style='text-decoration: none';><div class='button-act act-download'>Download QR Code</div></a>
		    </div>";

			// if (isset($_POST['delete'])){
            //   unlink($image);
			// }
			
            } else {
                continue;
            }
          }
       ?>

      </div>

    </div>
		
	<style>

      .swiper {
        width: 100%;
        height: 100%;
		padding-top: 30px;
        padding-left: 100px;
      }

      .swiper-slide {
		width: 335px !important;
		height: 482px !important;
        text-align: center;
        font-size: 18px;
		background: #FFFFFF;
		box-shadow: 4px 4px 20px rgba(0, 0, 0, 0.15);
		border-radius: 20px;
		display: flex;
		flex-direction: column;
		gap: 5px !important;
		padding: 25px !important;

        /* Center slide text vertically */
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
      }

      .swiper-slide img {
        width: 250px !important;
        height: 250px !important;
        
      }
    </style>
		
		</div>
	    </div>
	</div>
  </div>
  </div>
</div>
	
	<script src="jquery-1.10.2.min.js"></script>
	<script src="./script/index.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
   
</body>
</html>

<script>
	var swiper = new Swiper(".mySwiper", {
  slidesPerView: 3,
  spaceBetween: 30,
  freeMode: true,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
});
</script>


