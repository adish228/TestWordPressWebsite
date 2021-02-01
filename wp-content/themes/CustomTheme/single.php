<?php get_header(); ?>
    <div class="container">
        <?php if(has_post_thumbnail() ):?>
            <img src="<?php the_post_thumbnail_url(); ?>" class="img-fluid mb-3"/>
        <?php endif;?>
        <h2><?php the_title(); ?></h2>
        <?php get_template_part('includes/section', 'blogcontent') ?>
    </div>
<?php get_footer(); ?>
