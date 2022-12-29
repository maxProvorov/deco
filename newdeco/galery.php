<?php
/*
Template Name: Галереяzzz
Template Post Type: page
*/
?>
<div class="our-works" id="our-works"></div>
    <h2 class="h2">Наши работы</h2>
    <div class="ant-carousel">
    <div class="ant-carousel-hider">
        <ul class="ant-carousel-list">

            <?php 
                $args = array(
                    'category_name' => 'наши работы', 
                    'orderby' => 'date ',
                    'order' => 'ASC',
                );
                $query = new WP_Query($args);
                while ( $query->have_posts() ) {
                $query->the_post();
                ?><a href="<?php echo get_the_permalink() ?>"><li class="ant-carousel-element"> <img src="<?php echo get_field('image')['url'];?>" alt=""><h4><?php the_title(); ?></h4> </li></a>
                <?php
                wp_reset_postdata();
                }
            ?>				
        </ul>

    </div>
    <div class="ant-carousel-arrow-left"><img src="<?php echo get_template_directory_uri() . '/assets/images/arr-left.svg'; ?>"></div>
    <div class="ant-carousel-arrow-right"><img src="<?php echo get_template_directory_uri() . '/assets/images/arr-right.svg'; ?>"></div>
    <div class="ant-carousel-dots"></div>
    </div>
</div>