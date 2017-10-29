<?php
/**
    Template Name: FeedPage
 */
?>


<?php get_header('flip'); ?>

    <!-- **************search main area**************-->
    <div class="search_main_area">
        <div class="width">

            <!-- **************course area**************-->
            <div class="course_area">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li>></li>
                    <li><a href="#">Courses</a></li>
                    <li>></li>
                    <li><a href="#">Results</a></li>
                </ul>
            </div>
            <div class="search_main_area_left">
                <div class="show_result_area">
                    <h3>Show results for</h3>
                    <ul>
                        <li>
                            <label>
                                <input type="checkbox">
                                <span>All</span>
                            </label>
                        </li>
                        <li>
                            <label>
                                <input type="checkbox">
                                <span>Courses</span>
                            </label>
                        </li>
                        <li>
                            <label>
                                <input type="checkbox">
                                <span>Lectures</span>
                            </label>
                        </li>
                        <li>
                            <label>
                                <input type="checkbox">
                                <span>Flats</span>
                            </label>
                        </li>
                    </ul>
                </div>
                <div class="live">
                    <img src="<?php bloginfo('template_directory'); ?>/img/live.png" alt="image">
                </div>
            </div>
			
            <div class="search_main_area_right">
                <div class="result">
                    <div class="result_left">
                        <h2> <span>Results for</span> “courses”</h2>
                    </div>
                    <div class="result_right">
                        <ul>
                            <li>
                                <a href="#">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/left.png" alt="image">
                                </a>
                            </li>
                            <li><a href="">1</a></li>
                            <li> of </li>
                            <li><a href="#">2643</a></li>
                            <li>
                                <a href="#">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/right.png" alt="image">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

      <!-- php loop begins  -->
      <?php $loop = new WP_Query( array( 'post_type' => 'courses', 'order' => 'ASC') ); ?>
        <?php while( $loop->have_posts() ) : $loop->the_post();?>
			
                <a href="single-feed-flip.php">
                <div class="sengle_management">
                    <div class="management_image">
						
                        <img src="<?php bloginfo('template_directory'); ?>/img/m_1.png" alt="image">
                    </div>
                     </a>
                    <div class="management_text">
                        <h2><?php the_field('course_title'); ?></h2>
                    </div>
                    <ul>
                        <li>
                            <span>Lecturers:</span> <?php the_field('course_lecturer'); ?>
                        </li>
                        <li>
                            <span>Trimesters:</span> <?php the_field('course_trimester'); ?>
                        </li>
                    </ul>
                </div>
  

    <?php endwhile; ?>
    <?php wp_reset_postdata(); // reset the query ?>





<?php get_footer('flip'); ?>