<?php if (have_posts() ):?>
  <?php while(have_posts()):the_post(); ?>
    <div class="col-sm-6">
      <div class="card mb-3 post_col">
        <div class="card-body ">
              <?php //the_post_thumbnail(); ?>
              <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
              <!--  <div class="byline">Escrito por --><?php //the_author_posts_link(); ?>
              <!--  </div>-->
              <p><?php the_excerpt(); ?></p>
              <a href="<?php the_permalink(); ?>"> Read More</a>
          </div>
      </div>
    </div>

<?php endwhile; ?>
<?php else: ?>
  <p>No posts were found. Sorry!")</p>
<?php endif; ?>