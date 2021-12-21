<div class="article">   
    <?php 
        $args = array(
            'post_status' => 'publish', // Chỉ lấy những bài viết được publish
            'post_type' => 'post', // Lấy những bài viết thuộc post, nếu lấy những bài trong 'trang' thì để là page 
            'showposts' =>      2, // số lượng bài viết
            'cat' => 1, // lấy bài viết trong chuyên mục có id là 1
        );
    ?>
    <?php $getposts = new WP_query($args); ?>
    <?php global $wp_query; $wp_query->in_the_loop = true; ?>
    <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
            <div class="article-item">
                <div class="article-thumbnail">
                    <a href="<?php the_permalink();?>">
                        <?php echo get_the_post_thumbnail( get_the_id())?>
                    </a>
                </div>
                <div class="article-title">
                    <h4><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
                    <p><?php the_excerpt();?></p>
                    <a href="<?php the_permalink();?>" class="article-button"> Xem thêm</a>
                </div>
            </div>  
        <?php endwhile; wp_reset_postdata(); ?>   
</div>      


