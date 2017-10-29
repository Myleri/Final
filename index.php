<?php
/**
    Template Name: SearchPage
 */
?>

<?php get_header(); ?>

<div class="wrap">
    <div class="search">
        <input type="text" class="searchTerm" placeholder="Search for a Course, Lecturer or Flat">
       <a href = "http://localhost:8888/feed-page/"> <button type="submit" class="searchButton">
            <i class="fa fa-search" aria-hidden="true"></i>
        </button>
         </a>
    </div>
</div>

<?php get_footer(); ?>
