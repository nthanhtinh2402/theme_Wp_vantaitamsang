<?php get_header();?>

    <div class="banner">
        <div class="banner__overlay"></div>
        <div class="container">
            <div class="banner__about">
                <h3>Dịch vụ vận tải</h3>
                <h2>về chúng tôi</h2>
                <p>Như chúng ta thường biết đến, xe đầu kéo hay còn gọi là xe #container, là một loại xe to lớn, thô kệch, nặng nề và ồn ào.Đó là những gì chúng ta thường mường... </p>
                <h4><i class="bi bi-telephone-outbound"></i> &nbsp  0869 26 2402</h4>
                <a href="tel:0869262402">đăng kí tư vấn</a>

            </div>
        </div>
        <div class="page__fb">
            <a href="https://www.facebook.com/">facebook</a>
        </div>
        
    </div>
    <div class="service">
        <div class="container">
            <div class="category">
                <h1 class="category__title">dịch vụ chính</h1>
                <div class="category__line">
                    <div class="category__dot">
                        <div class="category__dot-large"></div>
                        <div class="category__dot-small"></div>
                    </div>
                </div>
                <p class="category__description">
                    Vận tải là sự di chuyển hay chuyển động của người, động vật và hàng hóa từ nơi này đến nơi khác
                </p>               
            </div>
            <div class="service__item">
                <div class="service__item__box">
                    <div class="service__item__box-img">
                        <img src="<?php  bloginfo('template_directory') ?>/images/003.jpg" alt="">
                    </div>
                    <h2>dịch vụ cho thuê xe tải</h2>
                    <div class="service__item__box-description">
                        <p>Vận tải là sự di chuyển hay chuyển động của người, động vật và hàng hóa từ nơi này đến nơi khác</p>
                    </div>
                    <div class="service__item__box-button"><a href="http://localhost/wordpress/dich-vu/">Xem thêm</a></div>
                </div>
                <div class="service__item__box">
                    <div class="service__item__box-img">
                        <img src="<?php  bloginfo('template_directory') ?>/images/001.jpg" alt="">
                    </div>
                    <h2>dịch vụ cho thuê xe tải nội thành</h2>
                    <div class="service__item__box-description">
                        <p>Vận tải là sự di chuyển hay chuyển động của người, động vật và hàng hóa từ nơi này đến nơi khác</p>
                    </div>
                    <div class="service__item__box-button"><a href="http://localhost/wordpress/dich-vu/">Xem thêm</a></div>
                </div>
                <div class="service__item__box">
                    <div class="service__item__box-img">
                        <img src="<?php  bloginfo('template_directory') ?>/images/002.jpg" alt="">
                    </div>
                    <h2>dịch vụ cho thuê xe tải bắc nam</h2>
                    <div class="service__item__box-description">
                        <p>Vận tải là sự di chuyển hay chuyển động của người, động vật và hàng hóa từ nơi này đến nơi khác</p>
                    </div>
                    <div class="service__item__box-button"><a href="http://localhost/wordpress/dich-vu/">Xem thêm</a></div>
                </div>
            </div>
        </div>  
    </div>
    <div class="library">
        <?php get_template_part('library' );?>
    </div>
    <div class="about">
        <div class="container">
            <h1 class="about__title"> vận  tải  cao cấp tám sang</h1>
            <span class="about__line"></span>
            <p class="about__description">Vận tải là sự di chuyển hay chuyển động của người, động vật và hàng hóa từ nơi này đến nơi khác Vận tải là sự di chuyển hay chuyển động của người, động vật và hàng hóa từ nơi này đến nơi khác</p>
            <a href="#" class="about__button">xem chi tiết</a>
        </div>
    </div>
    <div class="news">
        <div class="container">
            <div class="row">
                <div class="news__trending">
                    <div class="news__title">
                        <h3>tin tức mới</h3>
                        <span class="news__dot"></span>
                    </div>
                    <?php get_template_part('article');?>
                </div>
                <div class="news__video">
                    <div class="news__title">
                        <h3>video clip</h3>
                        <span class="news__dot"></span>
                    </div>
                    <iframe src="https://www.youtube.com/embed/R6cO3COhabg" frameborder="0"></iframe>
                </div>
            </div>

        </div>
    </div>  
<?php get_footer( );?>