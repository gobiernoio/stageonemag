<?php get_header(); ?>


<!--==============================		NOTAS PRINCIPALES		================================-->
<?php $my_query = new WP_Query('posts_per_page=1&category_name=principal');
while ($my_query->have_posts()) : $my_query->the_post(); ?>

    <?php
    $image_url = wp_get_attachment_image_src(get_post_thumbnail_id(), 'principal');
    ?>

    <div class="container-fluid bg-info p-0 shadow mb-5">
        <img src="<?php echo $image_url[0]; ?>" title="<?php echo get_the_title($ID); ?>" class="w-100">

        <div class="d-block p-3 pl-5 pr-5">
            <h2 class="d-block">
                <a class="text-light" href="<?php the_permalink() ?>">
                    <?php echo get_the_title($ID); ?>
                </a>
            </h2>

            <div class="d-block">
                <?php echo excerptSimple(18); ?>
            </div>
        </div> 
    </div>

<?php endwhile; ?>





<div class="container">
    <div class="row mt-3">
        <?php $my_query = new WP_Query('posts_per_page=3&category_name=portada');
        while ($my_query->have_posts()) : $my_query->the_post(); ?>

            <?php
            $image_url_dos = wp_get_attachment_image_src(get_post_thumbnail_id(), 'vertical');
            ?>

            <div class="col-12 col-sm-6 col-md-4">
                    <div class="fondo_pie shadow">
                        <a href="<?php the_permalink() ?>">
                            <img src="<?php echo $image_url_dos[0]; ?>" title="<?php echo get_the_title($ID); ?>" class="w-100">
                        </a>

                        <div class="p-2 text-center">
                            <a class="text-light" href="<?php the_permalink() ?>">
                                <?php echo get_the_title($ID); ?>
                            </a>
                        </div>
                        
                    </div>    
            </div>

        <?php endwhile; ?>
    </div>
</div>


<!--==============================footer=================================-->
<?php get_footer(); ?>