<?php include 'lib/session.php';
        Session::init();
?>
<?php include 'config/config.php';?>
<?php include 'lib/database.php';?>
<?php include 'helpers/format.php';?>

<?php
    $db=new Database();
    $fm=new Format();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Basic Website</title>
	
	<link rel="stylesheet" href="font-awesome-4.5.0/css/font-awesome.css">	
	<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="style.css">
	<script src="js/jquery.js" type="text/javascript"></script>
	<script src="js/jquery.nivo.slider.js" type="text/javascript"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script type="text/javascript">
$(window).load(function() {
	$('#slider').nivoSlider({
		effect:'random',
		slices:10,
		animSpeed:500,
		pauseTime:5000,
		startSlide:0, //Set starting Slide (0 index)
		directionNav:false,
		directionNavHide:false, //Only show on hover
		controlNav:false, //1,2,3...
		controlNavThumbs:false, //Use thumbnails for Control Nav
		pauseOnHover:true, //Stop animation while hovering
		manualAdvance:false, //Force manual transitions
		captionOpacity:0.8, //Universal caption opacity
		beforeChange: function(){},
		afterChange: function(){},
		slideshowEnd: function(){} //Triggers after all slides have been shown
	});
});
</script>
</head>

<body class="container">
	<div class="header_container row">
		<div class="header_left">
            <a href="#" title="">
                <img src="image/hos_Img.png" alt="logo" />
            </a>
        </div>
		
       <div class="nav">
           
               <div id="" class="menu_btn">
					<div class="dropdown">
						<button class="dropbtn active">HOME</button>
				    </div>
			   </div>
			   
	
               <div id="" class="menu_btn">
			   
				   <div class="dropdown">
					  <button class="dropbtn">SERVICES</button>
					  <div class="dropdown-content">
						<a href="service.html">Cardiac Imaging Services</a>
						<a href="service.html">Gastroenterology Service</a>
						<a href="service.html">Clinical Laboratory Services</a>
						<a href="service.html">Pulmonology Service</a>
						<a href="service.html">Radiology and Imaging</a>
						<a href="service.html">Urology Services</a>
						<a href="service.html">Clinical Neuro Physiology</a>
					  </div>
					</div>
                    
               </div>
               <div id="" class="menu_btn">
					
					<div class="dropdown">
					   <button class="dropbtn">CONSULTANT</button>
					    <div class="dropdown-content">
							
							<a href="consultant.php">consultant list</a>
						</div>
					</div>
                </div>
               <div id="" class="menu_btn">
					
					<div class="dropdown">
					  <button class="dropbtn">INSTRUMENT</button>
					  <div class="dropdown-content">
						<a href="instrument.html">Laboratory Instruments</a>
						<a href="instrument.html">Pulmonology Instrument</a>
						<a href="instrument.html">Cardiac Imaging Instrument</a>
						<a href="instrument.html">Gastroenterology Instruments</a>
						<a href="instrument.html">Radiology and Imaging Instrument</a>
						<a href="instrument.html">Physiotherapy Instruments</a>
						<a href="instrument.html">Urology Instruments</a>
						<a href="instrument.html">Clinical Neuro Physiology Instrument</a>
					  </div>
					</div>
					
                   
               </div>
               <div id="" class="menu_btn">
					
					<div class="dropdown">
					  <button class="dropbtn">INFORMATION</button>
					  <div class="dropdown-content">
						<a href="#">Facilities</a>
						<a href="#">PQuality Control</a>
						<a href="#">Achievement</a>
						<a href="#">Test Procedures</a>
					  </div>
					</div>
               </div>
               <div id="" class="menu_btn">
					<div class="dropdown">
					  <button class="dropbtn">COMPANY</button>
					  <div class="dropdown-content">
						<a href="about.html">About Us</a>
						<a href="#">News</a>
						<a href="#">Career</a>
					  </div>
					</div>
               </div>
               <div id="" class="menu_btn">
					<div class="dropdown">
					  <button class="dropbtn">CONTACT</button>
					  <div class="dropdown-content">
						<a href="#">Contact Us</a>
						<a href="appoint.html">Online Appointment Form</a>
					  </div>
					</div>
              </div>
               
        
		</div>
	</div>
    
    


    
    
    
    
    
    
    
    <div class="row footer">
                <marquee behavior="" direction="right"><p>&copy;green hospital</p></marquee>
	</div>
	
<script type="text/javascript" src="js/scrolltop.js"></script>
<script>
	var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
} 
</script>

</body>
</html>