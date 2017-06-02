<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Randall's Temperature Control | HVAC Specialists | Projects</title>
    <link rel="icon" type="png" href="images/icon.png">
	<link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/menu_styles.css" rel="stylesheet">
    <link href="css/projects.css" rel="stylesheet">
<script src="respond.min.js"></script>
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script src="script.js"></script>

  </head>
  
  

  <body>
  
  	<?php include 'top_menu.php';?>
    
 <br>
 
    <section style="display:block; text-align:center;">
    	<img src="images/transparentlogo.png" id="main_logo"> 
    </section>
    
<br>
	
<section class="block">
    <div id="myCarousel" class="carousel slide">
        <div class="carousel-inner">
            <div class="active item">
                <img src="images/owl_slideshow/0001.jpg" />
            </div>
            <div class="item">
                <img src="images/owl_slideshow/0002.jpg" alt="Slide2" />
            </div>
            <div class="item">
                <img src="images/owl_slideshow/0003.jpg" alt="Slide3" />
            </div>
            <div class="item">
                <img src="images/owl_slideshow/0004.jpg" alt="Slide3" />
            </div>
            <div class="item">
                <img src="images/owl_slideshow/0005.jpg" alt="Slide3" />
            </div>
            <div class="item">
                <img src="images/owl_slideshow/0006.jpg" alt="Slide3" />
            </div>
        </div>
        <a class="carousel-control left" href="#myCarousel" data-slide="prev">‹</a>
 <a class="carousel-control right" href="#myCarousel" data-slide="next">›</a>

    </div>
</section>
		  
	            

          <script>
(function($){
    /* Store the original positions */
    var d1 = $('.one');
    var d1orgtop = d1.position().top;
    var d2 = $('.two');
    var d2orgtop = d2.position().top;
    var d3 = $('.three');
    var d3orgtop = d3.position().top;
    var d4 = $('.four');
    var d4orgtop = d4.position().top;
    var d5 = $('.five');
    var d5orgtop = d5.position().top;
	var d6 = $('.six');
    var d6orgtop = d6.position().top;
    /* respond to the scroll event */
    $(window).scroll(function(){
        /* get the current scroll position */
        var st = $(window).scrollTop();

        /* change classes based on section positions */
        if (st >= d1orgtop) {
            d1.addClass('latched');
        } else {
            d1.removeClass('latched');
        }
        if (st >= d2orgtop) {
            d2.addClass('latched');
        } else {
            d2.removeClass('latched');
        }
        if (st >= d3orgtop) {
            d3.addClass('latched');
        } else {
            d3.removeClass('latched');
        }
        if (st >= d4orgtop) {
            d4.addClass('latched');
        } else {
            d4.removeClass('latched');
        }
		if (st >= d5orgtop) {
            d5.addClass('latched');
        } else {
            d5.removeClass('latched');
        }
		if (st >= d6orgtop) {
            d6.addClass('latched');
        } else {
            d6.removeClass('latched');
        }
    });

})(window.jQuery);
</script>   
	
    <br>                      
                                    
   <?php include 'footer.php';?>  
    
	<script src="js/jquery-1.11.2.min.js"></script>
    <script src="js/menu_script.js"></script>
	<script src="js/bootstrap.js"></script>
    <script src="js/tabs.js"></script>
    
  </body>
</html>