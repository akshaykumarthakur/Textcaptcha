<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="description" content="Runaway - Personal Portfolio HTML Template">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="business, agency, blog, cv, creative, html, one page, personal, portfolio, resume, responsive, bootstrap, photography, designer, developer">
	<meta name="author" content="root">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="viewport" content="target-densitydpi=device-dpi, initial-scale=1.0, user-scalable=no"/>
<meta name="description" content="Responsive One Page Vcard Portfolio or Resume Template"/>
<meta name="author" content="TheThemeLab">

     <link rel="stylesheet" href="css/bootstrap.min.css">
	 <link rel="stylesheet" href="../../cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="fonts/flaticon.css">
     <link rel="stylesheet" href="css/plugins.css">
     <link rel="stylesheet" href="css/style.css">
     <link rel="stylesheet" href="css/color.css" id="color-change">
	  <link href="css/animate.min.css" rel="stylesheet">
	  <link type='text/css' href="css/style-responsive.css" rel="stylesheet">

<link type='text/css' href="css/style1.css" rel="stylesheet">
<link type='text/css' href="css/smoke.css" rel="stylesheet">


     
	<link rel="icon" type="image/png" sizes="32x32" href="public/images/favicon.ico">

   
	<title>Captcha</title>

</head>
<style type="text/css">
	#myVideo {
		position: fixed;
		right: 0;
		bottom: 0;
		min-width: 100%;
		min-height: 100%;
	}
	.content {
		position: fixed;
		bottom: 0;
		background: rgba(0, 0, 0, 0.5);
		color: #f1f1f1;
		width: 60%;
		right: 20%;
		left:  20%;
		padding: 40px;
	}
	#myBtn {
		width: 200px;
		font-size: 18px;
		padding: 10px;
		border: none;
		background: #000;
		color: #fff;
		cursor: pointer;
	}
	.form_button
	{
		width: 150px;
		font-size: 18px;
		padding: 10px;
		border: none;
		background: #000;
		color: #fff;
		cursor: pointer;
	}
	.form_input
	{
		width: 300px;
		height: 60px;
		font-size:18px;
		border: none;
		background: rgba(0, 0, 0, 0.5);
		color: #fff;
		
	}
	.text_data
	{
		font-size:50px;
		color: #fff;

		
	}
	#myBtn:hover {
		background: #ddd;
		color: black;
	}
</style>
<script src="js/jquery.ripples.js"></script>
<video autoplay muted loop id="myVideo">
  <source src="https://static.videezy.com/system/resources/previews/000/007/218/original/CIRCULAR_INTERFACE_HUD.mp4" type="video/mp4">
</video>
<!-- Optional: some overlay text to describe the video -->
<div class="content banner_water_effect">
 <section id="main_banner" class=" background5" >
	<form action="" method="post" >
		<table  border="0" align="center">
			<tr align="center">
				<td>
					<?php	
						$ar= array_merge(range(0,9),range("A","Z"));
						$arr= array_merge($ar,range("a","z"));
						//print_r($arr);
						for($i=1;$i<=5;$i++)
						{
							$ch = $arr[array_rand($arr)];

							@$captcha=$captcha.$ch;

							@$fc=$fc.$ch.",";

						}
						//echo $fc."<br>";
						$nar = explode(",",$fc);
						for($i=0;$i<5;$i++)
						{
						
							?>
								<label class="text_data"><b><i> <?php echo $nar[$i]; ?> </i></b></label>
							<?php
							//echo "<img src='$nar[$i].GIF'/>";
						}
						if(isset($_POST['match']))
						{
							if($_POST['img']==$_POST['hid'])
							 {
								echo  "<br/><font color='blue'>security code matched</font>";
							 }
							else
							{
								echo "<br/><font color='red'> try again</font>";
							}
						}
					?>
				</td>
			</tr>
			<tr>
				<td> <input class="form_input" name="img" type="text" placeholder="Enter the Validation Code"></td>
			</tr>
			<tr>
				<td colspan="2" align="center">
				<input class="form_button" name="match" type="submit"  value="Scane"></td>
			</tr>
		 </table>
		<input type="hidden" value="<?php echo $captcha; ?>" name="hid"/>
	</form>
  <!--<button id="myBtn" onclick="myFunction()">Pause</button> -->
  </section>
</div>
</pre>
</div><br>  
	<script src="js/jquery.ripples.js"></script>
	<script src="js/particles.min.js"></script>
	<script src="js/app.js"></script> 
	<script src="js/scrollIt.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/main.js"></script> 
	<script src="js/jquery.min.js"></script>
	<script src="js/plugins.js"></script>
	<script src="js/custom.js"></script>
	<script src="js/script.js"></script>

<script>

	$(document).ready(function() {
			$('.banner_water_effect').ripples({
			  resolution: 256,
			  dropRadius: 20,
			  perturbance: 0.03,
			  interactive:true,
			  speed:100
			});

		 });
</script>