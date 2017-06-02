<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Randall's Temperature Control | HVAC Specialists</title>
    <link rel="icon" type="png" href="images/icon.png">
	<link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/menu_styles.css" rel="stylesheet">
    <link href="css/index.css" rel="stylesheet">
  </head>
  <body>
  
  	<?php include 'top_menu.php';?>
    
 <br>
 
    <section style="display:block; text-align:center;">
    	<img src="images/transparentlogo.png" id="main_logo"> 
    </section>
    
<br>     
        
	<section>  
        
				<script type="text/javascript">
                
                var slideimages=new Array()
                
                function slideshowimages()
                
                {
                
                for (i=0;i<slideshowimages.arguments.length;i++){
                
                slideimages[i]=new Image()
                
                slideimages[i].src=slideshowimages.arguments[i]
                
                }
                
                }
                
                </script>
                <script type="text/javascript">
                var slideimages=new Array()
                function slideshowimages()
                {
                for (i=0;i<slideshowimages.arguments.length;i++){
                slideimages[i]=new Image()
                slideimages[i].src=slideshowimages.arguments[i]
                }
                }
                </script>
                <img src="" alt="Slideshow Image Script" name="slide" title="" id="slideshow"/>
                <script type="text/javascript">
                slideshowimages("images/bestof.png","images/companies.png", "images/carrier.png")
                var slideshowspeed=5000
                var whichimage=0
                function slideit()
                {
                if (!document.images)
                return
                document.images.slide.src=slideimages[whichimage].src
                if (whichimage<slideimages.length-1)
                whichimage++
                else
                whichimage=0
                setTimeout("slideit()",slideshowspeed)
                }
                slideit()
                </script>

</section>

<section id="section_one">
<div class="gridContainer clearfix">
	<p style=" font-size:33px; text-align:center; color:white;">Leading Performance</p>
	<p style=" font-size:20px; text-align:center; color:white;">Randall's Temperature Control Specialist Inc. is a customer focused heating and air-conditioning company. We employ highy trained people whose goal is make our company the best in the industry.</p>
    <div style="margin:0 auto; text-align:center;">
    	<img src="images/section_one.png">
	</div>
</div>
</section>

<section id="section_two">
<div class="gridContainer clearfix">
    <p style=" font-size:33px; text-align:center; color:black;">Professionalism</p>
    <p style=" font-size:20px; text-align:center; color:black;">Our company specializes in designing and installing complete comfort systems. We take special pride in the craftsmen we train and employ - a fact you'll notice immediately in the attitude and integrity they bring to your home.</p>
	<div style="margin:0 auto; text-align:center;">
    	<img src="images/section_two.png">
	</div>
</div>   
</section>

<section id="section_three">
<div class="gridContainer clearfix">
    <p style=" font-size:33px; text-align:center; color:white;">Dedicated Attitude</p>
    <p style=" font-size:20px; text-align:center; color:white;">We are dedicated to delivering you the best! We take our responsibility very seriously when you place your trust in us!</p>
	<div style="margin:0 auto; text-align:center;">
    	<img src="images/section_three.png">
	</div>
</div>    
</section>
              <br>                      
                                    
   <?php include 'footer.php';?>                                 
	
	<script src="js/jquery-1.11.2.min.js"></script>
    <script src="js/menu_script.js"></script>
	<script src="js/bootstrap.js"></script>
    
  </body>
</html>