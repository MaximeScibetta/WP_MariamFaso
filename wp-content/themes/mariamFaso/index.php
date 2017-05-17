<?php get_header();?>
    <div class="grid"></div>
    <article class="article">

        <?php 
            $intro = new WP_Query();
            $intro->query([
                'category_name' => 'introduction',
            ]);

            $obj = new WP_Query();
            $obj->query([
                'category_name' => 'objectif',
            ]);

            $about = new WP_Query();
            $about->query([
                'category_name' => 'about',
            ]);


        ;?>
    <?php if ( $intro->have_posts() ): while( $intro->have_posts() ): $intro->the_post();?>
            <?php get_template_part('part/homePage/intro'); ?>
    <?php endwhile; endif;?>
    
    <?php if ( $obj->have_posts() ): while( $obj->have_posts() ): $obj->the_post();?>
            <?php get_template_part('part/homePage/objectif'); ?>
    <?php endwhile; endif;?>

    <?php if ( $about->have_posts() ): while( $about->have_posts() ): $about->the_post();?>
            <?php get_template_part('part/homePage/about'); ?>
    <?php endwhile; endif;?>

             <?php get_template_part('part/homePage/actu'); ?>
    </article>
<?php get_footer();?>