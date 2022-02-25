<?php
    get_header();
?>

<section class="break-news">

    <h1>Breaking News</h1>

    <?php
    $args = new Wp_Query(array(
        'posts_per_page' => 4,
        'post_type' => 'News',
        'orderby' => 'rand',
        'tax_query' => array(
            array(
                'taxonomy' => 'Type',
                'field'    => 'slug',
                'terms'    => 'breaking-news',
            )
        )
        ));

        if($args -> have_posts()){
            while($args -> have_posts()){
                $args -> the_post();
                ?>
                <h2>
                <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
                </h2>
                <p>
                <?php the_content();?>
                </p>
                <?php the_post_thumbnail();

                
            }
        }
    ?>
</section>

<section class="Entertainment">

        <h1>Entertainment</h1>

        <?php
    $args = new Wp_Query(array(
        'posts_per_page' => 4,
        'post_type' => 'News',
        'orderby' => 'rand',
        'tax_query' => array(
            array(
                'taxonomy' => 'Type',
                'field'    => 'slug',
                'terms'    => 'entertainment',
            )
        )
        ));
        
        if($args -> have_posts()){
            while($args -> have_posts()){
                $args -> the_post();
                ?>
                <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
                <p>
                <?php the_content();?>
                </p>
                <?php the_post_thumbnail();
            }
        }
    ?>
</section>

<section class="sports">

        <h1>Sports</h1>
        
    <?php
    $args = new Wp_Query(array(
        'posts_per_page' => 4,
        'post_type' => 'News',
        'orderby' => 'rand',
        'tax_query' => array(
            array(
                'taxonomy' => 'Type',
                'field' => 'slug',
                'terms' => 'sports'
        ))
        ));

        if($args -> have_posts()){
            while($args -> have_posts()){
                $args -> the_post();
                ?>
                <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
                <p>
                <?php the_content();?>
                </p>
                <?php the_post_thumbnail();
            }
        }
    ?>
</section>

<section class="lifestyle">

        <h1>Life Style</h1>

        <?php
    $args = new Wp_Query(array(
        'posts_per_page' => 4,
        'post_type' => 'News',
        'orderby' => 'rand',
        'tax_query' => array(
            array(
                'taxonomy' => 'Type',
                'field'    => 'slug',
                'terms'    => 'life-style',
            )
        )
        ));
        
        if($args -> have_posts()){
            while($args -> have_posts()){
                $args -> the_post();
                ?>
                <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
                <p>
                <?php the_content();?>
                </p>
                <?php the_post_thumbnail();
            }
        }
    ?>

</section>


<?php
    get_footer();
?>