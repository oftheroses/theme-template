<!DOCTYPE html>
<html lang="en">

<head>
    <title>hi</title>

    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/icon.png">

    <!-- replace with ur brand kit ! -->
    <script src="https://kit.fontawesome.com/60aa2f7805.js" crossorigin="anonymous"></script>
    <script src="https://twemoji.maxcdn.com/v/latest/twemoji.min.js" crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script src="<?php echo get_template_directory_uri(); ?>/jquery.js"></script>
</head>

<body>
    <div id="sidebar">
        <div id="sidebar-bar"></div>
        <div id="sidebar-items">
            <div class="font-eb-garamond">

                <div id="sidebar-home">
                    <div class="sidebar-icon"><i class="fa-solid fa-heart"></i></div>
                    <div class="sidebar-text"><b><i>home</i></b></div>
                </div>

                <div id="sidebar-about">
                    <div class="sidebar-icon"><i class="fa-solid fa-heart"></i></div>
                    <div class="sidebar-text">about</div>
                </div>

                <div id="sidebar-light">
                    <div class="sidebar-icon"><i class="fa-solid fa-heart"></i></div>
                    <div class="sidebar-text">link</div>
                </div>

                <div id="toggle-audio">
                    <div class="sidebar-icon"><i class="fa-solid fa-heart"></i></div>
                    <div class="sidebar-text">link</div>
                </div>

                <div id="toggle-graphic">
                    <div class="sidebar-icon"><i class="fa-solid fa-heart"></i></div>
                    <div class="sidebar-text">link</div>
                </div>

                <div id="toggle-text">
                    <div class="sidebar-icon"><i class="fa-solid fa-heart"></i></div>
                    <div class="sidebar-text">link</div>
                </div>

                <div id="toggle-video">
                    <div class="sidebar-icon"><i class="fa-solid fa-heart"></i></div>
                    <div class="sidebar-text">link</div>
                </div>

            </div>
        </div>
    </div>

    <div class="single-post-container">
        <div class="single-post">
            <?php while (have_posts()) : the_post(); ?>
                <div class="single-post-title">
                    <?php the_title() ?>
                </div>

                <div class="single-post-author">
                    <?php the_author() ?>
                </div>

                <div class="single-post-body">
                    <?php the_content() ?>
                </div>

                <div class="single-post-categories">
                    <i class='fa-solid fa-pen-to-square'></i><?php the_category('&nbsp;', '&nbsp;') ?>
                </div>

                <div class="single-post-tags">
                    <i class='fa-solid fa-tag'></i><?php the_tags('&nbsp;', '&nbsp;') ?>
                </div>

            <?php endwhile;
            ?>
        </div>
    </div>
</body>

</html>