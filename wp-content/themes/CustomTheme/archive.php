<?php get_header(); ?>
    <section class="page-wrap">
        <div class="container">
            <div class="row">
                <?php get_template_part('includes/section', 'archive') ?>
            </div>
            <div class="row">
                <div class="col py-3 text-center blog_paging">
                    <?php
                    global $wp_query;
                    $big = 99999999;

                    echo paginate_links(
                        array(
                            'base' => str_replace($big, '%#%', esc_url( get_pagenum_link($big))),
                            'format' => '?paged=%#%',
                            'current' => max(1, get_query_var('paged')),
                            'total' => $wp_query->max_num_pages
                        )
                    );

                    ?>
                </div>
            </div>
        </div>
    </section>
<?php get_footer(); ?>