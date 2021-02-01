<?php if( have_posts()) : while ( have_posts()) : the_post(); ?>

<!--  date of the blog-->
    <?php
        echo get_the_date('d/m/Y h:i:s');
    ?>

    <?php the_content();?>

<!--author of the blog-->
    <?php
    $fname = get_the_author_meta('first_name');
    $lname = get_the_author_meta('last_name');
        //echo $fname . ' ' . $lname;
    ?>
    <p>
        Posted By <?php echo $fname;?> <?php echo $lname;?>
    </p>
<!--    for tags-->
    <?php
        $tags = get_the_tags();
        foreach ($tags as $tag):
    ?>
        <a href="<?php get_tag_link($tag->term_id)?>" class="badge badge-success">

            <?php echo $tag->name ?>
        </a>
    <?php
        endforeach;
     ?>
<!--    show the categories name-->
<br/>
    <?php
        $categories = get_the_category();
        foreach ($categories as $cat):
    ?>
          Main Category :<a href="<?php get_category_link($cat->term_id)?>"> <?php echo $cat->name ?></a>
    <?php
        endforeach;
    ?>
<?php endwhile; else: endif;?>
