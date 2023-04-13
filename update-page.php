<?php
/*
  Template Name: Updates
*/
?>



<?php get_header(); ?>


    
<section class="latests">
        <div class="container">
            <h1>LATEST TRENDS</h1>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium, quo?
            </p>
            <div class="latest__wrapper">
        <div class="latestcontents_left">
                <?php
                
                $args = array(
                    'post_type' => 'cvdPost',
                    'posts_per_page' => 2,
                    'tax_query'   => array(
                      array(
                        'taxonomy' => 'category',
                        'field'   => 'slug',
                        'terms' => 'uncategorized'
                      ),
                    ),
                );
                $newQuery = new WP_Query($args);
            
            
                ?>
                <?php if($newQuery->have_posts() ) : while($newQuery->have_posts()) : $newQuery->the_post(); ?>
                    <div class="latest_icons">
                    <?php echo get_the_post_thumbnail() ?>
                        <ul>
                            <i class="fa-solid fa-user"></i>
                            <p>
                                <small>
                                        Mark Jerome
                                </small>
                            </p>
                            <i class="fa-solid fa-calendar-days"></i>
                            <p>
                            <small>
                                        March 2, 2023
                            </small>
                            </p>
                            <i class="fa-solid fa-tags"></i>
                            <p>
                            <small>
                            Web Design | Wire Frame
                            </small>
                            </p>
    
                        </ul>
                    </div>
                    <div class="concept">
                        <h3><?php the_title(); ?></h3>
                    <p>
                        <?php the_excerpt(); ?>
                    </p>
                    <a href="<?php the_permalink(); ?>">Read more...</a>
            
                    </div>
    
                    <?php 
                        endwhile;
                        else :
                        echo "walang laman ito";
                        endif;
                        wp_reset_postdata();

              ?>
                </div>

                <div class="latesttrends_right">
                    <h3>
                        CATEGORIES
                    </h3>
                    <div class="categories">

                        <div class="category_name">
                            <li>Web Design</li>
                            <li>Web Development</li>
                            <li>Wire Frame</li>
                            <li>Vector & Logo</li>
                            <li>Social Media</li>
                        </div>
                        <div class="category_num">
                            <li>(1)</li>
                            <li>(1)</li>
                            <li>(1)</li>
                            <li>(1)</li>
                            <li>(1)</li>
                        </div>
                    </div>


                    <div class="recent">
                        <h3>RECENT POST</h3>
                        <?php
                
                        $args = array(
                            'post_type' => 'cvdPost',
                            'posts_per_page' => 3,
                            'tax_query'   => array(
                            array(
                            'taxonomy' => 'category',
                            'field'   => 'slug',
                            'terms' => 'recent post'
                            ),
                        ),
                    );
                $newQuery = new WP_Query($args);
            
            
                ?>
                <?php if($newQuery->have_posts() ) : while($newQuery->have_posts()) : $newQuery->the_post(); ?>
                        <div class="post">
                        
                            <?php echo get_the_post_thumbnail();?>
                            <div class="post_content">
                            <h4><?php the_excerpt(); ?></h4>
                            <p>
                            <?php echo get_the_date(); ?>
                            </p>
                            </div>
                            
                        </div>
                       
                        <?php 
                        endwhile;
                        else :
                        echo "walang laman ito";
                        endif;
                        wp_reset_postdata();

                        ?>
                        </div>
                    <div class="tags">
                        <h3>TAGS</h3>
                        <a href="#">web design</a>
                        <a href="#">wire frame</a>
                        <a href="#">web development</a>
                        <a href="#">logo</a>
                        <a href="#">vector</a>
                        <a href="#">social media</a>
                    </div>
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