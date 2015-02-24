<?php get_header(); ?>
<div id="main">
	    <?php get_sidebar('left'); ?>
	    <div id="content">
	        <h1>Posts</h1>
	        <?php
	            if (have_posts()) :
	                while (have_posts()) : 
	                    the_post(); ?>  <!-- The wordpress â€œloopâ€� --!>
	                    <h1><?php the_title(); ?></h1>
	                    <h3>Posted on <?php the_time('F jS, Y') ?></h3>
	                    <p><?php the_content(__('(more...)')); ?></p>
	                    <p><?php the_tags( 'Tags: ', ', ', '<br />' ); ?></p>
	                    <hr>
	        <?php
	                endwhile;
	            else: ?>
	                <p><?php _e('Sorry, no posts found!'); ?></p>
	        <?php
	            endif; ?>
	    </div>
    <?php get_sidebar('right'); ?>
</div>
<div id="delimiter"></div>
<?php
get_footer(); ?>
