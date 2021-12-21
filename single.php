<?php get_header();?>
<div class="container">
    <div class="post_news">
        <h1 class= "post_news-title"><?php the_title();?></h1>
        <div class="post_news-meta">
            <?php setpostview(get_the_ID());?>
            <span> Ngày đăng: <?php echo get_the_date( 'd - m - Y ');?></span>
            <span>- Tác giả: <?php get_the_author();  ?></span>
            <span>- Chuyên mục: <?php the_category(',');?> </span>
            <span>- Lượt Xem: <?php echo getpostviews(get_the_id());?> lượt</span>
        </div>

        <?php the_content();?>
        <div class="post_news-tag">
            <p>Tags:<?php the_tags(' ')?></p>
        </div>
    </div>
    
    <div class="related-posts">
        <?php
        $categories = get_the_category($post->ID);
        if ($categories) 
        {
            $category_ids = array();
            foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
    
            $args=array(
            'category__in' => $category_ids,
            'post__not_in' => array($post->ID),
            'showposts'=>5, // Số bài viết bạn muốn hiển thị.
            'caller_get_posts'=>1
            );
            $my_query = new wp_query($args);
            if( $my_query->have_posts() ) 
            {
                echo '<h3>Bài viết liên quan</h3><ul class="list-news">';
                while ($my_query->have_posts())
                {
                    $my_query->the_post();
                    ?>
                    <li>
                        <div class="new-img"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array(85, 75)); ?></a></div>
                        <div class="item-list">
                            <h4><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>
                            <?php the_excerpt(); ?>
                        </div>
                    </li>
                    <?php
                }
                echo '</ul>';
            }
        }
    ?>
    </div>
    
</div>
<?php get_footer();?>
