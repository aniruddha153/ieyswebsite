<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<title><?php echo $TITLE; ?></title>

<link rel="shortcut icon" href="images/logo/favicon.ico" type="image/x-icon">
<link rel="icon" href="images/logo/favicon.ico" type="image/x-icon">

<link type="text/css" rel="stylesheet" href="css/framework.css" />


<!--Banner Code-->
    <link rel='stylesheet' id='camera-css'  href='css/camera.css' type='text/css' media='all'> 
    <style>
		.fluid_container {
			margin: 0 auto;
			width: 100%;
			height:300px;
			-moz-box-shadow: 0px 2px 2px #333;
			box-shadow: 0px 2px 2px #333;
			z-index:2;
		}

		#camera_wrap_4 {
			bottom: 0;
			height: 100%;
			left: 0;
			margin-bottom: 0!important;
		}
		.camera_bar {
			z-index: 2;
		}
		.camera_thumbs {
			margin-top: -100px;
			position: relative;
			z-index: 1;
		}
		.camera_thumbs_cont {
			border-radius: 0;
			-moz-border-radius: 0;
			-webkit-border-radius: 0;
		}
		.camera_overlayer {
			opacity: 0.6;
		}
	</style>
    
<!--<script type='text/javascript' src='js/banner/jquery.min.js'></script>-->
<!--<script type="text/javascript" src="js/jquery-1.10.2.js"></script>-->
	<script type="text/javascript" src="js/banner/jquery-1.7.1.min.js"></script><!--also loads jQuery for sticky navigation-->
    <script type='text/javascript' src='js/banner/jquery.mobile.customized.min.js'></script>
    <script type='text/javascript' src='js/banner/jquery.easing.1.3.js'></script> 
    <script type='text/javascript' src='js/banner/camera.min.js'></script> 
    <script type="text/javascript">
    var j1= $.noConflict();
    var j2 = jQuery.noConflict();
    </script>

    <script>
	  j2(document).ready(function() {
			
			j2('#camera_wrap_4').camera({
				height: 'auto',
				loader: 'bar',
				pagination: false,
				thumbnails: false,
				hover: false,
				opacityOnGrid: false,
				imagePath: 'images/banner'
			});

		});
	</script>
<!-- End of Banner Code-->

<!--Sticky Navigation-->
<!--jQuery for this is loaded under banner code at line 50-->
<script type="text/javascript" src="js/jquery.sticky.js"></script>
<script>
  j2(document).ready(function(){
    j2("#nav").sticky({topSpacing:0});
  });
</script>
<!--Sticky Navigation close-->

<!--Overlay Script--->
<script type="text/javascript" src="js/jquery.tools.min.js"></script>
<script type="text/javascript">
   j2(document).ready(function(){
	   j2(".imageWrapper").overlay({mask: '#FFF'});
   });
</script>
<script type="text/javascript">
   j2(document).ready(function(){
	   j2(".speakers_imageWrapper").overlay({mask: '#FFF'});
   });
</script>
<script type="text/javascript">
   j2(document).ready(function(){
	   j2("#delegatereg_button a").overlay({mask: '#FFF'});
   });
</script>

<!--Overlay Script Close-->

<!--GOOGLE ANALYTICS--->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-33826108-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
