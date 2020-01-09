<?php
/*
# ===========================================
# header.php
#
# The theme header.
# ===========================================
*/
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> dir="rtl">

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width; initial-scale = 1; maximum-scale=1; user-scalable = no;" />
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon-32x32.png">
    <title><?php wp_title( '|', true, 'left' ); ?><?php bloginfo( 'name' ); ?></title>
    <meta name="description" content="<?php bloginfo( 'description' ); ?>">

    <style>
        @font-face {
            font-family: "IRANSans";
            <?php $iransans = THEMEROOT . '/fonts/IRANSansWeb.ttf'; ?>
            src: url("<?php echo $iransans ?>") format("truetype"); 
        }
        @font-face {
            font-family: "IRANSans-Bold";
            <?php $iransansbold = THEMEROOT . '/fonts/IRANSansWeb_Bold.ttf'; ?>
            src: url("<?php echo $iransansbold; ?>") format("truetype"); 
        }
        @font-face {
            font-family: "IRANSans-FD";
            <?php $iransansfd = THEMEROOT . '/fonts/IRANSans(FaNum).ttf'; ?>
            src: url("<?php echo $iransansfd; ?>") format("truetype"); 
        }
        @font-face {
            font-family: "IRANSans-Bold-FD";
            <?php $iransansboldfd = THEMEROOT . '/fonts/IRANSans(FaNum)_Bold.ttf'; ?>
            src: url("<?php echo $iransansboldfd; ?>") format("truetype"); 
        }
        .location::before {
            <?php $location = IMAGES . '/icons/maps-and-flags.svg'; ?>
            background: url("<?php echo $location; ?>") center/cover no-repeat; 
        }
        .call::before {
            <?php $call = IMAGES . '/icons/call-answer.svg'; ?>
            background: url("<?php echo $call; ?>") center/cover no-repeat; 
        }
        .email::before {
            <?php $email = IMAGES . '/icons/envelope.svg'; ?>
            background: url("<?php echo $email; ?>") center/cover no-repeat; 
        }
        .blog__box--content a::before {
            <?php $plus = IMAGES . '/icons/plus.svg'; ?>
            background: url("<?php echo $plus; ?>") center/cover no-repeat; 
        }
    </style>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div class="backdrop"></div>
    <header class="header">

        <div class="header__info">
            <button class="toggle-button">
                <span class="toggle-button__bar"></span>
                <span class="toggle-button__bar"></span>
                <span class="toggle-button__bar"></span>
            </button>
            <a href="https://www.rezaarashnia.com/" class="header__logo">
                <?php $logo = IMAGES . '/logo.png'; ?>
                <img src="<?php echo $logo; ?>" alt="ویتاک - آموزش زبان انگلیسی">
            </a>
            <nav class="main-nav">
                <!--<ul class="main-nav__items">
                    <li class="main-nav__item">
                        <a href="index.html">صفحه اصلی</a>
                    </li>
                    <li class="main-nav__item">
                        <a href="courses.html">دوره های زبان</a>
                    </li>
                    <li class="main-nav__item">
                        <a href="blog/blog.html">اخبار و مقالات</a>
                    </li>
                    <li class="main-nav__item">
                        <a href="#comments">نظرات کاربران</a>
                    </li>
                    <li class="main-nav__item">
                        <a href="contact-us.html">تماس با ما</a>
                    </li>
                </ul>-->
                <?php
                    wp_nav_menu( array(
                        'menu_class' => 'main-nav__items',
                        'theme_location' => 'main-menu',
                        'container' => false
                    ));
                ?>
            </nav>
        </div>

        <div class="header__icons">
            <a class="btn btn--yellow user-btn" href="login.html">ثبت نام / ورود</a>
            <?php $searchicon = IMAGES . '/icons/magnifying-glass.svg'; ?>
            <a href="#"><img class="icon" src="<?php echo $searchicon; ?>"></a>
            <?php $languageicon = IMAGES . '/icons/global.svg'; ?>
            <a href="#"><img class="icon" src="<?php echo $languageicon; ?>"></a>
        </div>

    </header>

    <nav class="mobile-nav">
        <ul class="mobile-nav__items">
            <li class="mobile-nav__item">
                <a href="index.html">صفحه اصلی</a>
            </li>
            <li class="mobile-nav__item">
                <a href="courses.html">دوره های زبان</a>
            </li>
            <li class="mobile-nav__item mobile-nav__item--cta">
                <a href="blog/blog.html">اخبار ومقالات</a>
            </li>
            <li class="mobile-nav__item">
                <a href="#comments">نظرات کاربران</a>
            </li>
            <li class="mobile-nav__item">
                <a href="contact-us.html">تماس با ما</a>
            </li>
            <li class="mobile-nav__item">
                <a class="btn btn--yellow" href="login.html">ثبت نام / ورود</a>
            </li>
        </ul>
    </nav>