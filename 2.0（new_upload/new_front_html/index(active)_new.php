<?php
    include 'for_index/index_init.php';
    include 'for_index/index_get.php';
    $new_index = new index_get();

    //设置html属性，载入用户数组供查重
    $new_index->init_Users_CookieCheck();

    //设置顶部栏
    $new_index->get_header();

    //设置轮播
    $new_index->get_scroller();

    //123小标题
    $new_index->get_123();

    //字1
    $new_index->get_words_1();

    //设置微课
    $new_index->get_lesson();

    //字2
    $new_index->get_words_2();

    //设置Tips
    $new_index->get_tips();

    //设置footer
    $new_index->get_footer();

?>
