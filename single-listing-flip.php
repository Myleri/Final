<?php
// Custom Fields variables
$course_title          = get_field('course_title');
$course_profile_image  = get_field('course_profile_image');
$course_lecturer       = get_field('course_lecturer');
$course_trimester      = get_field('course_trimester');
$course_points         = get_field('course_points');
$course_description    = get_field('course_description');

?>
<?php get_header('flip'); ?>

    <!-- Posts Area -->
    <main class="posts_area">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
 <h1 class="title">
	ß
	
	
        <article class="post" role="article" itemscope itemtype="http://schema.org/Article">
          <h1 class="title">
			  <?php echo $course_title; ?>

 </h1>
          <div class="post_meta">
              <?php echo $course_description; ?>
          </div>
          <div class="post_meta">
             <?php echo $course_lecturer; ?>
          </div>
          <div class="post_meta">
              <img src="<?php echo $course_profile_image; ?>">
          </div>
          <div class="postcontent_list" itemprop="articleBody" data-type-cleanup="true">
			  <?php echo $course_trimester; ?>

          </div>
        </article>
<?php get_footer('flip'); ?>
