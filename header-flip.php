<!DOCTYPE html>
<html>

		<head>
			<?php wp_head(); ?>

		<title>VIChub</title>
	    	<link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
			<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/font-awesome.min.css">
		    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/login.css">
			<link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
			
		          	<!-- $(document).ready(function(){
		                // Check Radio-box
		                $(".rating input:radio").attr("checked", false);

		                $('.rating input').click(function () {
		                    $(".rating span").removeClass('checked');
		                    $(this).parent().addClass('checked');
		                });

		                $('input:radio').change(
		                  function(){
		                    var userRating = this.value;
		                });
		            });
		            </script> -->
		</head>

<body>

    <!-- **************Header area**************-->
    <div class="search_header">
        <div class="width">
            <div class="search_header_left">
                <a href="#">
                <a href="http://localhost:8888/"><img src="<?php bloginfo('template_directory'); ?>/img/logomini.png"></a>
                </a>
            </div>
            <div class="search_header_mide">
                <div class="avsulate_sea">
                    <a href="http://localhost:8888/feed-page/"><img src="<?php bloginfo('template_directory'); ?>/img/search.png" alt="image"></a>
                </div>
                <input class="searchTerm" placeholder="Search for a Course, Lecturer or Flat" type="text">
            </div>
            <div class="search_header_right">
                <ul>
                    <li>
                        <a href="http://localhost:8888/review-page/">+ Add Review</a>
                    </li>
                    <li>
                        <a href="http://localhost:8888/loginsignup/">Login / Sign Up</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
	
	