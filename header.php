<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vận Tải Tám Sang</title>
    <link rel="stylesheet" href="<?php  bloginfo('template_directory') ?>/css/reset.css">
    <link rel="stylesheet" href="<?php  bloginfo('template_directory') ?>/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Petemoss&family=Roboto&display=swap" rel="stylesheet">
    <?php wp_head();?>
</head>
<body>
    <header>
        <div class="top__header">
            <div class="container">
                <div class="top__header-greeting">
                    <h4>DỊCH VỤ VẬN TẢI TÁM SANG KÍNH CHÀO QUÝ KHÁCH   </h4>
                </div>
                <div class="top__header-contact">
                   <H4><i class="bi bi-telephone-fill"></i> &nbsp Hotline: <a href="tel:0869262402"> 0869 26 2402</a> - <a href="tel:0379339415"> 0379 339 415</a></H4>
                </div>
            </div>
        </div>
        <div class="main__header">
            <div class="container">
                <div class="main__header-logo">
                    <a href="<?php  bloginfo('url') ?>   " >
                        <img src="<?php  bloginfo('template_directory') ?>/images/logo.png" alt="vantaitamsang.com" srcset="">
                    </a>
                </div>
                
                <div class="main__header-menu">
                    <nav>
                        <?php wp_nav_menu( 
                            array( 
                                'theme_location' => 'header-menu', 
                                'container' => 'false', 
                                'menu_id' => 'top-menu  ', 
                                'menu_class' => 'top-menu'
                            ) 
                            ); 
                        ?>
                    </nav>
                </div>
                <div class="nav__mobile-btn">   
                    <input type="checkbox" name="" id="nav__mobile" class=" nav__mobile-open  ">
                    <label for="nav__mobile" >
                        <i class="bi bi-list"></i>  
                    </label>                      
                    <label class="nav__mobile-list">
                        <nav>
                            <?php wp_nav_menu( 
                                array( 
                                    'theme_location' => 'topmenu', 
                                    'container' => 'false', 
                                    'menu_id' => 'top-menu  ', 
                                    'menu_class' => 'top-menu'
                                ) 
                                ); 
                            ?>
                        </nav>  
                        <label for="nav__mobile" class=" nav__mobile-close  " >
                            <i class="bi bi-x"></i>
                        </label>
                    </label>
                    
                       
                </div>         
            </div>
        </div>
    </header> 