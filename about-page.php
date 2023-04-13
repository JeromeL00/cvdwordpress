<?php
/*
  Template Name: Home
*/
?>



<?php get_header(); ?>


    
<section class="banner">
    <div class="container">

        <div class="banner__Wrapper">

            <div class="banner__Content">
                <h1><?php echo get_field('banner_title') ?></h1>
                <p>
                    <?php the_excerpt(); ?>
                </p>
                <a href="<?php the_permalink(); ?>">Explore More</a>
            </div>

            <?php                    
                    $img = get_field('banner_img');
                    if ( !empty($img) ): ?>


                    <img src="<?php echo esc_url($img['url']) ?>" alt="<?php echo esc_attr($img['alt'])?>">


                <?php endif; ?>

        </div>
    </div>
</section>

<section class="services">
    <div class="container">

        <div class="services__wrapper">

        <?php if(have_rows('cards_repeater')) : while(the_repeater_field('cards_repeater')) : ?>

            <div class="services__type">
                <?php
                    $img = get_sub_field('card_img');
                        if ( !empty($img) ) :?>


                        <img src="<?php echo esc_url($img['url']) ?>" alt="<?php  echo esc_attr($img['alt']) ?>">


                    <?php endif; ?>
                <h3><?php echo get_sub_field('card_title') ?></h3>
                <p>
                <?php echo get_sub_field('card_content') ?>
                </p>
                <a href="<?php the_permalink(); ?>">Get a qoute</a>
            </div>

            <?php
                    endwhile;
                        else : 
                        echo "no content";
                    endif;
                    wp_reset_postdata();
                    ?>

        </div>
    </div>
</section>

<section class="about">
    <div class="container">

        <div class="about__wrapper">
                <?php                    
                    $img = get_field('banner_img2');
                    if ( !empty($img) ): ?>


                    <img src="<?php echo esc_url($img['url']) ?>" alt="<?php echo esc_attr($img['alt'])?>">


                <?php endif; ?>


            <div class="about__content">
                <h4><?php echo get_field('banner_title2') ?></h4>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos similique quis recusandae nostrum iure delectus rerum animi! Nam vel quis sint itaque tempore dolore facilis eaque iste beatae maiores, laborum saepe nihil eligendi dolorem voluptas ad autem mollitia obcaecati accusamus modi rerum.
                    <br>
                    <br>
                    Consectetur minima, pariatur architecto delectus, incidunt fuga sequi ullam velit dicta, et amet placeat magni maxime voluptate doloribus beatae assumenda quia corporis? Optio placeat nihil expedita rem laborum mollitia temporibus natus, architecto perferendis laudantium fuga iusto beatae fugiat accusamus eaque enim quisquam praesentium! Delectus provident qui quas sed dolorum ipsum eaque, rem enim nobis deserunt voluptatem accusamus excepturi.
                </p>
            </div>
            
        </div>
    </div>
</section>

<section class="trends">
    <div class="container">
        <h2>Latest Trends</h2>
                <p>
                    Latest Happenings in virtual space
                </p>

                <div class="trends__wrapper">
                <?php if(have_rows('cards_repeater')) : while(the_repeater_field('cards_repeater')) : ?>
            
                    <div class="trends__card">

                    <?php
                    $img = get_sub_field('latest_img');
                        if ( !empty($img) ) :?>


                        <img src="<?php echo esc_url($img['url']) ?>" alt="<?php  echo esc_attr($img['alt']) ?>">


                    <?php endif; ?>
                        <h3><?php echo get_sub_field('latest_title') ?></h3>
                        <p>
                        <?php echo get_sub_field('latest_content') ?>
                        </p>
                        <a href="<?php the_permalink(); ?>">Read more...</a>
                    </div>

                    <?php
                    endwhile;
                        else : 
                        echo "no content";
                    endif;
                    wp_reset_postdata();
                    ?>

                    
                </div>
         </div>
    </div>
</section>
 
<section class="contact">
        <h5>Feel free to talk to about your Projects</h5>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, enim.
        </p>
        <a href="#">Contact Us</a>
</section>



<?php get_footer(); ?>