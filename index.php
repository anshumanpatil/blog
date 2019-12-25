<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>Anshuman's Blogs</title>
    <!-- anshumanpradippatil1506@gmail.com -->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Blog Template">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">    
    <link rel="shortcut icon" href="favicon.ico"> 
    
    <!-- FontAwesome JS-->
    <script defer src="https://use.fontawesome.com/releases/v5.7.1/js/all.js" integrity="sha384-eVEQC9zshBn0rFj4+TU78eNA19HMNigMviK/PU/FFjLXqa/GKPgX58rvt5Z8PLs7" crossorigin="anonymous"></script>
	
	<!-- Plugin CSS -->
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.14.2/styles/monokai-sublime.min.css">
	
    <!-- Theme CSS -->  
    <link id="theme-style" rel="stylesheet" href="assets/css/theme-5.css">

</head> 

<body>
<div class="toast" data-autohide="false" style="position: absolute; top: 3rem; right: 0;">
  <div class="toast-header">
	<strong class="mr-auto text-primary">Resume Download</strong>
		<!-- <small class="text-muted">5 mins ago</small> -->
		<button type="button" class="ml-2 mb-1 close" data-dismiss="toast">&times;</button>
	</div>
	<div class="toast-body">
	<a class="nav-link" href="https://drive.google.com/file/d/1VPCKWneOhzRCIDfQ_DdE3hrW70UzkLHP/view?usp=sharing"><i class="fas fa-user fa-fw mr-2"></i>Resume Download</a>
	</div>
	</div>	
	</div>
    <?php require_once('parts/headers.php')?>
    
    <div class="main-wrapper">
	    
	    <article class="blog-post px-3 py-5 p-md-5">
		    <div class="container">
			    <header class="blog-post-header">
					<h2 class="title mb-2">Go With Anshu</h2>
					<?php
						$date1 = "2019-06-15";
						$date2 = date('Y-m-d');
						
						$diff = abs(strtotime($date2) - strtotime($date1));
						
						$years = floor($diff / (365*60*60*24));
						$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
						$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
						
						
						


						echo '<div class="meta mb-3"><span class="date">Published '. (($years*12)+$months) . ' months ago</span><span class="time">20-30 minutes required to read.</span></div>';
						// printf("%d years, %d months, %d days\n", $years, $months, $days);
					?>
				    <!-- <div class="meta mb-3"><span class="date">Published 3 months ago</span><span class="time">5 min read</span><span class="comment"><a href="#">4 comments</a></span></div> -->
			    </header>
			    
			    <div class="blog-post-body">
				    <figure class="blog-banner">
				        <img class="img-fluid" src="assets/images/golang.png" alt="image">
					</figure>

					<?php require_once(dirname(__FILE__) . '/parts/about_go_info.php')?>
					<?php 
						$path = dirname(__FILE__) . "/parts/tutor";
						$result = scandir($path);
						$files = array_diff($result, array('.', '..'));
						$i = 1;
						if(count($files) > 0){
							// Loop through retuned array
							foreach($files as $file){
								if(is_file("$path/$file")){
									// Display filename
									if(basename($file) == $i){
										require_once("$path/$file");
									}
								} 
								$i++;
							}
						}


						
						
					?>

			    </div>
				    
			    <!-- <nav class="blog-nav nav nav-justified my-5">
				  <a class="nav-link-prev nav-item nav-link rounded-left" href="index.html">Previous<i class="arrow-prev fas fa-long-arrow-alt-left"></i></a>
				  <a class="nav-link-next nav-item nav-link rounded-right" href="blog-list.html">Next<i class="arrow-next fas fa-long-arrow-alt-right"></i></a>
				</nav> -->
				
				<div class="blog-comments-section">
					<div id="disqus_thread"></div>
					<script>

						/**
						*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
						*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
						/*
						var disqus_config = function () {
						this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
						this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
						};
						*/
						(function() { // DON'T EDIT BELOW THIS LINE
						var d = document, s = d.createElement('script');
						s.src = 'https://goblog-5.disqus.com/embed.js';
						s.setAttribute('data-timestamp', +new Date());
						(d.head || d.body).appendChild(s);
						})();
					</script>
					<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
				</div><!--//blog-comments-section-->
				
		    </div><!--//container-->
	    </article>
	    
	    <!-- <section class="promo-section theme-bg-light py-5 text-center">
		    <div class="container">
			    <h2 class="title">Promo Section Heading</h2>
			    <p>You can use this section to promote your side projects etc. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. </p>
                <figure class="promo-figure">
			        <a href="https://made4dev.com" target="_blank"><img class="img-fluid" src="assets/images/promo-banner.jpg" alt="image"></a>
			    </figure>
		    </div>
	    </section> -->
	    
	    <footer class="footer text-center py-2 theme-bg-dark">
		   
	        <!--/* This template is released under the Creative Commons Attribution 3.0 License. Please keep the attribution link below when using for your own project. Thank you for your support. :) If you'd like to use the template without the attribution, you can buy the commercial license via our website: themes.3rdwavemedia.com */-->
                <small class="copyright">Designed with HTML, CSS, JS, PHP, Heroku, React</small>
		   
	    </footer>
    
    </div><!--//main-wrapper-->
    
    
    
    
    <!-- *****CONFIGURE STYLE (REMOVE ON YOUR PRODUCTION SITE)****** -->  
    <div id="config-panel" class="config-panel d-none d-lg-block">
        <div class="panel-inner">
            <!-- <a id="config-trigger" class="config-trigger config-panel-hide text-center" href="#">
				<i class="fas fa-cog fa-spin mx-auto" data-fa-transform="down-6" ></i>
			</a> -->
            <h5 class="panel-title">Choose Colour</h5>
            <ul id="color-options" class="list-inline mb-0">
                <li class="theme-1 active list-inline-item"><a data-style="assets/css/theme-1.css" href="#"></a></li>
                <li class="theme-2  list-inline-item"><a data-style="assets/css/theme-2.css" href="#"></a></li>
                <li class="theme-3  list-inline-item"><a data-style="assets/css/theme-3.css" href="#"></a></li>
                <li class="theme-4  list-inline-item"><a data-style="assets/css/theme-4.css" href="#"></a></li>
                <li class="theme-5  list-inline-item"><a data-style="assets/css/theme-5.css" href="#"></a></li>
                <li class="theme-6  list-inline-item"><a data-style="assets/css/theme-6.css" href="#"></a></li>
                <li class="theme-7  list-inline-item"><a data-style="assets/css/theme-7.css" href="#"></a></li>
                <li class="theme-8  list-inline-item"><a data-style="assets/css/theme-8.css" href="#"></a></li>
            </ul>
            <a id="config-close" class="close" href="#"><i class="fa fa-times-circle"></i></a>
        </div><!--//panel-inner-->
    </div><!--//configure-panel-->

    
       
    <!-- Javascript -->          
    <script src="assets/plugins/jquery-3.3.1.min.js"></script>
    <script src="assets/plugins/popper.min.js"></script> 
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script> 
	<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.14.2/highlight.min.js"></script>
	<script src="assets/js/blog.js"></script>
	<script id="dsq-count-scr" src="//goblog-5.disqus.com/count.js" async></script>
    <!-- Style Switcher (REMOVE ON YOUR PRODUCTION SITE) -->
    <!-- <script src="assets/js/demo/style-switcher.js"></script>      -->
    

</body>
</html> 

