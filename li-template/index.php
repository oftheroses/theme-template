<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php bloginfo('name'); ?></title>

    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

    <!-- can be a url but keep the <PHP> and then replace the file directory stuff with your file -->
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/icon.png">

    <!-- please put your brand kit thingy here! -->
    <script src="https://kit.fontawesome.com/60aa2f7805.js" crossorigin="anonymous"></script>
    <script src="https://twemoji.maxcdn.com/v/latest/twemoji.min.js" crossorigin="anonymous"></script>

    <!-- do you want jquery?
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    -->

    <!-- do you want a custom script?
    <script src="< ?php echo get_template_directory_uri(); ?>/jquery.js"></script>
     -->
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

    <div id="post-feed">
        <?php

        $count = 1;
        $sample_array = get_posts();

        foreach ($sample_array as $post) {
            echo
            "<div class='post'>" .
                "<div class='post-title'>" . "<a href='" . get_permalink($post->ID) . "'>" . get_the_title() . "</a>" . "</div>" .

                "<div class='post-author'>" . $nickname = get_user_meta(wp_get_current_user()->ID, 'nickname', true) . "</div>" .

                "<div class='post-body'>" . $post->post_content . "</div>" .

                "<div class='post-categories'>" . "<i class='fa-solid fa-pen-to-square'></i>" . $category_list = get_the_category_list('&nbsp;', '&nbsp;') . "</div>" .

                "<div class='post-tags'>" . "<i class='fa-solid fa-tag'></i>" . $tags = get_the_tag_list('&nbsp;', '&nbsp;') . "</div>" .

                "<div class='post-divider'></div>" .

                "</div>";
        }
        ?>
    </div>
</body>

</html>